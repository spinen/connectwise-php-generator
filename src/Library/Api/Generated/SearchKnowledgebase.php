<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class SearchKnowledgebase
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var string $searchTerms
     */
    protected $searchTerms = null;

    /**
     * @var KbSearchType $searchType
     */
    protected $searchType = null;

    /**
     * @var \DateTime $searchStart
     */
    protected $searchStart = null;

    /**
     * @var int $companyId
     */
    protected $companyId = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @var int $skip
     */
    protected $skip = null;

    /**
     * @param ApiCredentials $credentials
     * @param string $searchTerms
     * @param KbSearchType $searchType
     * @param \DateTime $searchStart
     * @param int $companyId
     * @param int $limit
     * @param int $skip
     */
    public function __construct(ApiCredentials $credentials = null, $searchTerms = null, KbSearchType $searchType = null, \DateTime $searchStart = null, $companyId = null, $limit = null, $skip = null)
    {
        $this->credentials = $credentials;
        $this->searchTerms = $searchTerms;
        $this->searchType  = $searchType;
        $this->searchStart = $searchStart ? $searchStart->format(\DateTime::ATOM) : null;
        $this->companyId   = $companyId;
        $this->limit       = $limit;
        $this->skip        = $skip;
    }

    /**
     * @return ApiCredentials
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * @param ApiCredentials $credentials
     * @return \Spinen\ConnectWise\Library\Api\Generated\SearchKnowledgebase
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return string
     */
    public function getSearchTerms()
    {
        return $this->searchTerms;
    }

    /**
     * @param string $searchTerms
     * @return \Spinen\ConnectWise\Library\Api\Generated\SearchKnowledgebase
     */
    public function setSearchTerms($searchTerms)
    {
        $this->searchTerms = $searchTerms;
        return $this;
    }

    /**
     * @return KbSearchType
     */
    public function getSearchType()
    {
        return $this->searchType;
    }

    /**
     * @param KbSearchType $searchType
     * @return \Spinen\ConnectWise\Library\Api\Generated\SearchKnowledgebase
     */
    public function setSearchType(KbSearchType $searchType)
    {
        $this->searchType = $searchType;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getSearchStart()
    {
        if ($this->searchStart == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->searchStart);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $searchStart
     * @return \Spinen\ConnectWise\Library\Api\Generated\SearchKnowledgebase
     */
    public function setSearchStart(\DateTime $searchStart)
    {
        $this->searchStart = $searchStart->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * @param int $companyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\SearchKnowledgebase
     */
    public function setCompanyId($companyId)
    {
        $this->companyId = $companyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param int $limit
     * @return \Spinen\ConnectWise\Library\Api\Generated\SearchKnowledgebase
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return int
     */
    public function getSkip()
    {
        return $this->skip;
    }

    /**
     * @param int $skip
     * @return \Spinen\ConnectWise\Library\Api\Generated\SearchKnowledgebase
     */
    public function setSkip($skip)
    {
        $this->skip = $skip;
        return $this;
    }

}
