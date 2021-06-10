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
						<div role="tabpanel" class="tab-pane active" id="home">
							<form id="login" action="login" method="post">
								<h1>Site Login</h1>
								<p class="status"></p>

      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend3">@</span>
        </div>
        <input type="text" class="form-control is-invalid" id="validationServerUsername" placeholder="Username" aria-describedby="inputGroupPrepend3" required name="username">
        <div class="invalid-feedback">
          Please choose a username.
        </div>
      </div>

								<label for="password">Password</label>
								<input id="password" type="password" name="password">
								<a class="lost" href="<?php echo wp_lostpassword_url(); ?>">Lost your password?</a>
								<input class="submit_button" type="submit" value="Login" name="submit">
								<a class="close" href="">(close)</a>
								<?php wp_nonce_field( 'ajax-login-nonce', 'security' ); ?>
							</form>
						
						</div>
						<div role="tabpanel" class="tab-pane" id="profile">Formulario de Inscripcion</div>
					</div>
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<?php wp_footer();?>
    </body>
</html>