		</div> <!--DEL MAIN-CONTENT-->
		<div class="footer bg-secondary p-2 container-fluid">
			<div class="w-100 p-3">
				<img class="mx-auto d-block" src="<?php eua();?>/assets/img/logo_eligeunauto2.png">
			</div>
			<div class="d-flex mt-2">
				<ul class="menu-footer d-flex">
					<li class="menui-f">
						<a href="#" class="text-white">Vende tu auto</a>
					</li>
					<li class="menui-f">
						<a href="#" class="text-white">Vende tu auto</a>
					</li>
					<li class="menui-f">
						<a href="#" class="text-white">Vende tu auto</a>
					</li>
					<li class="menui-f">
						<a href="#" class="text-white">Vende tu auto</a>
					</li>
					<li class="menui-f">
						<a href="#" class="text-white">Vende tu auto</a>
					</li>
					<li class="menui-f">
						<a href="#" class="text-white">Vende tu auto</a>
					</li>
					<li class="menui-f">
						<a href="#" class="text-white">Vende tu auto</a>
					</li>
					<li class="menui-f">
						<a href="#" class="text-white">Vende tu auto</a>
					</li>
					<li class="menui-f">
						<a href="#" class="text-white">Vende tu auto</a>
					</li>
					<li class="menui-f">
						<a href="#" class="text-white">Vende tu auto</a>
					</li>		
				</ul>
				<div class="navbar-social d-flex ml-auto">
					<a href="#" class="text-white mx-2"><i class="fab fa-facebook-f"></i></a>
					<a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
					<a href="#" class="text-white mx-2"><i class="fab fa-instagram"></i></a>
					<a href="#" class="text-white mx-2"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
			<div class="footer-bottom d-flex py-3 m-0 px-5">
				<div class="copy justify-content-start text-white">
					&copy; Copyright <?php echo date('Y');?> eligeunauto
				</div>
				<div class="credit ml-auto">
					<a href="#" class="text-white">by Meraki Web</a>
				</div>
			</div>
		</div>
	</div><!--DEL MAIN FULL-->
	
	<div id="login_modal" class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-lg modal-dialog-centered " role="document">
		<div class="modal-content">
		  <div class="modal-body p-0 modal-login">
			<div class="d-flex p-0">
				<div class="m-0 p-0">
					<?php $img=get_field('login_image','options'); $image=$img['url'];?>
					<img src="<?php echo $image;?>">
				</div>
				<div class="w-100 p-5 overflow-hidden"><?php
					if(!is_user_logged_in()):?>
					<!-- Tabs navs -->
					<ul class="nav nav-tabs d-flex login-modal" role="tablist">
						<li role="presentation" class="flex-fill text-center"><a class="d-block p-2 active" href="#home" aria-controls="home" role="tab" data-toggle="tab">INGRESAR</a></li>
						<li role="presentation" class="flex-fill text-center"><a class="d-block p-2" href="#profile" aria-controls="profile" role="tab" data-toggle="tab">REGISTRASE</a></li>
					</ul>
					  <!-- Tab panes -->
					<div class="tab-content p-3">
						<div role="tabpanel" class="tab-pane active" id="home">
							<form id="login" action="login" method="post">
								<p class="status"></p>
								<div class="input-group">
									<div class="input-group-prepend">
									  <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-user"></i></span>
									</div>
									<input type="text" class="form-control" id="username" placeholder="Correo Electrónico" aria-describedby="inputGroupPrepend" required >
									<div class="invalid-feedback">
									  Debes poner tu usuario.
									</div>
								</div>
								<div class="input-group mt-3">
									<div class="input-group-prepend">
									  <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-key"></i></span>
									</div>
									<input type="password" class="form-control" id="password" placeholder="Contraseña" aria-describedby="inputGroupPrepend" required >
									<div class="invalid-feedback">
									  Coloca tu contraseña.
									</div>
								</div>
								<?php echo do_shortcode('[miniorange_social_login shape="round" heading="Conectar con:" view="horizontal" theme="default" space="10" width="350" height="35" color="000000"]');?>
								<div class="input-group my-3">
									<button class="submit_button btn-secondary w-100 d-block btn p-2" type="submit">INGRESAR</button>
								</div>
								<a class="lost" href="#">¿Olvidaste tu contraseña?</a>
								<?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
							</form>
							<form id="forgot_password" class="ajax-auth p-1" style="display:none;" action="forgot_password" method="post">    
								<h5 class="p-2">Olvidaste tu contraseña?,enviaremos un mensaje a tu correo registrado.</h5>
								<p class="status"></p>  
								<?php wp_nonce_field('ajax-forgot-nonce', 'forgotsecurity'); ?>  
								<div class="input-group mt-3">
									<div class="input-group-prepend">
									  <span class="input-group-text" id="inputGroupPrepend3"><i class="fas fa-envelope"></i></span>
									</div>
									<input type="email" class="form-control" id="email" placeholder="Correo Electrónico" aria-describedby="inputGroupPrepend" required >
									<div class="invalid-feedback">
									  Coloca el correo electrónico registrado.
									</div>
								</div><div class="input-group my-3">
									<button class="submit_button btn-secondary w-100 d-block btn p-2" type="submit">RESTABLECER CONTRASEÑA</button>
								</div>
								<a class="cancellost" href="#">Cancelar</a>
							</form> 
						
						</div>
						<div role="tabpanel" class="tab-pane" id="profile">Formulario de Inscripcion</div>
					</div><?php
					else:?>
						<h5 class="mb-5">USUARIO: <?php $current_user = wp_get_current_user(); echo $current_user->user_email ?></h5>
						<div class="input-group mt-0">
							<a class="btn-primary w-100 d-block btn p-2" href="<?php echo site_url('cuenta-usuario');?>#venta"><i class="fas fa-car-side"></i> MIS AUTOS EN VENTA</a>
						</div>
						<div class="input-group mt-2">
							<a class="btn-primary w-100 d-block btn p-2" href="<?php echo site_url('cuenta-usuario');?>#venta"><i class="fas fa-car"></i> MIS AUTOS COMPRADOS</a>
						</div>
						<div class="input-group mt-2">
							<a class="btn-primary w-100 d-block btn p-2" href="<?php echo site_url('cuenta-usuario');?>#venta"><i class="fas fa-clipboard-check"></i> LISTA DESEOS</a>
						</div>
						<div class="input-group mt-4">
							<a class="btn-dark w-100 d-block btn p-2" href="<?php echo site_url('cuenta-usuario');?>#venta"><i class="far fa-id-badge"></i> MI PERFIL</a>
						</div>
						<div class="input-group my-2">
							<a class="btn-secondary w-100 d-block btn p-2" href="<?php echo wp_logout_url( site_url() );?>"><i class="fas fa-door-open"></i> CERRAR SESIÓN</a>
						</div><?php
					endif;?>
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<?php wp_footer();?>
    </body>
</html>