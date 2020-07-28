@extends('admin.admin_layouts')

@section('admin_content')


<div class="sl-mainpanel">

	<div class="sl-pagebody">
		<div class="sl-page-title">
			<h5>News and Events</h5>
			<p align="right">
				<a href="" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modaldemo3">Add News or Event</a>
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
							<th class="wd-15p">ID</th>
							<th class="wd-15p">Title</th>
							<th class="wd-15p">Image</th>
							<th class="wd-25p">Details</th>
							<th class="wd-20p">Action</th>
						</tr>
						
					</thead>
					<tbody>
						@foreach($news as $key=>$row)
						<tr>
							<td>{{ $key +1 }}</td>
							<td>{{ $row->news_title }}</td>
							<td><img src="{{ URL::to($row->news_image) }}" width="70px" height="60px"></td>
							<td>{{ $row->news_details }}</td>
							<td>
								<a href="{{ route('edit.news', $row->id) }} " class="btn btn-sm btn-info">Edit</a>
								<a href="{{ route('destroy.news', $row->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
							</td>
						</tr>
						@endforeach
						</tbody>
					</table>
				</div><!-- table-wrapper -->
			</div><!-- card -->


			<!--Add News LARGE MODAL -->
			<div id="modaldemo3" class="modal fade">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content tx-size-sm">
						<div class="modal-header pd-x-20">
							<h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Add News or Event</h6>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" action="{{ route('store.news') }}" enctype="multipart/form-data">
							@csrf
							<div class="modal-body pd-20"> 
								<div class="form-group">
									<label for="exampleInputEmail1">Title</label>
									<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title" name="news_title">

								</div>
								<div class="form-group">
									<label for="exampleInputEmail1">Image</label>
									<input type="file" class="form-control" aria-describedby="emailHelp" placeholder="image" name="news_image">

								</div>
								<div class="form-group">
                  <label class="form-control-label">Details: <span class="tx-danger">*</span></label>
  
            <textarea class="form-control" id="summernote"  name="news_details"> 

             </textarea>
                   
                </div>

							</div><!-- modal-body -->
							<div class="modal-footer">
								<button type="submit" class="btn btn-info pd-x-20">Sumbit</button>
								<button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
							</div>
						</form>
					</div>
				</div><!-- modal-dialog -->
			</div><!-- modal -->

			
			@endsection