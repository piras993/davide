<?php

class UserController{
    
    function UserController(){
        
    }
    public function invoke()
    {
      include_once("view/homepage.php");
      
    }
    
    
    function login ($username, $password){
        if($this->autenticazione($username, $password)=='utente'){
            session_start();
            
            
            $_SESSION['user']='utente';
            return 'utente';
        } elseif($this->autenticazione($username, $password)=='admin'){
            session_start();
            
            $_SESSION['user']='admin';
            return 'admin';
            
        }else {
            return false;
        }
        
    }
    static function autenticazione ($us, $pss){
        $authentic = NULL;
        if($us=='utente' && $pss=='password') {
            $authentic= 'utente';
        }elseif($us=='admin' && $pss=='password') {
            $authentic = 'admin';
        }
        return $authentic;
        
    }
    function logout(){
        session_start();
        session_destroy();
    }
}

