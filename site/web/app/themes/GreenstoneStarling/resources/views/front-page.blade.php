@extends('layouts.app')

@section('content')
  <section class="home-slider">
    <img src="@asset('images/homepage_slider_globe.jpg')" sizes="100vw"
      srcset="@asset('images/homepage_slider_globe_mobile.jpg') 640w,
              @asset('images/homepage_slider_globe_tablet.jpg') 1536w,
              @asset('images/homepage_slider_globe.jpg') 2880w"
      style="width:100%;">
      <div class="header-wrapper">
        <div class="header">
          <h1>Building resilience<br/ >through evidence</h1>
          <a href="#" class="button button--purple">Find Out More</a>
        </div>
      </div>
  </section>

  <section class="section section--after home-what-we-do">
    <div class="row">
      <div class="small-12 medium-10 medium-offset-1 columns">
        <aside class="home-mission">
          The industry approach to pilot training is changing.
          Why continue to focus on task specific repetitive training for statistically less likely events when Evidence-based Training will enable you to build resilience and gain competitive advantage through enhanced pilot capability?
        </aside>
      </div>
    </div>
    <div class="row">
      <div class="small-12 medium-10 medium-offset-1 columns">
        <h2>What We Do</h2>
        <p>We work with airlines and national civil aviation authorities to develop Evidence-based Training programmes for the pilot community.  EBT focuses on the capability a pilot requires to perform their role and looks to improve their competency, based on their individual need, the aircraft they are flying and th§e operational environment.</p>
      </div>
    </div>
    <a href="#" class="button button--purple">Find Out More About Us</a>
  </section>

  <section class="section home-our-services">
    <div class="row">
      <div class="small-12 columns">
        <h2>Our Services</h2>
      </div>
    </div>
    <div class="row">
      <div class="small-12 medium-4 columns">
        <div class="service">
          <img src="@asset('images/icons/logo-green.png')" width="60" />
          <h3>EBT Instructor Development</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod urna in tortor sagittis, vel ornare risus porttitor.</p>
          <a href="#" class="button button--purple">More Information</a>
        </div>
      </div>
      <div class="small-12 medium-4 columns">
        <div class="service">
          <img src="@asset('images/icons/logo-purple.png')" width="60" />
          <h3>EBT Programme Design</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod urna in tortor sagittis, vel ornare risus porttitor.</p>
          <a href="#" class="button button--purple">More Information</a>
        </div>
      </div>
      <div class="small-12 medium-4 columns">
        <div class="service">
          <img src="@asset('images/icons/logo-light-green.png')" width="60" />
          <h3>Data Led Programme Enrichment</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod urna in tortor sagittis, vel ornare risus porttitor.</p>
          <a href="#" class="button button--purple">More Information</a>
        </div>
      </div>
    </div>
  </section>

  <section class="section section--before home-our-clients">
    <div class="row">
      <div class="small-12 columns">
        <h2>Some Of Our Clients</h2>
        <p>We are trusted by our clients to build resilience through Evidence-based Training, by virtue of our competence, reliability and integrity.</p>
      </div>
    </div>
    <div class="row">
      <div class="small-12 medium-4 columns">
        <div class="client">
          <img src="@asset('images/client-brunei.png')" width="238" />
        </div>
      </div>
      <div class="small-12 medium-4 columns">
        <div class="client">
          <img src="@asset('images/client-acropolis.png')" width="104" />
        </div>
      </div>
      <div class="small-12 medium-4 columns">
        <div class="client">
          <img src="@asset('images/client-virgin.png')" width="250" />
        </div>
      </div>
  </section>

  <section class="section home-reviews">
    <div class="row">
      <div class="small-12 columns">
        <h2>What our clients are saying</h2>
      </div>
    </div>
    <div class="row">
      <div class="small-12 columns">
        <div class="reviews">
          <div class="review">
            <div class="name">Jane Doe says...</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod urna in tortor sagittis, vel ornare risus porttitor.</p>
            <a href="#" class="url">www.google.com</a>
          </div>
          <div class="review selected">
            <div class="name">Joe Bloggs says...</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod urna in tortor sagittis, vel ornare risus porttitor.</p>
            <a href="#" class="url">www.google.com</a>
          </div>
          <div class="review">
            <div class="name">Linda Jones says...</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod urna in tortor sagittis, vel ornare risus porttitor.</p>
            <a href="#" class="url">www.google.com</a>
          </div>
          <div class="review">
            <div class="name">Jane Doe says...</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod urna in tortor sagittis, vel ornare risus porttitor.</p>
            <a href="#" class="url">www.google.com</a>
          </div>
        </div>
      </div>
  </section>
@endsection
