<?php
/**
 * Checkout billing information form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-billing.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.9
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/** @global WC_Checkout $checkout */

?>
<div class="woocommerce-billing-fields">
	<?php if ( wc_ship_to_billing_address_only() && WC()->cart->needs_shipping() ) : ?>

		<h3><?php _e( 'Billing &amp; Shipping', 'woocommerce' ); ?></h3>

	<?php else : ?>

		<h2><?php _e( 'Billing details', 'woocommerce' ); ?></h2>

	<?php endif; ?>

	<?php do_action( 'woocommerce_before_checkout_billing_form', $checkout ); ?>

	<div class="woocommerce-billing-fields__field-wrapper">
		<?php
			echo '<div class="row">';
				echo '<div class="small-12 medium-6 columns">';
					echo '<label style="text-align: left;">First Name*</label>';
		      echo woocommerce_form_field( 'billing_first_name', ['required' => true, 'input_class' => ['input--text', 'input--checkout'],'custom_attributes' => ['tabindex' => "1"], 'placeholder' => 'First Name'], $checkout->get_value( 'billing_first_name' ) );
					echo '<label style="text-align: left;">Address Line 1*</label>';
					echo woocommerce_form_field( 'billing_address_1', ['required' => true, 'input_class' => ['input--text', 'input--checkout'],'custom_attributes' => ['tabindex' => "3"]], $checkout->get_value( 'billing_address_1' ) );
					echo '<label style="text-align: left;">City*</label>';
					echo woocommerce_form_field( 'billing_city', ['input_class' => ['input--text', 'input--checkout'],'custom_attributes' => ['tabindex' => "5"]], $checkout->get_value( 'billing_city' ) );
					echo '<label style="text-align: left;">Country*</label>';
					echo woocommerce_form_field( 'billing_country', ['type' => 'country', 'required' => true ,'custom_attributes' => ['tabindex' => "7"], 'class' => ['address-field', 'update_totals_on_change', 'input--select', 'input--select-checkout']], $checkout->get_value( 'billing_country' ) );
					echo '<label style="text-align: left;">Company</label>';
					echo woocommerce_form_field( 'billing_company', ['input_class' => ['input--text', 'input--checkout'],'custom_attributes' => ['tabindex' => "9"], 'placeholder' => 'Company'], $checkout->get_value( 'billing_state' ) );
				echo '</div>';
				echo '<div class="small-12 medium-6 columns">';
					echo '<label style="text-align: left;">Last Name*</label>';
		      echo woocommerce_form_field( 'billing_last_name', ['required' => true, 'input_class' => ['input--text', 'input--checkout'],'custom_attributes' => ['tabindex' => "2"], 'placeholder' => 'Last Name'], $checkout->get_value( 'billing_last_name' ) );
					echo '<label style="text-align: left;">Address Line 2</label>';
					echo woocommerce_form_field( 'billing_address_2', ['input_class' => ['input--text', 'input--checkout'],'custom_attributes' => ['tabindex' => "4"]], $checkout->get_value( 'billing_address_2' ) );
					echo '<label style="text-align: left;">Postcode*</label>';
					echo woocommerce_form_field( 'billing_postcode', ['required' => true, 'input_class' => ['input--text', 'input--checkout'],'custom_attributes' => ['tabindex' => "6"]], $checkout->get_value( 'billing_postcode' ) );
					echo '<label style="text-align: left;">Email Address*</label>';
					echo woocommerce_form_field( 'billing_email', ['required' => true, 'input_class' => ['input--text', 'input--checkout'],'custom_attributes' => ['tabindex' => "8"], 'placeholder' => 'Email Address'], $checkout->get_value( 'billing_email' ) );
				echo '</div>';
			echo '</div>';

			do_action( 'woocommerce_after_checkout_billing_form', $checkout );
		?>
	</div>
</div>
