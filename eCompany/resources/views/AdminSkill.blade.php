  @extends('layouts.backend.main')
  @section('content')
  @section('title','Skills')
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
                                    <div class="col-lg-2">
                                        <a href="" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-toggle="tooltip" data-placement="bottom" title="Add New Skill">Add Skill</a>
                                    </div>
                                    
                                </div>
                                @foreach($skill as $skill)

                                <h5 class="mt-3">{{$skill->name}} <span class="float-right">{{$skill->bar}}%</span></h5>
                                <div class="progress" style="height: 9px">
                                    <div class="progress-bar bg-success wow  progress-" style="width: {{$skill->bar}}%;" role="progressbar"><span class="sr-only"></span>
                                    </div>
                                </div>
                                    <div class="row">
                                        <div class="ml-3"><a href="{{route('edit.skill',$skill->id)}}" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                        <div class="ml-3"><a href="{{route('delete.skill',$skill->id)}}" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
<!-- Add New Bar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <form method="POST" action="{{route('store.skill')}}">
                    @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Skill Name</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Progress</label>
            <input type="number" class="form-control" id="exampleInputPassword1" name="bar">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- /Add New Bar -->
@endsection