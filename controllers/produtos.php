<?php
class cadastroControler{
    function listaProdutos(){
        require_once("models/produtosModel.php");
        $cliente = new produtosModel();
        $cliente -> produtosClientes();
        $resultado = $cliente -> getConsulta();

        $arrayProdutos = array();

        while($linha = $resultado->fetch_assoc())
        {
            array_push($arrayProdutos,$linha);
        }

        require_once ("views/header.php");
        require_once ("views/produtos/listaProdutos.php");
        require_once ("views/footer.php");
    }
}
?>