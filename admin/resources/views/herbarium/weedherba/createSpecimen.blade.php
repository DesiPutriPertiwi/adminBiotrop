@extends('herbarium.weedherba.base')

@section('action-content')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script>

    <section class="content">
        <div class="box">
            <div class="box header">
                <div class="row">
                    <div class="col-md-8">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-11">
                                    <div class="box-title">
                                        <h4> Add new Collection</h4>
                                    </div>
                                    <div class="box-title text-right">
                                        <h6> Formulir 2 of 2</h6>
                                    </div>
                                    <div class="box">
                                        <form class="form-horizontal" role="form" method="POST" action="{{ route('weedherba.store') }}">
                                        {{ csrf_field() }}
                                            <!--Kolom kiri 1-->
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('family') ? ' has-error' : '' }}" style="margin-top:10px" >
                                                    <label for="family" class="col-md-2 control-label" style="text-align:left">Family</label>
                                                    <div class="col-md-8">
                                                        <input id="family" type="text" placeholder="Enter Family name" class="form-control" name="family" value="{{ old('family') }}">
                                                        @if ($errors->has('family'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('family') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Kolom kanan 1-->
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('genus') ? ' has-error' : '' }}" style="margin-top:10px" >
                                                    <label for="genus" class="col-md-2 control-label" style="text-align:left">Genus</label>
                                                    <div class="col-md-8">
                                                        <input id="genus" type="text" placeholder="Enter Genus name" class="form-control" name="genus" value="{{ old('genus') }}">
                                                        @if ($errors->has('genus'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('family') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Kolom kiri 2-->
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('species') ? ' has-error' : '' }}" style="margin-top:10px" >
                                                    <label for="species" class="col-md-2 control-label" style="text-align:left">Species</label>
                                                    <div class="col-md-8">
                                                        <input id="species" type="text" placeholder="Enter Species name" class="form-control" name="species" value="{{ old('species') }}">
                                                        @if ($errors->has('species'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('species') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Kolom kanan 2-->
                                            <div class="col-md-6">
                                                <div class="form-group{{ $errors->has('forma') ? ' has-error' : '' }}" style="margin-top:10px" >
                                                    <label for="genus" class="col-md-2 control-label" style="text-align:left">Forma</label>
                                                    <div class="col-md-8">
                                                        <input id="forma" type="text" placeholder="Enter Forma name" class="form-control" name="forma" value="{{ old('forma') }}">
                                                        @if ($errors->has('forma'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('forma') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4 text-right"> 
                                                    <a type="submit" class="btn btn-primary" href="{{route('weedherba.store')}}">Submit</a>
                                                    <button type="button" class="btn btn-secondary" onclick="window.location='{{ url("herbarium-management/weedherba/createNext") }}'" style="margin-left:10px">Previous</button>
                                                </div>
                                            </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
             </div>
         </div>
    </section>

@endsection