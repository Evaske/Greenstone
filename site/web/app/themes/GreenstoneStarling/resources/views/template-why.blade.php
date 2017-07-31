{{--
  Template Name: Why GS
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
  <section class="home-slider">
    <img src="@asset('images/homepage_slider_globe.jpg')" sizes="100vw"
      srcset="@asset('images/homepage_slider_globe_mobile.jpg') 640w,
              @asset('images/homepage_slider_globe_tablet.jpg') 1536w,
              @asset('images/homepage_slider_globe.jpg') 2880w"
      style="width:100%;">
  </section>

  <section class="section section--after home-what-we-do">
    <div class="row">
      <div class="small-12 medium-10 medium-offset-1 columns">
        <h2>@php echo the_title(); @endphp</h2>
        @php echo the_content(); @endphp
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
