@extends('layouts.backend.main')
@section('content')
@section('title',Edit FAQ)
<!--**********************************
          Content body start
      ***********************************-->
      <div class="content-body mt-4">


<div class="container">
  <div class="card">
      <div class="card-body">
          <div class="row" >
              <h4 class="col-md-10">Edit Faq</h4>
          <a href="{{route('admin.faq')}}" class="btn btn-light btn-sm">Back</a>

          </div>
          <form method="POST" enctype="multipart/form-data" action="{{route('update.faq')}}">
              @csrf
              <input type="text" name="id" value="{{$faq->id}}">
              <table class="mt-4 ml-4">
                  <tr class="mt-4">
                      <th><h4 >Question:-</h4></th>
                  </tr>
                  <tr>
                    <td>
                      <textarea cols="140" rows="3" name="question">{{$faq->question}}</textarea>
                      </td>
                  </tr>
                  <tr class="mt-3">
                      <th class="mt-3"><h4 class="mt-3">Answer:-</h4></th>
                  </tr>
                  <tr>
                      <td>
                          <textarea cols="140" rows="3" name="answer">{{$faq->answer}}</textarea>
                      </td>
                  </tr>
                  <tr class="text-right">
                      <td>
                          <button class="btn btn-primary btn-sm" name="save" value="SAVE">Save Changes</button>
                      </td>
                  </tr>
              </table>
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
