<?php
class UsersModel{
    var $result;
    var $conn;

    function __construct(){
        require_once("bd/ConnectClass.php");
        $Oconn = new ConnectClass();
        $Oconn -> openConnect();
        $this -> conn = $Oconn -> getConnect();
    }

    public function listClients(){
        $sql = 'SELECT * FROM clientes';
        $this -> result = $this -> conn -> query($sql); 
    }

    public function consultClient($idClient){
        $sql = "SELECT * FROM clientes where idCliente = 
        ".$idClient.";";
        $this -> result = $this -> conn -> query($sql);
    }

    public function insertClient($arrayClient){
        $sql = "INSERT INTO clientes (nome, endereco, email, telefone) VALUES
        ('".$arrayClient['nome']."', '".$arrayClient['endereco']."',
        '".$arrayClient['email']."', '".$arrayClient['telefone']."');";

        $this -> conn -> query($sql);
        $this -> result = $this -> conn -> insert_id;
    }

    public function updateClient($arrayClient){
        $sql = "UPDATE clientes set nome='".$arrayClient['nome']."',
        endereco='".$arrayClient['endereco']."',
        email='".$arrayClient['email']."',
        telefone='".$arrayClient['telefone']."'
        where idCliente=".$arrayClient['idCliente'].";";

        $this -> result = $this -> conn -> query($sql);
    }

    public function deleteClient($idClient){
        $sql = "DELETE FROM clientes where idCliente='".$idClient."';";
        $this -> result = $this -> conn -> query($sql);
    }

    public function getConsult(){
        return $this -> result;
    }
}
?>