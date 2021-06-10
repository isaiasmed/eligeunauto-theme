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
	<div id="myModal" class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
		<div class="modal-content">
		  <div class="modal-body p-0">
			<div class="d-flex p-0">
				<div class="m-0 p-0">
					<?php $img=get_field('login_image','options'); $image=$img['url'];?>
					<img src="<?php echo $image;?>">
				</div>
				<div class="w-100 p-5">
					<!-- Tabs navs -->
					<ul class="nav nav-tabs d-flex login-modal" role="tablist">
						<li role="presentation" class="flex-fill text-center"><a class="d-block p-2 active" href="#home" aria-controls="home" role="tab" data-toggle="tab">INGRESAR</a></li>
						<li role="presentation" class="flex-fill text-center"><a class="d-block p-2" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">REGISTRASE</a></li>
					</ul>
					  <!-- Tab panes -->
					<div class="tab-content p-3">
						<div role="tabpanel" class="tab-pane active" id="home"><?php wp_login_form();?></div>
						<div role="tabpanel" class="tab-pane" id="profile">Formulario de Inscripcion</div>
					</div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
<?php get_footer();?>