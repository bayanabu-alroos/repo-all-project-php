@if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')

@extends('layout.app')

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

                <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >First name</label>
                            <input class="form-control" id="inputFirstName" name="first_name" type="text"
                                placeholder="Enter  first name">
                        </div>
                        <div class="form-group col-md-6">
                            <label >Last name</label>
                            <input class="form-control" id="inputLastName" name="last_name" type="text"
                                placeholder="Enter last name">

                        </div>
                    </div>
                    <div class="row gx-3 mb-3">
                        <div class="col-md-6">
                            <label >Gender user</label>
                            <select class="form-control" name="gender">
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
                            <label > Email Address</label>
                            <input class="form-control" id="inputPhone" name="email" type="email"
                                placeholder="Enter email address ">
                        </div>
                        <div class="col-md-6">
                            <label > Password</label>
                            <input class="form-control" id="inputPhone" name="password" type="password"
                                placeholder="Enter Password">
                        </div>
                    </div>
                    <div class="row gx-3 ">
                        <div class="col-md-8  mb-2">
                            <label >Select Name Department</label>
                            <select name="department_id" class="form-control">
                                @foreach ($departments as $department)
                                    <option value="{{$department->id}}">{{$department->name_department}}</option>
                                @endforeach
                            </select>
                        </div>
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





