<header class="main-header">
  <div class="row">
    <div class="small-6 medium-3 large-3 columns">
      <a class="brand" href="{{ home_url('/') }}">
        <img src="@asset('images/logo.png')" sizes="(max-width: 768px) 132px, 215px"
          srcset="@asset('images/logo_mobile.png') 264w, @asset('images/logo.png') 430w">
      </a>
    </div>
    <div class="small-6 medium-9 large-9 columns">
      <nav class="nav-primary hide-for-small-only">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
        @endif
      </nav>
    </div>
</header>
