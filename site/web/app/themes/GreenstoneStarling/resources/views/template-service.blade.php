{{--
  Template Name: Services
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())

  <section class="section section--after home-our-services">
    <div class="row">
      <div class="small-12 columns">
        <h2>@php the_title(); @endphp</h2>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <div class="service service--full" id="service-one">
          <img src="@asset('images/icons/logo-green.png')" width="60" />
          <h3>@php echo get_post_meta(get_the_ID(), 'service-one-title', true); @endphp</h3>
          @php echo get_post_meta(get_the_ID(), 'service-one-content', true); @endphp
        </div>
      </div>
      <div class="small-12 columns">
        <div class="service service--full" id="service-two">
          <img src="@asset('images/icons/logo-purple.png')" width="60" />
          <h3>@php echo get_post_meta(get_the_ID(), 'service-two-title', true); @endphp</h3>
          @php echo get_post_meta(get_the_ID(), 'service-two-content', true); @endphp
        </div>
      </div>
      <div class="small-12 columns">
        <div class="service service--full" id="service-three">
          <img src="@asset('images/icons/logo-light-green.png')" width="60" />
          <h3>@php echo get_post_meta(get_the_ID(), 'service-three-title', true); @endphp</h3>
          @php echo get_post_meta(get_the_ID(), 'service-three-content', true); @endphp
        </div>
      </div>
    </div>
  </section>

  <section class="section home-reviews">
    <div class="row">
      <div class="small-12 columns">
        <h2>What our clients are saying</h2>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <div class="reviews">

          @php $args = array('post_type' => 'testimonials');
          $loop = new WP_Query( $args );
          while ( $loop->have_posts() ) : $loop->the_post(); @endphp

          <div class="review">
            <div class="name">@php echo the_title() @endphp says...</div>
            <p>@php the_content() @endphp</p>
            <a href="@php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_website', true ) ); @endphp" target="_blank" class="url">@php echo esc_html( get_post_meta( get_the_ID(), 'testimonial_website', true ) ); @endphp</a>
          </div>

          @php endwhile; @endphp

        </div>
      </div>
  </section>
@endwhile
@endsection
