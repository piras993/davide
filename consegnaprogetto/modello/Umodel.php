<?php

class Umodel{
    
    private $username;
    function Umodel($username){
        $this->username = $username;
    }
    
    function get_username(){
        return $this->username;
    }
    
    function set_username($username){
        $this->username = $username;
    }
}

