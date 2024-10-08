<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/user-registration/myaccount/dashboard.php.
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

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$PRE_FIX_USER_ID = 'AFF10';
	?>

<h2 style="margin-bottom: 10px;">
	<?php
	/* translators: %s - Users display name. */
	esc_html_e('Xin chào, {{display_name}}', 'user-registration');
	?>
</h2>

<div style="margin-bottom: 10px; font-weight: bold;">ID: <?php echo ($PRE_FIX_USER_ID . get_current_user_id()) ?></div>

<div class='user-registration-profile-header'>
	<div class='user-registration-img-container'>
		<?php
		if (!ur_option_checked('user_registration_disable_profile_picture', false)) {

			?>
			{{profile_pic_box}}
		<?php } ?>

	</div>
	<!-- <header>
		<h3 style="margin-top: 10px;">
			{{full_name}}
		</h3>
	</header> -->
</div>

<p>
	<?php
	/* translators: 1 profile details url, 2: change password url */
	echo wp_kses_post(__('Bạn có thể chỉnh sửa hồ sơ của mình tại {{profile_details_link}} và {{edit_password_link}}.', 'user-registration'));
	?>
</p>

<p>
	<?php
	/* translators: 1: user display name 2: logout url */
	echo wp_kses_post(__('Không phải tài khoản của bạn? <strong>{{sign_out_link}}</strong>', 'user-registration'));
	?>
</p>

<?php
/**
 * My Account dashboard.
 *
 * @since 2.6.0
 */
do_action('user_registration_account_dashboard');

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
