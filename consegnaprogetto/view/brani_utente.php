<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Associazione Sas Enas</title>
        <meta name="keywords" content="Associazione Sas Enas">
        <meta name="description" content="Una pagina dell'associazione Sas'Enas di Bortigali">
        <link href="../stile/CSS_home.css" rel="stylesheet" type="text/css" media="screen">
        <link href="../stile/CSS_pagina.css" rel="stylesheet" type="text/css" media="screen">
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
                <h5> Ciao utente, <br> questi sono i brani tradizionali: <br> <br></h5>
                
                <?php if($result->num_rows==0){
                echo 'Nn ci sono brani di questo autore!';
                }else {while($row = $result->fetch_row()){
                
                    ?> <div align="center"><p id="elenco"><?php foreach ($row as $value){ echo $value; }; ?> </p><br></div>
                <?php }}
                ?>
                
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

