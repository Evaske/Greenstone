{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')

<div class="section section--after">
  <div class="row">
    <div class="small-12">
      @php echo do_shortcode('[contact-form-7 id="57" title="Contact form 1"]'); @endphp
    </div>
  </div>
</div>

  @include('partials/reviews')

@endsection
