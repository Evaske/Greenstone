<footer class="footer-contact">
  <div class="row">
    <div class="small-6 columns">
      <div class="ready">Ready to get started?</div>
      <div class="get-in-touch">Get in touch about your <b>EBT</b> programme</div>
    </div>
    <div class="small-6 columns">
      <div class="button-wrapper">
        <a href="#" class="button button--purple">Reach out to the team</a>
      </div>
    </div>
  </div>
</footer>

<footer class="footer-main">
  <div class="row">
    <div class="small-12 medium-6 large-3 columns">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/logo.png')" sizes="(max-width: 768px) 132px, 215px"
          srcset="@asset('images/logo_mobile.png') 264w, @asset('images/logo.png') 430w">
      </a>
    </div>
    <div class="small-12 medium-6 large-2 columns">
      <div class="title">Navigation</div>
      <nav class="footer-nav">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
    <div class="small-12 medium-6 large-4 columns">
      <div class="title">News and Events</div>
    </div>
    <div class="small-12 medium-6 large-3 columns">
      <div class="social-icon-wrapper">
        <a href="#" class="social-icon"><img src="@asset('images/icons/facebook.png')" width="40px" /></a>
        <a href="#" class="social-icon"><img src="@asset('images/icons/twitter.png')" width="40px" /></a>
        <a href="#" class="social-icon"><img src="@asset('images/icons/linkedin.png')" width="40px" /></a>
      </div>
    </div>
</footer>
