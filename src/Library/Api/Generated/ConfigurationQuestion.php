<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ConfigurationQuestion
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var int $QuestionId
     */
    protected $QuestionId = null;

    /**
     * @var string $Question
     */
    protected $Question = null;

    /**
     * @var float $SequenceNumber
     */
    protected $SequenceNumber = null;

    /**
     * @var string $FieldType
     */
    protected $FieldType = null;

    /**
     * @var int $NumberOfDecimals
     */
    protected $NumberOfDecimals = null;

    /**
     * @var string $Answer
     */
    protected $Answer = null;

    /**
     * @param int $Id
     * @param int $QuestionId
     * @param string $Question
     * @param float $SequenceNumber
     * @param string $FieldType
     * @param int $NumberOfDecimals
     * @param string $Answer
     */
    public function __construct($Id = null, $QuestionId = null, $Question = null, $SequenceNumber = null, $FieldType = null, $NumberOfDecimals = null, $Answer = null)
    {
        $this->Id               = $Id;
        $this->QuestionId       = $QuestionId;
        $this->Question         = $Question;
        $this->SequenceNumber   = $SequenceNumber;
        $this->FieldType        = $FieldType;
        $this->NumberOfDecimals = $NumberOfDecimals;
        $this->Answer           = $Answer;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationQuestion
     */
    public function setId($Id)
    {
        $this->Id = $Id;
        return $this;
    }

    /**
     * @return int
     */
    public function getQuestionId()
    {
        return $this->QuestionId;
    }

    /**
     * @param int $QuestionId
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationQuestion
     */
    public function setQuestionId($QuestionId)
    {
        $this->QuestionId = $QuestionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getQuestion()
    {
        return $this->Question;
    }

    /**
     * @param string $Question
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationQuestion
     */
    public function setQuestion($Question)
    {
        $this->Question = $Question;
        return $this;
    }

    /**
     * @return float
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }

    /**
     * @param float $SequenceNumber
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationQuestion
     */
    public function setSequenceNumber($SequenceNumber)
    {
        $this->SequenceNumber = $SequenceNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getFieldType()
    {
        return $this->FieldType;
    }

    /**
     * @param string $FieldType
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationQuestion
     */
    public function setFieldType($FieldType)
    {
        $this->FieldType = $FieldType;
        return $this;
    }

    /**
     * @return int
     */
    public function getNumberOfDecimals()
    {
        return $this->NumberOfDecimals;
    }

    /**
     * @param int $NumberOfDecimals
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationQuestion
     */
    public function setNumberOfDecimals($NumberOfDecimals)
    {
        $this->NumberOfDecimals = $NumberOfDecimals;
        return $this;
    }

    /**
     * @return string
     */
    public function getAnswer()
    {
        return $this->Answer;
    }

    /**
     * @param string $Answer
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationQuestion
     */
    public function setAnswer($Answer)
    {
        $this->Answer = $Answer;
        return $this;
    }

}
