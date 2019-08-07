<?php


class Image
{
    private $imageId;
    private $imagePath;
    private $previewStatus;

    /**
     * Image constructor.
     * @param $imageId
     * @param $imagePath
     * @param $previewStatus
     */
    public function __construct($imageId, $imagePath, $previewStatus)
    {
        $this->imageId = $imageId;
        $this->imagePath = $imagePath;
        $this->previewStatus = $previewStatus;
    }

    public function getImageId()
    {
        return $this->imageId;
    }

    public function setImageId($imageId)
    {
        $this->imageId = $imageId;
    }

    public function getImagePath()
    {
        return $this->imagePath;
    }

    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    public function getPreviewStatus()
    {
        return $this->previewStatus;
    }

    public function setPreviewStatus($previewStatus)
    {
        $this->previewStatus = $previewStatus;
    }

}