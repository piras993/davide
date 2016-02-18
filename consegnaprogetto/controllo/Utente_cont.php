<?php



class Utente_cont
{
    public function __construct(){
    }

    public function init0()
    {
     include_once("../modello/Model.php");
            $modello = new Model();  
            $result = $modello->mostra_autori();
            $libro = $modello->trova_libro();
            $avviso='';
            include_once("../view/utente.php");

            
    }
    public function init1(){
        include_once("../modello/Model.php");
            $modello = new Model();  
            $result = $modello->mostra_autori();
            $libro = $modello->trova_libro();
            
            include_once("../view/utente_1.php");
        
    }
}

?>