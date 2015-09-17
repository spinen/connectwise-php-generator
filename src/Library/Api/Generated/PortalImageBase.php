<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class PortalImageBase
{

    /**
     * @var string $Id
     */
    protected $Id = null;

    /**
     * @var string $Url
     */
    protected $Url = null;

    /**
     * @var boolean $UrlFlag
     */
    protected $UrlFlag = null;

    /**
     * @var int $PortalImageId
     */
    protected $PortalImageId = null;

    /**
     * @param boolean $UrlFlag
     * @param int $PortalImageId
     */
    public function __construct($UrlFlag = null, $PortalImageId = null)
    {
        $this->UrlFlag       = $UrlFlag;
        $this->PortalImageId = $PortalImageId;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @param string $Id
     * @return \Spinen\ConnectWise\Library\Api\Generated\PortalImageBase
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->Url;
    }

    /**
     * @param string $Url
     * @return \Spinen\ConnectWise\Library\Api\Generated\PortalImageBase
     */
    public function setUrl($Url)
    {
        $this->Url = $Url;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getUrlFlag()
    {
        return $this->UrlFlag;
    }

    /**
     * @param boolean $UrlFlag
     * @return \Spinen\ConnectWise\Library\Api\Generated\PortalImageBase
     */
    public function setUrlFlag($UrlFlag)
    {
        $this->UrlFlag = $UrlFlag;
        return $this;
    }

    /**
     * @return int
     */
    public function getPortalImageId()
    {
        return $this->PortalImageId;
    }

    /**
     * @param int $PortalImageId
     * @return \Spinen\ConnectWise\Library\Api\Generated\PortalImageBase
     */
    public function setPortalImageId($PortalImageId)
    {
        $this->PortalImageId = $PortalImageId;
        return $this;
    }

}
