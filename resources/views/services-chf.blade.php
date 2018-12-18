{{--
Template Name: Services CHF
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')

    @include('services.pricing-chf')
    <br><br>
    @include('services.packages-chf')

    - Translations to English, French, and Spanish (starting at 30 EUR)
    I can translate any promotional text, from and to any of this languages. The price will depend on the length of the text. Therefore, the time it takes to translate.

    @include('partials.content-page')
  @endwhile
@endsection
