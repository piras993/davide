<?php


class distr_vistautente{
    
    
    public function init()
    {
        include_once ('view/admin.php');
    }
    public function scelta_inserimento($insert){
        switch ($insert){
            case '1':    
                include_once("../controllo/Utente_cont.php");
                $role = new Utente_cont();  
                $role->init1();
                
                break;
            case '0':    
                include_once("../controllo/Utente_cont.php");
                $role = new Utente_cont();  
                $role->init0();
                break;
            default :
                include_once ('../view/pre_utente.php');
            }
            
        }
        
    
    
    
}

?>