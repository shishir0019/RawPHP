<?php

class WebSite
{
    protected $id;
    protected $name;
    protected $description;
    protected $published;
    protected $address;

    function __construct($id, $name, $description, $published, $address)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->published = $published;
        $this->address = $address;
    }

    public function getID()
    {
        return $this->id;
    }
    function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getPublished()
    {
        return $this->published;
    }
    public function getAddress()
    {
        return $this->address;
    }
}
