@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
  <section class="home-slider">
    <img src="@asset('images/homepage_slider_globe.jpg')" sizes="100vw"
      srcset="@asset('images/homepage_slider_globe_mobile.jpg') 640w,
              @asset('images/homepage_slider_globe_tablet.jpg') 1536w,
              @asset('images/homepage_slider_globe.jpg') 2880w"
      style="width:100%;">
      <div class="header-wrapper">
        <div class="header">
          <h1>Building resilience<br/ >through evidence</h1>
          <a href="#" class="button button--purple js-button-scroll" data-scrollto="home-what-we-do">Find Out More</a>
        </div>
      </div>
  </section>

  <section class="section section--after home-what-we-do">
    <div class="row">
      <div class="small-12 medium-10 medium-offset-1 columns">
        <aside class="home-mission">
          @php echo get_post_meta(get_the_ID(), 'home-mission', true); @endphp
        </aside>
      </div>
    </div>
    <div class="row">
      <div class="small-12 medium-10 medium-offset-1 columns">
        <h2>What We Do</h2>
        @php echo get_post_meta(get_the_ID(), 'home-what-we-do', true); @endphp
      </div>
    </div>
    <a href="/about-us" class="button button--purple">Find Out More About Us</a>
  </section>

  <section class="section home-our-services">
    <div class="row">
      <div class="small-12 columns">
        <h2>Our Services</h2>
      </div>
    </div>
    <div class="row">
      <div class="small-12 medium-4 columns">
        <div class="service">
          <img src="@asset('images/icons/logo-green.png')" width="60" />
          <h3>@php echo get_post_meta(get_the_ID(), 'home-service-one-title', true); @endphp</h3>
          <p>@php echo get_post_meta(get_the_ID(), 'home-service-one-content', true); @endphp</p>
          <a href="/our-services#service-one" class="button button--purple">More Information</a>
        </div>
      </div>
      <div class="small-12 medium-4 columns">
        <div class="service">
          <img src="@asset('images/icons/logo-purple.png')" width="60" />
          <h3>@php echo get_post_meta(get_the_ID(), 'home-service-two-title', true); @endphp</h3>
          <p>@php echo get_post_meta(get_the_ID(), 'home-service-two-content', true); @endphp</p>
          <a href="/our-services#service-two" class="button button--purple">More Information</a>
        </div>
      </div>
      <div class="small-12 medium-4 columns">
        <div class="service">
          <img src="@asset('images/icons/logo-light-green.png')" width="60" />
          <h3>@php echo get_post_meta(get_the_ID(), 'home-service-three-title', true); @endphp</h3>
          <p>@php echo get_post_meta(get_the_ID(), 'home-service-three-content', true); @endphp</p>
          <a href="/our-services#service-three" class="button button--purple">More Information</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--before home-our-clients">
    <div class="row">
      <div class="small-12 columns">
        <h2>Some Of Our Clients</h2>
        <p>@php echo get_post_meta(get_the_ID(), 'home-clients-text', true); @endphp</p>
      </div>
    </div>
    <div class="row">
      <div class="small-12 medium-4 columns">
        <div class="client">
          <img src="@asset('images/client-brunei.png')" width="238" />
        </div>
      </div>
      <div class="small-12 medium-4 columns">
        <div class="client">
          <img src="@asset('images/client-acropolis.png')" width="104" />
        </div>
      </div>
      <div class="small-12 medium-4 columns">
        <div class="client">
          <img src="@asset('images/client-virgin.png')" width="250" />
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
