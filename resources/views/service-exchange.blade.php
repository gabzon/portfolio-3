{{--
Template Name: Service Exchange
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    <h1 class="f1 lh-title lh-solid tc avenir fw1 pa4">My time, tools & knowledge<br>in exchange for your products & services</h1>
    <p class="avenir">
      I'm freelance specializing in Innovation, Digital Marketing, Design & Development. One year ago, I made the decision to travel the world. I wanted to live a digital lifestyle. Ever since I have experienced the advantages of traveling. I have visited many places and I have met friendly and interesting people. Unfortunately, very soon, I realized that I did not have sufficient funds to pay myself all the "guilty pleasures" I would like to enjoy today, like going out to eat in nice restaurants, getting a massage, signing up for well-being or sport class, or simply doing any kind of leisure/entertainment activity. Hence; I came up with a plan to offer my time, tools and knowledge in exchange for your time, products or services while still traveling.
      <br><br>
      I have been freelance for more than 8 years, making websites and helping companies promote their businesses on the Internet, especially Social Networks. I have noticed the main reason why companies fail to succeed in promoting their brand is often the lack of time. Despite having the knowledge, tools, and technology, they often lack time to promote themselves. And the most important factor for a good promotion is the frequency.
      <br><br>
      This is why "Service Exchange" becomes interesting for both of us. We can enjoy a WIN-WIN situation by trading each other assets without spending money. I assumed that if you have read until here is because you are aware of the importance of a good promotion for your business, and this deal sounds interesting.
    </p>
    <br>
    <div id="steps" class="avenir pv4 tc">
      <span class="i text-muted">Just follow these 3 simple steps</span>
      <br>
      <br>
      <div class="row">
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <h2 class="avenir f2">Step 1</h2>
          Choose the task you would like me to do from the options below and send me a message
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <h2 class="f2">Step 2</h2>
          Choose a date for the service exchange. I'll start first with my part of the deal. I'm more flexible
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <h2>Step 3</h2>
          Pay me after with your products and services. You don't need to pay me with money. Save it!
        </div>
      </div>
    </div>


    <br>
    <br>
    <h3 class="f3 fw1">Services & Prices</h3>
    <br>
    <p class="avenir">Keeping things simple, small tasks, small exchange.</p>
    <br>
    @include('services.pricing')
    <br>
    <br>
    <br>
    <p class="avenir">Building bigger things, bigger projects, bigger exchange.</p>
    <br>
    @include('services.packages')
    <br>
    <br>
    <h3 class="f3 fw1">Partnership rules and conditions</h3>
    @include('services.conditions')
    <br>
    @include('services.references')
    <br>
    @include('partials.content-page')
  @endwhile
@endsection
