@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('role.Create Role')}}</h3>
                    <div class="card-tools">
                        <a href="{{ route('roles.index') }}" title="{{__('role.Roles List')}}" class="btn btn-success btn-sm">
                            <i class="fas fa-list"></i> {{__('role.Roles List')}}
                        </a>
                    </div>
                </div>

                <form role="form" id="create-form" name="create-form" method="post" action="{{ route('roles.store') }}">
                    @csrf
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="title" class="col-sm-3 col-form-label text-right">{{ __('role.title') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="{{ __('role.title') }}" value="{{ old('title') }}" required>
                                @error('title')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="row justify-content-sm-center">
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save"></i> {{ __('Create') }}
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
