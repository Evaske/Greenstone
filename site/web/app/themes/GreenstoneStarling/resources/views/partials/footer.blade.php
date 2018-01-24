<footer class="footer-contact">
  <div class="row">
    <div class="small-12 medium-6 columns">
      <div class="ready">Ready to get started?</div>
      <div class="get-in-touch">Get in touch about your <b>EBT</b> programme</div>
    </div>
    <div class="small-12 medium-6 columns">
      <div class="button-wrapper">
        <a href="/contact" class="button-alt button--purple">Contact One Of Our Team</a>
      </div>
    </div>
  </div>
</footer>

<footer class="footer-main">
  <div class="row">
    <div class="small-12 medium-6 large-3 columns show-for-medium">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/logo.png')" sizes="(max-width: 768px) 132px, 215px"
          srcset="@asset('images/logo_mobile.png') 264w, @asset('images/logo.png') 430w">
      </a>
    </div>
    <div class="small-6 medium-6 large-2 columns">
      <div class="title">Navigation</div>
      <nav class="footer-nav">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
    <div class="small-6 medium-6 large-4 columns">
      <div class="title">News and Events</div>
      @php $args = array('posts_per_page' => 3);
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post(); @endphp
      <a href="@php echo the_permalink(); @endphp" class="news-title">@php echo the_title(); @endphp</a>
      <div class="news-content">@php echo the_excerpt(); @endphp</div>
      @php endwhile; @endphp
      @php wp_reset_query(); @endphp
    </div>
    <div class="small-12 medium-6 large-3 columns">
      <div class="social-icon-wrapper">
        <!-- <a href="https://www.facebook.com/@php echo get_theme_mod('facebook_username'); @endphp" class="social-icon" target="_blank"><img src="@asset('images/icons/facebook.png')" width="40px" /></a> -->
        <a href="https://www.twitter.com/@php echo get_theme_mod('twitter_username'); @endphp" class="social-icon" target="_blank"><img src="@asset('images/icons/twitter.png')" width="40px" /></a>
        <a href="https://www.linkedin.com/company/@php echo get_theme_mod('linkedin_username'); @endphp" class="social-icon" target="_blank"><img src="@asset('images/icons/linkedin.png')" width="40px" /></a>
      </div>
    </div>
</footer>
