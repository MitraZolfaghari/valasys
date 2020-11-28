@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('menu.Show Menu')}}</h3>
                    <div class="card-tools">
                        @include('shared.back_button')
                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label text-right">{{ __('menu.id') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ $menu->id }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="name" class="col-sm-3 col-form-label text-right">{{ __('menu.name') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ $menu->name }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="slug" class="col-sm-3 col-form-label text-right">{{ __('menu.slug') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ $menu->slug }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="parent_id" class="col-sm-3 col-form-label text-right">{{ __('menu.parent_id') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ optional($menu->parent)->name  }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label text-right">{{ __('menu.description') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ $menu->description }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="is_enable" class="col-sm-3 col-form-label text-right">{{ __('menu.is_enable') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ $menu->isEnable() }}</div>
                        </div>
                    </div>

                </div>

                <div class="card-footer">
                    <div class="row justify-content-sm-center">
                        <a href="{{ route('menus.edit', $menu) }}" title="{{ __('Edit') }}" class="btn btn-info">
                            <i class="fas fa-pencil-alt"></i> {{ __('Edit') }}
                        </a>
                        &nbsp;&nbsp;
                        <a href="{{ route('menus.destroy', $menu) }}" class="btn btn-danger delete" title="{{ __('Delete') }}" data-toggle="modal" data-target="#dialog" data-whatever="{{ __('Confirm') . __('Delete') }}">
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
