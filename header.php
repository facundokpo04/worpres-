<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Traslados en Iguazu : Misiones : Excursiones en Cataratas : Turismo en Iguazu : Paga en Cuotas  </title>

        <!-- Bootstrap Core CSS -->
        <!-- jqueryLoading -  -->
        <!--        <link rel="stylesheet" href="assets/dist/css/bootstrap.min.css">
                 Theme CSS 
                <link href="assets/dist/css/freelancer.min.css" rel="stylesheet">
                <link href="assets/dist/css/half-slider.css" rel="stylesheet">
                 Custom CSS 
                <link rel="stylesheet" href="assets/dist/css/shop-homepage.css">
                 Custom CSS 
                <link rel="stylesheet" href="assets/dist/css/shop-item.css">
        
                 Custom Fonts 
        -->       
 
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <!--

         Date Picker 
        <link rel="stylesheet" href="assets/dist/datepicker/datepicker3.css">
        <link rel="stylesheet" href="assets/dist/datetimepicker/bootstrap-datetimepicker.min.css">

         sweetalert -  
        <link rel="stylesheet" href="assets/dist/css/sweetalert.css">-->
        <?php wp_head(); ?>	
    </head>

    <body <?php body_class(); ?> >

        <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
            <div class="container">

                <div class="navbar-header">






                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only"><?php _e('Toggle navigation', 'radon'); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                      <a class="navbar-brand"><img src="assets/uploads/imagenes/logo/logo.png" alt="Traslados Cataratas">
                    </a>
                </div>

                <!--                <a class="navbar-brand" href="#" style="margin-top:-15px;">
                                    <img alt="Traslados Cataratas" src="assets/uploads/imagenes/logo/logo.png" width="448" height="153" class="d-inline-block align-top pull-left" alt="">
                
                                </a>-->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <nav class="collapse navbar-collapse" role="navigation">
                    <?php
                    wp_nav_menu(array(
                        'menu' => 'Menu',
                        'theme_location' => 'primary',
                        'depth' => 2,
                        'container' => 'ul',
                        'container_class' => 'page-scroll',
                        'container_id' => 'bs-example-navbar-collapse-1',
                        'menu_class' => 'nav navbar-nav navbar-right'
                            )
                    );
                    ?>
             </nav>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <style>
            .navbar-brand {
                height: 100px;
                padding: 0px;
            }
            .navbar-brand>img {
                height: 100%;
                padding: 15px;
                width: auto;
            }

        </style>
        <!-- www.tutiempo.net - Ancho:477px - Alto:91px -->
     
        <!--
             Navigation 
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                     Brand and toggle get grouped for better mobile display 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Traslados Iguazu</a>
                    </div>
                     Collect the nav links, forms, and other content for toggling 
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="#">Sobre Nosotros</a>
                            </li>
                            <li>
                                <a href="#">Traslados</a>
                            </li>
                            <li>
                                <a href="#">Contacto</a>
                            </li>
                        </ul>
                    </div>
                     /.navbar-collapse 
                </div>
                 /.container 
            </nav>-->
