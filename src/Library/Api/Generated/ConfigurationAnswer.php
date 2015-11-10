<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ConfigurationAnswer
{

    /**
     * @var int $QuestionId
     */
    protected $QuestionId = null;

    /**
     * @var string $Value
     */
    protected $Value = null;

    /**
     * @param int $QuestionId
     * @param string $Value
     */
    public function __construct($QuestionId = null, $Value = null)
    {
        $this->QuestionId = $QuestionId;
        $this->Value      = $Value;
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
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationAnswer
     */
    public function setQuestionId($QuestionId)
    {
        $this->QuestionId = $QuestionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param string $Value
     * @return \Spinen\ConnectWise\Library\Api\Generated\ConfigurationAnswer
     */
    public function setValue($Value)
    {
        $this->Value = $Value;
        return $this;
    }

}
