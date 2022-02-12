<?php get_header();?>
	<!-- Page content-->
	<div class="container-fluid slider-inicio m-0 p-0">
		<div class="owl-carousel owl-theme indexslide"><?php
		 if( have_rows('slider','options') ):
			while( have_rows('slider','options') ) : the_row();
				$imagen = get_sub_field('imagen');?>
				<div class="item" style="background:url('<?php echo $imagen['url'];?>')">
				  <div class="slider-caption">
					<?php the_sub_field('cajatexto');?>
				  </div>
				</div><?php
			endwhile;
		 endif;?>
		</div>
	</div>
	<div class="patterns container-fluid p-0">
		<div class="row m-0 p-0">
			<div class="col-6 pat-black">
				<div class="patborder-r text-white">
					<span class="ln-1">¿ELIGE UN AUTO?</span>
					<span class="ln-2">Atraves de nuestro explorador 360°</span>
					<a class="btn btn-primary text-white mt-3">ELEGIR AUTO</a>
				</div>
			</div>
			<div class="col-6 pat-red">
				<div class="patborder-b text-white">
					<span class="ln-1">¿ELIGE UN AUTO?</span>
					<span class="ln-2">Atraves de nuestro explorador 360°</span>
					<a class="btn btn-secondary text-white mt-3">ELEGIR AUTO</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-gray2 m-0 p-3">
		<div class="container py-5">
			<div class="row py-5">
				<div class="col-5 position-relative">
					<div class="rayita elige">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/eligeunauto.png" class="w-100">
					</div>
					<p class="text-dark mt-5 p-3">Somos una empresa 100% mexicana y orgul losamente tapatía, dedicada a la asesoría en la compra y venta de autos seminuevos en I ínea. A través de nuestro portal podrás acceder a servicios automotrices integrales, ya sea en nuestra planta física o en tu casa u oficina.Confianza, seguridad y rapidez son los atributos que nos distinguen.<br>Acércate a nosotros y comprueba que vender o comprar un auto es más fácil y seguro con nuestra asesoría.</p>
					<a href="#" class="btn btn-primary mt-5 p-2">ESCRÍBENOS</a>
				</div>
				<div class="col-7">
					<div class="position-relative overflow-hidden h-100">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/auto2.jpg" class="auto2">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/auto3.jpg" class="auto3">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-pleca m-0 p-3">
		<div class="container py-5 bg-white">
			<div class="row">
				<h3 class="rayita w-100 text-center"><span class="text-primary">¿POR QUÉ <span class="text-secondary">ELEGIRNOS?</span></h3>
				<div class="col-4">
					<div class="card-index">
						<img src="assets/img/icono1.png"><br>
						<div class="card-title">
							CERTIFICACIÓN y GARANTÍA
						</div>
						<div class="card-content">
							<p>Nuestros autos cuentan con certificación y garantia LEGAL (de por vida) y MECÁNICA (30,60 y 90 días). Esto se logra mediante un minuscioso proceso de inspección que nos permite asegurar las condiciones de tu vehículo, tanto físicas como legales.</p>
						</div>
					</div>
					<div class="card-index">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icono1.png"><br>
						<div class="card-title">
							CERTIFICACIÓN y GARANTÍA
						</div>
						<div class="card-content">
							<p>Nuestros autos cuentan con certificación y garantia LEGAL (de por vida) y MECÁNICA (30,60 y 90 días). Esto se logra mediante un minuscioso proceso de inspección que nos permite asegurar las condiciones de tu vehículo, tanto físicas como legales.</p>
						</div>
					</div>
					<div class="card-index">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icono1.png"><br>
						<div class="card-title">
							CERTIFICACIÓN y GARANTÍA
						</div>
						<div class="card-content">
							<p>Nuestros autos cuentan con certificación y garantia LEGAL (de por vida) y MECÁNICA (30,60 y 90 días). Esto se logra mediante un minuscioso proceso de inspección que nos permite asegurar las condiciones de tu vehículo, tanto físicas como legales.</p>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card-index">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icono1.png"><br>
						<div class="card-title">
							CERTIFICACIÓN y GARANTÍA
						</div>
						<div class="card-content">
							<p>Nuestros autos cuentan con certificación y garantia LEGAL (de por vida) y MECÁNICA (30,60 y 90 días). Esto se logra mediante un minuscioso proceso de inspección que nos permite asegurar las condiciones de tu vehículo, tanto físicas como legales.</p>
						</div>
					</div>
					<div class="card-index">
						<img src="<?php echo get_stylesheet_directory_uri();?>/	assets/img/icono1.png"><br>
						<div class="card-title">
							CERTIFICACIÓN y GARANTÍA
						</div>
						<div class="card-content">
							<p>Nuestros autos cuentan con certificación y garantia LEGAL (de por vida) y MECÁNICA (30,60 y 90 días). Esto se logra mediante un minuscioso proceso de inspección que nos permite asegurar las condiciones de tu vehículo, tanto físicas como legales.</p>
						</div>
					</div>
					<div class="card-index">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icono1.png"><br>
						<div class="card-title">
							CERTIFICACIÓN y GARANTÍA
						</div>
						<div class="card-content">
							<p>Nuestros autos cuentan con certificación y garantia LEGAL (de por vida) y MECÁNICA (30,60 y 90 días). Esto se logra mediante un minuscioso proceso de inspección que nos permite asegurar las condiciones de tu vehículo, tanto físicas como legales.</p>
						</div>
					</div>
				</div>
				<div class="col-4">
					<div class="card-index">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icono1.png"><br>
						<div class="card-title">
							CERTIFICACIÓN y GARANTÍA
						</div>
						<div class="card-content">
							<p>Nuestros autos cuentan con certificación y garantia LEGAL (de por vida) y MECÁNICA (30,60 y 90 días). Esto se logra mediante un minuscioso proceso de inspección que nos permite asegurar las condiciones de tu vehículo, tanto físicas como legales.</p>
						</div>
					</div>
					<div class="card-index">
						<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/icono1.png"><br>
						<div class="card-title">
							CERTIFICACIÓN y GARANTÍA
						</div>
						<div class="card-content">
							<p>Nuestros autos cuentan con certificación y garantia LEGAL (de por vida) y MECÁNICA (30,60 y 90 días). Esto se logra mediante un minuscioso proceso de inspección que nos permite asegurar las condiciones de tu vehículo, tanto físicas como legales.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="escribenos" style="background:url('<?php echo get_stylesheet_directory_uri();?>/assets/img/entrega-auto.jpg')">
		<div class="cuadror-l">
		</div>
		<div class="escribenos-info">
			<div class="ln-1">¿Estas listo para comprar o vender un auto?</div>
			<div class="ln-2 mt-2">Contamos con un grupo de asesores que con gusto te guiaran en el proceso de compra o venta de tu auto.</div>
			<a href="#" class="btn btn-primary mt-5 p-2">ESCRÍBENOS</a>
		</div>
		<div class="cuadror-r">
		</div>
	</div>
<?php get_footer();?>