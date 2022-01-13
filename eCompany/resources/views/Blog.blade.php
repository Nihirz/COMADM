 @extends('layouts.header')
@section('content')



    <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-10 entries">
            @foreach($blog as $blog)
            <article class="entry">

              <div class="entry-img">
                <img src="{{asset('uploads/'. $blog->image)}}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="">{{$blog->title}}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">Admin</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{$blog->created_at}}</time></a></li>
                </ul>
              </div>

              <div class="entry-content" style="height:200px;overflow: hidden;">
                <p>
                 {!!$blog->description!!}
                </p>
                <div class="read-more">
                  
                </div>
              </div>
                <a href="{{route('single.blog',$blog->id)}}">Read More</a>

            </article><!-- End blog entry -->
            @endforeach
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection