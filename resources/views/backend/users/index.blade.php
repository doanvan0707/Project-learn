@extends('layouts.admin')
@section('content')
<div class="container">
	<a href="{{ route('users.create') }}"><i class="fa fa-user-plus">Thêm người dùng</i></a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>UserName</th>
				<th>Email</th>
				<th>Role</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->username }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->role->name }}</td>
					<td class="hidden-sm hidden-xs btn-group">
						<a href="{{ route('users.show', $user) }}" class="btn btn-xs btn-success" title="Xem thông tin"><i class="ace-icon fa fa-eye bigger-120"></i></a>
				        <a href="{{ route('users.edit', $user) }}" class="btn btn-xs btn-info" title="Chỉnh sửa thông tin"><i class="ace-icon fa fa-pencil bigger-120"></i></a>
				        <form action="{{ route('users.destroy', $user->id) }}" method="post">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
							<button type="submit" class="btn btn-xs btn-danger" title="Xóa người dùng"><i class="ace-icon fa fa-trash-o bigger-120"></i></button>
						</form>
					</td>
				</tr>

			@endforeach	
		</tbody>
	</table>
</div>
@endsection