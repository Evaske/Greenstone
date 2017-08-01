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
        @php echo the_content(); @endphp
        @php $consultants = get_post_meta( get_the_ID(), '_consultants_groupdemo', true ); @endphp
      </div>
    </div>
    <div class="row">
      @foreach ($consultants as $consultant)
      <div class="small-12 columns">
        <div class="service service--about">
          <img src="{{ $consultant['image'] }}" width="220" class="image" />
          <div class="details">
            <h3>{{ $consultant['name'] }}</h3>
            {!! $consultant['description'] !!}
          </div>
        </div>
      </div>
      @endforeach



    </div>
  </section>

  @include('partials/reviews')
@endwhile
@endsection
