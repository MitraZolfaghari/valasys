@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('user.Show User')}}</h3>
                    <div class="card-tools">

                    </div>
                </div>

                <div class="card-body">

                    <div class="form-group row">
                        <label for="id" class="col-sm-3 col-form-label text-right">{{ __('user.id') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ $user->id }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fname" class="col-sm-3 col-form-label text-right">{{ __('user.fname') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ $user->fname }}</div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="lname" class="col-sm-3 col-form-label text-right">{{ __('user.lname') }}</label>
                        <div class="col-sm-9">
                            <div class="form-control-plaintext">{{ $user->lname }}</div>
                        </div>
                    </div>

                </div>

                <div class="card-footer">
                    <div class="row justify-content-sm-center">
                        <a href="{{ route('users.edit', $user) }}" title="{{ __('Edit') }}" class="btn btn-info">
                            <i class="fas fa-pencil-alt"></i> {{ __('Edit') }}
                        </a>
                        &nbsp;&nbsp;
                        <a href="{{ route('users.destroy', $user) }}" class="btn btn-danger delete" title="{{ __('Delete') }}" data-toggle="modal" data-target="#dialog" data-whatever="{{ __('Confirm') . __('Delete') }}">
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
