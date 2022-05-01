@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Welcome') }}
                    {{ Auth::user()->name }} <br>
                    {{ __('You are logged in! Go to the chat ->') }}
                    <a href="{{ url('/messages') }}" class="text-sm text-gray-700 underline">Messages</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
