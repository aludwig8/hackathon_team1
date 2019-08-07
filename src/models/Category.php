<?php


class Category
{
    private $categoryId;
    private $productId;
    private $categoryName;

    /**
     * Category constructor.
     * @param $categoryId
     * @param $productId
     * @param $categoryName
     */
    public function __construct($categoryId, $productId, $categoryName)
    {
        $this->categoryId = $categoryId;
        $this->productId = $productId;
        $this->categoryName = $categoryName;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }

}