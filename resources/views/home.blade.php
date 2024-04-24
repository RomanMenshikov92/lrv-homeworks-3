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

                    {{ __('Вы вошли в систему!') }}

                    <div>
                    <a  href="{{ route('user.profile') }}" class="btn btn-primary mt-4">Посмотреть мой профиль</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
