@extends('layouts.admin.master')

@section('body-class', 'sidebar-mini')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('academy.Academies List')}}</h3>
                    <div class="card-tools">
                        <a href="{{ route('academies.create') }}" title="{{__('admin.Create')}}" class="btn btn-success btn-sm">
                            <i class="fas fa-plus"></i> {{__('academy.Create Academy')}}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped zabbix-table">
                        <thead>
                        <tr>
                            <th>{{ __('academy.id') }}</th>
                            <th>{{ __('academy.name') }}</th>
                            <th>{{ __('Action') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($academies as $academy)
                            <tr>
                                <td>{{ $academy->id }}</td>
                                <td>{{ $academy->name }}</td>
                                <td>
                                    <a href="{{ route('academies.show', $academy) }}" class="btn btn-primary btn-xs" title="{{ __('Show') }}">
                                        <i class="fas fa-folder"></i> {{ __('Show') }}
                                    </a>
                                    <a href="{{ route('academies.edit', $academy) }}" class="btn btn-info btn-xs" title="{{ __('Edit') }}">
                                        <i class="fas fa-pencil-alt"></i> {{ __('Edit') }}
                                    </a>
                                    <a href="{{ route('academies.destroy', $academy) }}" class="btn btn-danger btn-xs delete" title="{{ __('Delete') }}" data-toggle="modal" data-target="#dialog" data-whatever="{{ __('Confirm') . __('Delete') }}">
                                        <i class="fas fa-trash"></i> {{ __('Delete') }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                @isset($academies[0])
                    <form id="delete-form" method="post" style="display: none;">
                        @csrf
                        @method('delete')
                    </form>
                @endisset
            </div>
        </div>
    </div>
@endsection
