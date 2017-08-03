@extends('herbarium.forestherba.base')

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
                                <div class="col-md-17 col-md-offset-1">
                                    <div class="box-title">
                                        <h4> Add new Collection</h4>
                                    </div>
                                    <div class="box-title text-right">
                                        <h6> Formulir 1 of 2</h6>
                                    </div>
                                    <div class="box">
                                        <form class="form-horizontal" role="form" method="POST" action="{{ route('forestherba.createnext') }}" style="margin-top:10px">
                                        {{ csrf_field() }}
                                        
                                            <!--Collector-->
                                            <label style="text-align= right margin-button:5px">
                                                <h5 style="text:arial narrow">Collector Data :</h5>
                                            </label>
                                                <div class="form-group{{ $errors->has('name_collector') ? ' has-error' : '' }}" >
                                                    <label for="name_collector" class="col-md-2 col-md-offset-1" style="text-align= left ">Collector Name</label>
                                                    <div class="col-md-6">
                                                        <input id="name_collector" type="text" class="form-control" placeholder="One of collector" name="name_collector" value="{{ old('name_collector') }}" required autofocus>

                                                        @if ($errors->has('name_collector'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name_collector') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('tim_collector') ? ' has-error' : '' }}" >
                                                    <label for="tim_collector" class="col-md-2 col-md-offset-1" style="text-align= left ">Collector Team</label>
                                                    <div class="col-md-6">
                                                        <input id="tim_collector" type="text" class="form-control" placeholder="Another of collector" name="tim_collector" value="{{ old('tim_collector') }}" required autofocus>

                                                        @if ($errors->has('tim_collector'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('tim_collector') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('date_collector') ? ' has-error' : '' }}" >
                                                    <label for="date_collector" class="col-md-2 col-md-offset-1" style="text-align= left ">Date Collector</label>
                                                    <div class="col-md-6">
                                                        <input id="date_collector" type="date" class="date-control" name="date_collector" value="{{ old('date_collector') }}" required autofocus>

                                                        @if ($errors->has('date_collector'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('date_collector') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                    
                                                <div class="form-group{{ $errors->has('number_collection') ? ' has-error' : '' }}" >
                                                    <label for="number_collection" class="col-md-2 col-md-offset-1"  style="text-align= left ">Number of Collection</label>
                                                    <div class="col-md-2">
                                                        <input id="number_collection" type="text" class="form-control" placeholder="Number collection" name="number_collection" value="{{ old('number_collector') }}" required autofocus>

                                                        @if ($errors->has('number_collection'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('number_collection') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('name_state') ? ' has-error' : '' }}" >
                                                    <label for="name_state" class="col-md-2 col-md-offset-1" style="text-align= left ">State</label>
                                                    <div class="col-md-6">
                                                        <select id="name_state" type="name_state" class="form-control" placeholder="State Name" name="name_state" value="{{ old('name_collector') }}" autofocus>
                                                            <option>-- Select --</option>
                                                        </select> 
                                                        @if ($errors->has('name_state'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name_state') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('name_province') ? ' has-error' : '' }}" >
                                                    <label for="name_province" class="col-md-2 col-md-offset-1" style="text-align= left ">Province</label>
                                                    <div class="col-md-6">
                                                        <select id="name_province" type="text" class="form-control" placeholder="Province Name" name="name_province" value="{{ old('name_province') }}"autofocus>
                                                            <option>-- Select --</option>
                                                        </select>
                                                        @if ($errors->has('name_province'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name_province') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('name_city') ? ' has-error' : '' }}" >
                                                    <label for="name_city" class="col-md-2 col-md-offset-1" style="text-align= left ">City</label>
                                                    <div class="col-md-6">
                                                        <select id="name_city" type="text" class="form-control" placeholder="City Name" name="name_city" value="{{ old('name_city') }}" autofocus>
                                                            <option>-- Select --</option>
                                                        </select>
                                                        @if ($errors->has('name_city'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name_city') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('name_district') ? ' has-error' : '' }}" >
                                                    <label for="name_district" class="col-md-2 col-md-offset-1" style="text-align= left ">District</label>
                                                    <div class="col-md-6">
                                                        <select id="name_district" type="text" class="form-control" placeholder="District Name" name="name_district" value="{{ old('name_district') }}"autofocus>
                                                            <option>-- Select --</option>
                                                        </select>
                                                        @if ($errors->has('name_district'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name_district') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('name_vilage') ? ' has-error' : '' }}" >
                                                    <label for="name_vilage" class="col-md-2 col-md-offset-1" style="text-align= left ">Vilage</label>
                                                    <div class="col-md-6">
                                                        <select id="name_vilage" type="text" class="form-control" placeholder="Vilage Name" name="name_vilage" value="{{ old('name_vilage') }}"autofocus>
                                                            <option>-- Select --</option>
                                                        </select>
                                                        @if ($errors->has('name_vilage'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name_vilage') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('latitude') ? ' has-error' : '' }}" >
                                                    <label for="latitude" class="col-md-2 col-md-offset-1" style="text-align= left ">Latitude</label>
                                                    <div class="col-md-6">
                                                        <input id="latitude" type="text" class="form-control" placeholder="Latitude" name="latitude" value="{{ old('latitude') }}" autofocus>

                                                        @if ($errors->has('latitude'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('latitude') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('longitude') ? ' has-error' : '' }}" >
                                                    <label for="longitude" class="col-md-2 col-md-offset-1" style="text-align= left ">Longitude</label>
                                                    <div class="col-md-6">
                                                        <input id="longitude" type="text" class="form-control" placeholder="Longitude" name="longitude" value="{{ old('longitude') }}" autofocus>

                                                        @if ($errors->has('longitude'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('longitude') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('atitude') ? ' has-error' : '' }}" >
                                                    <label for="atitude" class="col-md-2 col-md-offset-1" style="text-align= left ">Atitude</label>
                                                    <div class="col-md-6">
                                                        <input id="atitude" type="text" class="form-control" placeholder="Atitude" name="atitude" value="{{ old('atitude') }}"autofocus>

                                                        @if ($errors->has('atitude'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('atitude') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('tim_collector') ? ' has-error' : '' }}" >
                                                    <label for="tim_collector" class="col-md-2 col-md-offset-1" style="text-align= left ">Maps</label>
                                                    <div class="col-md-6">
                                                    </div>
                                                </div>

                                            <!--Determinate-->
                                            <label style="text-align= right margin-button:5px">
                                                <h5 style="text:arial narrow">Determinate Data :</h5>
                                            </label>
                                                <div class="form-group{{ $errors->has('name_author') ? ' has-error' : '' }}" >
                                                    <label for="name_author" class="col-md-2 col-md-offset-1" style="text-align= left ">Determinate Name</label>
                                                    <div class="col-md-6">
                                                        <input id="name_author"   placeholder="Determinate Name" type="text" class="form-control" name="name_collector" value="{{ old('name_collector') }}" required autofocus>

                                                        @if ($errors->has('name_author'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('name_author') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('email_author') ? ' has-error' : '' }}" >
                                                    <label for="email_author" class="col-md-2 col-md-offset-1"  style="text-align= left ">Determinate Email</label>
                                                    <div class="col-md-6">
                                                        <input id="email_author" type="text" class="form-control"   placeholder="Determinate Email" name="email_author" value="{{ old('email_author') }}"autofocus>

                                                        @if ($errors->has('email_author'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('email_author') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group{{ $errors->has('date_author') ? ' has-error' : '' }}" >
                                                    <label for="date_author" class="col-md-2 col-md-offset-1" style="text-align= left ">Date Identification</label>
                                                    <div class="col-md-6">
                                                        <input id="date_author" type="date" class="date-author" name="date_author" value="{{ old('date_author') }}" required autofocus>

                                                        @if ($errors->has('date_author'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('date_author') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                
                                                <div class="form-group{{ $errors->has('institude_agency') ? ' has-error' : '' }}" >
                                                    <label for="institude_agency" class="col-md-2 col-md-offset-1" style="text-align= left ">Institude/Agency Of Determinate</label>
                                                    <div class="col-md-6">
                                                        <textarea id="institude_agency" row="3" cols="5" oneKeyPress placeholder="Enter Origin of Determinate " class="form-control" name="name_collector" value="{{ old('name_collector') }}"autofocus></textarea>

                                                        @if ($errors->has('institude_agency'))
                                                            <span class="help-block">
                                                                <strong>{{ $errors->first('institude_agency') }}</strong>
                                                            </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4 text-right">
                                                    <button type="submit" class="btn btn-primary" >Next</button>
                                                    <button type="button" class="btn btn-secondary" onclick="window.location='{{ url("herbarium-management/weedherba") }}'" style="margin-left:10px">Cancel</button>
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