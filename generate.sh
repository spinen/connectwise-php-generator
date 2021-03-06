#!/bin/sh

########################################
# This is just a down & dirty script to
# generate php clients from the swagger
# spec files. I am sure that there are
# things that I should have done better,
# but it is not worth the effort.
########################################

# "Global" vars
GEN_DIR="Clients/";
SWAGGER_DIR="swagger/";
SPECS_DIR="${SWAGGER_DIR}specs/"
LOGFILE="${GEN_DIR}generate.log";
AUTOLOAD="${GEN_DIR}autoload.txt";
AUTOLOADDEV="${GEN_DIR}autoload-dev.txt";
TS=$(date +%Y-%m-%d:%H:%M:%S);

# Setup the "world"
if [ -d "${GEN_DIR}" ]; then
    rm -fr "${GEN_DIR}";
fi
mkdir "${GEN_DIR}";
touch "${LOGFILE}";
touch "${AUTOLOAD}";
touch "${AUTOLOADDEV}";

# Loop through all of the specs & generate clients
ls -A "${SPECS_DIR}" | while read -r spec_file; do
    NAME=$(echo "${spec_file}" | cut -d\\ -f2 | cut -d\. -f 1);
    PROPER_NAME="$(echo "${NAME:0:1}" | tr  '[a-z]' '[A-Z]')${NAME:1}";
    NAME_SPACE="Spinen\ConnectWise\Clients\\${PROPER_NAME}";
    ESCAPED_NAME_SPACE="Spinen\\\\\\\\ConnectWise\\\\\\\\Clients\\\\\\\\${PROPER_NAME}\\\\\\\\";
    REPO="connectwise-${NAME}-php-client";
    REPO_PATH="${GEN_DIR}${REPO}/";

    echo "Generating API for ${PROPER_NAME}";

    # Spit out a list of the clients to put them in the local composer.json to
    # play with the scripts locally to this project
    echo "\"${ESCAPED_NAME_SPACE}\": \"${REPO_PATH}lib/\"," >> "${AUTOLOAD}";
    echo "\"${ESCAPED_NAME_SPACE}\": \"${REPO_PATH}test/\"," >> "${AUTOLOADDEV}";

    # They use .txt & not .json, so rename them to json
    if [ -f "${SPECS_DIR}${NAME}.txt" ]; then
        mv "${SPECS_DIR}${NAME}.txt" "${SPECS_DIR}${NAME}.json";
    fi

    # Pull down the existing repository for the client
    git clone "git@github.com:spinen/${REPO}.git" "${GEN_DIR}${REPO}" >> "${LOGFILE}" 2>&1;
    # Wipe out the existing files to let the generator make new ones
    mv -f "${GEN_DIR}${REPO}/.git" "${GEN_DIR}";
    rm -fr "${GEN_DIR}${REPO}";
    mkdir -p "${GEN_DIR}${REPO}";
    mv -f "${GEN_DIR}.git" "${GEN_DIR}${REPO}";
    # Copy in the VERSION to let it show up in the project
    cp "VERSION" "${GEN_DIR}${REPO}/";

    # Generate the client with the needed customizations & tweaks
    java -jar ${SWAGGER_DIR}swagger-codegen-master/modules/swagger-codegen-cli/target/swagger-codegen-cli.jar generate \
        --additional-properties \
            packagePath="${REPO}",composerVendorName="spinen",composerProjectName="${REPO}",description="Spinen's PHP ConnectWise Client for ${PROPER_NAME} API generated by Swagger Code Generator." \
        --api-package "Api" \
        --artifact-version "$(cat VERSION)" \
        --invoker-package "${NAME_SPACE}" \
        --input-spec "${SPECS_DIR}${NAME}.json" \
        --lang php \
        --model-package "Model" \
        --output "${GEN_DIR}" \
        --template-dir templates/php/ \
        >> "${LOGFILE}" 2>&1;
done;

cd "${GEN_DIR}";

# Loop through all of the clients & commit the changes
ls -A "./" | grep "connectwise-" | while read -r client; do
    echo "Committing ${client}";

    cd "${client}/";
    rm -f git_push.sh;
    {
        git add .;
        git commit -m "${TS} automated build changes.";
        git push -u origin master;
    }  >> "../../${LOGFILE}" 2>&1;
    cd ../;
done;

cd ../;
