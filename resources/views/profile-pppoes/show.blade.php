@extends('layouts.app')

@section('title', __('Detail of Profile Pppoes'))

@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-8 order-md-1 order-last">
                    <h3>{{ __('Profile Pppoes') }}</h3>
                    <p class="text-subtitle text-muted">
                        {{ __('Detail of profile pppoe.') }}
                    </p>
                </div>

                <x-breadcrumb>
                    <li class="breadcrumb-item">
                        <a href="/dashboard">{{ __('Dashboard') }}</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('profile-pppoes.index') }}">{{ __('Profile Pppoes') }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        {{ __('Detail') }}
                    </li>
                </x-breadcrumb>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped">
                                    <tr>
                                            <td class="fw-bold">{{ __('Name') }}</td>
                                            <td>{{ $profilePppoe->name }}</td>
                                        </tr>
									<tr>
                                            <td class="fw-bold">{{ __('Local') }}</td>
                                            <td>{{ $profilePppoe->local }}</td>
                                        </tr>
									<tr>
                                            <td class="fw-bold">{{ __('Remote') }}</td>
                                            <td>{{ $profilePppoe->remote }}</td>
                                        </tr>
									<tr>
                                            <td class="fw-bold">{{ __('Limit') }}</td>
                                            <td>{{ $profilePppoe->limit }}</td>
                                        </tr>
									<tr>
                                            <td class="fw-bold">{{ __('Parent') }}</td>
                                            <td>{{ $profilePppoe->parent }}</td>
                                        </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Created at') }}</td>
                                        <td>{{ $profilePppoe->created_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">{{ __('Updated at') }}</td>
                                        <td>{{ $profilePppoe->updated_at->format('d/m/Y H:i') }}</td>
                                    </tr>
                                </table>
                            </div>

                            <a href="{{ url()->previous() }}" class="btn btn-secondary">{{ __('Back') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection