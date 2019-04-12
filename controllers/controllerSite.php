<?php
class siteControler{

    public function index(){
        require_once('views/header.php');
        require_once('views/site/home.php');
        require_once('views/footer.php');
    }

    public function Sobre(){
        require_once('views/header.php');
        require_once('views/site/Sobre.php');
        require_once('views/footer.php');
    }

    public function clientes(){
        header("Location: adm/index.php?c=m&a=i");
    }

    public function produtos(){
        header("Location: product/index.php?c=m&a=i");
    }

    public function Contato(){
        require_once('views/header.php');
        require_once('views/site/Contato.php');
        require_once('views/footer.php');
    }
    
}