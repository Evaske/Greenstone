@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
  <section class="home-slider" style="padding-top: 30%;">
    <div class="slides">
    @php $args = array('post_type' => 'hero-images');
    $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post(); @endphp

    <div class="slider-image" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;">
      <img src="@php echo the_post_thumbnail_url('full'); @endphp" sizes="100vw"
        srcset="@php echo the_post_thumbnail_url('mobile'); @endphp 640w,
                @php echo the_post_thumbnail_url('tablet'); @endphp 1536w,
                @php echo the_post_thumbnail_url('full'); @endphp 2880w"
        style="width:100%;">
        <div class="header-wrapper">
          <div class="header">
            <h1>@php echo get_post_meta( get_the_ID(), 'hero_text', true ); @endphp</h1>
            <a href="#" class="button button--purple js-button-scroll" data-scrollto="home-what-we-do">Find Out More</a>
          </div>
        </div>
      </div>

      @php endwhile; @endphp
      @php wp_reset_query(); @endphp
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

  @include('partials/reviews')
@endwhile
@endsection
