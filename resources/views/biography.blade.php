{{--
Template Name: Biography
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <div class="avenir">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          Thank you for giving me the chance to connect with you, first I would like to warn you this biography is a bit long. It is done on purpose. If you just want to learn quickly what have I done, please check my <a href="https://zambrano.ch/cv" target=target="_blank" class="black">cv</a>.
          <br><br>
          If you are among those who believe that a good professional match is about finding people that possess the required set of values and skills, then allow me to explain to you how my skills and personality could suit you and those aspiring for innovation, change, and greatness.
          <br><br>
          The true me is crazy, enthusiastic, and curious… A crazy dreamer that think of a better world. I want to help change the world for the best and make a difference.  I want to help and inspire people all around the world to create greatness in a meaningful and fulfilling way (Please checkout my two projects <a href="https://thrive.tools" target=target="_blank">thrive tools</a> and <a href="https://fusion.zambrano.ch" target=target="_blank">Fusion</a>).
          <br><br>
          I am an extroverted, conceptual and open-minded person. I analyze information thoroughly and I make decisions based on objective assessments. My strong work ethics play an important role in my accomplishments and I organize my work based on high standards of expectations. If things don’t feel right, I allow my intuition to guide me. I believe in my intelligence and in my abilities to express myself creatively. I continuously ask myself questions seeking for answers. I like to explore and discover new ways and possibilities of doing things.
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <img src="@asset('images/GZ_portrait-1.jpg')" alt="" class="img-fluid">
          <br><br>
          {{-- <img src="@asset('images/creativity.jpg')" class="img-fluid">
          <i class="text-muted">Photo by rawpixel on Unsplash - person writing on paper</i> --}}
        </div>
      </div>
      <br><br>
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <figure>
            <img src="@asset('images/dream-bottle.jpg')" class="img-fluid">
            <figcaption class="text-muted i">Photo by Javardh on Unsplash - magic bottle</figcaption>
          </figure>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          I believe in the extreme importance of imagining the future by formulating new projects rather than to complying with static rules of an established system. I’m reluctant to useless routines and repetitive work if it doesn’t result in measurable progress. I prefer to take advantage of my strategic thinking to see the changes that will shape the future.
          <br><br>
          I’m not scared of complex problems. I like to challenge my imagination, and I am rarely taken by surprise. I have a good perception of the environment, which allows me to ask questions and place business activities in a broader context beyond the limits of the “business as usual” ideology. This results in my capacity to have a wider global view and be able to seize new opportunities.
          <br><br>
          When I see an opportunity I employ my energy to convince people to seize it. I am very effective when it comes to defending an innovative project and for finding the resources for its start-up. My approach to teamwork is open and inviting. I know how to generate enthusiasm for new ideas. I like to motivate my team with my vision and believe that the exchange of ideas is fundamental in moving forward to achieve success.
          <br><br>
          I have the ability to align my talents, personality, values, and passions together in a single project. I’m focused on innovation and growth. I use my creativity to my advantage in order to construct, deconstruct and reassemble all parts of an idea or project, resulting in my capability to identify new ways of doing things. I use my vision to recombine key skills or elements for different types of products or services, thereby allowing companies the ability to achieve further success. I’m motivated and I believe my help can truly benefit people in meaningful ways.  I think, therefore I am… crazy.
        </div>
      </div>
    </div>

    {{-- @include('partials.content-page') --}}
  @endwhile
@endsection
