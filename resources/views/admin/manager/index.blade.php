@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('manager.Managers List')}}</h3>
                    <div class="card-tools">
                        <a href="{{ route('managers.create') }}" title="{{__('admin.Create')}}" class="btn btn-success btn-sm">
                            <i class="fas fa-plus"></i>{{__('manager.Create Manager')}}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                </div>
            </div>
        </div>
    </div>
@endsection
