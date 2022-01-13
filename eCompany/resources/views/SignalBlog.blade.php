@extends('layouts.header')
@section('content')
@section('title','Our Team')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Single</h2>
          <ol>
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('blog')}}">Blog</a></li>
            <li>Blog Single</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-12 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                <img src="{{asset('uploads/'. $blog->image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{$blog->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i>Admin</li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i>{{$blog->created_at}}</li>
                </ul>
              </div>

              <div class="entry-content">
                <p>{!!$blog->description!!}</p>

              </div>

              

            </article><!-- End blog entry -->

           






            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->


          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->
@endsection