@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())

  <section class="section section--after home-our-services">
    <div class="row">
      <div class="small-12 columns">
        <div class="service">
          <?php the_content(); ?>
      </div>
    </div>
  </section>
@endwhile
@endsection
