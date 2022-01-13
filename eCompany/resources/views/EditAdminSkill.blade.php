  @extends('layouts.backend.main')
  @section('content')
  @section('title','Edit Team')
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
                                        <h4 class="card-title">SKILL BARS</h4>
                                    </div>                                    
                                </div>
        
                            <form method="POST" action="{{route('update.skill')}}">
                    @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Skill Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" value="{{$skill->name}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Progress</label>
            <label>Your Current Progress {{$skill->bar}} %</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="bar" value="{{$skill->name}}">
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