@if (\Illuminate\Support\Facades\Auth::user()->role == 'admin')
    @extends('layout.app')

    @section('content')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-10">
                        <h4 class="card-title">Data Departments Table</h4>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('departments.create') }}" class="btn btn-success btn-sm float-end">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                            </svg>&nbsp;&nbsp;Add Department </a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-dark table-bordered zero-configuration table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th> Name Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($departments as $department)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $department->name_department }}</td>
                                </tr>
                            @endforeach
                    </table>
                    {!! $departments->links() !!}
                    </tr>
                    </table>
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
