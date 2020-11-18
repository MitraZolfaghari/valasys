@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('role.Edit Role')}}</h3>
                    <div class="card-tools">
                        @include('shared.back_button')
                    </div>
                </div>

                <form role="form" id="edit-form" name="edit-form" method="post" action="{{ route('users.update', $user) }}">
                    @csrf
                    @method('put')
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 col-form-label text-right">{{ __('user.fname') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('fname') is-invalid @enderror" name="fname" id="fname" placeholder="{{ __('user.fname') }}" value="{{ old('fname', $user->fname) }}" required>
                                @error('fname')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lname" class="col-sm-3 col-form-label text-right">{{ __('user.lname') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" id="lname" placeholder="{{ __('user.lname') }}" value="{{ old('lname', $user->lname) }}" required>
                                @error('lname')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label text-right">{{ __('user.username') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="{{ __('user.username') }}" value="{{ old('username', $user->username) }}" required>
                                @error('username')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label text-right">{{ __('user.password') }}</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="{{ __('user.password') }}" value="{{ old('password', $user->password) }}" required>
                                @error('password')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                                <small class="form-text text-muted">{{__('user.pass_digits')}}</small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password_confirmation" class="col-sm-3 col-form-label text-right">{{ __('user.password_confirmation') }}</label>
                            <div class="col-md-9">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="{{ __('user.password_confirmation') }}" required>
                                @error('password_confirmation')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label text-right">{{ __('user.mobile') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" id="mobile" placeholder="{{ __('user.mobile') }}" value="{{ old('mobile', $user->mobile) }}" required>
                                @error('mobile')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label text-right">{{ __('user.email') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="{{ __('user.email') }}" value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                    </div>

                    <div class="card-footer">
                        <div class="row justify-content-sm-center">
                            <button type="submit" class="btn btn-info">
                                <i class="fas fa-save"></i> {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
