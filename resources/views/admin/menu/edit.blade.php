@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('menu.Edit Menu')}}</h3>
                    <div class="card-tools">
                        @include('shared.back_button')
                    </div>
                </div>

                <form role="form" id="edit-form" name="edit-form" method="post" action="{{ route('menus.update', $menu) }}">
                    @csrf
                    @method('put')
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label text-right">{{ __('menu.name') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="{{ __('menu.name') }}" value="{{ old('name', $menu->name) }}" required>
                                @error('name')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="slug" class="col-sm-3 col-form-label text-right">{{ __('menu.slug') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('slug') is-invalid @enderror" name="slug" id="slug" placeholder="{{ __('menu.slug') }}" value="{{ old('name', $menu->slug) }}" required>
                                @error('slug')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="parent_id" class="col-sm-3 col-form-label text-right">{{ __('menu.parent_id') }}</label>
                            <div class="col-sm-9">
                                <select name="parent_id" id="parent_id" class="form-control select2 select2-success @error('parent_id') is-invalid @enderror" data-dropdown-css-class="select2-success">
                                    {!! $menu->toSelect($menu->getTree(), 0, old('parent_id', $menu->parent_id)) !!}
                                </select>
                                @error('parent_id')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label text-right">{{ __('menu.description') }}</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" id="description" placeholder="{{ __('menu.description') }}" value="{{ old('description', $menu->description) }}" required>
                                @error('description')
                                <div class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="is_enable" class="col-sm-3 col-form-label text-right">{{ __('user.is_enable') }}</label>
                            <div class="col-sm-9">
                                <div class="icheck-info icheck-inline">
                                    <input type="radio" name="is_enable" id="is_enable1" class="form-check-input @error('is_enable') is-invalid @enderror" value="1"{{ old('is_enable', $menu->is_enable) == 1 ? ' checked' : '' }}>
                                    <label class="form-check-label" for="is_enable1">{{__('shared.yes')}}</label>
                                </div>
                                <div class="icheck-info icheck-inline">
                                    <input type="radio" name="is_enable" id="is_enable0" class="form-check-input @error('is_enable') is-invalid @enderror" value="0"{{ old('is_enable', $menu->is_enable) == 0 ? ' checked' : '' }}>
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
