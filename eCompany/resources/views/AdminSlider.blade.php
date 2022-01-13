  @extends('layouts.backend.main')
  @section('content')
  @section('title','Slider')
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
                                <h4 class="card-title">Slider Table</h4>
                                <div class="text-right">
                                <a href="{{route('admin.new.slider')}}" class="btn btn-light btn-sm">Add Slider</a>
                                    
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">

                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th class="col-md-2">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($slider as $slider)
                                            <tr>
                                                
                                                <td>{{$slider->title}}</td>
                                                <td>{!!$slider->description!!}</td>
                                                <td><img src="{{asset('uploads/'. $slider->image)}}" style="height:50px;width:50px;"></td>
                                                <td>
                                                    <div class="row">
                                                        <div class="ml-3"><a href="{{route('edit.slider',$slider->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                                        <div class="ml-3"><a href="{{route('delete.slider',$slider->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
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
    
@endsection