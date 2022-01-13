
  @extends('layouts.header')
  @section('content')
  @section('title','About Us')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>About</h2>
          <ol>
            <li><a href="{{route('index')}}">Home</a></li>
            <li>About</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
      <div class="container" data-aos="fade-up">
        @foreach ($about as $about)
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="{{asset('uploads/'. $about->image)}}" alt="" height="40%" width="100%">
            <br>
            <p class="mt-5">{{$about->sdescription}}</p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
            <p>{!!$about->description!!}
            </p>
          </div>
        </div>
        @endforeach
      </div>
    </section><!-- End About Us Section -->






  </main><!-- End #main -->
  @endsection