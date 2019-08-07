<?php


class Product
{
    private $productId;
    private $productName;
    private $productDescription;
    private $productPrice;
    private $productStockSize;
    private $productThumbnailPic;
    private $productPictures;

    /**
     * Product constructor.
     * @param $productId
     * @param $productName
     * @param $productDescription
     * @param $productPrice
     * @param $productStockSize
     * @param $productThumbnailPic
     * @param $productPictures
     */
    public function __construct($productId, $productName, $productDescription, $productPrice, $productStockSize, $productThumbnailPic, $productPictures)
    {
        $this->productId = $productId;
        $this->productName = $productName;
        $this->productDescription = $productDescription;
        $this->productPrice = $productPrice;
        $this->productStockSize = $productStockSize;
        $this->productThumbnailPic = $productThumbnailPic;
        $this->productPictures = $productPictures;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function getProductName()
    {
        return $this->productName;
    }

    public function setProductName($productName)
    {
        $this->productName = $productName;
    }

    public function getProductDescription()
    {
        return $this->productDescription;
    }

    public function setProductDescription($productDescription)
    {
        $this->productDescription = $productDescription;
    }

    public function getProductPrice()
    {
        return $this->productPrice;
    }

    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
    }

    public function getProductStockSize()
    {
        return $this->productStockSize;
    }

    public function setProductStockSize($productStockSize)
    {
        $this->productStockSize = $productStockSize;
    }

    public function getProductThumbnailPic()
    {
        return $this->productThumbnailPic;
    }

    public function setProductThumbnailPic($productThumbnailPic)
    {
        $this->productThumbnailPic = $productThumbnailPic;
    }

    public function getProductPictures()
    {
        return $this->productPictures;
    }

    public function setProductPictures($productPictures)
    {
        $this->productPictures = $productPictures;
    }

}