<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) );
	return;
}

?>

<form name="checkout" method="post" class="checkout woocommerce-checkout row" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

	<?php if ( $checkout->get_checkout_fields() ) : ?>

		<div class="small-12 medium-6 columns">

			<?php do_action( 'woocommerce_checkout_before_customer_details' ); ?>

			<div  id="customer_details">

					<?php do_action( 'woocommerce_checkout_billing' ); ?>

					<?php do_action('woocommerce_checkout_shipping'); ?>

			</div>

			<?php do_action( 'woocommerce_checkout_after_customer_details' ); ?>
		</div>

	<?php endif; ?>

	<div class="small-12 medium-6 columns">

		<h2 id="order_review_heading"><?php _e( 'Your order', 'woocommerce' ); ?></h2>

		<?php do_action( 'woocommerce_checkout_before_order_review' ); ?>

		<div id="order_review" class="woocommerce-checkout-review-order">
			<?php do_action( 'woocommerce_checkout_order_review' ); ?>
		</div>

		<?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
	</div>

</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
