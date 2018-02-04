@extends('layouts.app')

@section('content')
<style>
input[type="number"] {
  margin: 0;
}
</style>
<section class="section section--after home-our-services">
  <div class="row">
    <div class="small-12 columns">
      <div class="service" style="min-height: 0;">
        <?php while ( have_posts() ) : the_post(); global $product; ?>

          <div id="product-<?php the_ID(); ?>" <?php post_class(); ?> style="width: 100%">
            <div class="row">
              <div class="small-12 medium-6 columns">
                <?php the_content(); ?>
              </div>
              <div class="small-12 medium-6 columns">
                <?php $terms = wc_get_product_category_list( $product->get_id()); $terms = strip_tags($terms); ?>
                <h2 style="margin-bottom: 0;"><?php echo $terms; ?></h2>
                <span style="font-size: 18px; font-weight: 500; display: flex; justify-content: center;"><?php the_title(); ?></span>
                <span style="font-size: 16px; font-weight: 500;"><?php echo $product->get_price_html(); ?></span>
                <?php if ( $product->is_in_stock() ) : ?>
                  <form class="cart" method="post" enctype='multipart/form-data' style="background: #f2f2f2; margin-top: 20px;border-radius: 4px; padding: 10px; display: flex; align-items: center; justify-content: space-between;">
                    <span>Number of places:</span>
                      <?php
                        woocommerce_quantity_input( array(
                          'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
                          'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
                          'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : $product->get_min_purchase_quantity(),
                        ) );
                      ?>
                    <button type="submit" style="margin:0;" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="button-alt button--purple" id="make-booking">Make Booking</button>
                    <script>
                    var qty = document.getElementsByClassName("qty")[0];
                    qty.addEventListener("input", function (event) {
                      if (qty.validity.rangeOverflow) {
                        qty.setCustomValidity("The maximum number of spaces remaining on this course is " + <?php echo $product->get_stock_quantity(); ?>);
                      } else {
                        qty.setCustomValidity("");
                      }
                    });
                    </script>
                  </form>
                <?php endif;?></td>
              </div>
              </div>
            </div>
          </div>

        <?php endwhile; ?>


       </div>
     </div>
  </div>
</section>
@endsection
