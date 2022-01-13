@extends('layouts.header')
@section('content')
@section('title','Tesimonial')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2 style="font-weight: 600;">Testimonials</h2>
          <ol>
            <li><a href="{{route('index')}}">Home</a></li>
            <li>Testimonials</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="row">
          @foreach($testimonial as $testimonial)
          <div class="col-lg-6" data-aos="fade-up">
            <div class="testimonial-item">
              <img src="{{asset('uploads/'. $testimonial->image)}}" class="testimonial-img" alt="">
              <h3>{{$testimonial->name}}</h3>
              <h4>{{$testimonial->post}}</h4>
              <p>
                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{$testimonial->quote}}
                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
              </p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Testimonials Section -->

  </main><!-- End #main -->

  @endsection