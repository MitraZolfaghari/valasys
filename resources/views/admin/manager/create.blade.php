@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('manager.Create Manager')}}</h3>
                    <div class="card-tools">

                    </div>
                </div>

                <form role="form" id="create-form" name="create-form" method="post" action="{{ route('managers.store') }}">
                    @csrf
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 col-form-label text-right">{{ __('manager.fname') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" id="fname" placeholder="{{ __('manager.fname') }}" value="{{ old('fname') }}" required>
                                @error('fname')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 col-form-label text-right">{{ __('manager.lname') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" id="lname" placeholder="{{ __('manager.lname') }}" value="{{ old('lname') }}" required>
                                @error('lname')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label text-right">{{ __('manager.username') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="{{ __('manager.username') }}" value="{{ old('username') }}" required>
                                @error('username')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label text-right">{{ __('manager.password') }}</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="{{ __('manager.password') }}" value="{{ old('password') }}" required>
                                @error('password')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <small class="form-text text-muted">{{__('manager.pass_digits')}}</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_confirmation" class="col-sm-3 col-form-label text-right">{{ __('manager.password_confirmation') }}</label>
                            <div class="col-md-9">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="{{ __('manager.password_confirmation') }}" required>
                                @error('password_confirmation')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label text-right">{{ __('manager.phone') }}</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="{{ __('manager.phone') }}" value="{{ old('phone') }}">
                                @error('phone')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label text-right">{{ __('manager.email') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="{{ __('manager.email') }}" value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="is_enable" class="col-sm-3 col-form-label text-right">{{ __('manager.is_enable') }}</label>
                            <div class="col-sm-9">
                                <div class="icheck-success icheck-inline">
                                    <input type="radio" name="is_enable" id="is_enable1" class="form-check-input @error('is_enable') is-invalid @enderror" value="1" checked>
                                    <label class="form-check-label" for="is_enable1">{{__('shared.yes')}}</label>
                                </div>
                                <div class="icheck-success icheck-inline">
                                    <input type="radio" name="is_enable" id="is_enable0" class="form-check-input @error('is_enable') is-invalid @enderror" value="0">
                                    <label class="form-check-label" for="is_enable0">{{__('shared.no')}}</label>
                                </div>
                                @error('is_enable')
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
