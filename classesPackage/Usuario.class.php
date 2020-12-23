<?php

class Usuario{
    public function login($email, $senha){
        global $conn;

        $sql = "SELECT * FROM users WHERE users_email = :email AND users_password = :senha";
        //preparando o sql com a variavel pdo
        $sql = $conn->prepare($sql);
        //conectando valores
        $sql->bindValue("email", $email);
        $sql->bindValue("senha", md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            $dado = $sql->fetch();

            $_SESSION['users_userId'] = $dado['users_userId'];
            $_SESSION['users_nome'] = $dado['users_nome'];
            $_SESSION['users_sobrenome'] = $dado['users_sobrenome'];
            $_SESSION['users_email'] = $dado['users_email'];


            return true;
        } else {
            return false;
        }

    }
}


?>