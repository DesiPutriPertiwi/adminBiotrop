@extends('herbarium.weedherba.base')

@section('action-content')
    <!--link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.6/summernote.js"></script-->

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
                                        <h6> Formulir 2 of 2</h6>
                                    </div>
                                    <div class="box">
                                        <form class="form-horizontal" role="form" method="POST" action="{{ route('weedherba.store') }}">
                                        {{ csrf_field() }}

                                            <div class="form-group{{ $errors->has('$type_status') ? ' has-error' : '' }}"   style="margin-top:10px">
                                                <label for="$type_status" class="col-md-2 col-md-offset-1" style="text-align:left">Status Weed</label>
                                                <div class="col-md-2">
                                                    <select id="$type_status" type="text"  class="form-control" name="$type_status" value="{{ old('$type_status') }}">
                                                        <option>--Select--</option>
                                                        <option >BIOTROP</option>
                                                        <option >Duplicate</option>
                                                    </select>
                                                    
                                                    @if ($errors->has('type_status'))
                                                        <span class="help-block">
                                                             <strong>{{ $errors->first('type_status') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="form-group{{ $errors->has('label_weed') ? ' has-error' : '' }}" >
                                                <label for="label_weed" class="col-md-2 col-md-offset-1" style="text-align:left">Label Weed</label>
                                                <div class="col-md-2">
                                                    <input id="label_weed" type="number" class="form-control" name="label_weed" value="{{ old('<label_weed></label_weed>') }}">
                                                    @if ($errors->has('label_weed'))
                                                        <span class="help-block">
                                                             <strong>{{ $errors->first('label_weed') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('family') ? ' has-error' : '' }}" >
                                                <label for="family" class="col-md-2 col-md-offset-1" style="text-align:left">Family</label>
                                                <div class="col-md-6">
                                                    <input id="family" type="text" placeholder="Family name" class="form-control" name="family" value="{{ old('family') }}">
                                                    @if ($errors->has('family'))
                                                        <span class="help-block">
                                                             <strong>{{ $errors->first('family') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                           
                                            <div class="form-group{{ $errors->has('genus') ? ' has-error' : '' }}"  >
                                                <label for="genus" class="col-md-2 col-md-offset-1" style="text-align:left">Genus</label>
                                                <div class="col-md-6">
                                                    <input id="genus" type="text" placeholder="Genus name" class="form-control" name="genus" value="{{ old('genus') }}">
                                                    @if ($errors->has('genus'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('genus') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
            
                                            <div class="form-group{{ $errors->has('name_herbarium') ? ' has-error' : '' }}">
                                                <label for="name_herbarium" class="col-md-2 col-md-offset-1" style="text-align:left">Species</label>
                                                 <div class="col-md-6">
                                                    <i>                                                   
                                                        <input id="name_herbarium" type="text" placeholder="Species name" class="form-control" name="species" value="{{ old('name_herbarium') }}">
                                                    </i>
                                                    @if ($errors->has('name_herbarium'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name_herbarium') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
        
                                            <div class="form-group{{ $errors->has('subspecies') ? ' has-error' : '' }}"  >
                                                <label for="subspecies" class="col-md-2 col-md-offset-1" style="text-align:left">Subspecies</label>
                                                <div class="col-md-6">
                                                    <input id="subspecies" type="text" placeholder="Subspecies name" class="form-control" name="forma" value="{{ old('subspecies') }}">
                                                    @if ($errors->has('subspecies'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('subspecies') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('forma') ? ' has-error' : '' }}"  >
                                                <label for="forma" class="col-md-2 col-md-offset-1" style="text-align:left">Forma</label>
                                                <div class="col-md-6">
                                                    <input id="forma" type="text" placeholder="Forma name" class="form-control" name="forma" value="{{ old('forma') }}">
                                                    @if ($errors->has('forma'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('forma') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('origin_species') ? ' has-error' : '' }}" >
                                                <label for="origin_species" class="col-md-2 col-md-offset-1" style="text-align:left">Origin Species</label>
                                                <div class="col-md-6">
                                                    <input id="origin_species" type="text" placeholder="Origin Species" class="form-control" name="origin_species" value="{{ old('origin_species') }}">
                                                    @if ($errors->has('origin_species'))
                                                        <span class="help-block">
                                                             <strong>{{ $errors->first('origin_species') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('species_synonim') ? ' has-error' : '' }}"  >
                                                <label for="species_synonim" class="col-md-2 col-md-offset-1" style="text-align:left"> Species Synonim</label>
                                                <div class="col-md-6">
                                                    <input id="species_synonim" type="text" placeholder="Species Synonim" class="form-control" name="species_synonim" value="{{ old('species_synonim') }}">
                                                    @if ($errors->has('species_synonim'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('species_synonim') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="form-group{{ $errors->has('venacular_name') ? ' has-error' : '' }}"  >
                                                <label for="venacular_name" class="col-md-2 col-md-offset-1" style="text-align:left">Venacular</label>
                                                <div class="col-md-6">
                                                    <input id="venacular_name" type="text" placeholder="Velacular Name" class="form-control" name="venacular_name" value="{{ old('venacular_name') }}">
                                                    @if ($errors->has('venacular_name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('venacular_name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('venacular_name_indo') ? ' has-error' : '' }}"  >
                                                <label for="venacular_name_indo" class="col-md-2 col-md-offset-1" style="text-align:left">Venacular (Indonesia)</label>
                                                <div class="col-md-6">
                                                    <input id="venacular_name_indo" type="text" placeholder="Venacular Name Indonesia" class="form-control" name="venacular_name_indo" value="{{ old('venacular_name_indo') }}">
                                                    @if ($errors->has('venacular_name_indo'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('venacular_name_indo') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('venacular_name_local') ? ' has-error' : '' }}"  >
                                                <label for="venacular_name_local" class="col-md-2 col-md-offset-1" style="text-align:left">Venacular (Lokal)</label>
                                                <div class="col-md-6">
                                                    <input id="venacular_name_local" type="text" placeholder="Venacular Name Local" class="form-control" name="venacular_name_local" value="{{ old('venacular_name_local') }}">
                                                    @if ($errors->has('venacular_name_local'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('venacular_name_local') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group"  >
                                                <label for="description_species" class="col-md-2 col-md-offset-1" style="text-align:left">Description Species</label>
                                                <div class="col-md-7">
                                                    <textarea id="description_species" row="7" cols="5" oneKeyPress placeholder="Description Species" class="form-control" name="description_species" value="{{ old('description_species') }}"></textarea>
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('habitat') ? ' has-error' : '' }}"  >
                                                <label for="habitat" class="col-md-2 col-md-offset-1" style="text-align:left">Habitat</label>
                                                <div class="col-md-7">
                                                    <textarea id="habitat" row="7" cols="5" oneKeyPress placeholder="Habitat Species" class="form-control" name="habitat" value="{{ old('habitat') }}"></textarea>
                                                    @if ($errors->has('habitat'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('habitat') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div class="form-group{{ $errors->has('phenology') ? ' has-error' : '' }}"  >
                                                <label for="phenology" class="col-md-2 col-md-offset-1" style="text-align:left">Phenology</label>
                                                <div class="col-md-7">
                                                    <textarea id="phenology" row="7" cols="5" oneKeyPress placeholder="Phenology" class="form-control" name="phenology" value="{{ old('phenology') }}"></textarea>
                                                    @if ($errors->has('phenology'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('phenology') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('ecology') ? ' has-error' : '' }}"  >
                                                <label for="ecology" class="col-md-2 col-md-offset-1" style="text-align:left">Ecology</label>
                                                <div class="col-md-7">
                                                    <textarea id="ecology" row="7" cols="5" oneKeyPress placeholder="Ecology" class="form-control" name="ecology" value="{{ old('ecology') }}"></textarea>
                                                    @if ($errors->has('ecology'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('ecology') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('biology') ? ' has-error' : '' }}"  >
                                                <label for="biology" class="col-md-2 col-md-offset-1" style="text-align:left">Biology</label>
                                                <div class="col-md-7">
                                                    <textarea id="biology" row="7" cols="5" oneKeyPress placeholder="Biology" class="form-control" name="biology" value="{{ old('biology') }}"></textarea>
                                                    @if ($errors->has('biology'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('biology') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('habitus') ? ' has-error' : '' }}"  >
                                                <label for="habitus" class="col-md-2 col-md-offset-1" style="text-align:left">Habitus</label>
                                                <div class="col-md-7">
                                                    <textarea id="habitus" row="7" cols="5" oneKeyPress placeholder="Habitus Species" class="form-control" name="habitus" value="{{ old('habitus') }}"></textarea>
                                                    @if ($errors->has('habitus'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('habitus') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('description_leaf') ? ' has-error' : '' }}"  >
                                                <label for="description_leaf" class="col-md-2 col-md-offset-1" style="text-align:left">Description Leaf</label>
                                                <div class="col-md-7">
                                                    <textarea id="description_leaf" row="7" cols="5" oneKeyPress placeholder="Description Leaf" class="form-control" name="description_leaf" value="{{ old('description_leaf') }}"></textarea>
                                                    @if ($errors->has('description_leaf'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('description_leaf') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('description_root') ? ' has-error' : '' }}"  >
                                                <label for="description_root" class="col-md-2 col-md-offset-1" style="text-align:left">Description Root</label>
                                                <div class="col-md-7">
                                                    <textarea id="description_root" row="7" cols="5" oneKeyPress placeholder="Description Root" class="form-control" name="description_root" value="{{ old('description_root') }}"></textarea>
                                                    @if ($errors->has('description_root'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('description_root') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('description_fruit') ? ' has-error' : '' }}"  >
                                                <label for="description_fruit" class="col-md-2 col-md-offset-1" style="text-align:left">Description Fruit</label>
                                                <div class="col-md-7">
                                                    <textarea id="description_fruit" row="7" cols="5" oneKeyPress placeholder="Description Fruit" class="form-control" name="description_fruit" value="{{ old('description_fruit') }}"></textarea>
                                                    @if ($errors->has('description_fruit'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('description_fruit') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('description_steam') ? ' has-error' : '' }}"  >
                                                <label for="description_steam" class="col-md-2 col-md-offset-1" style="text-align:left">Description Steam</label>
                                                <div class="col-md-7">
                                                    <textarea id="description_steam" row="7" cols="5" oneKeyPress placeholder="Description Steam" class="form-control" name="description_steam" value="{{ old('forma') }}"></textarea>
                                                    @if ($errors->has('forma'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('forma') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>


                                            <div class="form-group{{ $errors->has('agricimport') ? ' has-error' : '' }}"  >
                                                <label for="agricimport" class="col-md-2 col-md-offset-1" style="text-align:left">Agricimport</label>
                                                <div class="col-md-7">
                                                    <textarea id="agricimport" row="7" cols="5" oneKeyPress placeholder="Agricimport" class="form-control" name="agricimport" value="{{ old('agricimport') }}"></textarea>
                                                    @if ($errors->has('agricimport'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('agricimport') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('inflorencence') ? ' has-error' : '' }}"  >
                                                <label for="inflorencence" class="col-md-2 col-md-offset-1" style="text-align:left">Inflorencence</label>
                                                <div class="col-md-7">
                                                    <textarea id="inflorencence" row="7" cols="5" oneKeyPress placeholder="Inflorencence" class="form-control" name="inflorencence" value="{{ old('inflorencence') }}"></textarea>
                                                    @if ($errors->has('inflorencence'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('inflorencence') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            
                                            <div enctype="multipart/form-data" class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}" methode="post" > <!--form-group{{ URL::to('upload') }}-->
                                                    <label for="picture" class="col-md-2 col-md-offset-1" style="text-align:left">Select Image to Update</label>
                                                    <div class="input_fields_wrap">
                                                        <a class="add_field_button">Add More Fields</a>
                                                        <div class="col-md-6">
                                                            <div class="col-md-8">
                                                                <input type="file" name="gambar" id="inputgambar" clas="validate"/>
                                                                <input type="hidden" value="{{ csrf_token() }}" name="_token">
                                                                <img src="http://placehold.it/200x200" id="showgambar" style="max-width: 200px;max-height:200px;float:left;"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

                                            </div>

                                            <div class="form-group" >
                                                <div class="col-md-6 col-md-offset-6 text-right" style="margin-top:100px"> 
                                                    <a type="submit" class="btn btn-primary" href="{{route('weedherba.create')}}">Previous</a>
                                                    <a type="submit" class="btn btn-primary" href="{{route('weedherba.store')}}"  style="margin-left:10px">Submit</a>
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