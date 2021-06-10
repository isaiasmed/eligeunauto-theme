<?php get_header();?>
<?php if(is_page('cuenta-usuario')):
	get_template_part( 'account' );
else:
	the_content();
endif;?>
<?php get_footer();?>