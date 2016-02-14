<?php

include ('Admin_cont.php');
if(isset($_POST['insert'])){
$insert=$_POST['insert'];
$prova= new Admin_cont();
$prova->scelta_inserimento($insert);
} else{
    include_once ('../view/admin.php');
}

?>