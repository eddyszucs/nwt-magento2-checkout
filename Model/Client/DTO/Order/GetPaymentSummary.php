<?php
namespace Svea\Checkout\Model\Client\DTO\Order;

class GetPaymentSummary
{

    /**
     * Required
     * @var float $reservedAmount
     */
    protected $reveredAmount;

    /**
     * @return float
     */
    public function getReservedAmount()
    {
        return $this->reveredAmount;
    }

    /**
     * @param float $amount
     * @return GetPaymentSummary
     */
    public function setReservedAmount($amount)
    {
        $this->reveredAmount = $amount;
        return $this;
    }


}