<?php

require_once ('../controllo/UserController.php');
require_once ('../modello/Umodel.php');

@$op = $_REQUEST['op'];
$userController = new UserController();

switch ($op) {
    case 'login':
        $username = $_POST['user'];
        $password = $_POST['pass'];
        
        if($userController->login($username, $password)=='utente'){
            include_once("../controllo/Utente_cont.php");
            $role = new Utente_cont();  
            $role->init();
        } elseif($userController->login($username, $password)=='admin'){
            header("Location:admin.php");
        }else {
            
            header ("Location:login.php?err=1");
        }
        
    break;
    
    case 'logout':
        $userController->logout();
        header("Location:login.php");
    break;
default :
    header("Location:login.php");
    break;
}