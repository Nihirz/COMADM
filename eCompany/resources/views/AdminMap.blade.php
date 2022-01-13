  @extends('layouts.backend.main')
  @section('content')
  @section('title','Map')
 <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body mt-4">

              <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Map</h4>
                              
                            
                                
                                <div class="basic-list-group row">
                                    <ul class="list-group">
                                        @foreach($map as $map)
                                        <li>
                                            <iframe src="{{$map->map}}" width="1000" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        </li>
                                        @endforeach
                                        <li class="text-right mt-3">
                                            <a href="{{route('edit.map',$map->id)}}" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Edit</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
 <div class="modal fade" id="basicModal">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Map</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <form method="POST" action="{{route('update.map')}}"> 
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$map->id}}">
                                                    <div class="modal-body">
                                                    <label class="bold">Enter Your Location</label>
                                                    <input type="text" class="form-control" value="{{$map->map}}" name="map" placeholder="Please Enter Embed Map Link">
                                                </div>
                                                <div class="text-right">
                                                    <button type="submit" class="mr-3 text-right btn btn-primary" value="save">Save</button>
                                                </div>
                                                </form>
                                                <div class="modal-footer">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
@endsection
