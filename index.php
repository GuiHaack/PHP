<?php
    require_once('views/header.php');
    if(!isset($_GET['m'])){
        require_once('controllers/controllerSite.php');
        $site = new siteControler();
        $site -> index();
    }else{
        switch ($_REQUEST['m']){
            case 's':
            require_once("controllers/controllerSite.php");
            $site = new siteControler();

            if(!isset($_GET['a'])){
                $site -> index();
            }else{
                switch ($_REQUEST['a']){
                    case 'h': $site -> index(); break;
                    case 's': $site -> Sobre(); break;
                    case 'f': $site -> Formulario(); break;
                    case 'c': $site -> Contato(); break;
                    case 'ad': $site -> Adm(); break;
                }
            }
            break; 
        
            case 'c':
                require_once("controllers/clientes.php");
                $cadastro = new cadastroControler();

                if(!isset($_GET['cc'])){
                    $cadastro -> cadastroCliente();
                }else{
                    switch ($_REQUEST['cc']){
                        case 'g' : $cadastro -> cadastroCliente(); break;
                        case 'ch' : $cadastro -> dadosCliente(); break;
                        case 'lc' : $cadastro -> listaClientes(); break;
                        case 'ld' : $cadastro -> listaProdutos(); break;
                    }
                }
            break;

            case 'p':
                require_once("controllers/produtos.php");
                $produto = new cadastroControler();
                
                if(!isset($_GET['cc'])){
                    $produto -> listaProdutos();
                }else{
                    switch ($_REQUEST['pp']){
                        case 'ld': $produto -> listaProdutos(); break;
                    }
                }
            break;
            
            case 'h':
            require_once("controllers/controllerSite.php");
            $site = new siteControler();

            if(!isset($_GET['a'])){
                $site -> index();
            }else{
                switch ($_REQUEST['a']){
                    case 'h': $site -> clientes(); break;
                    case 's': $site -> produtos(); break;
                }
            }
            break; 
        }
    }
    require_once('views/footer.php');
    ?>
                
    