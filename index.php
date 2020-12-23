<?php session_start(); ?>
<?php require "includes/db.php" ?>
<?php require "classesPackage/Usuario.class.php" ?>
<?php include "Functions/functions.php" ?>

<?php include "includes/header.php" ?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Bem Vindo!</h1>
                                </div>


                                <form class="user" action="" method="post">
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user"
                                            id="exampleInputEmail" aria-describedby="emailHelp"
                                            placeholder="Digite Seu E-mail de Login..." name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Digite Sua Senha" name="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck" name="lembrarme">
                                            <label class="custom-control-label" for="customCheck">Lembrar-me</label>
                                        </div>
                                    </div>
                                    <button name="login" class="btn btn-primary btn-user btn-block"
                                        type="submit">Login</button>
                                    <?php
                                    $errorMensager ="";
                                    if(isset($_POST['login'])){

                                        
                                        if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['password']) && !empty($_POST['password'])){

                                            //chamando a classe login

                                        $u = new Usuario();
                                        $email = addslashes($_POST['email']);
                                        $senha = addslashes($_POST['password']);
                                        $senha = md5($senha);

                                        if($u->login($email, $senha)== true){
                                            if(isset($_SESSION['users_userId'])){
                                                header("Location: admin/home.php");
                                            }else{
                                                $errorMensager="Seção não iniciada!";    
                                            }
                                        } else {
                                            $errorMensager="E-mail ou Senha esta incorreto.";
                                        }
                                        

                                        } else {
                                            $errorMensager="Campos E-mail e Senha devem ser preenchidos.";
                                            
                                        }
                                       

                                        

                                    } 

                                             
                                
                                        ?>
                                    <!-- <a href="index.php" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->
                                    <hr>
                                    <!-- <a href="index.php" class="btn btn-google btn-user btn-block">
                                        <i class="fab fa-google fa-fw"></i> Login com Google
                                    </a>
                                    <a href="index.php" class="btn btn-facebook btn-user btn-block">
                                        <i class="fab fa-facebook-f fa-fw"></i> Login com Facebook
                                    </a> -->
                                </form>
                                <div class="text-center">
                                    <a class="small" href="register.php">Crie Uma Conta de Acesso!</a>
                                </div>
                                <hr>
                                <!-- <div class="text-center">
                                    <a class="small" href="forgot-password.php">Esqueceu sua Senha?</a>
                                </div> -->
                                
                            </div>
                        </div>
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


?>