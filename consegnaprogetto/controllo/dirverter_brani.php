<?php
$autore=$_POST['autore'];
include_once('../modello/Model.php');
$modello = new Model();
$tran = $modello->cerca_id($autore);
$id=$tran['id'];

$titolo=$_POST['titolo'];
$modello1= new Model();
$end=$modello1->insert_brano($titolo, $autore, $id);
include_once ("../view/admin_ok.php");

?>