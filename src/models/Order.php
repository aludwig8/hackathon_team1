<?php


class Order
{
    private $orderId;
    private $costumerId;
    private $orderNumber;
    private $productList;

    /**
     * Order constructor.
     * @param $orderId
     * @param $costumerId
     * @param $orderNumber
     * @param $productList
     */
    public function __construct($orderId, $costumerId, $orderNumber, $productList)
    {
        $this->orderId = $orderId;
        $this->costumerId = $costumerId;
        $this->orderNumber = $orderNumber;
        $this->productList = $productList;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    }

    public function getCostumerId()
    {
        return $this->costumerId;
    }

    public function setCostumerId($costumerId)
    {
        $this->costumerId = $costumerId;
    }

    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    public function getProductList()
    {
        return $this->productList;
    }

    public function setProductList($productList)
    {
        $this->productList = $productList;
    }

}