<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DocumentFindResult
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $DocumentRelationshipId
     */
    protected $DocumentRelationshipId = null;

    /**
     * @var string $Title
     */
    protected $Title = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var string $ServerFileName
     */
    protected $ServerFileName = null;

    /**
     * @var string $Path
     */
    protected $Path = null;

    /**
     * @var boolean $IsPublic
     */
    protected $IsPublic = null;

    /**
     * @var boolean $IsLink
     */
    protected $IsLink = null;

    /**
     * @var boolean $IsTemplate
     */
    protected $IsTemplate = null;

    /**
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var string $UpdatedBy
     */
    protected $UpdatedBy = null;

    /**
     * @var int $AgreementId
     */
    protected $AgreementId = null;

    /**
     * @var int $CompanyId
     */
    protected $CompanyId = null;

    /**
     * @var int $ContactId
     */
    protected $ContactId = null;

    /**
     * @var int $ConfigurationId
     */
    protected $ConfigurationId = null;

    /**
     * @var int $ProjectId
     */
    protected $ProjectId = null;

    /**
     * @var int $OpportunityId
     */
    protected $OpportunityId = null;

    /**
     * @var int $TicketId
     */
    protected $TicketId = null;

    /**
     * @var int $ServiceTemplateId
     */
    protected $ServiceTemplateId = null;

    /**
     * @var int $ExpenseEntryId
     */
    protected $ExpenseEntryId = null;

    /**
     * @var int $PurchaseOrderId
     */
    protected $PurchaseOrderId = null;

    /**
     * @var int $SalesOrderId
     */
    protected $SalesOrderId = null;

    /**
     * @var int $RmaId
     */
    protected $RmaId = null;

    /**
     * @param int $Id
     * @param boolean $IsPublic
     * @param boolean $IsLink
     * @param boolean $IsTemplate
     * @param \DateTime $LastUpdated
     */
    public function __construct($Id = null, $IsPublic = null, $IsLink = null, $IsTemplate = null, \DateTime $LastUpdated = null)
    {
        $this->Id          = $Id;
        $this->IsPublic    = $IsPublic;
        $this->IsLink      = $IsLink;
        $this->IsTemplate  = $IsTemplate;
        $this->LastUpdated = $LastUpdated ? $LastUpdated->format(\DateTime::ATOM) : null;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param int $Id
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getDocumentRelationshipId()
    {
        return $this->DocumentRelationshipId;
    }

    /**
     * @param int $DocumentRelationshipId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setDocumentRelationshipId($DocumentRelationshipId)
    {
        $this->DocumentRelationshipId = $DocumentRelationshipId;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setTitle($Title)
    {
        $this->Title = $Title;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setFileName($FileName)
    {
        $this->FileName = $FileName;
        return $this;
    }

    /**
     * @return string
     */
    public function getServerFileName()
    {
        return $this->ServerFileName;
    }

    /**
     * @param string $ServerFileName
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setServerFileName($ServerFileName)
    {
        $this->ServerFileName = $ServerFileName;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->Path;
    }

    /**
     * @param string $Path
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setPath($Path)
    {
        $this->Path = $Path;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPublic()
    {
        return $this->IsPublic;
    }

    /**
     * @param boolean $IsPublic
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setIsPublic($IsPublic)
    {
        $this->IsPublic = $IsPublic;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLink()
    {
        return $this->IsLink;
    }

    /**
     * @param boolean $IsLink
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setIsLink($IsLink)
    {
        $this->IsLink = $IsLink;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTemplate()
    {
        return $this->IsTemplate;
    }

    /**
     * @param boolean $IsTemplate
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setIsTemplate($IsTemplate)
    {
        $this->IsTemplate = $IsTemplate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        if ($this->LastUpdated == null) {
            return null;
        } else {
            try {
                return new \DateTime($this->LastUpdated);
            } catch (\Exception $e) {
                return false;
            }
        }
    }

    /**
     * @param \DateTime $LastUpdated
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->UpdatedBy;
    }

    /**
     * @param string $UpdatedBy
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setUpdatedBy($UpdatedBy)
    {
        $this->UpdatedBy = $UpdatedBy;
        return $this;
    }

    /**
     * @return int
     */
    public function getAgreementId()
    {
        return $this->AgreementId;
    }

    /**
     * @param int $AgreementId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setAgreementId($AgreementId)
    {
        $this->AgreementId = $AgreementId;
        return $this;
    }

    /**
     * @return int
     */
    public function getCompanyId()
    {
        return $this->CompanyId;
    }

    /**
     * @param int $CompanyId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setCompanyId($CompanyId)
    {
        $this->CompanyId = $CompanyId;
        return $this;
    }

    /**
     * @return int
     */
    public function getContactId()
    {
        return $this->ContactId;
    }

    /**
     * @param int $ContactId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setContactId($ContactId)
    {
        $this->ContactId = $ContactId;
        return $this;
    }

    /**
     * @return int
     */
    public function getConfigurationId()
    {
        return $this->ConfigurationId;
    }

    /**
     * @param int $ConfigurationId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setConfigurationId($ConfigurationId)
    {
        $this->ConfigurationId = $ConfigurationId;
        return $this;
    }

    /**
     * @return int
     */
    public function getProjectId()
    {
        return $this->ProjectId;
    }

    /**
     * @param int $ProjectId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setProjectId($ProjectId)
    {
        $this->ProjectId = $ProjectId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->OpportunityId;
    }

    /**
     * @param int $OpportunityId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setOpportunityId($OpportunityId)
    {
        $this->OpportunityId = $OpportunityId;
        return $this;
    }

    /**
     * @return int
     */
    public function getTicketId()
    {
        return $this->TicketId;
    }

    /**
     * @param int $TicketId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setTicketId($TicketId)
    {
        $this->TicketId = $TicketId;
        return $this;
    }

    /**
     * @return int
     */
    public function getServiceTemplateId()
    {
        return $this->ServiceTemplateId;
    }

    /**
     * @param int $ServiceTemplateId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setServiceTemplateId($ServiceTemplateId)
    {
        $this->ServiceTemplateId = $ServiceTemplateId;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpenseEntryId()
    {
        return $this->ExpenseEntryId;
    }

    /**
     * @param int $ExpenseEntryId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setExpenseEntryId($ExpenseEntryId)
    {
        $this->ExpenseEntryId = $ExpenseEntryId;
        return $this;
    }

    /**
     * @return int
     */
    public function getPurchaseOrderId()
    {
        return $this->PurchaseOrderId;
    }

    /**
     * @param int $PurchaseOrderId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setPurchaseOrderId($PurchaseOrderId)
    {
        $this->PurchaseOrderId = $PurchaseOrderId;
        return $this;
    }

    /**
     * @return int
     */
    public function getSalesOrderId()
    {
        return $this->SalesOrderId;
    }

    /**
     * @param int $SalesOrderId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setSalesOrderId($SalesOrderId)
    {
        $this->SalesOrderId = $SalesOrderId;
        return $this;
    }

    /**
     * @return int
     */
    public function getRmaId()
    {
        return $this->RmaId;
    }

    /**
     * @param int $RmaId
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentFindResult
     */
    public function setRmaId($RmaId)
    {
        $this->RmaId = $RmaId;
        return $this;
    }

}
