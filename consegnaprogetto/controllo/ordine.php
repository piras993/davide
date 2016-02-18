<?php
if($_POST['email']!=''){
$libro = $_POST['libro'];
$email = $_POST['email'];
include_once("../modello/Model.php");
$modello = new Model();
$id_libro = $modello->cerca_id_libro($libro);
$quant = $modello->cerca_num($libro);

if($quant==0){
    errore;
} else {
    $newquant = $quant-1;
    include_once("../modello/Model.php");
    $transaction = new Model();  
    $transaction->transazione($email, $id_libro, $newquant);
    include_once('../view/utente_ok.php');       
    
}
} else{
    include_once("../modello/Model.php");
            $modello = new Model();  
            $result = $modello->mostra_autori();
            $libro = $modello->trova_libro();
            include_once("../view/utente_1.php");
}