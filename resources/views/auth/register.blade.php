@extends('auth.layouts.app')

@section('title')
    Register
@endsection

@section('content')
    <div class="auth-main">
        <div class="codex-authbox">
            <div class="auth-header">
                <div class="codex-brand"><a href="index.html"><img class="img-fluid light-logo"
                            src="{{ asset('assets/images/logo/logo.png') }}" alt=""><span
                            class="fs-2 align-middle ms-2 fw-semibold">SINotaris</span></a></div>
                <h3>Create your account</h3>
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
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input class="form-control" type="text" placeholder="Enter Your Name" name="name" value="{{ old('name') }}" required>
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required>
                </div>
                <div class="form-group">
                    <label class="form-label">NIK</label>
                    <input class="form-control" type="text" name="nik" value="{{ old('nik') }}" placeholder="Enter Your NIK" required>
                </div>
                <div class="form-group">
                    <label class="form-label" for="Password">Password</label>
                    <div class="input-group group-input">
                        <input class="form-control showhide-password" type="password" id="Password" name="password"
                            placeholder="Enter Your Password" required=""><span
                            class="input-group-text toggle-show fa fa-eye"></span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label" for="Password">Confirm Password</label>
                    <div class="input-group group-input">
                        <input class="form-control showhide-password" type="password" id="Password"
                            placeholder="Enter Your Confirm Password" name="password_confirmation" required=""><span
                            class="input-group-text toggle-show fa fa-eye"></span>
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i> Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection
