@extends('layouts.backend.main')
@section('content')
@section('title','FAQ')
    <link href="{{asset('admin/plugins/tables/css/datatable/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!--**********************************
          Content body start
      ***********************************-->
     <div class="content-body">

          <div class="row page-titles mx-0">
              <div class="col p-md-0">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)" style="text-decoration:none;">FAQ</a></li>
                      <li class="breadcrumb-item active"><a href="javascript:void(0)"  style="text-decoration:none;">Home</a></li>
                  </ol>
              </div>
          </div>
          <!-- row -->

          <div class="container-fluid">
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">
                              <h4 class="card-title">FAQ Table</h4>
                              <div class="text-right">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Add FAQ<button>
                              </div>
                              <div class="table-responsive">
                                  <table class="table table-striped table-bordered zero-configuration">

                                      <thead>
                                          <tr>
                                              <th>Question</th>
                                              <th>Answer</th>
                                              <th class="col-md-2">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach($faq as $blog)
                                          <tr>
                                              <td>{{$blog->question}}</td>
                                              <td>{{$blog->answer}}</td>
                                              <td>
                                                <div class="row">
                                                    <div class="col-sm-5"><a href="{{route('edit.faq',$blog->id)}}" class="btn btn-primary btn-sm"data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a></div>
                                                    <div class="col-sm-4"><a href="{{route('delete.faq',$blog->id)}}" class="btn btn-danger btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="fa fa-trash" aria-hidden="true"></i></a></div>
                                                </div>
                                              </td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                      <tfoot>
                                          <tr>
                                              <th>Question</th>
                                              <th>Answer</th>
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
<!-- ADD modal -->
<!-- Modal -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{route('admin.faqstore')}}">
          @csrf
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">FAQ Question:-</label>
            <input type="text" class="form-control"  aria-describedby="emailHelp" name="question">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">FAQ Answer</label>
            <input type="text" class="form-control" name="answer">
          </div>
          <button name="save" type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- /ADD MODAL -->
@endsection
