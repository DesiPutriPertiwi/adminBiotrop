@extends('herbarium.lichenherba.base')

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
                        <a class="btn btn-default buttons-print btn-md" tabindex="0" aria-controls="datatable-buttons" href="window.print();"> <!--href="window.print();"-->
                            <i class="fa fa-print"> </i>
                            Print
                        </a>
                    </div>
                </div>
            <div>
            <div class="col-md-8 col-md-offset-2 box-body">
                <form class="form-horizontal" role="form" method="GET" style="margin-top:10px">
                    {{ csrf_field() }}
                    <div class="box box-default col-md-12 ">
                        <div class="col-md-2 col-md-offset-10">
                            <h3><b>000123</b></h3>
                        </div>
                        <div class="col-md-11 text-center" style="margin-botton:35 px">
                            <h4><b><i>Abelmoschus moschatus</i></b></h4>
                        </div>

                        <div class="col-md-6">Collector Name</div>
                        <div class="col-md-6">Collector Date</div>
                    </div>
                </form>
            </div>
        </div>    
    </section>
    <script>
         window.print();
    </script>
@endsection