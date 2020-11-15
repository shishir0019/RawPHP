<?php

class Item
{
    protected $id;
    protected $name;
    protected $price;
    protected $description;
    protected $imgURl;
    protected $categoryID;

    function __construct($id, $name, $price, $description, $imgURl, $categoryID)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->imgURl = $imgURl;
        $this->categoryID = $categoryID;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getImgURL()
    {
        return $this->imgURl;
    }
    public function getCategoryID()
    {
        return $this->categoryID;
    }

    public function getArray()
    {
        return array(
            "id" => $this->id,
            "name" => $this->name,
            "price" => $this->price,
            "description" => $this->description,
            "imgURl" => $this->imgURl
        );
    }
}
