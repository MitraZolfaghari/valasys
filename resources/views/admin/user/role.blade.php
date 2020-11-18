@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ __('Assign Role') }}: {{ $user->username }}</h3>
                    <div class="card-tools">
                        @include('shared.back_button')
                    </div>
                </div>

                <form role="form" id="assign-form" name="assign-form" method="post" action="{{ route('users.role', $user->getKey()) }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="roles" class="col-sm-3 col-form-label text-right">{{ __('user.role') }}</label>
                            <div class="col-sm-9">
                                @foreach ($roles as $role)
                                    <div class="icheck-warning icheck-inline">
                                        <input type="checkbox" name="roles[]" id="role{{ $loop->index }}" class="form-check-input @error('roles[]') is-invalid @enderror" value="{{ $role->id }}"{{ in_array($role->id, $assignedRoles) ? ' checked' : '' }}>
                                        <label class="form-check-label" for="role{{ $loop->index }}">{{ $role->title }}</label>
                                    </div>
                                @endforeach
                                @error('roles[]')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <div class="row justify-content-sm-center">
                            <button type="submit" class="btn btn-warning">
                                <i class="fas fa-save"></i> {{ __('Save') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
