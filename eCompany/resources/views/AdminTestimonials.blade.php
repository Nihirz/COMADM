  @extends('layouts.backend.main')
  @section('content')
  @section('title','Testimonial')
      <link href="{{asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">


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
                                <h4 class="card-title">Testimonial Table</h4>
                                <div class="text-right">
                                <a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-light btn-sm">Add Tesimonials</a>
                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">

                                        <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Quote</th>
                                                <th>Post</th>
                                                <th class="col-md-2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tesimonials as $tesimonials)
                                            <tr>
                                                <td><img src="{{asset('uploads/'. $tesimonials->image)}}" style="height:50px;width:50px;"></td>
                                                <td>{{$tesimonials->name}}</td>
                                                <td>{!!$tesimonials->quote!!}</td>
                                                <td>{{$tesimonials->post}}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="ml-3"><a href="{{route('edit.tesimonials',$tesimonials->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                                        <div class="ml-3"><a href="{{route('delete.tesimonials',$tesimonials->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
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
    <!-- Add New Testimonial -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Testimonial</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('store.testimonial')}}" enctype="multipart/form-data">
            @csrf
        <label>Name:-</label>
        <input type="text" name="name" class="form-control" placeholder="Enter Name">
        <label>Post:-</label>
        <input type="text" name="post" class="form-control" placeholder="Define post">
        <label>Quote:-</label>
        <textarea name="quote" placeholder="'Enter Quote'" class="form-control"></textarea>
        <label>Image:-</label>
        <input type="file" name="image" class="form-control">
        <button name="save" class="btn btn-primary btn-sm mt-3">Save</button>
        </form>
      </div>
      <div class="modal-footer">
     <button name="save" class="btn btn-primary btn-sm">Save</button>
       
      </div>
    </div>
  </div>
</div>
    <!-- /Add new Testimonial -->
@endsection