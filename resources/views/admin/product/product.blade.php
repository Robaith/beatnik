@extends('admin.admin_layouts')

@section('admin_content')


<div class="sl-mainpanel">

	<div class="sl-pagebody">
		<div class="sl-page-title">
			<h5>Product Table</h5>
			<p align="right">
				<a href="{{route('product.create')}}" class="btn btn-sm btn-info">Add Product</a>
			</p>
		</div><!-- sl-page-title -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

		<div class="card pd-20 pd-sm-40">

			<div class="table-wrapper">
				<table id="datatable1" class="table display responsive nowrap">
					<thead>
						
						<tr>
							<th class="wd-5p">ID</th>
							<th class="wd-10p">Name</th>
							<th class="wd-15p">Category</th>
							<th class="wd-15p">Price</th>
							<th class="wd-10p">Image</th>
							<th class="wd-15p">quantity</th>
							<th class="wd-15p">Action</th>
						</tr>
						
					</thead>
					<tbody>
						@foreach($product as $key=>$row)
						<tr>
							<td>{{ $key +1 }}</td>
							<td>{{ $row->product_name }}</td>
							<td>{{ $row->category_name }}</td>
							<td>{{ $row->product_price }}</td>
							<td><img src="{{ URL::to($row->product_image) }}" width="70px" height="70px"></td>
							<td>{{ $row->product_quantity }}</td>

							<td>
								<a href="{{ route('edit.product', $row->id) }} " class="btn btn-sm btn-info">Edit</a>
								<a href="{{ route('destroy.product', $row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
							</td>
						</tr>
						@endforeach
						</tbody>
					</table>
				</div><!-- table-wrapper -->
			</div><!-- card -->


			

			@endsection