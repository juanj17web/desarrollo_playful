<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Te acercamos a la transformación digital de tu empresa | Playful</title>
	<meta name="description" content="Somos una agencia de marketing digital que te acompaña a impulsar tu negocio hacia la transformación digital. ¡Descúbrenos!" />
	<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />
	<link rel="canonical" href="https://playfulagency.com/" />
	<meta property="og:locale" content="es_ES" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Te acercamos a la transformación digital de tu empresa | Playful" />
	<meta property="og:description" content="Somos una agencia de marketing digital que te acompaña a impulsar tu negocio hacia la transformación digital. ¡Descúbrenos!" />
	<meta property="og:url" content="https://playfulagency.com/" />
	<meta property="og:site_name" content="Playful Agency" />
	<meta property="article:modified_time" content="2020-09-17T16:47:14+00:00" />
	<meta name="twitter:card" content="summary_large_image" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');?>/style.css">

    <style>
        a {
            color: #fff;
            text-decoration: none;
        }
        .subscribir {
            background: url("<?php echo bloginfo('template_url');?>/images/bg.jpg");
            background-size: cover;
            background-position: center;
            height: 400px;
        }
    </style>

    
</head>

<body>
    <!-- Navbar -->
    <div class="container-fluid bg-primary">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary container">
            <a class="navbar-brand" href="#">
                <img src="<?php echo bloginfo('template_url');?>/images/logo-blanco.svg" width="150" height="40" class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <?php wp_nav_menu(array(
                'theme_location' => 'menu_superior',
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'navbarSupportedContent',
                'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
                'menu_class' => 'nav-item'
            ) );?>


        </nav>
    </div>
    <!-- Fin Navbar -->

    <!-- Subscribir -->
    <div class="container-fluid subscribir d-flex flex-column justify-content-center align-items-center">
        <div class="text-center text-white">
            <h1 class="display-6">SOMOS EL PRIMER PASO A LA TRANSFORMACIÓN</h1>
            <h1 class="display-6">DIGITAL DE TU NEGOCIO</h1>
            <h4>Te acompañamos a aumentar la visibilidad de tu negocio en esta era digital</h4>
            <form action="" class="form-inline flex-column justify-content-center flex-sm-row">
                <div class="form-group mr-sm-3">
                    <input type="text" placeholder="Nombre" class="form-control">
                </div>
                <div class="form-group mr-sm-3">
                    <input type="text" placeholder="Email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Enviar">
                </div>
            </form>
        </div>
    </div>
    <!-- Fin Subscribir -->