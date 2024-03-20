<?php 
    include_once(__DIR__ . "/../Models/Device.php");
    class mainController extends Controller{
            
            public function index(){

                $this->render("main/index", $params, "site");
            }

            

    }

?>