<?php
/**
 * Template part for displaying the page content when a 404 error has occurred
 *
 * @package kadence
 */

namespace Kadence;

?>
<section class="error">

	<div class="page-content entry content-bg">

		<div class="entry-content-wrap">

			<?php
			do_action('kadence_404_before_inner_content');

			// get_template_part('template-parts/content/page_header'); ?>
			<p style="font-size: xx-large;font-weight: bold;">
				<?php esc_html_e('Bạn chưa đăng ký khóa học này', 'kadence'); ?>
			</p>
			<p>
				<?php esc_html_e('Tìm kiếm khóa học khác tại đây', 'kadence'); ?>
			</p>

			<?php
			get_search_form();

			do_action('kadence_404_after_inner_content');
			?>
		</div>
	</div><!-- .page-content -->
</section><!-- .error -->