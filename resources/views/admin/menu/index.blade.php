@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('menu.Menus List')}}</h3>
                    <div class="card-tools">
                        <a href="{{ route('menus.create') }}" title="{{__('admin.Create')}}" class="btn btn-success btn-sm">
                            <i class="fas fa-plus"></i> {{__('menu.Create Menu')}}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped zabbix-table">
                        <thead>
                        <tr>
                            <th>{{ __('menu.id') }}</th>
                            <th>{{ __('menu.name') }}</th>
                            <th>{{ __('menu.slug') }}</th>
                            <th>{{ __('menu.parent_id') }}</th>
                            <th>{{ __('menu.description') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($menus as $menu)
                            <tr>
                                <td>{{ $menu->id }}</td>
                                <td>{{ $menu->name }}</td>
                                <td>{{ $menu->slug }}</td>
                                <td>{{ optional($menu->parent)->name }}</td>
                                <td>{{ $menu->description }}</td>
                                <td>
                                    <a href="{{ route('menus.show', $menu) }}" class="btn btn-primary btn-xs" title="{{ __('Show') }}">
                                        <i class="fas fa-folder"></i> {{ __('Show') }}
                                    </a>
                                    <a href="{{ route('menus.edit', $menu) }}" class="btn btn-info btn-xs" title="{{ __('Edit') }}">
                                        <i class="fas fa-pencil-alt"></i> {{ __('Edit') }}
                                    </a>
                                    <a href="{{ route('menus.destroy', $menu) }}" class="btn btn-danger btn-xs delete" title="{{ __('Delete') }}" data-toggle="modal" data-target="#dialog" data-whatever="{{ __('Confirm') . __('Delete') }}">
                                        <i class="fas fa-trash"></i> {{ __('Delete') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @isset($menus[0])
                    <form id="delete-form" method="post" style="display: none;">
                        @csrf
                        @method('delete')
                    </form>
                @endisset
            </div>
        </div>
    </div>
@endsection
