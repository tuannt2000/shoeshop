<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook.
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		//do_action( 'woocommerce_sidebar' );
	?>

	<div class="sober-modal sober-popup popup-layout-modal"  id="sizeGuidePop">
		<div class="popup-modal">
			<div class="popup-container">
				<div class="popup-content">
					<div class="popup-content-wrap">
						<h2>
							Hướng dẫn chọn size giày
						</h2>

						<h2>
							<span>B1: Đặt chân lên tờ giấy trắng và dùng bút vẽ bo hết 1 vòng bàn chân</span>
						</h2>
						<p><img src="<?php echo get_template_directory_uri() ?>/assets/images/chon-size-giay-1-600x212.png" alt=""></p>

						<h2>
							<span>B2: Dùng dây hoặc thước dây đo 1 vòng chân vị trí phần khớp hoặc phần rộng nhất lúc đang đức hoặc ngồi</span>
						</h2>
						<p><img src="<?php echo get_template_directory_uri() ?>/assets/images/chon-size-giay-2-600x216.png" alt=""></p>

						<h2>
							<span>B3: So sánh chiều dài và rộng với bảng size dưới đây</span>
						</h2>
						<p><img src="<?php echo get_template_directory_uri() ?>/assets/images/chon-size-giay-3-600x212.png" alt=""></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
