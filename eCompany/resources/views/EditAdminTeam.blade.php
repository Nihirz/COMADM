  @extends('layouts.backend.main')
  @section('content')
  @section('title','Edit Team')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body mt-4">

                
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row" >
                <h4 class="col-md-10">Edit Team Member</h4>
            <a href="{{route('admin.team')}}" class="btn btn-light btn-sm">Back</a>

            </div>
     <form action="{{route('update.member')}}" name="team" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id"  id="hdnid" value="{{$teames->id}}">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"  id="name" value="{{$teames->name}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Post</label>
            <input type="text" name="post" class="form-control" id="post" value="{{$teames->post}}">
          </div>
          <div class="mb-3">
        
                <label for="exampleFormControlFile1">Chhose Profile Picture</label>
                <input type="file" name="image" class="form-control-file">
                <span><img src="{{asset('uploads/'. $teames->image)}}" style="height:50px;width:50px;"></span>
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