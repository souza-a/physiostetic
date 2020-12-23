<?php require "includes/db.php" ?>
<?php include "includes/header.php" ?>
<?php require "classesPackage/cadastro.class.php" ?>
<?php include "Functions/functions.php" ?>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crie Sua Conta!</h1>
                            </div>
                            <form class="user" method="post" action="">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Primeiro Nome" name="nome_cadastro">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Sobrenome" name="sobrenome_cadastro">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Endereço de E-mail" name="email_cadastro">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Senha" name="password_cadastro1">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleRepeatPassword" placeholder="Repetir Senha"
                                            name="password_cadastro2">
                                    </div>
                                </div>
                                <button name="registrar" type="submit"
                                    class="btn btn-primary btn-user btn-block">Registrar uma Conta</button>
                                <?php 
                                
                                    $errorMensager ="";
                                    $msn = "";
                                    if(isset($_POST['registrar'])){
                                    
                                    $nome_cadastro = addslashes($_POST['nome_cadastro']);
                                    $sobrenome_cadastro = addslashes($_POST['sobrenome_cadastro']);
                                    $email_cadastro = addslashes($_POST['email_cadastro']);
                                    $password_cadastro1 = addslashes($_POST['password_cadastro1']);
                                    $password_cadastro2 = addslashes($_POST['password_cadastro2']);

                                    if(isset($password_cadastro1) && !empty($password_cadastro1) && isset($password_cadastro2) && !empty($password_cadastro2)){
                                        if($password_cadastro1 == $password_cadastro2){
                                            $password_cadastro1 = md5($password_cadastro1);

                                            if(isset($nome_cadastro) && !empty($nome_cadastro) && isset($sobrenome_cadastro) && !empty($sobrenome_cadastro) && isset($email_cadastro) && !empty($email_cadastro)){
                                                
                                                
                                                
                                                $cadastro = new Cadastro();
                                                $result = $cadastro->cadastroUsuario($nome_cadastro, $sobrenome_cadastro, $email_cadastro,$password_cadastro1);
                                                if($result){
                                                    $msn = 'Cadastro realizado com sucesso!';
                                                } else {
                                                    $msn = "Usuario ja cadastrado";
                                                }
                                            }

                                        }
                                    } else { $errorMensager = "Todos os campos devem ser preenchidos!";}

                                    

                                    

                                } ?>
                                <hr>
                                <!-- <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Registrar com Google
                                </a>
                                <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Registrar com Facebook
                                </a> -->
                            </form>
                            <div class="text-center">
                                <a class="small" href="index.php">Ja tem uma conta? Faça o Login!</a>
                            </div>
                            <hr>
                            <!-- <div class="text-center">
                                <a class="small" href="forgot-password.php">Esqueceu a senha?</a>
                            </div> -->
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include "includes/footer.php" ?>
    <?php

if($errorMensager <> null){
    alerta($errorMensager);
}

if($msn <> null){
    alerta($msn);
}


?>