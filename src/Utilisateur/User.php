<?php

namespace App\User;

class User{
    
    public $name;

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

}