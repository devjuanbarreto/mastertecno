<!DOCTYPE html>
<html lang="es">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>MasterTecno | Productos y servicios</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">
<!-- site icons -->
<link rel="icon" href="images/fevicon/fevicon.png" type="image/gif" />
<!-- bootstrap css -->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<!-- Site css -->
<link rel="stylesheet" href="css/style.css" />
<!-- responsive css -->
<link rel="stylesheet" href="css/responsive.css" />
<!-- colors css -->
<link rel="stylesheet" href="css/colors1.css" />
<!-- custom css -->
<link rel="stylesheet" href="css/custom.css" />
<!-- wow Animation css -->
<link rel="stylesheet" href="css/animate.css" />
<style type="text/css" media="screen">
  .fa-whatsapp {
  font-size: 20px;
}
</style>

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>
<body id="default_theme" class="it_service about">
<!-- loader -->
<div class="bg_load"> <img class="loader_animation" src="images/loaders/loader_1.png" alt="#" /> </div>
<!-- end loader -->
<!-- header -->
<header id="default_header" class="header_style_1">
  <!-- header top -->
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="full">
            <div class="topbar-left">
              <ul class="list-inline">
                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight"> Guarambaré - Gral. Elizardo Aquino esq. Tte. Leandro Pineda, N° 223</span> </li>
                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:info@yourdomain.com">info@mastertecno.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4 right_section_header_top">
          <div class="float-left">
            <div class="social_icon">
              <ul class="list-inline">
                 <li class="social-icon wp"><a href="https://api.whatsapp.com/send?phone=+595981234567" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
              </ul>
            </div>
          </div>
          <div class="float-right">
            <div class="make_appo"> <a class="btn white_btn" href="it_contact.html">Envía un mensaje</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
   <!-- header bottom -->
  <div class="header_bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
          <!-- logo start -->
          <div class="logo"> <a href="index.php"><img src="images/logos/logo_mastertecno.png" alt="logo" /></a> </div>
          <!-- logo end -->
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
          <!-- menu start -->
          <div class="menu_side">
            <div id="navbar_menu">
              <ul class="first-ul">
                <li> 
                  <a href="index.php">Inicio</a>
                </li>
                <li> <a>Menú</a>
                  <ul>
                    <li> <a href="login.html">Login</a></li>
                    <li> <a href="it_mission_vision.html">Misión y Visión</a></li>
                    <li> <a href="it_organization.html">Organigrama</a></li>
                    <li> <a href="it_site_map.html">Mapa del Sitio</a></li>
                  </ul>
                </li>
                <li> <a class="active">Productos y Servicios</a></li>
                <li> <a href="it_contact.html">Contáctenos</a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->
<!-- inner page banner -->
<div id="inner_banner" class="section inner_banner_section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full">
          <div class="title-holder">
            <div class="title-holder-cell text-left">
              <h1 class="page-title">Productos y Servicios</h1>
              <ol class="breadcrumb">
                <li><a href="index.php">Inicio</a></li>
                <li class="active">Productos y Servicios</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end inner page banner -->
<!-- section -->
<div class="section padding_layout_1">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="full padding_layout_1" style="padding-top: 0px !important;">
          <div class="main_heading text_align_center">
            <h2>Productos</h2>
          </div>
          <div class="container">
            
          <div class="row">
            
          <?php

            $inc=include ("php/conex.php");
            if($inc){
              $consulta = "SELECT * FROM productos";
              $resultado = mysqli_query($conex, $consulta);
              if($resultado){
                while($row = $resultado->fetch_array()){
                  $nombre = $row['nombre'];
                  $precio = $row['precio'];
                  $id = $row['id'];
                  ?>

                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all">
                    <div class="product_list">
                      <div class="product_img"> <img class="img-responsive" src="image_product.php?id=<?php echo $id?>" alt=""> </div>
                      <div class="product_detail_btm">
                        <div class="center">
                          <h4><a><?php echo $nombre ?></a></h4>
                        </div>
                        <div class="product_price">
                          <p><span class="new_price"><?php echo number_format($precio,0,',','.') ?> Gs.</span></p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <?php
                }
              }
            }

          ?>
          </div>
          </div>
                
        </div>
      </div>
    </div>
        <div class="full padding_layout_1" style="padding-top: 0px !important;  ">
          <div class="main_heading text_align_center">
            <h2 id="servicios" >Servicios</h2>
          </div>
          <div class="row">
            <div class="col-md-8"></div>
            <div class="col-md-6">
              <!-- section -->
              <div class="section">
                <div class="container">
                  <div class="row">
                    <?php
                      $inc=include ("php/conex.php");
                      if($inc){
                        $consulta = "SELECT * FROM servicios";
                        $resultado = mysqli_query($conex, $consulta);
                        if($resultado){
                          while($row = $resultado->fetch_array()){
                            $nombre = $row['nombre'];
                            $descripcion = $row['descripcion'];
                            $id = $row['id'];
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                              <div class="full text_align_center margin_bottom_30">
                                <div class="center">
                                  <div class="icon"> <img src="image_service.php?id=<?php echo $id ?>" alt="#" /> </div>
                                </div>
                                <h4 class="theme_color"><?php echo $nombre ?></h4>
                                <p><?php echo $descripcion ?></p>
                              </div>
                            </div>
                            <?php
                          }
                        }
                      }
                    ?>                    
                  </div>
                </div>
              </div>
              <!-- end section -->
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>
<!-- end section -->

<!-- Modal -->
<div class="modal fade" id="search_bar" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><i class="fa fa-close"></i></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1">
            <div class="navbar-search">
              <form action="#" method="get" id="search-global-form" class="search-global">
                <input type="text" placeholder="Type to search" autocomplete="off" name="s" id="search" value="" class="search-global__input">
                <button class="search-global__btn"><i class="fa fa-search"></i></button>
                <div class="search-global__note">Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
<footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="footer_blog col-md-12">
        <div class="row">
          <div class="col-md-3">
            <div class="main-heading left_text">
              <h2>Productos</h2>
            </div>
            <p>Todos nuestros productos son proveidos por distribuidores autorizados, al igual que los programas y herramientas, todos cuentan con los más altos estandares de calidad.</p>
          </div>
          <div class="col-md-3">
            <div class="main-heading left_text">
              <h2>Información adicional</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Contáctenos</a></li>
              <li><a href="it_mission_vision.html"><i class="fa fa-angle-right"></i> Misión y Visión</a></li>
              <li><a href="it_organization.html"><i class="fa fa-angle-right"></i> Organigrama</a></li>
              <li><a href="it_site_map.html"><i class="fa fa-angle-right"></i> Mapa del sitio</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <div class="main-heading left_text">
              <h2>Servicios</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_shop.php#servicios"><i class="fa fa-angle-right"></i> Recuperación de datos</a></li>
              <li><a href="it_shop.php#servicios"><i class="fa fa-angle-right"></i> Reparación de computadoras</a></li>
              <li><a href="it_shop.php#servicios"><i class="fa fa-angle-right"></i> Servicio para celulares</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <div class="main-heading left_text">
              <h2>Contáctenos</h2>
            </div>
            <p> Gral. Elizardo Aquino esq. Tte. Leandro Pineda, N° 223, Guarambaré<br>
              <span style="font-size:18px;">
                <a href="https://api.whatsapp.com/send?phone=+595981234567" target="_blank"><i class="fa fa-whatsapp"></i> Whatsapp: +595981234567</a></span></p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 justify-content-center">
            <ul class="social_icons">
              <li class="social-icon wp"><a href="https://api.whatsapp.com/send?phone=+595981234567" target="_blank"><i class="fa fa-whatsapp"></i></a></li>
                <li><a class="fa fa-facebook" href="https://www.facebook.com/" title="Facebook" target="_blank"></a></li>
                <li><a class="fa fa-google-plus" href="https://plus.google.com/" title="Google+" target="_blank"></a></li>
                <li><a class="fa fa-twitter" href="https://twitter.com" title="Twitter" target="_blank"></a></li>
                <li><a class="fa fa-linkedin" href="https://www.linkedin.com" title="LinkedIn" target="_blank"></a></li>
                <li><a class="fa fa-instagram" href="https://www.instagram.com" title="Instagram" target="_blank"></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="cprt">
        <p>MasterTecno © Copyrights 2020 Design by Covi Team</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- js section -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- menu js -->
<script src="js/menumaker.js"></script>
<!-- wow animation -->
<script src="js/wow.js"></script>
<!-- custom js -->
<script src="js/custom.js"></script>
</body>
</html>