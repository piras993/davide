<?php

include ('distr_visteutente.php');
if(isset($_POST['insert'])){
$insert=$_POST['insert'];
$prova= new distr_vistautente();
$prova->scelta_inserimento($insert);
} else{
    include_once ('../view/pre_utente.php');
}

?>