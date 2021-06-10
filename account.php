<div class="container pt-5">
	<div class="row">
		<div class="col-3 p-5">
			<img class="w-100" src="<?php echo get_template_directory_uri();?>/assets/img/profile.jpg"><br>
			<?php if(is_user_logged_in()): $current_user = wp_get_current_user();?> <span class="text-center w-100 ml-1"><?php  echo $current_user->user_nicename ; ?></span> <span class="text-center w-100 ml-1"><?php  echo $current_user->user_email ; ?></span><?php  endif;?>
		</div>
		<div class="col-9 pl-3">
			<ul class="nav nav-tabs d-flex login-modal" role="tablist" id="tabs-cuenta">
				<li role="presentation" class="flex-fill text-center mx-3"><a class="d-block p-2 active" href="#home" aria-controls="home" role="tab" data-toggle="tab">MIS AUTOS COMPRADOS</a></li>
				<li role="presentation" class="flex-fill text-center mx-3"><a class="d-block p-2" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">MIS AUTOS EN VENTA</a></li>
				<li role="presentation" class="flex-fill text-center mx-3"><a class="d-block p-2" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">MI LISTA DE DESEOS</a></li>
				<li role="presentation" class="flex-fill text-center mx-3"><a class="d-block p-2" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">CONFIGURAR CUENTA</a></li>
			</ul>
			  <!-- Tab panes -->
			<div class="tab-content p-3">
				<div role="tabpanel" class="tab-pane active" id="home">
				</div>
			</div>
		</div>
	</div>
</div>