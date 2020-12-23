<?php include "includes/header.php" ?>
<?php require "ClassAdmin/cadastroCliente.class.php" ?>
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include "includes/sidebar.php" ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include "includes/topbar.php" ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12 mb-4">

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Cadastro Novo Cliente: Dados Pessoais</h6>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="cliente_nome_completo">Nome Completo</label>
                                            <input class="form-control form-control-user" type="text"
                                                name="cliente_nome_completo" id="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="data_nascimento">Data de Nascimento</label>
                                            <input class="form-control form-control-user" type="date"
                                                name="cliente_data_nascimento" id="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="cliente_sexo">Sexo</label>
                                            <select class="form-control form-control-user" name="cliente_sexo">
                                                <option value="">Selecione o Genero...</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                                <option value="Alternativo">Alternativo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="cliente_endereco">Endereço</label>
                                            <input class="form-control form-control-user" type="text"
                                                name="cliente_endereco" id="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="cliente_bairro">Bairro</label>
                                            <input class="form-control form-control-user" type="text"
                                                name="cliente_bairro" id="">
                                        </div>
                                        <div class="col-sm-1">
                                            <label for="cliente_numero">Numero</label>
                                            <input class="form-control form-control-user" type="text"
                                                name="cliente_numero" id="">
                                        </div>
                                        <div class="col-sm-2">
                                            <label for="cliente_cep">CEP</label>
                                            <input class="form-control form-control-user" type="text" name="cliente_cep"
                                                id="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="cliente_cidade">Cidade</label>
                                            <input class="form-control form-control-user" type="text"
                                                name="cliente_cidade" id="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="cliente_estados-brasil">Estado</label>
                                            <select class="form-control form-control-user" name="cliente_estadosbrasil">
                                                <option value="AC">Acre</option>
                                                <option value="AL">Alagoas</option>
                                                <option value="AP">Amapá</option>
                                                <option value="AM">Amazonas</option>
                                                <option value="BA">Bahia</option>
                                                <option value="CE">Ceará</option>
                                                <option value="DF">Distrito Federal</option>
                                                <option value="ES">Espírito Santo</option>
                                                <option value="GO">Goiás</option>
                                                <option value="MA">Maranhão</option>
                                                <option value="MT">Mato Grosso</option>
                                                <option value="MS">Mato Grosso do Sul</option>
                                                <option value="MG">Minas Gerais</option>
                                                <option value="PA">Pará</option>
                                                <option value="PB">Paraíba</option>
                                                <option value="PR">Paraná</option>
                                                <option value="PE">Pernambuco</option>
                                                <option value="PI">Piauí</option>
                                                <option value="RJ">Rio de Janeiro</option>
                                                <option value="RN">Rio Grande do Norte</option>
                                                <option value="RS">Rio Grande do Sul</option>
                                                <option value="RO">Rondônia</option>
                                                <option value="RR">Roraima</option>
                                                <option value="SC">Santa Catarina</option>
                                                <option value="SP">São Paulo</option>
                                                <option value="SE">Sergipe</option>
                                                <option value="TO">Tocantins</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="cliente_contato">Telefone de Contato:</label>
                                            <input class="form-control form-control-user" type="text"
                                                name="cliente_contato" id="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="cliente_celular">Celular:</label>
                                            <input class="form-control form-control-user" type="text"
                                                name="cliente_celular" id="">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-3">
                                            <label for="cliente_profissao">Profissão:</label>
                                            <input class="form-control form-control-user" type="text"
                                                name="cliente_profissao" id="">
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="cliente_etnia">Etnia</label>
                                            <select class="form-control form-control-user" name="cliente_etnia">
                                                <option value="">Selecione a Etnia...</option>
                                                <option value="Branca">Branca</option>
                                                <option value="Preta">Preta</option>
                                                <option value="Amarela">Amarela</option>
                                                <option value="Parda">Parda</option>
                                                <option value="Indigena">Indígena</option>
                                                <option value="naoDeclarado">Sem Declaração</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="cliente_estado_civil">Estado Civil</label>
                                            <select class="form-control form-control-user" name="cliente_estado_civil">
                                                <option value="">Selecione o Estado Civil...</option>
                                                <option value="Solteiro(a)">Solteiro(a)</option>
                                                <option value="Casado(a)">Casado(a)</option>
                                                <option value="Divorciado(a)">Divorciado(a)</option>
                                                <option value="Amigado(a)">Amigado(a)</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col-sm-3">
                                            <label for="cliente_data_cadastro">Data do Cadastro</label>
                                            <input class="form-control form-control-user" type="text"
                                                name="cliente_data_cadastro" id=""
                                                value="">
                                        </div> -->
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6">
                                            <label for="liente_email">Endereço de E-mail</label>
                                            <input class="form-control form-control-user" type="text"
                                                name="cliente_email" id="">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="cliente_origemDeTrafego">Como Ficou Sabendo da Physio
                                                Stetic:</label>
                                            <select class="form-control form-control-user"
                                                name="cliente_origemDeTrafego">
                                                <option value="">...</option>
                                                <option value="Google">Google</option>
                                                <option value="FaceBook">FaceBook</option>
                                                <option value="Instagram">Instagram</option>
                                                <option value="Outdoor">Outdoor</option>
                                                <option value="Radio">Radio</option>
                                                <option value="Televisao">Televisão</option>
                                                <option value="FaixadaClinica">Faixada da Clinica</option>
                                                <option value="email">E-mail</option>
                                                <option value="IndicacaoAmigo">Indicação de Amigo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <button class="btn btn-primary btn-user btn-block col-sm-6 mx-auto"
                                            type="submit" name="submit">Cadastrar</button>
                                       
                                    </div>
                                    


                                </form>
                                 <?php 
                                       
                                    if(isset($_POST['submit'])){
                                        $cliente_nome_completo = addslashes($_POST['cliente_nome_completo']);
                                        $cliente_data_nascimento = addslashes($_POST['cliente_data_nascimento']);
                                        $cliente_sexo = addslashes($_POST['cliente_sexo']);
                                        $cliente_endereco = addslashes($_POST['cliente_endereco']);
                                        $cliente_bairro = addslashes($_POST['cliente_bairro']);
                                        $cliente_numero = addslashes($_POST['cliente_numero']);
                                        $cliente_cep = addslashes($_POST['cliente_cep']);
                                        $cliente_cidade = addslashes($_POST['cliente_cidade']);
                                        $cliente_estadosbrasil = addslashes($_POST['cliente_estadosbrasil']);
                                        $cliente_contato = addslashes($_POST['cliente_contato']);
                                        $cliente_celular = addslashes($_POST['cliente_celular']);
                                        $cliente_profissao = addslashes($_POST['cliente_profissao']);
                                        $cliente_etnia = addslashes($_POST['cliente_etnia']);
                                        $cliente_estado_civil = addslashes($_POST['cliente_estado_civil']);
                                        $cliente_data_cadastro = date('Y/m/d H:i:s' , time());
                                        $cliente_email = addslashes($_POST['cliente_email']);
                                        $cliente_origemTrafego = addslashes($_POST['cliente_origemDeTrafego']);

                                        //tratamento de dados aqui
                                        //\termino de tratamento de dados

                                        $cadastroCliente = new CadastroCliente();
                                        $cadastroCliente->cadastroNovoCliente($cliente_nome_completo, $cliente_data_nascimento, $cliente_sexo, $cliente_endereco, $cliente_bairro, $cliente_numero, $cliente_cep, $cliente_cidade, $cliente_estadosbrasil, $cliente_contato, $cliente_celular, $cliente_profissao, $cliente_etnia, $cliente_estado_civil, $cliente_data_cadastro, $cliente_email, $cliente_origemTrafego);
                                        
                                        
                                           echo "<script> alert('Cadastro Realizado');</script>";
                                        }
                                        
                                    ?>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php include "includes/footer.php" ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<?php include "includes/scrollToTopButton.php" ?>

<!-- Logout Modal-->
<?php include "includes/logoutModal.php" ?>

<?php include "includes/footer-script.php" ?>