<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/user-registration/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion UserRegistration will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.wpuserregistration.com/docs/how-to-edit-user-registration-template-files-such-as-login-form/
 * @package UserRegistration/Templates
 * @version 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

ur_print_notices(); ?>

<div class="ur-frontend-form login" id="ur-frontend-form">
	<form method="post" class="user-registration-ResetPassword ur_lost_reset_password">
		<div class="ur-form-row">
			<div class="ur-form-grid">
				<p>
				<?php
				echo esc_html(
					/**
					 * Filter to modify the user registration lost password message.
					 *
					 * @param string message content to override the lost password message.
					 * @return string message content for lost password.
					 */
					apply_filters( 'user_registration_lost_password_message', esc_html__( 'Quên mật khẩu? Vui lòng nhập tên đăng nhập hoặc email. Bạn sẽ nhận được link đặt lại mật khẩu tại địa chỉ email đã đăng ký', 'user-registration' ) )
				);
				?>
					</p>

				<p class="user-registration-form-row user-registration-form-row--first form-row form-row-first">
					<label for="user_login"><?php esc_html_e( 'Tên đăng nhập hoặc email', 'user-registration' ); ?></label>
					<input class="user-registration-Input user-registration-Input--text input-text" type="text" name="user_login" id="user_login" />
				</p>

				<div class="clear"></div>

				<?php
				if ( ! empty( $recaptcha_node ) ) {
					echo '<div id="ur-recaptcha-node"> ' . $recaptcha_node . '</div>';  //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				}
				?>

				<?php
				/**
				 * Fires the rendering of user registration lost password form.
				 */
				do_action( 'user_registration_lostpassword_form' );
				?>

				<p class="user-registration-form-row form-row">
					<input type="hidden" name="ur_reset_password" value="true" />
					<input type="submit" class="user-registration-Button button" value="
					<?php
					echo esc_html(
						/**
						 * Filter to modify the lost password button text.
						 *
						 * @param string text for lost password button.
						 * @return string text for lost password button.
						 */
						apply_filters( 'user_registration_lost_password_button_text', __( 'Đặt lại mật khẩu', 'user-registration' ) )
					);
					?>
						" />
				</p>

				<?php wp_nonce_field( 'lost_password' ); ?>
			</div>
		</div>
	</form>
</div>
