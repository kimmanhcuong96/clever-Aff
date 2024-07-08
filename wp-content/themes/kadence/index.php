<?php
/**
 * The main archive template file
 *
 * @package kadence
 */

namespace Kadence;

if (!defined('ABSPATH')) {
	exit;
}

get_header();

kadence()->print_styles('kadence-content');
/**
 * Hook for main archive content.
 */
// do_action( 'kadence_archive' );
?>
<div class="hero-container site-container cus-container-wrapper">
	<div class="cus-container">
		<div class="cus-item">
			<div class="cus-product">
				<a href="<?php echo esc_url(home_url('/khoa-hoc-affiliate-thuc-chien')); ?>">
					<img src=<?php echo get_site_url() . '/wp-content/uploads/subject/khoa-hoc-affilliate.png'; ?>
						alt="" height="275" width="275" />
					<div class="discount-overlay">
						<span>Khuyến mãi!</span>
						<span class="original-price">699k</span>
						<span class="discounted-price">399k</span>
					</div>
				</a>
				<div style="display: block;">
					<a href="<?php echo esc_url(home_url('/khoa-hoc-affiliate-thuc-chien')); ?>">
						Khóa học Affiliate thực chiến
					</a>
				</div>
			</div>
		</div>
		<div class="cus-item">
			<div class="cus-product">
				<a href="<?php echo esc_url(home_url('/khoa-hoc-mmo-nang-cao')); ?>"><img src=<?php echo get_site_url() . '/wp-content/uploads/subject/khoa-hoc-mmo-nang-cao.png'; ?> alt="" height="275" width="275" />
					<div class="discount-overlay">
						<span>Khuyến mãi!</span>
						<span class="original-price">699k</span>
						<span class="discounted-price">599k</span>
					</div>
				</a>
				<div style="display: block;">
					<a href="<?php echo esc_url(home_url('/khoa-hoc-mmo-nang-cao')); ?>">
						Khóa học MMO nâng cao
					</a>
				</div>
			</div>
		</div>
		<div class="cus-item">
			<div class="cus-product">
				<a href="<?php echo esc_url(home_url('/khoa-hoc-thiet-ke-canva')); ?>"><img src=<?php echo get_site_url() . '/wp-content/uploads/subject/thiet-ke-canva.png'; ?> alt="" height="275"
						width="275" />
					<div class="discount-overlay">
						<span>Khuyến mãi!</span>
						<span class="original-price">999k</span>
						<span class="discounted-price">899k</span>
					</div>
				</a>
				<div style="display: block;">
					<a href="<?php echo esc_url(home_url('/khoa-hoc-thiet-ke-canva')); ?>">
						Khóa học thiết kế Canva
					</a>
				</div>
			</div>
		</div>
		<div class="cus-item">
			<div class="cus-product">
				<a href="<?php echo esc_url(home_url('/khoa-hoc-air-drop-coin')); ?>"><img src=<?php echo get_site_url() . '/wp-content/uploads/subject/khoa-hoc-airdrop-crypto.png'; ?> alt="" height="275"
						width="275" />
					<div class="discount-overlay">
						<span>Khuyến mãi!</span>
						<span class="original-price">699k</span>
						<span class="discounted-price">599k</span>
					</div>
				</a>
				<div style="display: block;">
					<a href="<?php echo esc_url(home_url('/khoa-hoc-air-drop-coin')); ?>">
						Khóa học airdrop tiền mã hóa
					</a>
				</div>
			</div>
		</div>
		<div class="cus-item">
			<div class="cus-product">
				<a href="<?php echo esc_url(home_url('/khoa-hoc-lap-trinh-web-co-ban')); ?>"><img src=<?php echo get_site_url() . '/wp-content/uploads/subject/khoa-hoc-lap-trinh-web-co-ban.png'; ?> alt=""
						height="275" width="275" />
					<div class="discount-overlay">
						<span>Giảm giá sốc!</span>
						<span class="original-price">4999k</span>
						<span class="discounted-price">3999k</span>
					</div>
				</a>
				<div style="display: block;">
					<a href="<?php echo esc_url(home_url('/khoa-hoc-lap-trinh-web-co-ban')); ?>">
						Khóa học lập trình cơ bản
					</a>
				</div>
			</div>
		</div>
		<div class="cus-item">
			<div class="cus-product">
				<a href="<?php echo esc_url(home_url('/khoa-hoc-lap-trinh-web-chuyen-sau')); ?>"><img src=<?php echo get_site_url() . '/wp-content/uploads/subject/khoa-hoc-lap-trinh-web-nang-cao.png'; ?> alt=""
						height="275" width="275" />
					<div class="discount-overlay">
						<span>Giảm giá sốc!</span>
						<span class="original-price">6999k</span>
						<span class="discounted-price">5999k</span>
					</div>
				</a>
				<div style="display: block;">
					<a href="<?php echo esc_url(home_url('/khoa-hoc-lap-trinh-web-chuyen-sau')); ?>">
						Khóa học lập trình chuyên sâu
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
get_footer();
?>

<style>
	.cus-container-wrapper {
		margin-top: 5rem;
	}

	.cus-container {
		display: grid;
		grid-template-columns: repeat(3, 1fr);
		/* Chia thành 3 cột bằng nhau */
		grid-template-rows: repeat(2, 285px);
		/* 2 hàng, mỗi hàng cao 50px */
		gap: 60px;
		/* Khoảng cách giữa các cột */
	}

	.cus-item {
		/* background-color: #f0f0f0; */
		padding: 10px;
		text-align: center;
		align-items: center;
		display: flex;
		justify-content: center;
	}

	a {
		display: flex;
		justify-content: center;
		align-items: center;
		font-size: larger;
		font-weight: bold;
		text-decoration: none;
	}

	.cus-product {
		position: relative;
		display: inline-block;
	}

	.cus-product img {
		display: block;
		max-width: 100%;
		height: auto;
	}

	.discount-overlay {
		position: absolute;
		top: 0;
		right: 0;
		background-color: rgba(29, 150, 222, 0.6);
		/* Màu nền overlay, có thể thay đổi */
		color: #fff;
		padding: 5px 10px;
		font-size: 14px;
		text-align: center;
	}

	.discount-overlay span {
		display: block;
		font-weight: bold;
	}

	.original-price {
		text-decoration: line-through;
	}

	.discounted-price {
		font-size: 18px;
		/* Kích thước giá giảm giá, có thể thay đổi */
	}

	@media (max-width: 767px) {
		.cus-container {
			grid-template-columns: 1fr;
			/* 1 cột */
		}
	}
</style>