@extends('invasive.base')
@section('action-content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">Add new collection</div>
            <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ route('invasive.index') }}">
                {{ csrf_field() }}

              <div class="form-group{{ $errors->has('name_state') ? ' has-error' : '' }}">
                  <label for="name_state" class="col-md-3 control-label">State:</label>
                      <div class="col-md-6">
                        <input id="name_state" type="text" placeholder="Enter Name state" class="form-control" name="name_state" value="{{ old('name_state') }}" required autofocus>

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

                        <input id="name_province" type="text" placeholder="Enter Province name" class="form-control" name="name_province" value="{{ old('name_province') }}" required autofocus>

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
                      <i>
                        <input id="name_city" type="text" placeholder="Enter City" class="form-control" name="name_city" value="{{ old('name_city') }}" required autofocus>
                      </i>
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
                    <i>
                      <input id="name_district" type="text" class="form-control"  placeholder="Enter District" name="synonim" value="{{ old('name_district') }}" required autofocus>
                    </i>
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
                    <input id="name_village" type="text" placeholder="Enter Village" class="form-control" name="name_village" value="{{ old('name_village') }}" required autofocus>
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
                      <input id="longitude" type="text" placeholder="Enter longitude" class="form-control" name="longitude" value="{{ old('longitude') }}" required autofocus>
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
                    <input id="latitude" placeholder="Enter latitude" class="form-control" name="latitude" value="{{ old('latitude') }}" required autofocus>

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
                    <input id="altitude" placeholder="Enter altitude" class="form-control" name="altitude" value="{{ old('altitude') }}" required autofocus>

                    @if ($errors->has('altitude'))
                        <span class="help-block">
                            <strong>{{ $errors->first('altitude') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
          <div class="form-group">
            <div class="col-md-9 text-right ">

                <button type="button" class="btn btn-primary" onclick="window.location='{{ route('invasive.createdesc') }}'" style="margin-right:50px">Previous</button>
                <button type="submit" class="btn btn-primary" onclick="window.location='{{ route('invasive.index') }}'">Submit</button>

          
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
@endsection
