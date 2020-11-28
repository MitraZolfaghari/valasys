@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('role.Show Role')}}</h3>
                    <div class="card-tools">
                        @include('shared.back_button')
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label text-right">{{ __('role.id') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ $role->id }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label text-right">{{ __('role.title') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ $role->title }}</div>
                        </div>
                    </div>

                    {{--<div class="form-group row">
                        <label for="permission" class="col-sm-3 col-form-label text-right">{{ __('role.permission') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ $item->present()->allPermissions }}</div>
                        </div>
                    </div>--}}

                </div>

                <div class="card-footer">
                    <div class="row justify-content-sm-center">
                        <a href="{{ route('roles.edit', $role) }}" title="{{ __('Edit') }}" class="btn btn-info">
                            <i class="fas fa-pencil-alt"></i> {{ __('Edit') }}
                        </a>
                        &nbsp;&nbsp;
                        <a href="{{ route('roles.destroy', $role) }}" class="btn btn-danger delete" title="{{ __('Delete') }}" data-toggle="modal" data-target="#dialog" data-whatever="{{ __('Confirm') . __('Delete') }}">
                            <i class="fas fa-trash"></i> {{ __('Delete') }}
                        </a>
                    </div>
                </div>
                <form id="delete-form" method="post" style="display: none;">
                    @csrf
                    @method('delete')
                </form>

            </div>
        </div>
    </div>
@endsection
