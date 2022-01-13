  @extends('layouts.backend.main')
  @section('content')
  @section('title','Edit Admin Testimonial')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body mt-4">

                
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row" >
                <h4 class="col-md-10">Edit Tesimonials</h4>
            <a href="{{route('admin.testimonials')}}" class="btn btn-light btn-sm">Back</a>

            </div>
            <form method="POST" action="{{route('update.testimonial')}}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$tesimonials->id}}">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name:-</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$tesimonials->name}}">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Post:-</label>
                <input type="text" value="{{$tesimonials->post}}" name="post" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Quote:-</label>
                <textarea class="form-control" name="quote" id="floatingTextarea">{{$tesimonials->quote}}</textarea>
              </div>
              <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Image:-</label>
                  <input type="file" name="image" class="form-control-file">
                  <span><img src="{{asset('uploads/'. $tesimonials->image)}}" style="height:80px;width:80px;"></span>
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>




            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


@endsection