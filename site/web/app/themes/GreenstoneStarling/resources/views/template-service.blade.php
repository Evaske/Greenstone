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
      <div class="small-12 columns">
        <div class="service service--full" id="service-four">
          <img src="@asset('images/icons/logo-green.png')" width="60" />
          <h3>@php echo get_post_meta(get_the_ID(), 'service-four-title', true); @endphp</h3>
          @php echo get_post_meta(get_the_ID(), 'service-four-content', true); @endphp
        </div>
      </div>
    </div>
  </section>

  @include('partials/reviews')
@endwhile
@endsection
