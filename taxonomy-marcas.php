<?php get_header(); ?>

<div class="container marcas-page-wrapper marcas-archive">
	<?php //get_template_part('template-parts/marcas'); ?>
	<?php
		if ( is_tax() ) $cat = get_queried_object()->term_id;
		$cato=get_term($cat,'marcas',ARRAY_A); ?>
	<div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg my-3">
      <div class="col-lg-2 p-3 p-lg-5 pt-lg-3 shadow-lg">
        <?php $logo=get_field('logo','marcas_'.$cat);?>
		<img class="w-100" src="<?php echo $logo['sizes']['thumbnail'];?>">
      </div>
      <div class="col-lg-9 offset-lg-1 p-0 overflow-hidden">
          <h3><?php echo $cato['name'];?></h3>
		  <p><?php the_field('descripcion','marcas_'.$cat);?></p>
      </div>
    </div>	
	<div class="row"><?php
		
		$the_query = new WP_Query( array(
			'post_type' => 'autos',
			'tax_query' => array(
				array (
					'taxonomy' => 'marcas',
					'field' => 'ID',
					'terms' => $cat,
				)
			),
		) );

		while ( $the_query->have_posts() ) :
			$the_query->the_post();
			$repeater = get_field('galeria')[0]['item_galeria']['sizes'];?>
			<div class="col-3">
				<div class="card bg-gray">
					<img src="<?php echo $repeater['autos-small'];?>" class="w-100">
					<div class="card-title">
						<div class="car-title"><?php the_title();?></div>
						<div class="car-price">$ 450,000.00</div>
					</div>
				</div>
			</div><?php
		endwhile;
		wp_reset_postdata();?>
		
		<div class="col-3">
			COLUMNA x2
		</div>
		<div class="col-3">
			COLUMNA x3
		</div>
		<div class="col-3">
			COLUMNA x4
		</div>
	</div>
</div>

<?php get_footer(); ?>