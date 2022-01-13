  @extends('layouts.backend.main')
  @section('content')
  @section('title','Team')
      <link href="{{asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">


 <!--**********************************
            Content body start
        ***********************************-->
       <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Team</a></li>
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
                                <h4 class="card-title">Team Table</h4>
                                <div class="text-right">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Member</button>

                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">

                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Post</th>
                                                <th class="col-md-2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($team as $teams)
                                            <tr id="{{ $teams->id }}">
                                                <td><img src="{{asset('uploads/'. $teams->image)}}" style="height:50px;width:50px;"></td>
                                                <td>{{$teams->name}}</td>
                                                <td>{{$teams->post}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="ml-3"><a href="{{route('edit.member',$teams->id)}}" class="btn btn-primary btn-sm" data-id="{{ $teams->id }}" ><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                                        <div class="ml-3"><a href="{{route('delete.member',$teams->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                                                                
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Image</th>
                                                <th>Title</th>
                                                <th>Description</th>
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
    <!-- ADD Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Member</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <form action="{{route('store.member')}}" method="POST" enctype="multipart/form-data">
            @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Member's Name">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Post</label>
            <input type="text" name="post" class="form-control" id="exampleInputPassword1" placeholder="Define Member's Post">
          </div>
          <div class="mb-3">
                <label for="exampleFormControlFile1">Chhose Profile Picture</label>
                <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
   <!-- /Add Modal -->
      <!-- Edit Modal -->

   <!-- /Edit Modal -->



@endsection