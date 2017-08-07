{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())

<div class="section section--after home-our-services">
  <div class="row">
    <div class="small-12 columns">
      <h2>@php the_title(); @endphp</h2>
      @php echo the_content(); @endphp
    </div>
  </div>
  <div class="row">
    <div class="small-12 medium-8 medium-offset-2">
      <div class="service service--about">
        @php echo do_shortcode('[contact-form-7 id="57" title="Contact form 1"]'); @endphp
      </div>
    </div>
  </div>
</div>

@endwhile

  @include('partials/reviews')

@endsection
