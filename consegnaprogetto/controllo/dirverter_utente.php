<?php

$artista = $_POST['autore'];
include_once ("../modello/Model.php");
$model=new Model();
$result=$model->trova_brani($artista);
include_once("../view/brani_utente.php");


?>