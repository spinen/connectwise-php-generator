<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class ArrayOfExpenseDetail
{

    /**
     * @var ExpenseDetail[] $ExpenseDetail
     */
    protected $ExpenseDetail = null;

    public function __construct()
    {

    }

    /**
     * @return ExpenseDetail[]
     */
    public function getExpenseDetail()
    {
        return $this->ExpenseDetail;
    }

    /**
     * @param ExpenseDetail[] $ExpenseDetail
     * @return \Spinen\ConnectWise\Library\Api\Generated\ArrayOfExpenseDetail
     */
    public function setExpenseDetail(array $ExpenseDetail)
    {
        $this->ExpenseDetail = $ExpenseDetail;
        return $this;
    }

}
