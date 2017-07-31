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
                                <div class="col-md-11">
                                    <div class="box-title">
                                        <h4> Add new Collection</h4>
                                    </div>
                                    <div class="box">
                                        <form class="form-horizontal" role="form" method="POST" action="{{ route('forestherba.store') }}">
                                        {{ csrf_field() }}

                                        
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

