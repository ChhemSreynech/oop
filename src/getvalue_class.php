<?php 
class getvalueclass {
    public $name;
    public $gender;
    public $email;
    public $province;

    public function __construct($name,$gender,$email,$province) {
        $this->name = $name;
        $this->gender = $gender;
        $this->email = $email;
        $this->province = $province;
    }

    public function getName() {
        return $this->name;
    }

    public function getdender() {
        return $this->$province;
    }

    public function getprovince() {
        return $this->email;
    }

    public function getemail() {
        return $this->email;
    }
}