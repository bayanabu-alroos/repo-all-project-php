@extends('layout.app-login')

@section('content')
    <form action="{{ route('validate_login') }}" method="post">
        @csrf
        <div class="form-group mb-3">
            <input type="text" name="email" class="form-control" placeholder="Email" />
            @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group mb-3">
            <input type="password" name="password" class="form-control" placeholder="Password" />
            @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="d-grid mx-auto">
            <button type="subit" class="btn login-form__btn submit w-100">Login</button>
        </div>
    </form>
@endsection
