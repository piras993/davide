
<?php
class Model {
            
       public function insert_brano($titolo, $autore, $id){
        
        include_once 'Setting.php';
        $mysqli = new mysqli();
        $mysqli->connect(Setting::$db_host, Setting::$db_user, Setting::$db_psw, Setting::$db_name);
        if($mysqli->connect_errno!=0){
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else {
            $query = "insert into brani values(default, '$titolo', '$autore', '$id');";
            $result = $mysqli->query($query);
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
                echo "Errore durante l'inserimento";
            }
            else
            {
                
            }  
        }
        $mysqli->close();
        
 }
 
    public function insert_autore($nome){
        
        include_once 'Setting.php';
        $mysqli = new mysqli();
        $mysqli->connect(Setting::$db_host, Setting::$db_user, Setting::$db_psw, Setting::$db_name);
        if($mysqli->connect_errno!=0){
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else {
            $query = "insert into autori values(default, '$nome');";
            $result = $mysqli->query($query);
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
                echo "Errore durante l'inserimento";
            }
            else
            {
                
            }  
        }
        $mysqli->close();
        
 }
        
    public function trova_brani($artista){
        include_once 'Setting.php';
        $mysqli = new mysqli();
        $mysqli->connect(Setting::$db_host, Setting::$db_user, Setting::$db_psw, Setting::$db_name);
        if($mysqli->connect_errno!=0)
        {
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else { 
            $query = "select titolo from brani where autore='$artista'";
            $result = $mysqli->query($query);
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
            }
            else
            {
                return $result;
            }  
        
        $mysqli->close();
        }
    }    
                
    public function mostra_brani(){
        include_once 'Setting.php';
        $mysqli = new mysqli();
        $mysqli->connect(Setting::$db_host, Setting::$db_user, Setting::$db_psw, Setting::$db_name);
        if($mysqli->connect_errno!=0)
        {
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else { 
            $query = "select titolo from brani";
            $result = $mysqli->query($query);
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
            }
            else
            {
                return $result;
            }  
        
        $mysqli->close();
        }
    }    
        public function mostra_autori(){
        include_once 'Setting.php';
        $mysqli = new mysqli();
        $mysqli->connect(Setting::$db_host, Setting::$db_user, Setting::$db_psw, Setting::$db_name);
        if($mysqli->connect_errno!=0)
        {
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else { 
            $query = "select nome from autori";
            $result = $mysqli->query($query);
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
            }
            else
            {
                return $result;
            }  
        
        $mysqli->close();
        }
    }
    
    public function mostra_mail(){
        include_once 'Setting.php';
        $mysqli = new mysqli();
        $mysqli->connect(Setting::$db_host, Setting::$db_user, Setting::$db_psw, Setting::$db_name);
        if($mysqli->connect_errno!=0)
        {
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else { 
            $query = "select email from bloccati";
            $result = $mysqli->query($query);
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
            }
            else
            {
                return $result;
            }  
        
        $mysqli->close();
        }
    }
    
    public function trova_libro(){
        include_once 'Setting.php';
        $mysqli = new mysqli();
        $mysqli->connect(Setting::$db_host, Setting::$db_user, Setting::$db_psw, Setting::$db_name);
        if($mysqli->connect_errno!=0)
        {
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else { 
            $query = "select nome from discografia";
            $result = $mysqli->query($query);
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
            }
            else
            {
                return $result;
            }  
        
        $mysqli->close();
        }
    }
    public function cerca_id($autore){
        include_once 'Setting.php';
        $mysqli = new mysqli();
        $mysqli->connect(Setting::$db_host, Setting::$db_user, Setting::$db_psw, Setting::$db_name);
        if($mysqli->connect_errno!=0)
        {
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else { 
            $query = "select id from autori where nome='$autore'";
            $result = $mysqli->query($query)->fetch_array();
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
            }
            else
            {
                return $result;
            }  
        
        $mysqli->close();
        }
    }
    
    public function cerca_id_libro($libro){
        include_once 'Setting.php';
        $mysqli = new mysqli();
        $mysqli->connect(Setting::$db_host, Setting::$db_user, Setting::$db_psw, Setting::$db_name);
        if($mysqli->connect_errno!=0)
        {
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else { 
            $query = "select id from discografia where nome='$libro'";
            $result = $mysqli->query($query)->fetch_array();
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
            }
            else
            {
                return $result['id'];
            }  
        
        $mysqli->close();
        }
    }
    
    public function cerca_num($libro){
        include_once 'Setting.php';
        $mysqli = new mysqli();
        $mysqli->connect(Setting::$db_host, Setting::$db_user, Setting::$db_psw, Setting::$db_name);
        if($mysqli->connect_errno!=0)
        {
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else { 
            $query = "select * from discografia where nome='$libro'";
            $result = $mysqli->query($query)->fetch_array();
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
                echo 'ciao';
            }
            else
            {
                return $result['quant'];
            }  
        
        $mysqli->close();
        }
    }
    
    public function transazione($email, $id_libro, $quant){
        include_once 'Setting.php';
        $mysqli = new mysqli();
        $mysqli->connect(Setting::$db_host, Setting::$db_user, Setting::$db_psw, Setting::$db_name);
        if($mysqli->connect_errno!=0)
        {
            $error = $mysqli->connect_error;
            error_log("Errore $error",0);
        }
        else { 
            $mysqli->autocommit(false);
            $query = "insert into bloccati values (default, '$email','$id_libro')";
            $mysqli->query($query);
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
                $mysqli->rollback();
                echo 'ciao';
            }
            else
            {
             $query = "update discografia set quant='$quant'";
             $mysqli->query($query);
            if($mysqli->errno>0){
                error_log("Errore: $mysqli->error");
                $mysqli->rollback();
                echo 'errore';
            } else{
                $mysqli->commit();
                $mysqli->autocommit(true);
            }
        
        $mysqli->close();
        }
    }
}
}
