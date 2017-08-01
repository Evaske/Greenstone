{{--
  Template Name: About Us
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
        <div class="service service--about">
          <img src="@asset('images/phil.png')" width="220" class="image" />
          <div class="details">
            <h3>Phil Cullen</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel risus nibh. Ut lobortis sagittis felis, ut vestibulum nunc pulvinar eleifend. Ut aliquam nisi sit amet sem semper imperdiet. Aliquam accumsan massa id eleifend blandit. Vestibulum ornare, enim in malesuada venenatis, urna velit bibendum ipsum, ut malesuada nulla lacus vitae libero. Sed rutrum fermentum lacus a sodales. Nulla tempus pulvinar diam varius vulputate. Fusce bibendum malesuada massa id rutrum. Praesent nec ipsum maximus ante interdum egestas at vel risus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel risus nibh. Ut lobortis sagittis felis, ut vestibulum nunc pulvinar eleifend. Ut aliquam nisi sit amet sem semper imperdiet. Aliquam accumsan massa id eleifend blandit. Vestibulum ornare, enim in malesuada venenatis, urna velit bibendum ipsum, ut malesuada nulla lacus vitae libero. Sed rutrum fermentum lacus a sodales. Nulla tempus pulvinar diam varius vulputate. Fusce bibendum malesuada massa id rutrum. Praesent nec ipsum maximus ante interdum egestas at vel risus.</p>
          </div>
        </div>
      </div>
      <div class="small-12 columns">
        <div class="service service--about">
          <img src="@asset('images/phil.png')" width="220" class="image" />
          <div class="details">
            <h3>Phil Cullen</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel risus nibh. Ut lobortis sagittis felis, ut vestibulum nunc pulvinar eleifend. Ut aliquam nisi sit amet sem semper imperdiet. Aliquam accumsan massa id eleifend blandit. Vestibulum ornare, enim in malesuada venenatis, urna velit bibendum ipsum, ut malesuada nulla lacus vitae libero. Sed rutrum fermentum lacus a sodales. Nulla tempus pulvinar diam varius vulputate. Fusce bibendum malesuada massa id rutrum. Praesent nec ipsum maximus ante interdum egestas at vel risus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel risus nibh. Ut lobortis sagittis felis, ut vestibulum nunc pulvinar eleifend. Ut aliquam nisi sit amet sem semper imperdiet. Aliquam accumsan massa id eleifend blandit. Vestibulum ornare, enim in malesuada venenatis, urna velit bibendum ipsum, ut malesuada nulla lacus vitae libero. Sed rutrum fermentum lacus a sodales. Nulla tempus pulvinar diam varius vulputate. Fusce bibendum malesuada massa id rutrum. Praesent nec ipsum maximus ante interdum egestas at vel risus.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  @include('partials/reviews')
@endwhile
@endsection
