<?php



class Utente_cont
{
    public function __construct(){
    }

    public function init()
    {
     include_once("../modello/Model.php");
            $modello = new Model();  
            $result = $modello->mostra_autori();
            include_once("../view/utente.php");

            
    }
}

?>