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
                                    <div class="box">
                                        <form class="form-horizontal" role="form" method="POST" action="{{ route('weedherba.store') }}">
                                            {{ csrf_field() }}
                                        
                                            <!--Kolom kiri-->
                                            <div class="col-md-6">
                                                <div class="form-group{{$error->has('family')? 'has-error':''}}" style="margin-top:10px">
                                                <label for="family" class="col-md-2 col-md-offset-1" style="text-align:left">Family </label>
                                                <div class="col-md-8">
                                                     <input id="family" type="text" placeholder="Enter Family name" class="form-control" name="family" value="{{ old('famly') }}">
                                                     @if ($errors->has('family'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('family') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <!--KOlom Kanan-->
                                            <!--div class="col-md-6">
                                                <div class="form-group{{$error->has('family')? 'has-error':''}}" style="margin-top:10px">
                                                <label for="family" class="col-md-2 col-md-offset-1 " style="text-align:left">Family</label>
                                                <div class="col-md-8">
                                                     <input id="family" type="text" placeholder="Enter Family name" class="form-control" name="family" value="{{ old('famly') }}">
                                                     @if ($errors->has('family'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('family') }}</strong>
                                                        </span>
                                                     @endif
                                                </div>
                                            </div-->

                                        
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