@extends('invasive.base')
@section('action-content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">Add new collection</div>
           <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
              <span class="sr-only">30% Complete (success)</span>
            </div>
          </div>
            <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ route('invasive.index') }}">
                {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name_state') ? ' has-error' : '' }}">
                  <label for="name_state" class="col-md-3 control-label">State:</label>
                      <div class="col-md-6">
                        <select id="name_state" type="text" placeholder="Enter Name state" class="form-control" name="name_state" value="{{ old('name_state') }}">
                            <option> None </option>
                            <option> 2 </option>
                            <option> 3 </option>
                        </select>
                            @if ($errors->has('name_state'))
                              <span class="help-block">
                                <strong>{{ $errors->first('name_state') }}</strong>
                              </span>
                            @endif
                      </div>
              </div>

              <div class="form-group{{ $errors->has('name_province') ? ' has-error' : '' }}">
                <label for="name_province" class="col-md-3 control-label">Province:</label>
                    <div class="col-md-6">
                        <select id="name_province" type="text" placeholder="Enter Province name" class="form-control" name="name_province" value="{{ old('name_province') }}">
                            <option>None</option>
                            <option>2</option>
                            <option></option>
                        </select>
                            @if ($errors->has('name_province'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name_province') }}</strong>
                              </span>
                            @endif
                   </div>
              </div>

              <div class="form-group{{ $errors->has('name_city') ? ' has-error' : '' }}">
                <label for="name_city" class="col-md-3 control-label">City:</label>
                    <div class="col-md-6">
                        <select id="name_city" type="text" placeholder="Enter City" class="form-control" name="name_city" value="{{ old('name_city') }}">
                            <option>None</option>
                            <option>2</option>
                        </select>
                          @if ($errors->has('name_city'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('name_city') }}</strong>
                              </span>
                            @endif
                    </div>
              </div>

              <div class="form-group{{ $errors->has('name_district') ? ' has-error' : '' }}">
                <label for="name_district" class="col-md-3 control-label">District:</label>
                    <div class="col-md-6">
                      <select id="name_district" type="text" class="form-control"  placeholder="Enter District" name="synonim" value="{{ old('name_district') }}">
                        <option>None</option>
                        <option>2</option>
                        <option>3</option>
                      </select>
                            @if ($errors->has('name_district'))
                              <span class="help-block">
                                <strong>{{ $errors->first('name_district') }}</strong>
                              </span>
                            @endif
                    </div>
            </div>


            <div class="form-group{{ $errors->has('name_village') ? ' has-error' : '' }}">
                <label for="name_village" class="col-md-3 control-label">Village:</label>
                  <div class="col-md-6">
                    <select id="name_village" type="text" placeholder="Enter Village" class="form-control" name="name_village" value="{{ old('name_village') }}">
                        <option>None</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                        @if ($errors->has('name_village'))
                          <span class="help-block">
                            <strong>{{ $errors->first('name_village') }}</strong>
                          </span>
                        @endif
                  </div>
              </div>

            <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}">
              <label for="longitude" class="col-md-3 control-label">Longitude:</label>
                  <div class="col-md-6">
                      <input id="longitude" type="number" placeholder="Enter longitude" class="form-control" name="longitude" value="{{ old('longitude') }}">

                        @if ($errors->has('longitude'))
                            <span class="help-block">
                              <strong>{{ $errors->first('longitude') }}</strong>
                            </span>
                          @endif
                  </div>
            </div>
            <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}">
                <label for="latitude" class="col-md-3 control-label">Latitude:</label>

                <div class="col-md-6">
                    <input id="latitude" type="number" placeholder="Enter latitude" class="form-control" name="latitude" value="{{ old('latitude') }}">

                    @if ($errors->has('latitude'))
                        <span class="help-block">
                            <strong>{{ $errors->first('latitude') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('altitude') ? ' has-error' : '' }}">
                <label for="altitude" class="col-md-3 control-label">Altitude:</label>

                <div class="col-md-6">
                    <input id="altitude" type="number" placeholder="Enter altitude" class="form-control" name="altitude" value="{{ old('altitude') }}" >

                    @if ($errors->has('altitude'))
                        <span class="help-block">
                            <strong>{{ $errors->first('altitude') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

           <!--  <div id="map" style="width: 50%; height: 300px; margin-left: 270px"></div> -->

            <!-- <div class="form-group">
                <div class"col-md-12">
                  <div class="col-md-6" style="margin-left: 100px">
                    <button type="submit" class="btn btn-primary" action="{{ route('invasive.createdesc') }}" >Previous</button>
                  </div>
                  <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>
            </div> -->
        <div class="col-md-12">
          <ul class="pager">
            <div class="col-md-6">
              <li class="previous"><button type="submit" class="btn btn-primary" onclick="window.location='{{ route('invasive.createdesc') }}'"><span aria-hidden="true">&larr;</span>previous</button></li>
                  </div>
            <div class="col-md-6">
              <li class="next"><button type="submit" class="btn btn-primary">Next<span aria-hidden="true">&rarr;</span></button></li>
            </div>
         </ul>
      </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
<!-- <script type="text/javascript">
function initialize() {
   var latlng = new google.maps.LatLng(28.535516,77.391026);
    var map = new google.maps.Map(document.getElementById('map'), {
      center: latlng,
      zoom: 13
    });
    var marker = new google.maps.Marker({
      map: map,
      position: latlng,
      draggable: false,
      anchorPoint: new google.maps.Point(0, -29)
   });
    var infowindow = new google.maps.InfoWindow();
    google.maps.event.addListener(marker, 'click', function() {
      var iwContent = '<div id="iw_container">' +
      '<div class="iw_title"><b>Location</b> : Noida</div></div>';
      // including content to the infowindow
      infowindow.setContent(iwContent);
      // opening the infowindow in the current map and at the current marker location
      infowindow.open(map, marker);
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script> -->
<!-- <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7PbVk8u2stP5B72fzxgVjHI_MFVGa5Ng&callback=initMap">
</script> -->
@endsection
