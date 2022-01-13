  @extends('layouts.backend.main')
  @section('content')
  @section('title','Change PassWord')
 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

          
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="text-right">
                        </div>
                    </div>
                    <div class="card-body row">
                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <form method="POST" action="{{route('update.pass')}}">

                                @csrf

                                <thead>
                                <tr>
                                    <th>Change Password</th>
                                </tr>
                               <tr>
                                @foreach($user as $user)
                                    <td>
                                        <input type="hidden" name="id" value="{{$user->id}}">
                                      <label>Email</label>
                                        <input type="text" name="email" value="{{$user->email}}" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                       <td>
                                      <label>Password</label>
                                        <input type="text" name="password" value="{{$user->password}}" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       
                      <input type="submit" name="submit" value="SAVE" class="btn btn-success">

                                    </td>
                                </tr>
                                
                                     @endforeach
                                
                            </thead>
                            </form>
                            <tbody>
                             
                                                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- . 
 #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection