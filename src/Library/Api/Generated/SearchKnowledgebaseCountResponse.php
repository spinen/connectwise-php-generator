<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class SearchKnowledgebaseCountResponse
{

    /**
     * @var int $SearchKnowledgebaseCountResult
     */
    protected $SearchKnowledgebaseCountResult = null;

    /**
     * @param int $SearchKnowledgebaseCountResult
     */
    public function __construct($SearchKnowledgebaseCountResult = null)
    {
        $this->SearchKnowledgebaseCountResult = $SearchKnowledgebaseCountResult;
    }

    /**
     * @return int
     */
    public function getSearchKnowledgebaseCountResult()
    {
        return $this->SearchKnowledgebaseCountResult;
    }

    /**
     * @param int $SearchKnowledgebaseCountResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\SearchKnowledgebaseCountResponse
     */
    public function setSearchKnowledgebaseCountResult($SearchKnowledgebaseCountResult)
    {
        $this->SearchKnowledgebaseCountResult = $SearchKnowledgebaseCountResult;
        return $this;
    }

}
