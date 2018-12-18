{{--
Template Name: Website Checklist
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')

    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-admin-tab" data-toggle="pill" href="#pills-admin" role="tab" aria-controls="pills-admin" aria-selected="true">
          Administration
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-config-tab" data-toggle="pill" href="#pills-config" role="tab" aria-controls="pills-config" aria-selected="false">
          Configuration
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-basic-tab" data-toggle="pill" href="#pills-basic" role="tab" aria-controls="pills-basic" aria-selected="false">
          Basic Website
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-pro-tab" data-toggle="pill" href="#pills-pro" role="tab" aria-controls="pills-pro" aria-selected="false">
          Pro Website
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-test-tab" data-toggle="pill" href="#pills-test" role="tab" aria-controls="pills-test" aria-selected="false">
          Testing
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-seo-tab" data-toggle="pill" href="#pills-seo" role="tab" aria-controls="pills-seo" aria-selected="false">
          SEO
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-security-tab" data-toggle="pill" href="#pills-security" role="tab" aria-controls="pills-security" aria-selected="false">
          Security
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-maintenance-tab" data-toggle="pill" href="#pills-maintenance" role="tab" aria-controls="pills-maintenance" aria-selected="false">
          Maintenance
        </a>
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-admin" role="tabpanel" aria-labelledby="pills-admin-tab">
        @include('services.website.administrative')
      </div>
      <div class="tab-pane fade" id="pills-config" role="tabpanel" aria-labelledby="pills-config-tab">
        @include('services.website.config')
      </div>
      <div class="tab-pane fade" id="pills-basic" role="tabpanel" aria-labelledby="pills-basic-tab">
        @include('services.website.basic-dev')
      </div>
      <div class="tab-pane fade" id="pills-pro" role="tabpanel" aria-labelledby="pills-pro-tab">
        @include('services.website.pro-dev')
      </div>
      <div class="tab-pane fade" id="pills-test" role="tabpanel" aria-labelledby="pills-test-tab">
        @include('services.website.testing')
      </div>
      <div class="tab-pane fade" id="pills-seo" role="tabpanel" aria-labelledby="pills-seo-tab">
        @include('services.website.seo')
      </div>
      <div class="tab-pane fade" id="pills-security" role="tabpanel" aria-labelledby="pills-security-tab">
        @include('services.website.security')
      </div>
      <div class="tab-pane fade" id="pills-maintenance" role="tabpanel" aria-labelledby="pills-maintenance-tab">
        @include('services.website.maintenance')
      </div>
    </div>

  @endwhile
@endsection
