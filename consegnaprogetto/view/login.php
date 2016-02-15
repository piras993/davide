<?php


?>



<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Associazione Sas Enas</title>
        <meta name="keywords" content="Associazione Sas Enas">
        <meta name="description" content="Una pagina dell'associazione Sas'Enas di Bortigali">
        <link href="../stile/pagina.css" rel="stylesheet" type="text/css" media="screen">
        <script>
<!--
function Modulo() {
    
    var nome = document.modulo.user.value;
    var pwd = document.modulo.pass.value;
    
    if ((nome == "") || (nome == "undefined")) {
        alert("Il campo username è obbligatorio.");
        document.modulo.nome.focus();
        return false;
    }
    else if ((pwd == "") || (pwd == "undefined")) {
        alert("Il campo password è obbligatorio.");
        document.modulo.cognome.focus();
        return false;
    }
    else {
        document.modulo.action = "initlogin.php?op=login";
        document.modulo.submit();
    }
}
//-->
</script>
    </head>
    <body>
        <div id='page'>
        
            <header>
                <div id='header'>
                    
                    <div id="links">
                        <ul id="menu">
                            <li><a href="../index.php">VAI ALLA HOME</a></li>
                        </ul>
                    </div>
                </div>
            </header>
        
            <div id="pagina">
            <div id='sidebar'>
                <div id='alto'>
                    <a  href="../index.php"><button id='log'>
                        Torna Indietro
                        </button></a><br/>
                    
                    <div class='comune'>
                        <a  href="http://www.comune.bortigali.nu.it/">
                                <img title='paesaggio' alt='Paesaggio' src='../immagini/comune.jpg'><br/>
                               IL COMUNE DI BORTIGALI <br/>
                            </a>
                    </div>
                            <div class='comune'>
                                <a  href="http://www.bibliotecabortigali.it/">
                                <img title='biblio' alt='biblio' src='../immagini/biblio.jpg'><br/>
                                LA BIBLIOTECA<br/></a>
                                </div>
                            <div class='comune'>
                                <a  href="https://www.google.com/maps/place/Via+Giuseppe+Verdi,+08012+Bortigali+NU,+Italia/@40.2823286,8.8360016,16z/data=!4m2!3m1!1s0x12ddb55f35530d75:0x6393071f0b1f2f85">
                                <img title='maps' alt='maps' src='../immagini/maps.jpg'><br/>
                                DOVE SIAMO<br/></a>
                                </div>
                        
            </div>
            </div>
        
            <div id='content'>
                <div id="form"  align="center">
                <h3>LOGIN</h3>
                <?php if(@$_GET['err'] ==1) {
                    ?> <div id='errore'><p class="errore"><b>Username e/o passaword errate<b></p></div><?php
           } ?>
                <form method="post" name="modulo">
            <p>Username:<br />
                <input type="text" name="user" >
            </p>
            <p>Password: <br />
                <input type="password" name="pass">
            </p>
            <input id="log" type="button" name="op" value="login" onClick="Modulo()">
        </form>
            </div>    
            </div>
            </div>
            <div style="clear: both; width: 0px; height: 0px;"></div>
            
            <footer>
                <div id='footer'>
                    Tutti i diritti riservati - © Sotziu de sonos e cultura populares - Bortigali
                </div>
            </footer>
        
        </div>
    </body>
</html>

