<?php


define('DB_HOST','127.0.0.1');
define('DB_USER', 'root');
define('DB_PASSWORD','');
define('DB_NAME','university_system_managment');



class DbConnection {

    function connect(){

        try {
            $db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8"
        ,DB_USER
        ,DB_PASSWORD);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY,true);
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        if($db){
            echo "Connected to the database successfully!";
        }
        } catch(PDOException $e){
            echo  "failed";
            die( $e->getMessage());
        }
        
        return $db;
    }
}







?>