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
	  <div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		  <div class="modal-body">
			<div class="row p-0">
				<div class="col-3">
					FOTO
				</div>
				<div class="col-9">
					FORMULARIO INICIO
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
<?php get_footer();?>