<?php
class connectClass{
    var $Oconn;

    function openConnect(){
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'clientes';
        $this -> conn = new mysqli($servername, $username, $password, $dbname);
    }
    function getConn(){
        return $this -> conn;
    }
}
?>