<?php
class cadastroControler{
    public $nome="";
    public $login="";
    public $genero="";
    public $jogo1="";
    public $jogo2="";
    public $jogo3="";
    public $text;
    public $select1;
    public $select2;

    public function cadastroCliente(){
        require_once('views/header.php');
        require_once('views/clientes/formCadastro.php');
        require_once('views/footer.php');
    }

    public function dadosCliente(){
        require_once('views/header.php');
        require_once('views/clientes/dados.php');
        require_once('views/footer.php');
    }

    public function acaoCadastro(){
        //////////////
        if (isset($_POST['fname'])) {
            $this -> nome=$_POST['fname'];
        }else{
            $this -> nome=" ";
        }
        //////////////
        if (isset($_POST['lname'])) {
            $this -> login=$_POST['lname'];
        }else{
            $this -> login=" ";
        }
        //////////////
        if (isset($_POST['genero'])) {
            $this -> genero=$_POST['genero'];
        }else{
            $this -> genero=" ";
        }
        //////////////
        if (isset($_POST['jogo1'])) {
            $this -> jogo1=$_POST['jogo1'];
        }else{
            $this -> jogo1=" ";
        }
        //////////////
        if (isset($_POST['jogo2'])) {
            $this -> jogo2=$_POST['jogo2'];
        }else{
            $this -> jogo2=" ";
        }
        /////////////
        if (isset($_POST['jogo3'])) {
            $this -> jogo3=$_POST['jogo3'];
        }else{
            $this -> jogo3=" ";
        }
        //////////////
        if (isset($_POST['textarea'])) {
            $this -> text=$_POST['textarea'];
        }else{
            $this -> text=" ";
        }
        /////////////
        if (isset($_POST['cars'])) {
            $this -> select1=$_POST['cars'];
        }else{
            $this -> select1=" ";
        }
        //////////////
        if (isset($_POST['ops'])) {
            $this -> select2=$_POST['ops'];
        }else{
            $this -> select2=" ";
        }
    }

    function listaClientes(){
        require_once("models/clientesModel.php");
        $cliente = new clientesModel();
        $cliente -> listaClientes();
        $resultado = $cliente -> getConsulta();

        $arrayClientes = array();

        while($linha = $resultado->fetch_assoc())
        {
            array_push($arrayClientes,$linha);
        }

        require_once ("views/header.php");
        require_once ("views/clientes/listaClientes.php");
        require_once ("views/footer.php");
    }
}