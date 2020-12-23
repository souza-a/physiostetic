<?php

class Cadastro{
    protected $msm;
    public function cadastroUsuario($nome_cadastro, $sobrenome_cadastro, $email_cadastro, $password_cadastro1){
        global $conn;

            $sql = "SELECT * FROM users where users_email = :email";

            $sql = $conn->prepare($sql);
            $sql->bindValue("email", $email_cadastro);
            $sql->execute();
            $result = $sql->rowCount();
            

            if($result == 0){
                $password_cadastro1 = md5($password_cadastro1);
                $sql = "INSERT INTO users (users_userId, users_nome,";
                $sql .=" users_sobrenome, users_email, users_password)";
                $sql .=" VALUES (NULL, '$nome_cadastro', '$sobrenome_cadastro',";
                $sql .=" '$email_cadastro', '$password_cadastro1')";
                $conn->prepare($sql)->execute([$nome_cadastro, $sobrenome_cadastro, $email_cadastro, $password_cadastro1]);
                
                
                
                
                
            } else {
                
                
                

            }        
            
    }
}

?>