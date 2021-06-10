<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Elige Un Auto</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
		<?php wp_head();?>
    </head>
    <body>
		<div class="main-full">
		<div class="main-content">
		<nav class="navbar navbar-light bg-secondary d-flex">
		  <div class="nav-bar-phones d-flex justify-content-start"><span class="text-white mb-0"><i class="fab fa-whatsapp"></i> 33 1020 3040</span> <span class="text-white mb-0 ml-5"><i class="fas fa-phone-alt"></i> 33 1020 3040</span></div>
		  <div class="navbar-social d-flex mx-md-0 mx-auto">
			<a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
			<a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
			<a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
			<a href="#" class="text-white mx-2"><i class="fab fa-youtube"></i></a>
		  </div>
		</nav>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-white" id="menu-principal">
            <div class="container-fluid">
                <!--<a class="navbar-brand" href="<?php echo site_url();?>"><img class="w-100" src="<?php echo get_template_directory_uri();?>/assets/img/logo_eligeunauto.png"></a>-->
				<?php if ( function_exists( 'the_custom_logo' ) ) {
					the_custom_logo();
				}?>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto ml-auto">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Elige un auto</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Vender un auto</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Contacto</a></li>
                        <!--<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </div>
				<a id="btn-login" class="nav-link text-dark" aria-current="page" href="#"><i class="fas fa-user-circle"></i><?php if(is_user_logged_in()):?> <span class="spanuser ml-1"><?php $current_user = wp_get_current_user(); echo $current_user->user_nicename ; ?></span><?php  endif;?></a>
				<a class="nav-link text-dark" aria-current="page" href="#"><i class="fas fa-search"></i></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            </div>
        </nav>