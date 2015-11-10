<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class AddServiceTicketToKnowledgebase
{

    /**
     * @var ApiCredentials $credentials
     */
    protected $credentials = null;

    /**
     * @var int $ticketId
     */
    protected $ticketId = null;

    /**
     * @var int $knowledgebaseCategoryId
     */
    protected $knowledgebaseCategoryId = null;

    /**
     * @var int $knowledgebaseSubCategoryId
     */
    protected $knowledgebaseSubCategoryId = null;

    /**
     * @var boolean $allowPortalView
     */
    protected $allowPortalView = null;

    /**
     * @param ApiCredentials $credentials
     * @param int $ticketId
     * @param int $knowledgebaseCategoryId
     * @param int $knowledgebaseSubCategoryId
     * @param boolean $allowPortalView
     */
    public function __construct(ApiCredentials $credentials = null, $ticketId = null, $knowledgebaseCategoryId = null, $knowledgebaseSubCategoryId = null, $allowPortalView = null)
    {
        $this->credentials                = $credentials;
        $this->ticketId                   = $ticketId;
        $this->knowledgebaseCategoryId    = $knowledgebaseCategoryId;
        $this->knowledgebaseSubCategoryId = $knowledgebaseSubCategoryId;
        $this->allowPortalView            = $allowPortalView;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddServiceTicketToKnowledgebase
     */
    public function setCredentials(ApiCredentials $credentials)
    {
        $this->credentials = $credentials;
        return $this;
    }

    /**
     * @return int
     */
    public function getTicketId()
    {
        return $this->ticketId;
    }

    /**
     * @param int $ticketId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddServiceTicketToKnowledgebase
     */
    public function setTicketId($ticketId)
    {
        $this->ticketId = $ticketId;
        return $this;
    }

    /**
     * @return int
     */
    public function getKnowledgebaseCategoryId()
    {
        return $this->knowledgebaseCategoryId;
    }

    /**
     * @param int $knowledgebaseCategoryId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddServiceTicketToKnowledgebase
     */
    public function setKnowledgebaseCategoryId($knowledgebaseCategoryId)
    {
        $this->knowledgebaseCategoryId = $knowledgebaseCategoryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getKnowledgebaseSubCategoryId()
    {
        return $this->knowledgebaseSubCategoryId;
    }

    /**
     * @param int $knowledgebaseSubCategoryId
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddServiceTicketToKnowledgebase
     */
    public function setKnowledgebaseSubCategoryId($knowledgebaseSubCategoryId)
    {
        $this->knowledgebaseSubCategoryId = $knowledgebaseSubCategoryId;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowPortalView()
    {
        return $this->allowPortalView;
    }

    /**
     * @param boolean $allowPortalView
     * @return \Spinen\ConnectWise\Library\Api\Generated\AddServiceTicketToKnowledgebase
     */
    public function setAllowPortalView($allowPortalView)
    {
        $this->allowPortalView = $allowPortalView;
        return $this;
    }

}
