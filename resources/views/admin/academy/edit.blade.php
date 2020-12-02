@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('academy.Edit Academy')}}</h3>
                    <div class="card-tools">
                        @include('shared.back_button')
                    </div>
                </div>

                <form role="form" id="edit-form" name="edit-form" method="post" action="{{ route('academies.update', $academy) }}">
                    @csrf
                    @method('put')
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label text-right">{{ __('academy.name') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="{{ __('academy.name') }}" value="{{ old('name', $academy->name) }}" required>
                                @error('name')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slug" class="col-sm-3 col-form-label text-right">{{ __('academy.slug') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" placeholder="{{ __('academy.slug') }}" value="{{ old('name', $academy->slug) }}" required>
                                @error('slug')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label text-right">{{ __('academy.description') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="{{ __('academy.description') }}" value="{{ old('description', $academy->description) }}" required>
                                @error('description')
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
