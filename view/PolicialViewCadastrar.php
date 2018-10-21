<?php
    include_once '../controller/PolicialController.php';
    include 'includes/header.html';
?>

  <style>

    img {
        width:150px;
        height:150px;      
        top:50%;
        left:50%;      
        margin-left:10px;      
    }
    .imagem{
      background-color:white;
      border-radius:100%;
      margin-top:10px;
      margin-left:30px;
      margin-right:30px;
    }
    i{
      position: absolute;  
    }

    .spanmenu{
      margin-left:30px;
    }

    .exit{ 
        width:20px;
        height:20px;  
        top:50%;
        left:50%;      
        margin-left:10px;
    }

    .btn-xs{
        padding:1px 5px;
        font-size:12px;
        line-height:1.5;
        border-radius:3px
    }

</style>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="index.html">SIGEP</a>

      

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <a class="navbar-brand mr-1" href="">Bem vindo(a), User!</a>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="exit">
              <i class="material-icons" >exit_to_app</i>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">            
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li>
          <div class="imagem">
          <img src="../img/sigeplogo.png">
          </div>                  
        </li>
        <li class="nav-item">
          <a class="nav-link" href="PrincipalView.php">
          <i class="material-icons">home</i>
            <span class="spanmenu">Principal</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="UnidadeView.php">
          <i class="material-icons">star</i>
            <span class="spanmenu">Unidades</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="SubunidadeView.php">
          <i class="material-icons">star_border</i>
            <span class="spanmenu">Subunidades</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="PolicialView.php">
          <i class="material-icons">person</i>
            <span class="spanmenu">Policiais</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ItemView.php">
          <i class="material-icons">storage</i>
            <span class="spanmenu">Itens</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="CautelaView.php">
          <i class="material-icons">attach_file</i>
            <span class="spanmenu">Cautelas</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="InspecaoView.php">
          <i class="material-icons">find_in_page</i>
            <span class="spanmenu">Inspeções</span>
          </a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="../view/PolicialView.php">Policiais</a>
            </li>
            <!--<li class="breadcrumb-item active">Tables</li>-->
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
            <i class="material-icons">grid_on</i>
              <span class="spanmenu">Policiais - Formulário de cadastro</span>
            </div>
            <div class="card-body">
              <!-- Form -->
              <div class="row">
                <div class="col-lg-5">                                        
                  <div class="form-group">
                    <label>Nome</label>
                    <input name="nome" class="form-control" placeholder="Nome completo do policial">
                  </div>                                        
                </div>
                <div class="col-lg-2">                                        
                  <div class="form-group">
                    <label>Patente</label>
                    <select name="patente" class="form-control">
                        <option></option>
                        <option>Soldado</option>
                        <option>Cabo</option>
                        <option>Sargento</option>
                        <option>Sargento</option>
                        <option>Sargento</option>
                        <option>Subtenente</option>
                        <option>Aspirante</option>
                        <option>Segundo-tenente</option>
                        <option>Primeiro-tenente</option>
                        <option>Capitão</option>
                        <option>Major</option>
                        <option>Tenente-coronel</option>
                        <option>Coronel</option>
                    </select>
                  </div>                                        
                </div>
                  <div class="col-lg-3">                                        
                    <div class="form-group">
                      <label>Nome Funcional</label>
                      <input name="nome_funcional" class="form-control" placeholder="Nome de guerra">
                    </div>                                        
                  </div>
                  <div class="col-lg-2">                                        
                    <div class="form-group">
                      <label>Matrícula</label>
                      <input name="matricula" class="form-control" placeholder="Ex.: 123456-0">
                    </div>                                        
                  </div>
                </div>
                                    <div class="row">
                                      <div class="col-lg-4">                                        
                                        <div class="form-group">
                                          <label>E-mail</label>
                                          <input name="email" class="form-control" placeholder="Ex.: email@exemplo.com">
                                        </div>                                        
                                      </div>
                                      <div class="col-lg-4" >                                        
                                        <div class="form-group" align="center">
                                          <label>Situação</label>
                                          <div class="radio">
                                            <label class="radio-inline">
                                              <input type="radio" name="situacao" id="optionsRadiosInline1" value="Apto">Operacional
                                            </label>
                                            <label class="radio-inline">
                                              <input type="radio" name="situacao" id="optionsRadiosInline2" value="Junta psiquiátrica">Junta psiquiátrica
                                            </label>
                                          </div>
                                        </div>                                        
                                      </div>
                                      <div class="col-lg-4">                                        
                                        <div class="form-group">
                                          <label>Lotação</label>
                                            <select name="subunidade" class="form-control">
                                              <option></option>
                                              <option>1CIA/SEDE</option>
                                              <option>2CIA/JSERIDO</option>
                                              <option>3CIA/JUCURUTU</option>
                                              <option>3CIPM</option>
                                              <option>5CIPM</option>
                                              <option>3DPRE</option>
                                              <option>2EPMON</option>
                                              <option>DPM/CRUZETA</option>
                                              <option>DPM/IPUEIRA</option>
                                              <option>DPM/OUROB</option>
                                              <option>DPM/SJSERIDO</option>
                                              <option>DPM/SJSABUGI</option>
                                              <option>DPM/TIMBAUBA</option>
                                              <option>DPM/SFERNAND</option>
                                              <option>DPM/FLORANIA</option>
                                              <option>DPM/SMATOS</option>
                                              <option>DPM/TENLAURE</option>                                                    </select>
                                        </div>                                        
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-lg-12">
                                        <input type="submit" name="cadastrar" value="Cadastrar" class="btn btn-success">
                                      </div>
                                    </div>
            </div>
          </div>
        </div>
        <br>

        
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <?php
          include 'includes/footer.html';
        ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Deseja realmente sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <?php
            include 'includes/logaout_in_navbar.html';
          ?>
        </div>
      </div>
    </div>

    <?php
      include 'includes/script.html';
    ?>

  </body>

</html>
