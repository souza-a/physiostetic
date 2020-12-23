<?php include "includes/header.php" ?>

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
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome Completo</th>
                                            <th>Telefone de Contado</th>
                                            <th>Celular</th>
                                            <th>E-mail</th>
                                            <th>Data de Cadastro</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nome Completo</th>
                                            <th>Telefone de Contado</th>
                                            <th>Celular</th>
                                            <th>E-mail</th>
                                            <th>Data de Cadastro</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php
                                        $sql = "SELECT * FROM cliente_dados_pessoais ORDER BY cliente_id ";
                        
                                        $stmt = $conn->prepare($sql);
                                        if(!$stmt->execute()){
                                            echo "<pre> erro: ";
                                            print_r($stmt->errorInfo());
                                            exit;
                                        }
                                         while ($result = $stmt->fetch(PDO::FETCH_ASSOC)){
                            
                                        $cliente_id = $result["cliente_id"];
                                        $cliente_nomeCompleto = $result["cliente_nomeCompleto"];
                                        $cliente_tel = $result["cliente_tel"];                         
                                        $cliente_cel = $result["cliente_cel"];                         
                                        $cliente_email = $result["cliente_email"];                         
                                        $cliente_dataCadastro = $result["cliente_dataCadastro"];                         
                            

                                        
                                        echo "<tr>";
                                        echo "<td>$cliente_id</td>";
                                        echo "<td>$cliente_nomeCompleto</td>";
                                        echo "<td>$cliente_tel</td>";
                                        echo "<td>$cliente_cel</td>";
                                        echo "<td>$cliente_email</td>";
                                        echo "<td>$cliente_dataCadastro</td>";
                                        echo "</tr>";
                                        };
                                        ?>
                                    </tbody>
                                </table>
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