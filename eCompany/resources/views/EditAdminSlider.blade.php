  @extends('layouts.backend.main')
  @section('content')
<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body mt-4">

                
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row" >
                <h4 class="col-md-10">Add New slider</h4>
            <a href="{{route('admin.slider')}}" class="btn btn-light btn-sm">Back</a>

            </div>
            <form method="POST" enctype="multipart/form-data" action="{{route('update.slider')}}">
                @csrf
                <input type="hidden" name="id" value="{{$slider->id}}">
                <table class="mt-4 ml-4">
                     <tr class="mt-3">
                        <th class="mt-3"><h4 class="mt-3">Choose slider Image</h4></th>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="mt-3">
                        <img src="{{asset('uploads/'. $slider->image)}}" style="height:80px;width:80px;">
                        <input type="file" class="form-control" value="" id="exampleFormControlFile1" name="image">
                    </td>

                    </tr>
                    <tr class="mt-3">
                        <th class="mt-3"><h4 class="mt-3">Title</h4></th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="title"  class="form-control" value="{{$slider->title}}">
                        </td>
                    </tr>
                    <tr class="mt-4">
                        <th><h4 class="mt-4">Description</h4></th>
                    </tr>
                    <tr>
                        <td><textarea id="editor" name="description">{{$slider->description}}</textarea>
<script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
<script type="text/javascript">
  CKEDITOR.replace('editor', {
  skin: 'moono',
  enterMode: CKEDITOR.ENTER_BR,
  shiftEnterMode:CKEDITOR.ENTER_P,
  toolbar: [{ name: 'basicstyles', groups: [ 'basicstyles' ], items: [ 'Bold', 'Italic', 'Underline', "-", 'TextColor', 'BGColor' ] },
             { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
             { name: 'scripts', items: [ 'Subscript', 'Superscript' ] },
             { name: 'justify', groups: [ 'blocks', 'align' ], items: [ 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock' ] },
             { name: 'paragraph', groups: [ 'list', 'indent' ], items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent'] },
             { name: 'links', items: [ 'Link', 'Unlink' ] },
             { name: 'insert', items: [ 'Image'] },
             { name: 'spell', items: [ 'jQuerySpellChecker' ] },
             { name: 'table', items: [ 'Table' ] }
             ],
});

</script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
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