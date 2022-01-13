  @extends('layouts.backend.main')
  @section('content')
  @section('title','Gallery')
      <link href="{{asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
     
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


 <!--**********************************
            Content body start
        ***********************************-->
       <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Gallery Table</h4>
                                <div class="text-right">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Image</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">

                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Category</th>
                                                <th class="col-md-2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($gallery as $gallery)
                                            <tr>
                                                <td><img src="{{asset('uploads/'. $gallery->image)}}" style="height:50px;width:50px;"></td>
                                                <td>{{$gallery->category}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="ml-3"><a href="{{route('edit.gallery',$gallery->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                                        <div class="ml-3"><a href="{{route('delete.gallery',$gallery->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Image</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
            <form method="POST" action="{{route('store.gallery')}}" enctype="multipart/form-data">
                @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Select Your Image Category</label>
        <br>
        <select class="form-select" name="category">
          <option selected disabled>Select Category</option>
          <option value="app">App</option>
          <option value="card">Card</option>
          <option value="web">Web</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Chhose Your Image</label>
        <input type="file" name="image">
    </div>
  <button class="btn btn-primary" name="save" type="submit">Save</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection