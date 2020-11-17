@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('role.Roles List')}}</h3>
                    <div class="card-tools">
                        <a href="{{ route('roles.create') }}" title="{{__('admin.Create')}}" class="btn btn-success btn-sm">
                            <i class="fas fa-plus"></i> {{__('role.Create Role')}}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped zabbix-table">
                        <thead>
                        <tr>
                            <th>{{ __('role.id') }}</th>
                            <th>{{ __('role.title') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($roles as $role)
                            <tr>
                                <td>{{ $role->id }}</td>
                                <td>{{ $role->title }}</td>
                                <td>
                                    <a href="{{ route('roles.show', $role) }}" class="btn btn-primary btn-xs" title="{{ __('Show') }}">
                                        <i class="fas fa-folder"></i> {{ __('Show') }}
                                    </a>
                                    <a href="{{ route('roles.edit', $role) }}" class="btn btn-info btn-xs" title="{{ __('Edit') }}">
                                        <i class="fas fa-pencil-alt"></i> {{ __('Edit') }}
                                    </a>
                                    <a href="{{ route('roles.destroy', $role) }}" class="btn btn-danger btn-xs delete" title="{{ __('Delete') }}" data-toggle="modal" data-target="#dialog" data-whatever="{{ __('Confirm') . __('Delete') }}">
                                        <i class="fas fa-trash"></i> {{ __('Delete') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @isset($roles[0])
                    <form id="delete-form" method="post" style="display: none;">
                        @csrf
                        @method('delete')
                    </form>
                @endisset
            </div>
        </div>
    </div>
@endsection
