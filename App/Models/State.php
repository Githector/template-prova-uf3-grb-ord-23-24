<?php


    class State extends Orm{

        public function __construct() {
            parent::__construct('states');        
           
        }


        public static function createTable(){
            $db = new Database();
            
            $sql = "CREATE TABLE IF NOT EXISTS uf3.states (
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                state_name VARCHAR(256) NOT NULL,
                created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                modified_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
                ) ENGINE=InnoDB;";


            $db->queryDataBase($sql);

        }

    }