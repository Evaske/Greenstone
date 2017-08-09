{{--
  Template Name: Why GS
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())
  <section class="home-slide">
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

  @include('partials/reviews')
  </section>
@endwhile
@endsection
