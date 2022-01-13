  @extends('layouts.backend.main')
  @section('content')
  @section('title','Logo')
 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body mt-5">
            

              <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row"> 
                                    
                                
                                <h4 class="card-title col-lg-10">Change Your Logo</h4>
                                <div class="col-lg-2">
                                    <a href="{{route('admin')}}" class="btn btn-light mb-4">BACK</a>
                                </div>
                                </div>
                                <div class="basic-form">
                                    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
                           <!--          <form action="{{route('logo.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend"><span class="input-group-text">Upload</span>
                                            </div>
                                            <div class="custom-file">
                                                <input type="file" class="form-control" name="image">
                                                
                                            </div>

                                        </div>
                                        
                                            <div>
                                                <button class="btn btn-light" value="save" name="save">Save</button>
                                            </div>
                                        
                                    </form> -->


                                    <table class="table">
                                        <tr>
                                            <th>Logo</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach($logo as $logo)
                                        <tr>
                                            <td><img src="{{asset('uploads/'. $logo->image)}}" style="height:100px; width: 200px;"></td>
                                            <td>
                                                <a href="{{route('edit.logo',$logo->id)}}" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
<!-- Edit Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chose Your New Logo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('update.logo')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$logo->id}}">
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="form-control" name="image">
                </div>
            </div>
            <div>
                <button class="btn btn-light" value="save" name="save">Save</button>
            </div>                            
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- /Edit Modal -->
@endsection