<?php


class Employee {
    public $name;
    public $dateOfBirth;
    public $address;
    public $position;

    public function __construct($name, $dateOfBirth, $address, $position){
        $this->name = $name;
        $this->dateOfBirth = $dateOfBirth;
        $this->address = $address;
        $this->position = $position;
    }

    public function getName(){
        return $this->name;
    }

    public function getDateOfBirth(){
        return $this->dateOfBirth;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getPosition(){
        return $this->position;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }
}