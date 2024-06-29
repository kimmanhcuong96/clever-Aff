<?php
/**
 * Lost password confirmation text.
 *
 * This template can be overridden by copying it to yourtheme/user-registration/myaccount/lost-password-confirmation.php.
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

ur_print_notices();
ur_print_notice( __( 'Thư đặt lại mật khẩu đã được gửi tới địa chỉ mail đăng ký', 'user-registration' ) );
?>

<p>
<?php
echo esc_html(
	/**
	 * Filter to modify the user registration lost password message.
	 *
	 * @param string message content for user registration lost password.
	 * @return string message content of user registration lost password.
	 */
	apply_filters( 'user_registration_lost_password_message', esc_html__( 'Email đặt lại mật khẩu đã được gửi đến địa chỉ email trong hồ sơ cho tài khoản của bạn nhưng có thể mất vài phút để hiển thị trong hộp thư đến của bạn. Vui lòng đợi ít nhất 10 phút trước khi thử thiết lập lại lần nữa.', 'user-registration' ) )
);
?>
	</p>
