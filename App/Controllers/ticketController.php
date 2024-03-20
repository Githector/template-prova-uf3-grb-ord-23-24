<?php
include_once(__DIR__ . "/../Models/Ticket.php");
include_once(__DIR__ . "/../Models/Device.php");

class ticketController extends Controller
{

    public function index()
    {



        $this->render("ticket/index", $params, "site");
    }



    public function destroy()
    {

    }

    public function assign(){

    }

    public function solve(){

    }

    public function escalate()
    {

    }

    public function store()
    {

    }
}
