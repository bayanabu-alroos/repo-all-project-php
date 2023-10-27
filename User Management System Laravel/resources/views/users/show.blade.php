@if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')

@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">View User</h4>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <img class="img-account-profile " width="50%" src="/images/{{ $user->image }}"alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card-header">Account Details</div>
                        <div class="card-body">
                            <h5> First Name : {{ $user->first_name }} </h5>
                            <h5 class="pt-2"> Last Name : {{ $user->last_name }} </h5>
                            <h5 class="pt-2"> Gender : {{ $user->gender }} </h5>
                            <h5 class="pt-2"> Email Address : {{ $user->email }} </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    @else
    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="error-content">
                        <div class="card mb-0">
                            <div class="card-body text-center">
                                <h1 class="error-text text-primary">403</h1>
                                <h4 class="mt-4"><i class="fa fa-thumbs-down text-danger"></i> Bad Request</h4>
                                <p>Does not have permission</p>
                                <div class="text-center mb-4 mt-4"><a href="{{ route('userProfile') }}"
                                        class="btn btn-primary">Go to User Profile </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif






