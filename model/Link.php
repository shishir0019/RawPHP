<?php

class Link
{
    protected $id;
    protected $type;
    protected $name;

    function __construct($id, $type, $name)
    {
        $this->id = $id;
        $this->type = $type;
        $this->name = $name;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getName()
    {
        return $this->name;
    }
}
