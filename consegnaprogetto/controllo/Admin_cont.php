<?php


class Admin_cont{
    
    
    public function init()
    {
        include_once ('view/admin.php');
    }
    public function scelta_inserimento($insert){
        switch ($insert){
            case '1':    
                include_once("../modello/Model.php");
                $modello = new Model();  
                $result = $modello->mostra_autori();
                include_once ('../view/brani.php');
                break;
            case '0':    
                include_once ('../view/autori.php');
                break;
            default :
                include_once ('../view/admin.php');
            }
            
        }
        
    
    
    
}

?>