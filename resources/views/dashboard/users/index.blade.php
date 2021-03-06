@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.users')</h1>

            <ol class="breadcrumb">

                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li class="active"> @lang('site.users')</li>

            </ol>

        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <form action="">

                        <div class="row">

                            <div class="col-md-4">

                                <div class="box-tools">

                                    <div class="input-group input-group-sm">

                                        <input type="text" name="search" class="form-control"
                                            placeholder="@lang('site.search')">

                                        <div class="input-group-btn">

                                            <button type="submit" class="btn btn-primary"><i
                                                    class="fa fa-search"></i></button>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">

                                <a href="{{ route('dashboard.users.create') }}" class="btn btn-primary btn-sm"><i
                                        class="fa fa-plus"></i> @lang('site.add')</a>

                            </div>

                        </div>

                    </form>

                </div>

                <div class="box-body">

                    @if ($users->count() > 0)

                        <table class="table table-hover">

                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('site.first_name')</th>
                                    <th>@lang('site.last_name')</th>
                                    <th>@lang('site.email')</th>
                                    <th>@lang('site.phone')</th>
                                    <th>@lang('site.status')</th>
                                    <th>@lang('site.action')</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($users as $index => $user)

                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        @if ($user->is_active == 1)
                                            <td><span class="label label-success">@lang('site.active')</span></td>
                                        @else
                                            <td><span class="label label-danger">@lang('site.not_active')</span></td>
                                        @endif
                                        <td>
                                            <a class="btn btn-sm btn-info"
                                                href="{{ route('dashboard.users.edit', $user->id) }}"><i
                                                    class="fa fa-edit"></i> @lang('site.edit')</a>
                                            <form action="{{ route('dashboard.users.destroy', $user->id) }}" method="post"
                                                style="display: inline-block">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i> @lang('site.delete')</button>
                                            </form>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>

                        </table>

                    @else

                        <h2>@lang('site.no_data_found')</h2>

                    @endif

                </div>

            </div>

        </section>

    </div>

@endsection
