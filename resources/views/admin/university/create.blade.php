@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('university.Create University')}}</h3>
                    <div class="card-tools">
                        <a href="{{ route('universities.index') }}" title="{{__('university.Universities List')}}" class="btn btn-success btn-sm">
                            <i class="fas fa-list"></i> {{__('university.Universities List')}}
                        </a>
                    </div>
                </div>

                <form role="form" id="create-form" name="create-form" method="post" action="{{ route('universities.store') }}">
                    @csrf
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label text-right">{{ __('university.name') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="{{ __('university.name') }}" value="{{ old('name') }}" required>
                                @error('name')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slug" class="col-sm-3 col-form-label text-right">{{ __('university.slug') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" placeholder="{{ __('university.slug') }}" value="{{ old('slug') }}" required>
                                @error('slug')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label text-right">{{ __('university.description') }}</label>
                            <div class="col-sm-9">
                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="5" placeholder="{{ __('university.description') }}">{{ old('description') }}</textarea>
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
