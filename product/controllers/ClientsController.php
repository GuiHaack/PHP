<?php
class ClientsController{
    var $ClientModel;

    function __construct(){
        if(!isset($_SESSION["login"])){
            header("Location: index.php?c=m&a=l");
        }

        require_once("models/ClientsModel.php");
        $this -> ClientModel = new UsersModel();
    }
    public function index(){
        $this -> listClients();
    }

    public function listClients(){
        $this -> ClientModel -> listClients();
        $result = $this -> ClientModel -> getConsult();

        $arrayClients = array();

        while($line = $result->fetch_assoc()){
            array_push($arrayClients,$line);
        }
        require_once ("views/Header.php");
        require_once ("views/clients/ListClients.php");
        require_once ("views/Footer.php");
    }

    public function insertClient(){
        require_once ("views/Header.php");
        require_once ("views/clients/InsertClient.php");
        require_once ("views/Footer.php");
    }

    public function insertClientAction(){
        $arrayClient["nome"] = $_POST["nome"];
        $arrayClient["quantidade"] = $_POST["quantidade"];

        $this -> ClientModel -> insertClient($arrayClient);

        $this -> listClients();
    }

    public function updateClient($idProduto){
        $this -> ClientModel -> consultClient($idProduto);
        $result = $this -> ClientModel -> getConsult();
        
        if( $arrayClient = $result->fetch_assoc() ){
            require_once ("views/Header.php");
            require_once ("views/clients/AlterClient.php");
            require_once ("views/Footer.php");
        }
    }

    public function updateClientAction(){
        $arrayClient["idProduto"] = $_POST["idProduto"];
        $arrayClient["nome"] = $_POST["nome"];
        $arrayClient["quantidade"] = $_POST["quantidade"];

        $this -> ClientModel -> updateClient($arrayClient);

        $this -> listClients();
    }

    public function deleteClient($idProduto){
        $this -> ClientModel -> deleteClient($idProduto);

        $this -> listClients();
    }

}    
?>