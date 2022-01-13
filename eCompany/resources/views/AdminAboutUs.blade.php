  @extends('layouts.backend.main')
  @section('content')
  @section('title','About us')
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
                                <h4 class="card-title">About Us</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                                <th>Short Description</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($about as $about)
                                            <tr>
                                                <td>
                                                    <label>{!!$about->description!!}</label>
                                                </td>
                                                <td>
                                                    <label>{{$about->sdescription}}</label>
                                                </td>
                                                <td>
                                                    <img src="{{asset('uploads/'.$about->image)}}" style="height:100px;width: 100px;">
                                                </td>
                                                <td>
                                                    <a href="{{route('edit.about',$about->id)}}" class="btn btn-light" >Edit</a>
                                                </td>
                                            </tr>
                                            @endforeach                                         
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
 
  @endsection