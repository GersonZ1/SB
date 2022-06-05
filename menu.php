<?php 
    include("conn.php"); 
    if (isset($_GET['menu'])) {
        $local_menu = $_GET['menu'];
    }else{
        $local_menu = 'home';
    }
    if (isset($_GET['local'])) {
        $local = $_GET['local'];
    }else{
        $local = 'home';
    }
?>
<div id="header" class="htc-header">
            <div class="htc__header__top bg__cat--1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <ul class="heaher__top__left">
                                <li>Av. Nome do lugar</li>
                                <li><a href="#"><i class="fa fa-phone"></i>(+258)  870000000/ (+258) 840000000</a></li>
                            </ul>
                        </div>
                         <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                            <div class="header__top__right">
                                <ul class="login-register">
                                    <li><a href="#"style="color:#fff">contact@e-ticket.com</a></li>
                                </ul>
                                <div class="heaher__top__btn">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 col-xs-7">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="images/logo.png" alt="imagem logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-6 col-xs-5">
                            <nav class="main__menu__nav  hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li><a href="index.php?menu=home">Página Inicial</a></li>
                                    <li><a href="index.php?menu=eventos">Eventos</a></li>
                                    <li><a href="index.php?menu=recargas">Recargas</a></li>
                                    <li><a href="index.php?menu=pagamentos">Pagamentos</a></li>
                                    <li><a href="index.php?menu=faq">FAQ</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="index.php">Página Inicial</a></li>
                                        <li><a href="#">Concertos</a></li>
                                        <li><a href="index.php">Lives</a></li>
                                        <li><a href="index.php">Teatro</a></li
                                        >
                                    </ul>
                                </nav>
                            </div> 
                        </div>
                        <div class="col-md-2 col-sm-6 hidden-xs">

                            <div class="htc__header__search">
                                <a href="user.php?local_menu=<?php echo $local_menu; ?>&local=<?php echo $local; ?>" style="position:absolute; display:block;right:13.8em;z-index:22; width:2em">
                                    <img src="images/icons8_click_&_collect_60px.png" style="position:relative; height:2em ">
                                </a>                      
                                <input type="text" placeholder="Pesquisar...">
                                <a href="#"><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </div>