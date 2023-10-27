@if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')

@extends('layout.app')

@section('content')
    <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Create User</h6>
            </div>
        </div>

        <div class="card-body px-0 pb-2">
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Profile Picture</div>
                        <div class="card-body text-center">
                            <img class="img-account-profile " width="50%"
                                src="/images/{{ $user->image }}"alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-4">
                        <div class="card">
                            <div class="card-header">
                                Update User
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <form class="row g-3 "action="{{ route('users.update', $user->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">First name</label>
                                            <input class="form-control" id="inputFirstName" name="first_name"
                                                value="{{ $user->first_name }}" type="text"
                                                placeholder="Enter  first name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Last name</label>
                                            <input class="form-control" id="inputLastName" name="last_name"
                                                value="{{ $user->last_name }}" type="text" placeholder="Enter last name">

                                        </div>
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone">Gender user</label>
                                            {{-- <input class="form-control" list="datalistOptions" id="exampleDataList" name="gender" placeholder="Select role ...."> --}}
                                            <select class="form-select" name="gender" value="{{ $user->gender }}">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputBirthday">Upload Image</label>
                                            <input class="form-control" id="inputBirthday" type="file" name="image"
                                                placeholder="Enter  Photo">
                                        </div>
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone"> Email Address</label>
                                            <input class="form-control" id="inputPhone" name="email" type="email"
                                                value="{{ $user->email }}" placeholder="Enter email address ">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone"> Password</label>
                                            <input class="form-control" id="inputPhone" name="password" type="password"
                                                placeholder="Enter Password">
                                        </div>
                                    </div>
                                    <div class="row gx-3 ">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-8  mb-2">
                                            <label class="small mb-1" for="inputFirstName">Select First Name Nurse</label>
                                            <select name="department_id" class="form-control">
                                                @foreach ($departments as $department)
                                                    <option value="{{ $department->id }}">
                                                        {{ $department->name_department }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6 mb-2">
                                        </div>
                                    </div>
                                    <div class="row gx-3 mb-3">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary" type="submit">Save </button>
                                        </div>
                                        <div class="col-md-6">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('content')
    <div class="card">
        <div class="card-header">
                <h4 class="card-title">Create User</h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="basic-form">

                <form action="{{ route('users.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >First name</label>
                            <input class="form-control" name="first_name" value="{{ $user->first_name }}"  type="text"
                                placeholder="Enter  first name">
                        </div>
                        <div class="form-group col-md-6">
                            <label >Last name</label>
                            <input class="form-control" name="last_name" value="{{ $user->last_name }}" type="text"
                                placeholder="Enter last name">

                        </div>
                    </div>
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label>Gender user</label>
                            <select class="form-control" name="gender" value="{{ $user->gender }}">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label >Upload Image</label>
                            <input class="form-control" id="inputBirthday" type="file" name="image"
                                placeholder="Enter  Photo">
                        </div>
                    </div>
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label> Email Address</label>
                            <input class="form-control" id="inputPhone" name="email" value="{{ $user->email }}" type="email"
                                placeholder="Enter email address ">
                        </div>
                        <div class="col-md-6">
                            <label> Password</label>
                            <input class="form-control" id="inputPhone" name="password" type="password"
                                placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="row gx-3 ">
                        <!-- Form Group (first name)-->
                        <div class="col-md-8  mb-2">
                            <label>Select Name Department</label>
                            <select name="department_id" class="form-control" value="{{ $user->department_id }}">
                                @foreach ($departments as $department)
                                    <option value="{{$department->id}}">{{$department->name_department}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!-- Form Group (last name)-->
                        <div class="col-md-6 mb-2">
                        </div>
                    </div>
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <button class="btn btn-primary" type="submit">Save </button>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                </form>
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

