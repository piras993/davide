<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Associazione Sas Enas</title>
        <meta name="keywords" content="Associazione Sas Enas">
        <meta name="description" content="Una pagina dell'associazione Sas'Enas di Bortigali">
        <link href="../stile/CSS_home.css" rel="stylesheet" type="text/css" media="screen">
        <link href="../stile/CSS_pagina.css" rel="stylesheet" type="text/css" media="screen">
                <script>
        <!--
function Modulo() {
    
    var titolo = document.modulo.titolo.value;
    
    
    if ((titolo == "") || (titolo == "undefined")) {
        alert("Devi inserire il titolo del brano.");
        document.modulo.nome.focus();
        return false;
    }
    
    else {
        document.modulo.action = "../controllo/dirverter_brani.php";
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
                    <a  href="javascript:history.go(-1)"><button id='log'>
                        Torna indietro
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
                <h5> Inserisci il titolo del brano e scegli un autore<br> <br></h5>
                <div align="center" id="form">
                <form action="../controllo/dirverter_brani.php" method="post" name="modulo">
                    <p>Titolo: </p> <input type="text" name="titolo"> <br>
                    <p>Gruppo: </p><select name="autore">
                <?php while($row = $result->fetch_row()){
                    ?> <option> <?php foreach ($row as $value){ echo $value; }; ?></option><br>
                <?php }
                ?></select><br><br><br>
                <input id="log" type="button" value="INSERISCI" onClick="Modulo()">
                
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

