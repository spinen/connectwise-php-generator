<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class SearchKnowledgebaseResponse
{

    /**
     * @var ArrayOfKnowledgeBaseResult $SearchKnowledgebaseResult
     */
    protected $SearchKnowledgebaseResult = null;

    /**
     * @param ArrayOfKnowledgeBaseResult $SearchKnowledgebaseResult
     */
    public function __construct($SearchKnowledgebaseResult = null)
    {
        $this->SearchKnowledgebaseResult = $SearchKnowledgebaseResult;
    }

    /**
     * @return ArrayOfKnowledgeBaseResult
     */
    public function getSearchKnowledgebaseResult()
    {
        return $this->SearchKnowledgebaseResult;
    }

    /**
     * @param ArrayOfKnowledgeBaseResult $SearchKnowledgebaseResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\SearchKnowledgebaseResponse
     */
    public function setSearchKnowledgebaseResult($SearchKnowledgebaseResult)
    {
        $this->SearchKnowledgebaseResult = $SearchKnowledgebaseResult;
        return $this;
    }

}
