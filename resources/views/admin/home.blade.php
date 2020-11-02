@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are a cool ADMIN ! <br >
                            <a href="{{ route('admin.logout') }}">logout</a>
                        <a></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
