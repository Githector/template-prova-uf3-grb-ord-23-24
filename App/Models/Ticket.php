<?php


    class Ticket extends Orm{

        public function __construct() {
            parent::__construct('tickets');        
           
        }


        public static function createTable(){
            $db = new Database();
            
            $sql = "CREATE TABLE IF NOT EXISTS uf3.tickets (
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                id_device INT NOT NULL,
                id_state INT NOT NULL DEFAULT 1,
                id_user INT,
                level INT NOT NULL DEFAULT 1,
                problem_description TEXT NOT NULL,
                solution_description TEXT,
                created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                modified_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
                FOREIGN KEY (id_device) REFERENCES devices(id) ON DELETE CASCADE,
                FOREIGN KEY (id_state) REFERENCES states(id) ON DELETE CASCADE,
                FOREIGN KEY (id_user) REFERENCES users(id) ON DELETE CASCADE
                ) ENGINE=InnoDB;";


            $db->queryDataBase($sql);

        }





    }

?>