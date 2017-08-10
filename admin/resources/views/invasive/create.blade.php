@extends('invasive.base')
@section('action-content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
         <div class="panel-heading">Add new collection</div>
          <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
              <span class="sr-only">30% Complete (success)</span>
            </div>
          </div>

         
            <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ route('invasive.createdesc') }}">
                {{ csrf_field() }}

              <div class="form-group{{ $errors->has('family') ? ' has-error' : '' }}">
                  <label for="family" class="col-md-3 control-label">Family:</label>
                      <div class="col-md-6">
                            <input id="family" type="text" placeholder="Enter Family name" class="form-control" name="family" value="{{ old('family') }}" required autofocus>
                       
                            @if ($errors->has('family'))
                              <span class="help-block">
                                <strong>{{ $errors->first('family') }}</strong>
                              </span>
                            @endif
                      </div>
              </div>

              <div class="form-group{{ $errors->has('genus') ? ' has-error' : '' }}">
                <label for="genus" class="col-md-3 control-label">Genus:</label>
                    <div class="col-md-6">
                           <input id="genus" type="text" placeholder="Enter Genus name" class="form-control" name="genus" value="{{ old('genus') }}" required autofocus>
                     
                            @if ($errors->has('genus'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('genus') }}</strong>
                              </span>
                            @endif
                   </div>
              </div>

              <div class="form-group{{ $errors->has('species') ? ' has-error' : '' }}">
                <label for="species" class="col-md-3 control-label">Species:</label>
                    <div class="col-md-6">
                      <i>
                        <input id="species" type="text" placeholder="Enter Species name" class="form-control" name="species" value="{{ old('species') }}" required autofocus>
                      </i>
                          @if ($errors->has('species'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('species') }}</strong>
                              </span>
                            @endif
                    </div>
              </div>

              <div class="form-group{{ $errors->has('synonim') ? ' has-error' : '' }}">
                <label for="synonim" class="col-md-3 control-label">Synonim:</label>
                    <div class="col-md-6">
                    <i>
                      <textarea id="synonim" type="text" class="form-control" rows="3" oneKeyPress  placeholder="Enter Synonim" name="synonim" value="{{ old('synonim') }}" required autofocus></textarea>
                    </i>
                            @if ($errors->has('synonim'))
                              <span class="help-block">
                                <strong>{{ $errors->first('synonim') }}</strong>
                              </span>
                            @endif
                    </div>
            </div>


            <div class="form-group{{ $errors->has('common_name') ? ' has-error' : '' }}">
                <label for="common_name" class="col-md-3 control-label">Common Name:</label>
                  <div class="col-md-6">
                    <input id="common_name" type="text" placeholder="Enter common name" class="form-control" name="common_name" value="{{ old('common_name') }}" required autofocus>
                        @if ($errors->has('common_name'))
                          <span class="help-block">
                            <strong>{{ $errors->first('common_name') }}</strong>
                          </span>
                        @endif
                  </div>
              </div>

            <div class="form-group{{ $errors->has('origin') ? ' has-error' : '' }}">
              <label for="origin" class="col-md-3 control-label">Origin:</label>
                  <div class="col-md-6">
                      <input id="origin" type="text" placeholder="Enter origin" class="form-control" name="origin" value="{{ old('origin') }}" required autofocus>
                          @if ($errors->has('origin'))
                            <span class="help-block">
                              <strong>{{ $errors->first('origin') }}</strong>
                            </span>
                          @endif
                  </div>
            </div>
            <div class="form-group{{ $errors->has('invaded_habitat') ? ' has-error' : '' }}">
                <label for="invaded_habitat" class="col-md-3 control-label">Invaded Habitat:</label>

                <div class="col-md-6">
                    <textarea id="invaded_habitat" rows="3" oneKeyPress placeholder="Enter invaded habitat" class="form-control" name="invaded_habitat" value="{{ old('invaded_habitat') }}" required autofocus></textarea

                    @if ($errors->has('invaded_habitat'))
                        <span class="help-block">
                            <strong>{{ $errors->first('invaded_habitat') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

           <!--  <div class="form-group">
              <div class="col-md-9 text-right">
                <button type="submit" class="btn btn-primary">
                    Next
                </button>
              </div>
            </div> -->
          <div class="col-md-12 ">
            <ul class="pager">
              <li><button type="submit" class="btn btn-primary">Next</button></li>
            </ul>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
