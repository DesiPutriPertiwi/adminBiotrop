@extends('herbarium.forestherba.base')

@section('action-content')
    
    <section class="content">
        <div class="box">
            <div class="box-header">
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="box-title">
                            List of Forest Herbarium
                        </h3>
                    </div>
                    <div class="col-sm-4 text-rigth">
                        <a class="btn btn-primary" href="{{route('forestherba.create')}}">Add new Collection</a>
                    </div>
                </div>
            </div>

            <!-- Box Header-->
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6">
                        <form method="POST" action="{{ route('invasive.search') }}">
                        {{ csrf_field() }}
                            <div class="col-md-4 pull-right">
                                <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="example_wrapper" class="dtaTables-Wrapper from-inline dt-bootstrep">
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                    <tr role="row">
                                        <th width="10%" class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Label_Herbarium: activate to sort column descending" aria-sort="ascending" style="text-align: center">Specimen Number</th>
                                        <th width="15%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-lable="Species: activate to sort column descending" aria-sort="ascending" style="text-align:center">Species</th>
                                        <th width="15%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-lable="Collector: activate to sort column descending" aria-sort="ascending" style="text-align:center">Collector</th>
                                        <th width="15%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-lable="Determinate: activate to sort column descending" aria-sort="ascending" style="text-align:center">Determine</th>
                                        <th width="15%" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="2" aria-lable="Id: activate to sort column descending" aria-sort="ascending" style="text-align:center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection