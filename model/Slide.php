<?php

class Slide
{
    protected $id;
    protected $name;
    protected $URL;

    function __construct($id, $name, $URL)
    {
        $this->id = $id;
        $this->name = $name;
        $this->URL = $URL;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    
    public function getURL()
    {
        return $this->URL;
    }
}
