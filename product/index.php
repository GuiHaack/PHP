<?php
session_start();
require_once("config/config.php");

if(!isset($_GET['c'])){
    require_once("controllers/MainController.php");
    $Main = new MainController();
    $Main -> index();
}else{
    switch($_REQUEST['c']){
        case 'm':
            require_once("controllers/MainController.php");
            $Main = new MainController();
            
            if(!isset($_GET['a'])){
                $Main -> index();
            }else{
                switch($_REQUEST['a']){
                    case 'i': $Main -> index(); break;
                    case 'l': $Main -> login(); break;
                    case 'sd': $Main -> sessionDestroy(); break;
                }
            }
        break;

        case 'u':
            require_once("controllers/UserController.php");
            $User = new UserController();

            if(!isset($_GET['a'])){
                $User -> index();
            }else{
                switch($_REQUEST['a']){
                    case 'vl': $User -> validateLogin(); break;
                }
            }
        break;

        case 'c':
            require_once("controllers/ClientsController.php");
            $Client = new ClientsController();

            if(!isset($_GET['a'])){
                $Client -> index();
            }else{
                switch($_REQUEST['a']){
                    case 'lc': $Client -> listClients(); break;
                    case 'ic': $Client -> insertClient(); break;
                    case 'ica': $Client -> insertClientAction(); break;
                    case 'uc': $id=$_GET['id']; $Client -> updateClient($id); break;
                    case 'uca': $Client -> updateClientAction(); break;
                    case 'dc': $id=$_GET['id']; $Client -> deleteClient($id); break;
                }
            }
            
        break;
        case 'h':
        require_once("controllers/MainController.php");
        $Main = new MainController();

            if(!isset($_GET['a'])){
                $Client -> index();
            }else{
                switch($_REQUEST['a']){
                    case 'ho': $Main -> start(); break;
                }
            }
            
        break;
    }
}
?>
