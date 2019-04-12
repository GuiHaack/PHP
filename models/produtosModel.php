<?php 
    class produtosModel
    {
        var $resultado;

        public function produtosClientes()
        {
            require_once ("bd/connectClass.php");
            $Oconn = new connectClass();
            $Oconn -> openConnect();
            $conn = $Oconn -> getconn();
            $sql = 'SELECT * FROM produtos';
            $this -> resultado = $conn-> query($sql);
        }

        public function getConsulta(){
            return $this -> resultado;
        }
    }
?>