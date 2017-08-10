@extends('layouts.app-template')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Briovitas Herbarium </h1>
            <ol class="breadcrumb">
                <li class="active">
                   <i class="fa fa-home"></i>
                    Dashboard > Briovitas Herbarium
                </li>
            </ol>
        </section>
        @yield('action-content')
    </div>
@endsection