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
        $sql = 'SELECT * FROM produtos';
        $this -> result = $this -> conn -> query($sql); 
    }

    public function consultClient($idProduto){
        $sql = "SELECT * FROM produtos where idProduto = 
        ".$idProduto.";";
        $this -> result = $this -> conn -> query($sql);
    }

    public function insertClient($arrayClient){
        $sql = "INSERT INTO produtos (nome, quantidade) VALUES
        ('".$arrayClient['nome']."', '".$arrayClient['quantidade']."');";

        $this -> conn -> query($sql);
        $this -> result = $this -> conn -> insert_id;
    }

    public function updateClient($arrayClient){
        $sql = "UPDATE produtos set nome='".$arrayClient['nome']."',
        quantidade='".$arrayClient['quantidade']."'
        where idProduto=".$arrayClient['idProduto'].";";

        $this -> result = $this -> conn -> query($sql);
    }

    public function deleteClient($idProduto){
        $sql = "DELETE FROM produtos where idProduto='".$idProduto."';";
        $this -> result = $this -> conn -> query($sql);
    }

    public function getConsult(){
        return $this -> result;
    }
}
?>