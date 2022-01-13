@extends('layouts.header')
@section('content')
@section('title','Our Team')

<!-- Team -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="font-weight:600; ">Team</h2>
          <ol>
            <li><a href="{{route('index')}}">Home</a></li>
            <li>Team</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Our <strong>Team</strong></h2>
          <p>"None of us, including me, ever do great things. But we can all do small things, with great love, and together we can do something wonderful." <br>: – Mother Teresa</p>
        </div>

        <div class="row">
@if(count($teams) > 0)
            @foreach($teams as $teams)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{asset('uploads/'.$teams->image)}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{$teams->name}}</h4>
                <span>{{$teams->post}}</span>
              </div>
            </div>
          </div>
          @endforeach
@endif     

        </div>

      </div>
    </section><!-- End Our Team Section -->

  </main><!-- End #main -->

@endsection