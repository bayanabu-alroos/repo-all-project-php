@extends('layouts.app')

@push('page-css')
<!-- Select2 css-->
<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
<style>
	/* The grid: Four equal columns that floats next to each other */
.column {
  /* float: left; */
  width: 100%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
	width: 60px;
	height: 40px;
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;
}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
@endpush

@push('page-header')
<div class="col-sm-7 col-auto">
	<h3 class="page-title">User</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Users</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="#add_user" data-toggle="modal" class="btn btn-primary float-right mt-2">Add User</a>
</div>

@endpush

@section('content')

<div class="row">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable-export" class=" table table-striped table-bordered table-hover table-center mb-0">
						<thead>
							<tr style="boder:1px solid black;">
							<th>image</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Role</th>
								<th>Personal ID</th>
								<th>Created date</th>

								<th class="text-center action-btn">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($users as $user)
							<tr>
							<td>

							<div class="row">
@if(!empty($user->avatar))
<!-- The four columns -->

	<div class="column  avatar avatar-sm mr-2">
		<img class="avatar-img"  src="{{asset('storage/users/'.$user->avatar)}}" alt="Nature"  onclick="myFunction(this);">
	</div>

@endif
@if(empty($user->avatar))

										<div class="column  avatar avatar-sm mr-2">
											<img class="avatar-img" src="https://as1.ftcdn.net/v2/jpg/03/46/83/96/1000_F_346839683_6nAPzbhpSkIpb8pmAwufkC7c5eD7wYws.jpg" alt="product image">
</div>
										@endif
										</div>
</div>

</td>
								<td>
								
										{{$user->name}}
									</h2>
								</td>
								<td>
									{{$user->phone}}
								</td>
								<td>
									{{$user->email}}
								</td>
								@can('update-role')
								<td>
									@foreach ($user->getRoleNames() as $role)
									{{$role}}
									@endforeach
								</td>
								@endcan
<td>
<div class="row">
										@if(!empty($user->id_img))
										<div class="column  avatar avatar-sm mr-2">
											<img style=margin-left:30%; class="avatar-img avatar-img" src="{{asset('storage/users/'.$user->id_img)}}" alt="personal ID" onclick="myFunction(this)"; >
</div>
										@else
										<div class="avatar avatar-sm mr-5">
											<img style=margin-left:100%;  class="avatar-img" src="https://image.shutterstock.com/image-vector/id-card-icon-vector-isolated-600w-1632539407.jpg" alt="personal ID " >
</div>
										@endif
									</h2>
								</td>
								<td>{{date_format(date_create($user->created_at),"d M,Y")}}</td>

								<td class="text-center">
									<div class="actions">
										<a data-id="{{$user->id}}" data-name="{{$user->name}}" data-email="{{$user->email}}" data-phone="{{$user->phone}}" class="btn btn-sm bg-success-light editbtn" id="edit-user" data-toggle="modal" href="javascript:void(0)">
											<i class="fe fe-pencil"></i> Edit
										</a>
										<a data-id="{{$user->id}}" href="javascript:void(0);" class="btn btn-sm bg-danger-light deletebtn" data-toggle="modal">
											<i class="fe fe-trash"></i> Delete
										</a>
									</div>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <img id="expandedImg" style="width:100%">
    <div id="imgtext"></div>
  </div>


<!-- Add Modal -->
<div class="modal fade" id="add_user" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Add User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" enctype="multipart/form-data" action="{{route('users')}}">
					@csrf
					<div class="row form-row">
						<div class="col-12">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" name="name" class="form-control" placeholder="John Doe">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>Phone</label>
								<input type="tel" name="phone" class="form-control">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>Email</label>
								<input type="email" name="email" class="form-control">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>Role</label>
								<div class="form-group">
									<select class="select2 form-select form-control" name="role">
										@foreach ($roles as $role)
											<option value="{{$role->name}}">{{$role->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>Picture</label>
								<input type="file" name="avatar">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>Personal ID</label>
								<input type="file" name="id_img">
							</div>
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="password" name="password_confirmation" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /ADD Modal -->

<!-- Edit Details Modal -->
<div class="modal fade" id="edit_user" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Edit User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" enctype="multipart/form-data" action="{{route('users')}}">
					@csrf
					@method("PUT")
					<div class="row form-row">
						<input type="hidden" name="id" id="edit_id">
						<div class="col-12">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" name="name" class="form-control edit_name" placeholder="John Doe">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label>Phone</label>
								<input type="tel" name="phone" value="" class="form-control edit_phone">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control edit_email" id="email">
							</div>
						</div>
						@can('update-role')
						<div class="col-12">
							<div class="form-group">
								<label>Role</label>
								<div class="form-group">
									<select class="select2 form-select form-control edit_role" name="role">
										@foreach ($roles as $role)
											<option value="{{$role->name}}">{{$role->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						@endcan
						<div class="col-12">
							<div class="form-group">
								<label for="avatar">User Picture</label>
								<input type="file" name="avatar" id="avatar" value="{{asset('storage/users/'.$user->avatar)}}">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label for="avatar">User Id Image</label>
								<input type="file" name="id_img" id="avatar" value="{{asset('storage/users/'.$user->id_img)}}">
							</div>
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="password" name="password_confirmation" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Details Modal -->


<!-- View Details Modal -->
<div class="modal fade" id="view_user" aria-hidden="true" role="dialog">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">View User</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post" enctype="multipart/form-data" action="{{route('users')}}">
					@csrf
					@method("PUT")
					<div class="row form-row">
						<input type="hidden" name="id" id="edit_id">
						<div class="col-12">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" name="name" class="form-control edit_name" placeholder="John Doe">
							</div>
						</div>
						<div class="col-12">
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control edit_email" id="email">
							</div>
						</div>
						@can('update-role')
						<div class="col-12">
							<div class="form-group">
								<label>Role</label>
								<div class="form-group">
									<select class="select2 form-select form-control edit_role" name="role">
										@foreach ($roles as $role)
											<option value="{{$role->name}}">{{$role->name}}</option>
										@endforeach
									</select>
								</div>
							</div>
						</div>
						@endcan
						<div class="col-12">
							<div class="form-group">
								<label for="avatar">User Picture</label>
								<input type="file" name="avatar" id="avatar">
							</div>
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-6">
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="form-group">
										<label>Confirm Password</label>
										<input type="password" name="password_confirmation" class="form-control">
									</div>
								</div>
							</div>
						</div>
					</div>
					<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /Edit Details Modal -->

<!-- Delete Modal -->
<x-modals.delete :route="'users'" :title="'User'" />
<!-- /Delete Modal -->
@endsection


@push('page-js')
<!-- Select2 js-->
<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>

<script>
		$(document).ready(function() {
			$('#datatable-export').on('click','.editbtn',function (){
				event.preventDefault();
				jQuery.noConflict();
				$('#edit_user').modal('show');
				var id = $(this).data('id');
				var name = $(this).data('name');
				var phone = $(this).data('phone');
				var email = $(this).data('email');
				var role = $(this).data('role');
				$('#edit_id').val(id);
				$('.edit_name').val(name);
				$('.edit_phone').val(phone);
				$('.edit_email').val(email);
				$('.edit_role').val(role);
			});
			//


		});
	</script>
	<script>
    function myFunction(imgs) {
      var expandImg = document.getElementById("expandedImg");
      var imgText = document.getElementById("imgtext");
      expandImg.src = imgs.src;
    //   imgText.innerHTML = imgs.alt;
      expandImg.parentElement.style.display = "block";
    }
    </script>
@endpush
