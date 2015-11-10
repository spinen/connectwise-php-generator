<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfKnowledgeBaseResult
{

    /**
     * @var KnowledgeBaseResult[] $KnowledgeBaseResult
     */
    protected $KnowledgeBaseResult = null;

    public function __construct()
    {

    }

    /**
     * @return KnowledgeBaseResult[]
     */
    public function getKnowledgeBaseResult()
    {
        return $this->KnowledgeBaseResult;
    }

    /**
     * @param KnowledgeBaseResult[] $KnowledgeBaseResult
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfKnowledgeBaseResult
     */
    public function setKnowledgeBaseResult(array $KnowledgeBaseResult)
    {
        $this->KnowledgeBaseResult = $KnowledgeBaseResult;
        return $this;
    }

}
