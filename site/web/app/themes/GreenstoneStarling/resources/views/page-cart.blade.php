@extends('layouts.app')

@section('content')
@while(have_posts()) @php(the_post())

  <section class="section section--after home-our-services">
    <div class="row">
      <div class="small-12 columns">
        <div class="service" style="min-height: 0;">
          @php echo the_content(); @endphp
        </div>
      </div>
    </div>
  </section>
@endwhile
@endsection
