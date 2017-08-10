@section('js')
<script type="text/javascript">
      function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showgambar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#inputgambar").change(function () {
        readURL(this);
    });
</script>
@stop
@extends('invasive.base')
@section('action-content')
<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading">Add new collection</div>
        
          <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
              <span class="sr-only">30% Complete (success)</span>
            </div>
          </div>
       
            <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ route('invasive.createloc') }}">
                {{ csrf_field() }}

          <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
            <label for="description" class="col-md-2 control-label">Description:</label>
              <div class="col-md-8">
                  <textarea id="description"  rows="7" cols="5" oneKeyPress placeholder="Enter description" class="form-control" name="description" value="{{ old('description') }}" required autofocus ></textarea>
                  @if ($errors->has('description'))
                    <span class="help-block">
                      <strong>{{ $errors->first('description') }}</strong>
                    </span>
                  @endif
              </div>
          </div>

          <div class="form-group">
            <label for="distribution" class="col-md-2 control-label">Distribution:</label>
                <div class="col-md-8">
                    <textarea id="distribution" rows="7" cols="3" oneKeyPressclass placeholder="Enter distribution" class="form-control" name="distribution" value="{{ old('distribution') }}"></textarea>
                    @if ($errors->has('distribution'))
                      <span class="help-block">
                        <strong>{{ $errors->first('distribution') }}</strong>
                      </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="ecology" class="col-md-2 control-label">Ecology:</label>
                  <div class="col-md-8">
                    <textarea id="ecology" rows="7" cols="5" oneKeyPress placeholder="Enter ecology" class="form-control" name="ecology" value="{{ old('ecology') }}" ></textarea>
                  </div>
            </div>

            <div class="form-group">
                <label for="chemical_ctrl" class="col-md-2 control-label">Chemical Control:</label>
                  <div class="col-md-8">
                    <textarea id="chemical_ctrl" rows="7" cols="5" oneKeyPress  placeholder="Enter chemical control"class="form-control" name="chemical_ctrl" value="{{ old('chemical_ctrl') }}" ></textarea>
                  </div>
            </div>

            <div class="form-group{{ $errors->has('manual_ctrl') ? ' has-error' : '' }}">
                <label for="manual_ctrl" class="col-md-2 control-label">Manual Control:</label>
                    <div class="col-md-8">
                      <textarea id="manual_ctrl" rows="7" cols="5" oneKeyPress placeholder="Enter manual control" class="form-control" name="manual_ctrl" value="{{ old('manual_ctrl') }}" ></textarea>
                    </div>
                </div>

            <div class="form-group{{ $errors->has('biological_ctrl') ? ' has-error' : '' }}">
                <label for="biological_ctrl" class="col-md-2 control-label">Biological Control :</label>
                    <div class="col-md-8">
                        <textarea id="biological_ctrl" rows="7" cols="5" oneKeyPress placeholder="Enter chemical control" class="form-control" name="biological_ctrl" value="{{ old('biological_ctrl') }}"></textarea>
                    </div>
            </div>

            <div class="form-group{{ $errors->has('prevention') ? ' has-error' : '' }}">
                <label for="preventioin" class="col-md-2 control-label">Prevention:</label>
                    <div class="col-md-8">
                        <textarea id="prevention" rows="7" cols="5" oneKeyPress  placeholder="Enter prevention"class="form-control" name="prevention" value="{{ old('prevention') }}" ></textarea>
                    </div>
            </div>

            <div class="form-group{{ $errors->has('utilization') ? ' has-error' : '' }}">
                <label for="utilization" class="col-md-2 control-label">Uses:</label>
                      <div class="col-md-8">
                        <textarea id="utilization"rows="7" cols="5" oneKeyPress placeholder="Enter uses" class="form-control" name="utilization" value="{{ old('utilization') }}" ></textarea>
                      </div>
            </div>

            <div class="form-group{{ $errors->has('risk_analisis') ? ' has-error' : '' }}">
                <label for="risk_analisis" class="col-md-2 control-label">Risk Analysis:</label>
                    <div class="col-md-8">
                        <textarea id="risk_analisis" rows="7" cols="5" oneKeyPress placeholder="Enter risk analysis" class="form-control" name="risk_analisis" value="{{ old('risk_analisis') }}"></textarea>
                    </div>
              </div>

            <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                  <label for="contact" class="col-md-2 control-label">Contact Person:</label>
                      <div class="col-md-8">
                        <textarea id="contact" rows="5" cols="5" oneKeyPress placeholder="Enter contact person" class="form-control" name="contact" value="{{ old('contact') }}"></textarea>
                      </div>
            </div>

            <div class="form-group{{ $errors->has('reference') ? ' has-error' : '' }}">
                <label for="reference" class="col-md-2 control-label">Reference :</label>
                    <div class="col-md-8">
                      <textarea id="input" rows="7" cols="5" placeholder="Enter reference" class="form-control" name="content"  required autofocus></textarea>
                        @if ($errors->has('reference'))
                          <span class="help-block">
                              <strong>{{ $errors->first('reference') }}</strong>
                          </span>
                        @endif
                    </div>
              </div>

              <div class="form-group{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
                  <label for="picture" class="col-md-2 control-label">Select image to upload :</label>
                    <!-- Pilih Gambar 1 -->
                    <div class="col-md-3">
                    <div class="col-md-8">
                      <input type="file" name="gambar" id="inputgambar" clas="validate"/>
                      <input type="hidden" value="{{ csrf_token() }}" name="_token">
                      <img src="http://placehold.it/200x200" id="showgambar" style="max-width: 200px;max-height:200px;float:left;"/>
                    </div>
                  </div>
                    <!-- Pilih Gambar 2 -->
                    <div class="col-md-3">
                    <div class="col-md-8">
                      <input type="file" name="gambar" id="inputgambar" clas="validate"/>
                      <input type="hidden" value="{{ csrf_token() }}" name="_token">
                      <img src="http://placehold.it/200x200" id="showgambar" style="max-width: 200px;max-height:200px;float:left;"/>
                    </div>
                  </div>
                    <!-- Pilih Gambar 3 -->
                    <div class="col-md-3">
                    <div class="col-md-8">
                      <input type="file" name="gambar" id="inputgambar" clas="validate"/>
                      <input type="hidden" value="{{ csrf_token() }}" name="_token">
                        <img src="http://placehold.it/200x200" id="showgambar" style="max-width: 200px;max-height:200px;float:left;"/>
                    </div>
                  </div>
                </div>

             <div class="col-md-12">
                <ul class="pager">
                  <div class="col-md-6">
                    <li class="previous"><button type="submit" class="btn btn-primary" onclick="window.location='{{ route('invasive.create') }}'"><span aria-hidden="true">&larr;</span>previous</button></li>
                  </div>
                  <div class="col-md-6">
                    <li class="next"><button type="submit" class="btn btn-primary" onclick="window.location='{{ route('invasive.createloc') }}'">Next<span aria-hidden="true">&rarr;</span></button></li>
                  </div>
              </ul>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
<script type="text/javascript">
  tinymce.init({
  selector : "textarea",
  plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
  toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    });
</script>
@endsection
