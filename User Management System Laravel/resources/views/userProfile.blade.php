@extends('layout.app')


@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="align-items-center mb-4">
                        <img class="align-items-center" src="@if(!empty(auth()->user()->image)){{asset('images/'.auth()->user()->image)}}@else https://www.bootdey.com/img/Content/avatar/avatar8.png @endif" width="100" height="100" alt="">
                    </div>
                    <ul class="card-profile__info">
                        <li class="mb-2"><strong class="text-dark mr-4">First Name</strong> <span>{{ auth()->user()->first_name }}</span></li>
                        <li class="mb-2"><strong class="text-dark mr-4">Last Name</strong> <span>{{ auth()->user()->last_name }}</span></li>
                        <li class="mb-2"><strong class="text-dark mr-4">Gender</strong> <span>{{ auth()->user()->gender }}</span></li>
                        <li class="mb-2"><strong class="text-dark mr-4">E-mail</strong> <span>{{ auth()->user()->email }}</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xl-9">
            <div class="card">
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
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                    @endif
                    <form method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label >First name</label>
                                <input class="form-control" id="inputFirstName" name="first_name" value="{{ auth()->user()->first_name }}" type="text"
                                    placeholder="Enter  first name">
                            </div>
                            <div class="form-group col-md-6">
                                <label >Last name</label>
                                <input class="form-control" id="inputLastName" name="last_name" value="{{ auth()->user()->last_name }}" type="text"
                                    placeholder="Enter last name">
                            </div>
                        </div>
                        <div class="row gx-3 mb-3">
                            <div class="col-md-6">
                                <label >Gender user</label>
                                <select class="form-control" name="gender" >
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
                                <input class="form-control" id="inputPhone" name="email" value="{{ auth()->user()->email }}"  type="email"
                                    placeholder="Enter email address ">
                            </div>
                            <div class="col-md-6">
                                <label > Password</label>
                                <input class="form-control" id="inputPhone" name="password" type="password"
                                    placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="btn btn-primary px-3 ml-4">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
