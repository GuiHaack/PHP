<?php 
class UserController{

    public function validateLogin(){
        $login = $_POST["login"];
        require("models/UsersModel.php");
        $User = new UsersModel(); 
        $User -> consultUser($login);
        $result = $User -> getConsult();

        if($line = $result->fetch_assoc()){
            if($line['pass'] == $_POST["pass"]){
                $_SESSION['idUser'] = $line['idUser'];
                $_SESSION['name'] = $line['name'];
                $_SESSION['login'] = $line['login'];
                header("Location: index.php?c=m&a=i");
            }
            else{
                print("senha incorreta");
            }
        }else{
            print("Usuario não existente");
        }
    }
}
?>