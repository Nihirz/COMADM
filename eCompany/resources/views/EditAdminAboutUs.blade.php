  @extends('layouts.backend.main')
  @section('content')
  @section('title','Edit About')
 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body mt-4">

                
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row" >
                <h4 class="col-md-10">Edit About Us</h4>
            <a href="{{route('admin.aboutus')}}" class="btn btn-light btn-sm">Back</a>

            </div>
            <form method="POST" enctype="multipart/form-data" action="{{route('update.about')}}">
                @csrf
                <input type="hidden" name="id" value="{{$about->id}}">
                <table class="mt-4 ml-4">
                    <tr class="mt-4">
                        <th><h4 >Description</h4></th>
                    </tr>
                    <tr>
                        <td><textarea id="editor" name="description">{{$about->description}}</textarea>
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
                    <tr class="mt-3">
                        <th class="mt-3"><h4 class="mt-3">Short Description</h4></th>
                    </tr>
                    <tr>
                        <td>
                            <textarea cols="140" rows="3" name="sdescription">{{$about->sdescription}}</textarea> 
                        </td>
                    </tr>
                    <tr class="mt-3">

                        <th class="mt-3"><h4 class="mt-3">Choose Image</h4></th>
                    </tr>
                    <tr>
                        <td>
                        <span><img src="{{asset('uploads/'. $about->image)}}" style="height:100px;width: 100px;"></span>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image"></td>

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