<?php

class Address
{
    protected $id;
    protected $type;
    protected $streetAddress;
    protected $addressLine2;
    protected $city;
    protected $state;
    protected $zip;

    function __construct($id, $type, $streetAddress, $addressLine2, $city, $state, $zip)
    {
        $this->id = $id;
        $this->type = $type;
        $this->streetAddress = $streetAddress;
        $this->addressLine2 = $addressLine2;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }

    public function getID()
    {
        return $this->id;
    }
    function getType()
    {
        return $this->type;
    }
    public function getStreetAddress()
    {
        return $this->streetAddress;
    }
    public function getAddressLine2()
    {
        return $this->addressLine2;
    }
    public function getCity()
    {
        return $this->city;
    }
    public function getState()
    {
        return $this->state;
    }
    public function getZip()
    {
        return $this->zip;
    }
}
