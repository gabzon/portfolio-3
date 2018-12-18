{{--
Template Name: Awaken the giant within
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @include('partials.content-page')

    <div class="row">
      <div class="col-3">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link f7 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">1. Dreams of Destiny</a>
          <a class="nav-link f7" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">2. Decisions: The pathway to power</a>
          <a class="nav-link f7" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">3. The forces that shape your life</a>
          <a class="nav-link f7" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">4. Belifs systems: The power to create and the power to destroy</a>
          <a class="nav-link f7" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">5. Can change happen in an instant?</a>
          <a class="nav-link f7" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">6. How to change anything in your life: The science of Neuro-Associative Conditionning</a>
          <a class="nav-link f7" id="v-pills-7-tab" data-toggle="pill" href="#v-pills-7" role="tab" aria-controls="v-pills-7" aria-selected="false">7. How to get what you really want</a>
          <a class="nav-link f7" id="v-pills-8-tab" data-toggle="pill" href="#v-pills-8" role="tab" aria-controls="v-pills-8" aria-selected="false">8. Questions are the answer</a>
          <a class="nav-link f7" id="v-pills-9-tab" data-toggle="pill" href="#v-pills-9" role="tab" aria-controls="v-pills-9" aria-selected="false">9. The vocabulary of Ultimate Success</a>
          <a class="nav-link f7" id="v-pills-10-tab" data-toggle="pill" href="#v-pills-10" role="tab" aria-controls="v-pills-10" aria-selected="false">10. Destroy the blocks, break down the wall, let go of the rope, and dance your way to success: The power of life metaphors</a>
          <a class="nav-link f7" id="v-pills-11-tab" data-toggle="pill" href="#v-pills-11" role="tab" aria-controls="v-pills-11" aria-selected="false">11. The ten emotions of power</a>
          <a class="nav-link f7" id="v-pills-12-tab" data-toggle="pill" href="#v-pills-12" role="tab" aria-controls="v-pills-12" aria-selected="false">12. The magnificent obsession - Creating a compelling future</a>
          <a class="nav-link f7" id="v-pills-13-tab" data-toggle="pill" href="#v-pills-13" role="tab" aria-controls="v-pills-13" aria-selected="false">13. The Ten-day mental challenge</a>
          <a class="nav-link f7" id="v-pills-14-tab" data-toggle="pill" href="#v-pills-14" role="tab" aria-controls="v-pills-14" aria-selected="false">14. Ultimate influence: Your master system</a>
          <a class="nav-link f7" id="v-pills-15-tab" data-toggle="pill" href="#v-pills-15" role="tab" aria-controls="v-pills-15" aria-selected="false">15. Life values: your personal compass</a>
          <a class="nav-link f7" id="v-pills-16-tab" data-toggle="pill" href="#v-pills-16" role="tab" aria-controls="v-pills-16" aria-selected="false">16. Rules: if you're not happy, here's why</a>
          <a class="nav-link f7" id="v-pills-17-tab" data-toggle="pill" href="#v-pills-17" role="tab" aria-controls="v-pills-17" aria-selected="false">17. References: The fabric of life</a>
          <a class="nav-link f7" id="v-pills-18-tab" data-toggle="pill" href="#v-pills-18" role="tab" aria-controls="v-pills-18" aria-selected="false">18. Identity: the key to expansion</a>
          <a class="nav-link f7" id="v-pills-19-tab" data-toggle="pill" href="#v-pills-19" role="tab" aria-controls="v-pills-19" aria-selected="false">19. The seven days to shape your life</a>
        </div>
      </div>
      <div class="col-9">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
            <h3>1. Dreams of Destiny</h3>
              @include('books.giant.01dream')
          </div>
          <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
            <h3>2. Decisions: The pathway to power</h3>
            @include('books.giant.02pathway')
          </div>
          <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
            <h3>3. The forces that shape your life</h3>
            @include('books.giant.03forces')
          </div>
          <div class="tab-pane fade" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
            <h3>4. Belifs systems: The power to create and the power to destroy</h3>
            @include('books.giant.04beliefs')
          </div>
          <div class="tab-pane fade" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
            <h3>5. Can change happen in an instant?</h3>
            @include('books.giant.05change')
          </div>
          <div class="tab-pane fade" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
            <h3>6. How to change anything in your life: The science of Neuro-Associative Conditionning</h3>
            @include('books.giant.06neuro')
          </div>
          <div class="tab-pane fade" id="v-pills-7" role="tabpanel" aria-labelledby="v-pills-7-tab">
            <h3>7. How to get what you really want</h3>
            @include('books.giant.07get')
          </div>
          <div class="tab-pane fade" id="v-pills-8" role="tabpanel" aria-labelledby="v-pills-8-tab">
            <h3>8. Questions are the answer</h3>
            @include('books.giant.08questions')
          </div>
          <div class="tab-pane fade" id="v-pills-9" role="tabpanel" aria-labelledby="v-pills-9-tab">
            <h3>9. The vocabulary of Ultimate Success</h3>
            @include('books.giant.09vocabulary')
          </div>
          <div class="tab-pane fade" id="v-pills-10" role="tabpanel" aria-labelledby="v-pills-10-tab">
            <h3>10. Destroy the blocks, break down the wall, let go of the rope, and dance your way to success: The power of life metaphors</h3>
            @include('books.giant.10metaphors')
          </div>
          <div class="tab-pane fade" id="v-pills-11" role="tabpanel" aria-labelledby="v-pills-11-tab">
            <h3>11. The ten emotions of power</h3>
            @include('books.giant.11emotions')
          </div>
          <div class="tab-pane fade" id="v-pills-12" role="tabpanel" aria-labelledby="v-pills-12-tab">
            <h3>12. The magnificent obsession - Creating a compelling future</h3>
            @include('books.giant.12obsession')
          </div>
          <div class="tab-pane fade" id="v-pills-13" role="tabpanel" aria-labelledby="v-pills-13-tab">
            <h3>13. The Ten-day mental challenge</h3>
            @include('books.giant.13challenge')
          </div>
          <div class="tab-pane fade" id="v-pills-14" role="tabpanel" aria-labelledby="v-pills-14-tab">
            <h3>14. Ultimate influence: Your master system</h3>
            @include('books.giant.14influence')
          </div>
          <div class="tab-pane fade" id="v-pills-15" role="tabpanel" aria-labelledby="v-pills-15-tab">
            <h3>15. Life values: your personal compass</h3>
            @include('books.giant.15values')
          </div>
          <div class="tab-pane fade" id="v-pills-16" role="tabpanel" aria-labelledby="v-pills-16-tab">
            <h3>16. Rules: if you're not happy, here's why</h3>
            @include('books.giant.16rules')
          </div>
          <div class="tab-pane fade" id="v-pills-17" role="tabpanel" aria-labelledby="v-pills-17-tab">
            17. References: The fabric of life
            @include('books.giant.17references')
          </div>
          <div class="tab-pane fade" id="v-pills-18" role="tabpanel" aria-labelledby="v-pills-18-tab">
            <h3>18. Identity: the key to expansion</h3>
            @include('books.giant.18identity')
          </div>
          <div class="tab-pane fade" id="v-pills-19" role="tabpanel" aria-labelledby="v-pills-19-tab">
            <h3>19. The seven days to shape your life</h3>
            @include('books.giant.19sevendays')
          </div>
        </div>
      </div>
    </div>



  @endwhile
@endsection
