@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">

        <section class="content-header">

            <h1>@lang('site.users')</h1>

            <ol class="breadcrumb">

                <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a>
                </li>
                <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-users"></i> @lang('site.users')</a>
                </li>
                <li class="active"> @lang('site.add')</li>

            </ol>

        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header with-border">

                    <h3 class="box-title">@lang('site.add')</h3>

                </div>

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.users.store') }}" method="POST">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="first_name">@lang('site.first_name')</label>
                                    <input type="text" class="form-control" name="first_name" value="{{ old('first_name') }}">
                                </div>

                                <div class="form-group">
                                    <label for="last_name">@lang('site.last_name')</label>
                                    <input type="text" class="form-control" name="last_name" value="{{ old('last_name') }}">
                                </div>

                                <div class="form-group">
                                    <label for="email">@lang('site.email')</label>
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                </div>

                                <div class="form-group">
                                    <label for="phone">@lang('site.phone')</label>
                                    <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                                </div>

                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="password">@lang('site.password')</label>
                                    <input type="password" class="form-control" name="password">
                                </div>

                                <div class="form-group">
                                    <label for="password_confirmation">@lang('site.password_confirmation')</label>
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
        
                                {{-- <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" id="exampleInputFile">
        
                                    <p class="help-block">Example block-level help text here.</p>
                                </div> --}}
        
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" class="flat-red" name="is_active" value="1" checked> @lang('site.active')
                                        </label>
                                    </div>
                                </div>

                            </div>

                        </div>                       

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                        </div>
                    </form>

                </div>

            </div>

        </section>

    </div>

@endsection
