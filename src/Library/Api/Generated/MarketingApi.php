<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

/**
 * ConnectWise Marketing API
 */
class MarketingApi extends \Spinen\ConnectWise\Library\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array(
        'RecordCampaignImpression'         => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordCampaignImpression',
        'ApiCredentials'                   => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\ApiCredentials',
        'RecordCampaignImpressionResponse' => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordCampaignImpressionResponse',
        'RecordEmailOpened'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordEmailOpened',
        'RecordEmailOpenedResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordEmailOpenedResponse',
        'RecordLinkClicked'                => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordLinkClicked',
        'RecordLinkClickedResponse'        => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordLinkClickedResponse',
        'RecordFormSubmission'             => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordFormSubmission',
        'RecordFormSubmissionResponse'     => 'Spinen\\ConnectWise\\Library\\Api\\Generated\\RecordFormSubmissionResponse',
    );

    private function setClassmap($classmap)
    {
        $this->classmap = $classmap;
    }

    private function getClassmap()
    {
        return $this->classmap;
    }

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct($host, array $options = array(), $wsdl = '/v4_6_release/apis/2.0/MarketingApi.asmx?wsdl')
    {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }
        $options = array_merge(array(
            'features' => 1,
        ), $options);
        parent::__construct($host . $wsdl, $options);
    }

    /**
     * Records a campaign impression
     *
     * @param RecordCampaignImpression $parameters
     * @return RecordCampaignImpressionResponse
     */
    public function RecordCampaignImpression(RecordCampaignImpression $parameters)
    {
        return $this->__soapCall('RecordCampaignImpression', array($parameters));
    }

    /**
     * Records email opened
     *
     * @param RecordEmailOpened $parameters
     * @return RecordEmailOpenedResponse
     */
    public function RecordEmailOpened(RecordEmailOpened $parameters)
    {
        return $this->__soapCall('RecordEmailOpened', array($parameters));
    }

    /**
     * Records link clicked
     *
     * @param RecordLinkClicked $parameters
     * @return RecordLinkClickedResponse
     */
    public function RecordLinkClicked(RecordLinkClicked $parameters)
    {
        return $this->__soapCall('RecordLinkClicked', array($parameters));
    }

    /**
     * Records form submission
     *
     * @param RecordFormSubmission $parameters
     * @return RecordFormSubmissionResponse
     */
    public function RecordFormSubmission(RecordFormSubmission $parameters)
    {
        return $this->__soapCall('RecordFormSubmission', array($parameters));
    }

}
