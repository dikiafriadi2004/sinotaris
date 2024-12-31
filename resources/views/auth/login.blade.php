@extends('auth.layouts.app')

@section('content')
    <div class="auth-main">
        <div class="codex-authbox">
            <div class="auth-header">
                <div class="codex-brand"><a href="index.html"><img class="img-fluid light-logo"
                            src="{{ asset('assets/images/logo/logo.png') }}" alt=""><span
                            class="fs-2 align-middle ms-2 fw-semibold">SINotaris</span></a></div>
                <h3>welcome to SINotaris</h3>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" required
                        placeholder="Enter Your Email">
                </div>
                <div class="form-group">
                    <label class="form-label" for="Password">Password</label>
                    <div class="input-group group-input">
                        <input class="form-control showhide-password" type="password" id="password" name="password"
                            placeholder="Enter Your Password" required=""><span
                            class="input-group-text toggle-show fa fa-eye"></span>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <div class="auth-remember">
                        <div class="form-check custom-chek">
                            <input class="form-check-input" id="agree" name="rememberme" type="checkbox" value="">
                            <label class="form-check-label" for="agree">Remember me</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-sign-in"></i> Login</button>
                </div>
            </form>
        </div>
    </div>
@endsection
