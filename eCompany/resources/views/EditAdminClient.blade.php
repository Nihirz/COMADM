  @extends('layouts.backend.main')
  @section('content')
  @section('title','Edit Client Logo')
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body mt-4">

              <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4 class="card-title">Client Logo</h4>
                                    </div>                                    
                                </div>
        
                            <form method="POST" action="{{route('update.Client')}}" enctype="multipart/form-data">
                    @csrf
                                <input type="hidden" name="id" value="{{$client->id}}">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Client Logo</label>
            <input type="file" class="form-control" id="exampleInputEmail1" name="image" aria-describedby="emailHelp" value="{{$client->image}}">
            <span><img src="{{asset('uploads/'. $client->image)}}" style="height:50px;width: 50px;"></span>
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