<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class DocumentInfo
{

    /**
     * @var int $Id
     */
    protected $Id = null;

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
     * @var \DateTime $LastUpdated
     */
    protected $LastUpdated = null;

    /**
     * @var string $Owner
     */
    protected $Owner = null;

    /**
     * @var boolean $IsLink
     */
    protected $IsLink = null;

    /**
     * @var boolean $IsImage
     */
    protected $IsImage = null;

    /**
     * @var boolean $IsPublic
     */
    protected $IsPublic = null;

    /**
     * @var string $ChildDesc
     */
    protected $ChildDesc = null;

    /**
     * @var base64Binary $Content
     */
    protected $Content = null;

    /**
     * @param int $Id
     * @param string $Title
     * @param string $FileName
     * @param string $ServerFileName
     * @param string $Path
     * @param \DateTime $LastUpdated
     * @param string $Owner
     * @param boolean $IsLink
     * @param boolean $IsImage
     * @param boolean $IsPublic
     * @param string $ChildDesc
     * @param base64Binary $Content
     */
    public function __construct($Id = null, $Title = null, $FileName = null, $ServerFileName = null, $Path = null, \DateTime $LastUpdated = null, $Owner = null, $IsLink = null, $IsImage = null, $IsPublic = null, $ChildDesc = null, base64Binary $Content = null)
    {
        $this->Id             = $Id;
        $this->Title          = $Title;
        $this->FileName       = $FileName;
        $this->ServerFileName = $ServerFileName;
        $this->Path           = $Path;
        $this->LastUpdated    = $LastUpdated ? $LastUpdated->format(\DateTime::ATOM) : null;
        $this->Owner          = $Owner;
        $this->IsLink         = $IsLink;
        $this->IsImage        = $IsImage;
        $this->IsPublic       = $IsPublic;
        $this->ChildDesc      = $ChildDesc;
        $this->Content        = $Content;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
     */
    public function setId($Id)
    {
        $this->Id = $Id;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
     */
    public function setPath($Path)
    {
        $this->Path = $Path;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
     */
    public function setLastUpdated(\DateTime $LastUpdated)
    {
        $this->LastUpdated = $LastUpdated->format(\DateTime::ATOM);
        return $this;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->Owner;
    }

    /**
     * @param string $Owner
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
     */
    public function setOwner($Owner)
    {
        $this->Owner = $Owner;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
     */
    public function setIsLink($IsLink)
    {
        $this->IsLink = $IsLink;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsImage()
    {
        return $this->IsImage;
    }

    /**
     * @param boolean $IsImage
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
     */
    public function setIsImage($IsImage)
    {
        $this->IsImage = $IsImage;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
     */
    public function setIsPublic($IsPublic)
    {
        $this->IsPublic = $IsPublic;
        return $this;
    }

    /**
     * @return string
     */
    public function getChildDesc()
    {
        return $this->ChildDesc;
    }

    /**
     * @param string $ChildDesc
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
     */
    public function setChildDesc($ChildDesc)
    {
        $this->ChildDesc = $ChildDesc;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param base64Binary $Content
     * @return \Spinen\ConnectWise\Library\Api\Generated\DocumentInfo
     */
    public function setContent(base64Binary $Content)
    {
        $this->Content = $Content;
        return $this;
    }

}
