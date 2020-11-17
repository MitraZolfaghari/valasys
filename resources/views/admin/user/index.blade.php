@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('user.Users List')}}</h3>
                    <div class="card-tools">
                        <a href="{{ route('users.create') }}" title="{{__('admin.Create')}}" class="btn btn-success btn-sm">
                            <i class="fas fa-plus"></i> {{__('user.Create User')}}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped zabbix-table">
                        <thead>
                        <tr>
                            <th>{{ __('user.id') }}</th>
                            <th>{{ __('user.fname') }}</th>
                            <th>{{ __('user.lname') }}</th>
                            <th>{{ __('user.username') }}</th>
                            <th>{{ __('user.mobile') }}</th>
                            <th>{{ __('user.email') }}</th>
                            <th>{{ __('user.status') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->fname }}</td>
                                <td>{{ $user->lname }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->mobile }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->isEnable() }}</td>
                                <td>
                                    <a href="{{ route('roles.show', $user) }}" class="btn btn-primary btn-xs" title="{{ __('Show') }}">
                                        <i class="fas fa-folder"></i> {{ __('Show') }}
                                    </a>
                                    <a href="{{ route('roles.edit', $user) }}" class="btn btn-info btn-xs" title="{{ __('Edit') }}">
                                        <i class="fas fa-pencil-alt"></i> {{ __('Edit') }}
                                    </a>
                                    <a href="{{ route('roles.destroy', $user) }}" class="btn btn-danger btn-xs delete" title="{{ __('Delete') }}" data-toggle="modal" data-target="#dialog" data-whatever="{{ __('Confirm') . __('Delete') }}">
                                        <i class="fas fa-trash"></i> {{ __('Delete') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @isset($users[0])
                    <form id="delete-form" method="post" style="display: none;">
                        @csrf
                        @method('delete')
                    </form>
                @endisset
            </div>
        </div>
    </div>
@endsection
