<?php include('dados.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>SB | Home</title>

    <!-- Bootstrap -->
    <link href="bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="bootstrap/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="bootstrap/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="bootstrap/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="bootstrap/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="bootstrap/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="bootstrap/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title">
                <span>
                  Standar Bank
                </span>
              </a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Geral</h3>
                <ul class="nav side-menu">
                  <li>
                    <a><i class="fa fa-bar-chart-o"></i>Conta Admin<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="estatisticas.php">Estatísticas</a></li>
                      <li><a href="alterar_registo.php">Alterar Registo</a></li>
                    </ul>
                  </li>
                 
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Sair" href="login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      
                      <?php echo $nomeCookied; ?>
                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="javascript:;">
                          <span>Definições</span>
                        </a>
                      <a class="dropdown-item"  href="login.php"><i class="fa fa-sign-out pull-right"></i>Sair</a>
                    </div>
                  </li>
  
                  <li role="presentation" class="nav-item dropdown open">
                    <a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">1</span>
                    </a>
                    <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                      <li class="nav-item">
                        <a class="dropdown-item">
                          <span>
                            <span>Gerson Zeca</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Mensagem do sistema
                          </span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <div class="text-center">
                          <a class="dropdown-item">
                            <strong>Ver todas as Mensagens</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
            <div class="x_panel">
                  <div class="x_title">
                    <h2>Estatisticas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <ul class="nav nav-tabs bar_tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="jan-tab" data-toggle="tab" href="#jan" role="tab" aria-controls="jan" aria-selected="true">Junho</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Julho</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Agosto</a>
                      </li> 
                      <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Setembro</a>
                      </li>
                    </ul>
                    <?php 
                        $Pega_usuario = "SELECT * FROM usuario";
                        $executa_pega_usuario = mysqli_query($mysqli,$Pega_usuario);
                        $conta_usuarios = mysqli_num_rows($executa_pega_usuario);
                        $assoc_pega_usuario=mysqli_fetch_assoc($executa_pega_usuario);
                    ?>
                    <div class="tab-content" id="myTabContent">
                      <div class="tab-pane fade show active" id="jan" role="tabpanel" aria-labelledby="jan-tab">
                        <!-- Dados estatisticos -->
                          <div class="row" style="display: inline-block;" >
                            <div class="tile_count">
                              <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-user"></i>Total de Contas</span>
                                <div class="count green"><?php echo $conta_usuarios ?></div>
                              </div>
                              <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-clock-o"></i>Contas Activas</span>
                                <div class="count green"><?php echo $conta_usuarios ?></div>
                              </div>
                              <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top"><i class="fa fa-clock-o"></i>Contas Inativas</span>
                                <div class="count red">1</div>
                              </div>
                              <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top">Depositos</span>
                                <div class="count">2,500</div>
                              </div>
                              <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top">Levantamentos</span>
                                <div class="count">4,567</div>
                              </div>
                              <div class="col-md-2 col-sm-4  tile_stats_count">
                                <span class="count_top">Outros</span>
                                <div class="count">2,315</div>
                              </div>
                               <div class="row">
                                 

                                </div>
                            </div>
                        </div>
                        <!-- fim dados estatisticos -->
                      </div>
                      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        
                      </div>
                      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                       
                      </div>
                    </div>
                  </div>
                </div>
          <!-- /top tiles -->

          
          <br />

         
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="bootstrap/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="bootstrap/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="bootstrap/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="bootstrap/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="bootstrap/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="bootstrap/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="bootstrap/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="bootstrap/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="bootstrap/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="bootstrap/vendors/Flot/jquery.flot.js"></script>
    <script src="bootstrap/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="bootstrap/vendors/Flot/jquery.flot.time.js"></script>
    <script src="bootstrap/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="bootstrap/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="bootstrap/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="bootstrap/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="bootstrap/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="bootstrap/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="bootstrap/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="bootstrap/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="bootstrap/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="bootstrap/vendors/moment/min/moment.min.js"></script>
    <script src="bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="bootstrap/build/js/custom.min.js"></script>
  
  </body>
</html>
