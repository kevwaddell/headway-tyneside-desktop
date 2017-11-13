<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/
?>
<div class="tml tml-login" id="theme-my-login<?php $template->the_instance(); ?>">
	<?php $template->the_action_template_message( 'login' ); ?>
	<?php $template->the_errors(); ?>
	<form name="loginform" id="loginform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'login', 'login_post' ); ?>" method="post">
		<div class="tml-user-login-wrap form-group">
			<label for="user_login<?php $template->the_instance(); ?>"><?php
				if ( 'username' == $theme_my_login->get_option( 'login_type' ) ) {
					_e( 'Username', 'theme-my-login' );
				} elseif ( 'email' == $theme_my_login->get_option( 'login_type' ) ) {
					_e( 'E-mail', 'theme-my-login' );
				} else {
					_e( 'Username or E-mail', 'theme-my-login' );
				}
			?></label>
			<input type="text" name="log" id="user_login<?php $template->the_instance(); ?>" class="input form-control" value="<?php $template->the_posted_value( 'log' ); ?>" size="20" />
		</div>

		<div class="tml-user-pass-wrap form-group">
			<label for="user_pass<?php $template->the_instance(); ?>"><?php _e( 'Password', 'theme-my-login' ); ?></label>
			<input type="password" name="pwd" id="user_pass<?php $template->the_instance(); ?>" class="input form-control" value="" size="20" autocomplete="off" />
		</div>

		<?php do_action( 'login_form' ); ?>

		<div class="tml-rememberme-submit-wrap">
			<div class="tml-rememberme-wrap">
				<input name="rememberme" type="checkbox" id="rememberme<?php $template->the_instance(); ?>" value="forever" />
				<label for="rememberme<?php $template->the_instance(); ?>"><?php esc_attr_e( 'Remember Me', 'theme-my-login' ); ?></label>
			</div>

			<div class="tml-submit-wrap form-group">
				<button type="submit" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" class="btn btn-default btn-block btn-lg"><?php esc_attr_e( 'Log In', 'theme-my-login' ); ?></button>
				<input type="hidden" name="redirect_to" value="<?php $template->the_redirect_url( 'login' ); ?>" />
				<input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
				<input type="hidden" name="action" value="login" />
			</div>
		</div>
	</form>
	<?php $template->the_action_links( array( 'login' => false ) ); ?>
</div>
