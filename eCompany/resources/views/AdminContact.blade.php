  @extends('layouts.backend.main')
  @section('content')
  @section('title','Contact')
 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body mt-5">
             <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contact Management</h4>
                                <div class="basic-list-group">
                                    <hr>
                                    <div class="row mt-3">
                                        <div class="col-md-3 h4">Address</div>
                                        <div class="col-md-3 h4">Email</div>
                                        <div class="col-md-3 h4">Phone</div>
                                        <div class="col-md-3 h4">Action</div>
                                    </div>
                                    @foreach($contact as $contact)
                                    <div class="row mt-3">
                                        <div class="col-md-3"><i class="fa fa-map-marker ml-3" style="font-size:48px; color: #0275d8;" aria-hidden="true"></i></div>
                                        <div class="col-md-3 ml-1"><i class="fa fa-envelope-o" style="font-size:48px; color: #0275d8;" aria-hidden="true"></i></div>
                                        
                                        <div class="col-md-3 ml-1"><i class="fa fa-phone-square" style="font-size:48px; color: #0275d8;" aria-hidden="true"></i></div>

                                        <div class="col-md-2"><a href="{{route('edit.contact',$contact->id)}}" class="btn btn-light" data-toggle="modal" data-target="#basicModal">Edit</a></div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-3"><label>{{$contact->address}}</label></div>
                                        <div class="col-md-3"><label>{{$contact->email}}</label></div>
                                        <div class="col-md-3"><label>{{$contact->phone}}</label></div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
            <!-- Edit Modal -->
                   <div class="modal fade" id="basicModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Contact</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form method="POST" action="{{route('update.contact')}}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$contact->id}}">
                                                        <table class="table">
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-map-marker" style="font-size:50px; color: #0275d8;" aria-hidden="true"></i>
                                                            </td>
                                                            
                                                            <td>
                                                                <input class="form-control" type="text" name="address" value="{{$contact->address}}" placeholder="Enter Your Company Address">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-envelope-o" style="font-size:50px; color: #0275d8;" aria-hidden="true"></i>
                                                            </td>
                                                            
                                                            <td>
                                                                <input class="form-control" type="text" name="email" value="{{$contact->email}}" placeholder="Enter Your Company Mail">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-phone-square" style="font-size:50px; color: #0275d8;" aria-hidden="true"></i>
                                                            </td>
                                                            
                                                            <td>
                                                                <input class="form-control" type="number" name="phone" value="{{$contact->phone}}" >
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td class="text-right">
                                                                <button type="submit" class="btn btn-primary" value="save">Save Changes</button>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                   </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
            <!-- /Edit Modal -->
@endsection