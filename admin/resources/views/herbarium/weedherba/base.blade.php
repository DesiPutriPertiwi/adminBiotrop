@extends('layouts.app-template')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Weed Herbarium </h1>
            <ol class="breadcrumb">
                <li class="active">
                    Weed Herbarium
                </li>
            </ol>
        </section>
        @yield('action-content')
    </div>
@endsection