<?php


    class Device extends Orm{

        public function __construct() {
            parent::__construct('devices');        
           
        }


        public static function createTable(){
            $db = new Database();
            
            $sql = "CREATE TABLE IF NOT EXISTS uf3.devices (
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                type VARCHAR(256) NOT NULL,
                reference VARCHAR(256) NOT NULL,
                created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                modified_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                ) ENGINE=InnoDB;";


            $db->queryDataBase($sql);

        }



    }

?>