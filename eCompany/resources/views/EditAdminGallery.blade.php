  @extends('layouts.backend.main')
  @section('content')
  @section('title','Edit Gallery')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body mt-4">

                
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row" >
                <h4 class="col-md-10">Edit Image</h4>
            <a href="{{route('admin.gallery')}}" class="btn btn-light btn-sm">Back</a>

            </div>
            <form method="POST" enctype="multipart/form-data" action="{{route('update.gallery')}}">
                @csrf
                <input type="hidden" name="id" value="{{$gallery->id}}">
                <table class="mt-4 ml-4">
                    <tr class="mt-3">
                        <th class="mt-3"><h4 class="mt-3">Category</h4></th>
                    </tr>
                    <tr>
                        <td>
                            <label>Your Previous Category is: {{$gallery->category}}</label>
                            <br>
                            <select class="form-select" name="category">
                              <option selected disabled>Select Category</option>
                              <option value="app">App</option>
                              <option value="card">Card</option>
                              <option value="web">Web</option>
                            </select>
                        </td>
                    </tr>   
                    <tr class="mt-3">
                        <th class="mt-3"><h4 class="mt-3">Choose Blog Image</h4></th>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="mt-3">
                        <img src="{{asset('uploads/'. $gallery->image)}}" style="height:80px;width:80px;">
                        <input type="file" class="form-control" value="" id="exampleFormControlFile1" name="image">
                    </td>
                    </tr>                
                    <tr class="text-right ">
                        <td>
                            <button class="btn btn-primary btn-sm mt-3" name="save" value="SAVE">Save Changes</button>
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