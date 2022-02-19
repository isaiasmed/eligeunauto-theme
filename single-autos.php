<?php get_header();?>
<div class="container"><?php
	$galeria=get_field('galeria');?>
	<div class="row">
		<div class="col-7 pt-5 px-2">
			<?php
				$x=1;
				foreach($galeria as $it){
					$item=$it['item_galeria'];
					//echo '<pre>'.print_r($item,1).'</pre>';
					if($x==1){?>
						<div class="main-wrapper">
							<img class="xzoom w-100" id="main_image" src="<?php echo $item['sizes']['autos-medium']?>" xoriginal="<?php echo $item['url']?>">
						</div>
						<a href="<?php echo $item['url'];?>">
						  <img class="xzoom-gallery" width="23%" src="<?php echo $item['sizes']['thumbnail']?>" xpreview="<?php echo $item['sizes']['autos-medium']?>">
						</a><?php
					}else{?>
						<a href="<?php echo $item['url'];?>">
						  <img class="xzoom-gallery" width="23%" src="<?php echo $item['sizes']['thumbnail']?>" xpreview="<?php echo $item['sizes']['autos-medium']?>">
						</a><?php					
					}
					$x++;
				}?>
		
		</div>
		<div class="col-5 py-5 px-5">
			<div class="w-100 widget-auto">
				<div class="title line-auto row"><?php the_title();?><br><span class="w-100 precio">$ <?php echo number_format(get_field('precio'),2);?></span><br></div>
				<div class="line-auto row">Disponible</div>
				<div class="line-auto row">
					<div class="col-5">
						Año
					</div>
					<div class="col-7">
						2022
					</div>
				</div>
				<div class="line-auto row">
					<div class="col-5">
						Transmisión
					</div>
					<div class="col-7">
						2022
					</div>
				</div>
				<div class="line-auto row">
					<div class="col-5">
						Kilometraje
					</div>
					<div class="col-7">
						70,000
					</div>
				</div>
			</div>
			
			<div class="button-container">
				<button class="w-100 btn btn-primary text-white mt-3">¡QUIERO APARTARLO!</button>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid bg-gray p-5">
	<div class="container">
		
		TE PUEDE INTERESAR
		<div class="row"><?php
			$the_query = new WP_Query(
				array(
					'post_type' => 'autos'
				)
			);

			while ( $the_query->have_posts() ) :
				$the_query->the_post();
				$repeater = get_field('galeria')[0]['item_galeria']['sizes'];?>
				<div class="col-3">
					<div class="card bg-gray">
						<a href="<?php the_permalink();?>">
							<img src="<?php echo $repeater['autos-small'];?>" class="w-100">
							<div class="card-title">
								<div class="car-title"><?php the_title();?></div>
								<div class="car-price">$ 450,000.00</div>
							</div>
						</a>
					</div>
				</div><?php
			endwhile;
			wp_reset_postdata();?>
		</div>
	</div>
</div>
<?php get_footer();?>