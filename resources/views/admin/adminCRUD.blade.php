@extends('layouts.adminlayout')

@section('content')
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>isHere <b>Tenants</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Tenant</span></a>
						<a href="{{ url('/admin/logout') }}">logout</a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Created At</th>
						<th>Updated At</th>
						<th>Data</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tenants as $list)
                    <tr>
						<td>{{ $list->id }}</td>
						<td>{{ $list->created_at }}</td>
						<td>{{ $list->updated_at }}</td>
						<td>{{ $list->data }}</td>
						<td>
							<a href="{{ url('/admin/'.$list->id.'/edit') }}" class="edit" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
						<form action="{{ url('/admin/'.$list->id) }}" method="post">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit"><a href="#deleteEmployeeModal" type="submit" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a></button>
                        </form>
                        </td>
					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>        
</div>
<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ url('/admin') }}" method="post" >
                {!! csrf_field() !!}
				<div class="modal-header">						
					<h4 class="modal-title">Add Tenant</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>ID</label>
						<input type="text" class="form-control" name="id" required>
					{{-- </div>
					<div class="form-group">
						<label>Created At</label>
						<input type="email" class="form-control" name="created_at"  required>
					</div>
					<div class="form-group">
						<label>Updated At</label>
						<input type="text" class="form-control" name="updated_at"  required>
					</div>
					<div class="form-group">
						<label>Data</label>
						<textarea class="form-control" name="data"  required>{"tenancy_db_name":""}</textarea>
						
					</div>					 --}}
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<!-- Edit Modal HTML -->

<!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">Delete Employee</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>Are you sure you want to delete these Records?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection