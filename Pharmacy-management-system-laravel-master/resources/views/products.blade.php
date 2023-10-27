@extends('layouts.app')

@push('page-css')
	<!-- Select2 CSS -->
	<link rel="stylesheet" href="{{asset('assets/plugins/select2/css/select2.min.css')}}">
	<style>
	/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 30%;
  padding: 10px;
}

/* Style the images inside the grid */
.column img {
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
	<h3 class="page-title">Products</h3>
	<ul class="breadcrumb">
		<li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
		<li class="breadcrumb-item active">Products</li>
	</ul>
</div>
<div class="col-sm-5 col">
	<a href="{{route('add-product')}}" class="btn btn-primary float-right mt-2">Add New</a>
</div>
@endpush

@section('content')
<div class="row">
	<div class="col-md-12">
	
		<!-- Products -->
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="datatable-export" class="table table-hover table-center mb-0">
						<thead>
							<tr>
								<th>Product Name</th>
								<th>Active Ingredient</th>
								<th>Category</th>
								<th>Price</th>
								<th>Quantity</th>
								<th>Discount</th>
								<th>Expiry Date</th>
								<th class="action-btn">Action</th>
							</tr>
						</thead>
						<tbody>

							@foreach ($products as $product)
								@if($product->purchase()->exists())
								<tr>
									<td>
										<h2 class="table-avatar">
											@if(!empty($product->purchase->image))
											<span class="avatar avatar-sm mr-2">
												<img class="avatar-img" src="{{asset('storage/purchases/'.$product->purchase->image)}}" alt="product image" onclick="myFunction(this);">
											</span>
											@endif
											{{$product->purchase->name}}
										</h2>
									</td>
									<td>{{$product->description}}</td>
									<td>{{$product->purchase->category->name}}</td>
									<td>{{$product->price}}JOD 
									</td>
									<td>{{$product->purchase->quantity}}</td>
									<td>{{$product->discount}}%</td>
									<td>
									{{date_format(date_create($product->purchase->expiry_date),"d M, Y")}}</span>										
									</td>
									<td>
										<div class="actions">
											<a class="btn btn-sm bg-success-light" href="{{route('edit-product',$product)}}">
												<i class="fe fe-pencil"></i> Edit
											</a>
											<a data-id="{{$product->id}}" href="javascript:void(0);" class="btn btn-sm bg-danger-light deletebtn" data-toggle="modal">
												<i class="fe fe-trash"></i> Delete
											</a>
										</div>
									</td>
								</tr>
								@endif
							@endforeach
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="container">
    <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
    <img id="expandedImg" style="width:100%">
    <div id="imgtext"></div>
  </div>
		<!-- /Products -->
		
	</div>
</div>

<!-- Delete Modal -->
<x-modals.delete :route="'products'" :title="'Product'" />
<!-- /Delete Modal -->
@endsection

@push('page-js')
	<!-- Select2 JS -->
	<script src="{{asset('assets/plugins/select2/js/select2.min.js')}}"></script>
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