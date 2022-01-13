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
                                <div class="row">
                                    <div class="col-lg-10">
                                        <h4 class="card-title">Edit Mission Vision Choose Us</h4>
                                    </div>
                                    <div class="col-lg-2">
                                        <a href="{{route('admin.mvc')}}" class="btn btn-dark btn-sm">Back</a>
                                    </div>
                                </div>
                                <div class="table-responsive mt-">
                                    <form method="POST" class="form-group mt-5" action="{{route('update.mvc')}}" >
                                        @csrf
                                        <input type="hidden" name="id" value="{{$mvc->id}}">
                                        <table class="table table-striped table-bordered zero-configuration">
                                        <tbody>
                                            <tr>
                                                <th>Our Mission</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <textarea id="editor" name="mission">{{$mvc->mission}}</textarea>
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
                                            <tr>
                                                <th>Our Vision</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <textarea id="teditor" name="vision">{{$mvc->vision}}</textarea>
                                                    <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
                                                    <script type="text/javascript">
                                                      CKEDITOR.replace('teditor', {
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
                                            <tr>
                                                <th>Why Choose us?</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <textarea id="ceditor" name="chooseus">{{$mvc->chooseus}}</textarea>
                                                      <script src="https://cdn.ckeditor.com/4.8.0/full-all/ckeditor.js"></script>
                                                        <script type="text/javascript">
                                                          CKEDITOR.replace('ceditor', {
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
                                            <tr class="text-right">
                                                <th>
                                                    <button type="submit" name="save" class="btn btn-outline-secondary">Save</button>
                                                </th>
                                            </tr>

                                        </tbody>
                                          
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
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
  @endsection