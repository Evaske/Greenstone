@extends('layouts.app')

@section('content')

  <section class="section section--after home-our-services">
    <div class="row">
      <div class="small-12 columns">

        @php
          $args = array(
            'orderby'    => 'title',
            'order'      => 'ASC'
          );
          $product_categories = get_terms( 'product_cat', $args );
          $count = count($product_categories);
          if ( $count > 0 ){
            foreach ( $product_categories as $product_category ) {
              echo '<h2>'. $product_category->name . '</h2>';
        $args = array(
            'posts_per_page' => -1,
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'product_cat',
                    'field' => 'slug',
                    'terms' => $product_category->slug
                )
            ),
            'post_type' => 'product',
            'orderby' => 'title,'
        );
        $products = new WP_Query( $args );
        @endphp
        <div class="service service-full" style="min-height: 0; margin-bottom: 40px;">
        <table>
          <tr>
            <th width="33%">Course Date</th>
            <th width="33%">Price</th>
            <th width="33%"></th>
          </tr> @php
        while ( $products->have_posts() ) {
            $products->the_post();
            @endphp
            <tr>
                <td>@php the_title(); @endphp</a>
                </td>
                <td>
                  @php echo wc_price( get_post_meta( get_the_ID(), '_regular_price', true)) . ' + VAT'; @endphp
                </td>
                <td>
                  <a href="@php the_permalink(); @endphp">
                      More Information / Book
                  </a>
                </td>
              </tr>
            @php
        }
        @endphp </table></div> @php
    }
}
@endphp
      </div>

    </div>
  </section>

@endsection
