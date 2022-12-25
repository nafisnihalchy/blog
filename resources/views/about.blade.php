@extends('layout')

@section('main')
<!-- main -->
<main class="container">
  <section class="single-blog-post">
    <h1>About Us</h1>
    <div class="single-blog-post-ContentImage" data-aos="fade-left">
      <img src="{{asset('images/about.jpg')}}" alt="" />
    </div>

    <div>
      <p class="about-text">
        Blog Pitch is an online blog space were football fans can register and be a part of the culture. In this blog we share the recent updates of football and all the drama behind the football scene.
        <br /><br />
        This blog is created to unite football fans all over the world to write and post pictures about their favourite teams and stars.
      </p>
    </div>
  </section>
</main>
@endsection