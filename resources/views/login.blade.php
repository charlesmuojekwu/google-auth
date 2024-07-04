@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
                <h4>Login</h4>
            </div>
            <div class="card-body text-center">

                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <a href="{{ route('auth.google') }}" class="btn btn-primary">
                    <i class="fab fa-google"></i> Sign In with Google
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
