<?php
if(($_POST['nome']!="")){
$nome = $_POST['nome'];
include_once('../modello/Model.php');
$modello = new Model();
$modello->insert_autore($nome);
include_once ("../view/admin_ok.php");
} else {
    include_once ('../view/autori.php');
}
?>