@if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
@extends('layout.app')

@section('content')
    <div class="card">
        <div class="card-header">
                <h4 class="card-title">Create Department</h4>
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

                <form action="{{ route('departments.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label >Department Name</label>
                            <input class="form-control"  name="name_department" type="text"
                            placeholder="Enter department name ">
                        </div>
                        <div class="form-group col-md-6">
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



