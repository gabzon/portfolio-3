{{--
Template Name: Website CHF
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')

    <section class="totals">
      @php
      $admin = new Website_Administration();
      //$basic = new Website_Basic();
      //$pro = new Website_Pro();
      //$pro = new Website_Pro();
      //$pro = new Website_Pro();
      @endphp
      <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <h2 class="tc i fw1 system-serif">Pre-Development</h2>
          <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Administration</h4>
                  <p class="card-text">Billings, meetings and planning</p>
                  <h4 class="f3 fw1"></h4>
                  <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks - {{$admin->total_hours()}} minutes</small></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Configuration</h4>
                  <p class="card-text">Hosting and Wordpress configuration and installation</p>
                  <h4 class="f3 fw1"></h4>
                  <p class="card-text"><small class="text-muted">15 tasks - 130 minutes</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-6 col-md-6 col-lg-6">
          <h2 class="tc i fw1 system-serif">Development</h2>
          <div class="row justify-content-md-center">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title f3">Basic</h4>
                  <p class="card-text">Created with LC Composer or any themes and plugins</p>
                  <h4 class="f4">CHF 1000</h4>
                  <p class="card-text"><small class="text-muted">12 tasks + 660 minutes</small></p>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title f3">Pro</h4>
                  <p class="card-text">Developed with Sage, piklist, kirki and tailor-made plugins</p>
                  <h4 class="f4">CHF 1500</h4>
                  <p class="card-text"><small class="text-muted">25 tasks - 760 minutes</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br>
      {{--  ------------------------------------------------------------------}}
      <br>

      <h2 class="tc i fw1 system-serif">Module Options</h2>
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title f3">Blog</h4>
              <p class="card-text">Blogging option for corporate websites</p>
              <h4 class="f4">CHF 50</h4>
              <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks - 30 minutes</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title f3">Search</h4>
              <p class="card-text">Users can search in the blog database</p>
              <h4 class="f4">CHF 100</h4>
              <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks - 60 minutes</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title f3">Newsletter</h4>
              <p class="card-text">Newsletter features in the website</p>
              <h4 class="f4">CHF 100</h4>
              <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks - 60 minutes</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title f3">Gallery</h4>
              <p class="card-text">Integration of a gallery plugin</p>
              <h4 class="f4">CHF 200</h4>
              <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks - 120 minutes</small></p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title f3">Multilanguage</h4>
              <p class="card-text">Capacity to write multi-languages content</p>
              <h4 class="f4">CHF 200</h4>
              <p class="card-text"><small class="text-muted">{{$admin->number_of_tasks()}} tasks - 120 minutes</small></p>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <h2 class="tc i fw1 system-serif">Post-Develpment Options</h2>
      <div class="row">
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title f3">Testing</h4>
              <p class="card-text">Runs different checkup tests to make evaluate the website compliance</p>
              <h4 class="f4">CHF 300</h4>
              <p class="card-text"><small class="text-muted">22 tasks - 180 minutes</small></p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title f3">Security</h4>
              <p class="card-text">Hosting and Wordpress configuration and installation</p>
              <h4 class="f4">CHF 500</h4>
              <p class="card-text"><small class="text-muted">32 tasks - 300 minutes</small></p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title f3">SEO</h4>
              <p class="card-text">Code and workflow improvements for SEO</p>
              <h4 class="f4">CHF 800</h4>
              <p class="card-text"><small class="text-muted">53 tasks - 515 minutes</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
  @endwhile
@endsection
