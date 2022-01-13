  @extends('layouts.backend.main')
  @section('content')
  @section('title','Social')
 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body mt-5">
             <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Social Media Management</h4>
                                <div class="basic-list-group">
                                    <div class="row mt-3">
                                        <div class="col-md-2 h4">Twitter</div>
                                        <div class="col-md-2 h4">Facebook</div>
                                        <div class="col-md-2 h4">Instagram</div>
                                        <div class="col-md-2 h4">Skype</div>
                                        <div class="col-md-2 h4">LinkedIn</div>
                                        <div class="col-md-2 h4">Action</div>
                                    </div>
                                      @foreach($socialss as $social)
                                    <div class="row mt-3">
                                        <div class="col-md-2"><i class="fa fa-twitter-square" style="font-size:48px; color: #0275d8;" aria-hidden="true"></i></div>
                                        <div class="col-md-2"><i class="fa fa-facebook-square" style="font-size:48px; color: #0275d8;" aria-hidden="true"></i></div>
                                        
                                        <div class="col-md-2"><i class="fa fa-instagram" style="font-size:48px; color: #0275d8;" aria-hidden="true"></i></div>
                                        
                                        <div class="col-md-2"><i class="fa fa-skype" style="font-size:48px; color: #0275d8;" aria-hidden="true"></i></div>
                                        
                                        <div class="col-md-2"><i class="fa fa-linkedin-square" style="font-size:48px; color: #0275d8;" aria-hidden="true"></i></div>

                                        <div class="col-md-2"><a href="{{route('edit.social',$social->id)}}" class="btn btn-light" data-toggle="modal" data-target="#basicModal">Edit</a></div>
                                    </div>
                                    <div class="row mt-3">
                                      
                                        <div class="col-md-2"><label>{{$social->twitter}}</label></div>
                                        <div class="col-md-2"><label>{{$social->facebook}}</label></div>
                                        <div class="col-md-2"><label>{{$social->instagram}}</label></div>
                                        <div class="col-md-2"><label>{{$social->skype}}</label></div>
                                        <div class="col-md-2"><label>{{$social->linkedin}}</label></div>
                                        @endforeach
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
            <!-- Edit Modal -->
                   <div class="modal fade" id="basicModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Social Media</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                   <form method="POST" action="{{route('update.social')}}">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$social->id}}">
                                                        <table class="table">
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-twitter-square" style="font-size:50px; color: #0275d8;" aria-hidden="true"></i>
                                                            </td>
                                                            
                                                            <td>
                                                                <input class="form-control" type="text" name="twitter" value="{{$social->twitter}}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-facebook-square" style="font-size:50px; color: #0275d8;" aria-hidden="true"></i>
                                                            </td>
                                                            
                                                            <td>
                                                                <input class="form-control" type="text" name="facebook" value="{{$social->facebook}}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-instagram" style="font-size:50px; color: #0275d8;" aria-hidden="true"></i>
                                                            </td>
                                                            
                                                            <td>
                                                                <input class="form-control" type="text" name="instagram" value="{{$social->instagram}}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-skype" style="font-size:50px; color: #0275d8;" aria-hidden="true"></i>
                                                            </td>
                                                            
                                                            <td>
                                                                <input class="form-control" type="text" name="skype" value="{{$social->skype}}">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <i class="fa fa-linkedin-square" style="font-size:49px; color: #0275d8;" aria-hidden="true"></i>
                                                            </td>
                                                            
                                                            <td>
                                                                <input class="form-control" type="text" name="linkedin" value="{{$social->linkedin}}">
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