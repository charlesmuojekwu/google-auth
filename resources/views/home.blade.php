@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header text-center">
                <h4>Welcome</h4>
            </div>
            <div class="card-body">
                @if(session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                @if(session('email'))
                    <div class="alert alert-success" role="alert">
                        <strong>Email:</strong> {{ session('email') }}
                    </div>
                    <div class="alert alert-info" role="alert">
                        <strong>OTP:</strong> <span id="otp">{{ session('otp') }}</span>
                    </div>
                @else
                    <div class="text-center">
                        <a href="{{ route('auth.google') }}" class="btn btn-primary">
                            <i class="fab fa-google"></i> Sign In with Google
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
<script>
    setTimeout(() => {
        document.getElementById('otp').innerHTML = 'Expired';
    }, 30000); // 30 seconds
</script>
@endsection
