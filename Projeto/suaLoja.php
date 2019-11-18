<?php
session_start();
include('./php/checkSession.php');
include('./php/connection.php');
include('./php/checkStoreId.php');
include('./php/querySuaLoja.php');
include('./php/checkStoreName.php');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Consus</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" media="screen" href="./css/modal.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="far fa-money-bill-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Consus</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0" />

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Principal</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider" />

      <!-- Heading -->
      <div class="sidebar-heading">
        Inadimplência
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="devedores.php">
          <i class="fas fa-search"></i>
          <span>Consultar</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="cadastrar.php">
          <i class="fas fa-user-plus"></i>
          <span>Cadastrar</span></a>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->

      <!-- Nav Item - Utilities Collapse Menu -->

      <!-- Divider -->
      <hr class="sidebar-divider" />

      <!-- Heading -->
      <div class="sidebar-heading">
        Sua Loja
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link" href="suaLoja.php">
          <i class="fas fa-database"></i>
          <span>Inadimplentes</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="config.php">
          <i class="fas fa-cogs"></i>
          <span>Configurações</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="./php/doLogout.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Sair</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block" />

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $storeName; ?></span>
                <i class="fas fa-angle-down"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="suaLoja.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sua Loja
                </a>
                <a class="dropdown-item" href="config.php">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Configurações
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="./php/doLogout.php">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Sair
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Inadimplentes</h1>
          <p class="mb-4">Inadimplentes em seu sistema serão mostrados na tabela abaixo.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Inadimplencias</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nome</th>
                      <th>Local da Inadimplência</th>
                      <th>Obeservação</th>
                      <th>Valor</th>
                      <th>Deletar</th>
                      <th>Editar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($dadoSuaLoja = mysqli_fetch_assoc($dadosSuaLoja)) { ?>
                      <tr class = "table@J">
                        <td><?php echo $dadoSuaLoja["debt_id"];
                            $id = $dadoSuaLoja["debt_id"]; ?></td>
                        <td class = "break"><?php echo $dadoSuaLoja["debtor_name"];  ?></td>
                        <td><?php echo $dadoSuaLoja["store_social_name"]; ?></td>
                        <td class = "brek"><?php echo $dadoSuaLoja["debt_observation"]; ?></td>
                        <td>R$<?php echo $dadoSuaLoja["debt_value"]; ?></td>
                        <td>
                          <a href="#" class="btn btn-danger btn-circle btn-sm dButton" name="deleteButton" id="<?php echo $dadoSuaLoja["debt_id"];  ?>">
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                        <td>
                          <a href="#" class="btn btn-primary btn-circle btn-sm eButton" name="editButton" id="<?php echo $dadoSuaLoja["debt_id"];  ?>">
                            <i class="fas fa-pencil-alt"></i>
                          </a>
                        </td>
                      </tr>
                    <?php } ?>
                  </tbody>

                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nome</th>
                      <th>Local da Inadimplência</th>
                      <th>Obeservação</th>
                      <th>Valor</th>
                      <th>Deletar</th>
                      <th>Editar</th>
                    </tr>
                  </tfoot>
                  <tbody id="popular">
                  </tbody>
                </table>
              </div>
              <div>

              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Consus 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  <div id="modal-inadimplencia" class="modal-container">
    <div class="modal">
      <form action="./php/updateQuery.php" method="POST">
        <fieldset>
          <legend><span class="number">1</span>Dados Cadastrais</legend>
          <input type="text" id="modalNome" name="modalNome" placeholder="Nome" readonly />
          <input type="text" id="modalCpf" name="modalCpf" placeholder="CPF" readonly />
          <input type="text" id="modalRG" name="modalRG" placeholder="RG" readonly />
          <input type="text" id="modalValor" name="modalValor" placeholder="Valor da dívida" />
          <legend><span class="number">2</span>Observação</legend>
          <textarea name="modalObs" id="modalObs" placeholder="Informações adicionais" rows="3" cols="30"></textarea>
          <div class="buttonContainer">
            <input class="confirmar" type="submit" value="Confirmar" />
            <button type="button" id="form-fechar">
              Cancelar
            </button>
          </div>
        </fieldset>
      </form>
    </div>
  </div>

  <script src="./js/modal.js"></script>

</body>

</html>

<script>
  $(document).ready(function() {
    $('.eButton').click(function() {
      var id = this.id
      console.log(id);

      if (id != "") {
        //se o campo for diferente de vazio
        $.ajax({
          url: "./php/updateInadimp.php", //chama o documento .php, envia o valor da id com método post
          method: "POST", //utilizando o ajax e retornando em um formato JSON
          data: {
            id: id
          },
          dataType: "JSON",
          success: function(data) {
            if (!jQuery.isEmptyObject(data)) {
              //se o json retornado for diferente de vazio
              for (i in data) {
                $valor = parseFloat(data[i].valor).toFixed(2);
                $('#modalNome').val(data[i].nome);
                $('#modalCpf').val(data[i].cpf);
                $('#modalRG').val(data[i].rg);
                $('#modalValor').val($valor);
                $('#modalObs').val(data[i].obs);
              }
            } else {

            }
          }
        });
      } else {

      }
      inicialModal('modal-inadimplencia');
      $('#modalNome').val('');
      $('#modalCpf').val('');
      $('#modalRG').val('');
      $('#modalValor').val('');
      $('#modalObs').val('');
    });
  });

  $(document).ready(function() {
    $('.dButton').click(function() {
      var r = confirm("Deseja remover?");
      if (r == true) {
        var id = this.id //Recebe o valor da pesquisa
        if (id != '') { //se o campo for diferente de vazio
          $.ajax({
            url: "./php/deleteInadimp.php", //chama o documento .php, envia o valor da id com método post
            method: "POST", //utilizando o ajax e retornando em um formato JSON
            data: {
              id: id
            },
            dataType: "JSON",
            success: function(data) {
              location.reload(true)
            }
          })
        }
      }
    });
  });
</script>