@extends('herbarium.weedherba.base')

@section('action-content')
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="row">
                    <div class="dt-button btn-group col-sm-offset-10">
                        <a class="btn btn-default button-download buttons-html5 btn-md" tabindex="0" aria-controls="datatable-buttons" href="#" >
                            <i class="fa fa-cloud-download"> </i>
                            Download
                        </a>
                        <a class="btn btn-default buttons-print btn-md" tabindex="0" aria-controls="datatable-buttons"> <!--href="window.print();"-->
                            <i class="fa fa-print"> </i>
                            Print
                        </a>
                    </div>

                    <div class="col-sm-8">
                        <h2 class="col-md-offset-1">
                            <i>Abelmoschus moschatus</i>
                        </h2>
                    </div>
                    <div class="col-sm-3 text-right">
                        <h2>
                            <b>001235</b>
                        </h2>
                    </div>
                </div>
                <!---->
            
            <form class="form-horizontal" role="form" method="GET" style="margin-top:10px">
                {{ csrf_field() }}
                    <!--Taxonomy-->               
                    <div class="box box-default col-md-12" >
                        <div class="box-header with-border">
                            <h5 style="text:arial narrow"><b>Taxsonomy  :</b></h5>
                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="col-md-8">
                                <div class="col-md-12" style="margin-top:10px">
                                    <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Family</label>
                                    <span class=" col-md-8" align="justify">
                                        family 
                                    </span>
                                </div>
                                
                                <div class="col-md-12" style="margin-top:10px">
                                    <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Genus</label>
                                    <span class="col-md-8" align="justify">
                                        Familynya
                                    </span>
                                </div>
                            
                                <div class="col-md-12" style="margin-top:10px" >
                                    <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Subspecies</label>
                                    <span class="col-md-8" align="justify">
                                        Familynya
                                    </span>
                                </div>
                                <br><br>
                                <div class="col-md-12" style="margin-top:10px">
                                    <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Variety</label>
                                    <span class="col-md-8" align="justify">
                                        Familynya
                                    </span>
                                </div>
                                
                                <div class="col-md-12" style="margin-top:10px">
                                    <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Origin</label>
                                    <span class="col-md-8" align="justify">
                                        Familynya
                                    </span>
                                </div>

                                <div class="col-md-12" style="margin-top:10px">
                                    <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Synonim</label>
                                    <span class="col-md-8" align="justify">
                                        Familynya
                                    </span>
                                </div>

                                <div class="col-md-12" style="margin-top:10px">
                                    <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Venacular Name</label>
                                    <span class="col-md-8" align="justify">
                                        Familynya
                                    </span>
                                </div>

                                <div class="col-md-12" style="margin-top:10px">
                                    <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Description</label>
                                    <span class="col-md-8" align="justify">
                                        Familynya ini sangat langka ditemukan banyak yang tidak tau akan keberadaan family ini, family ini hanya di temukan didaerah yag ekstream, seperti daerah yang memiliki curah hujan yang tinggi, pH yang tinggi yang dimana memungkuikan mahluk hidup tidak dapat hidu
                                    </span>
                                </div>

                                <div class="col-md-12" style="margin-top:10px">
                                    <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Notes</label>
                                    <span class="col-md-8" align="justify">
                                        Familynya ini sangat langka ditemukan banyak yang tidak tau akan keberadaan family ini, family ini hanya di temukan didaerah yag ekstream, seperti daerah yang memiliki curah hujan yang tinggi, pH yang tinggi yang dimana memungkuikan mahluk hidup tidak dapat hidu
                                    </span>
                                </div>
                            </div>
    
                            <div id="myCarousel" class="carousel slide col-md-3" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="http://3.bp.blogspot.com/-b1eVhi5VlwE/TrdikHJk_kI/AAAAAAAAAI0/iehRk13Tv2s/s1600/herbarium1_large.jpeg" alt="Herbarium 1" >
                                    </div>

                                    <div class="item">
                                    <img src="http://1.bp.blogspot.com/-5yLaejvj5oE/VJ2n4JtPY0I/AAAAAAAAAe4/WHuTb75HVTc/s1600/Fraxinus_pennsylvanica004.jpg" alt="Herbarium 2">
                                    </div>

                                    <div class="item">
                                    <img src="http://3.bp.blogspot.com/-b1eVhi5VlwE/TrdikHJk_kI/AAAAAAAAAI0/iehRk13Tv2s/s1600/herbarium1_large.jpeg" alt="Herbarium 3">
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>

                <!--Data Set-->
                <div class="box box-default col-md-12">
                    <div class="box-header with-border">
                        <h5 style="text:arial narrow"><b>Data Set  :</b></h5>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-md-8">
                            <div class="col-md-12" style="margin-top:10px">
                                <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Collector Name</label>
                                <span class="col-md-8" align="justify">
                                    Familynya
                                </span>
                            </div>

                            <div class="col-md-12" style="margin-top:10px">
                                <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Collectors</label>
                                <span class="col-md-8" align="justify">
                                    Familynya
                                </span>
                            </div>

                            <div class="col-md-12" style="margin-top:10px">
                                <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Collector Date</label>
                                <span class="col-md-8" align="justify">
                                    Familynya
                                </span>
                            </div>

                            <div class="col-md-12" style="margin-top:10px">
                                <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Determine Date</label>
                                <span class="col-md-8" align="justify">
                                    Familynya
                                </span>
                            </div>

                            <div class="col-md-12" style="margin-top:10px">
                                <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Address Determine</label>
                                <span class="col-md-8" align="justify">
                                    Familynya
                                </span>
                            </div>
                        </div>
                    </div>
                </div>  
                
                <!--Geology-->
                <div class="box box-default col-md-12" style="margin-top:10px">
                     <div class="box-header with-border">
                        <h5 style="text:arial narrow"><b>Geology  :</b></h5>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>
                    <div class="box-body">             
                        <div class="col-md-8">
                                                        <div class="col-md-12" style="margin-top:10px">
                                <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Country</label>
                                <span class="col-md-8" align="justify">
                                    Familynya
                                </span>
                            </div>

                            <div class="col-md-12" style="margin-top:10px">
                                <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Province</label>
                                <span class="col-md-8" align="justify">
                                    Familynya
                                </span>
                            </div>

                            <div class="col-md-12" style="margin-top:10px">
                                <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Vilage</label>
                                <span class="col-md-8" align="justify">
                                    Familynya
                                </span>
                            </div>

                            <div class="col-md-12" style="margin-top:10px">
                                <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Latitude</label>
                                <span class="col-md-8" align="justify">
                                    Familynya
                                </span>
                            </div>

                            <div class="col-md-12" style="margin-top:10px">
                                <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Longitude</label>
                                <span class="col-md-8" align="justify">
                                    Familynya
                                </span>
                            </div>

                            <div class="col-md-12" style="margin-top:10px">
                                <label for="name_family" class="col-md-3 col-md-offset-1" style="text-align:left">Atitude</label>
                                <span class="col-md-8" align="justify">
                                    Familynya
                                </span>
                            </div>
                        </div>
                        
                        <div id="myCarousel" class="carousel slide col-md-3" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src="http://3.bp.blogspot.com/-b1eVhi5VlwE/TrdikHJk_kI/AAAAAAAAAI0/iehRk13Tv2s/s1600/herbarium1_large.jpeg" alt="Herbarium 1" >
                                </div>

                                <div class="item">
                                    <img src="http://1.bp.blogspot.com/-5yLaejvj5oE/VJ2n4JtPY0I/AAAAAAAAAe4/WHuTb75HVTc/s1600/Fraxinus_pennsylvanica004.jpg" alt="Herbarium 2">
                                </div>

                                <div class="item">
                                    <img src="http://3.bp.blogspot.com/-b1eVhi5VlwE/TrdikHJk_kI/AAAAAAAAAI0/iehRk13Tv2s/s1600/herbarium1_large.jpeg" alt="Herbarium 3">
                                </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!--Butoon Back-->
                <div class="form-group" >
                    <div class="col-md-12 col-md-offset-9 text-right" style="margin-top:100px"> 
                       <a type="button" class="btn btn-primary col-md-2 " href="{{route('weedherba.index')}}">Back</a>
                     </div>
                </div>
            </form>
        </div>    
    </section>
    <!--script>
         window.print();
    </script-->

@endsection
 