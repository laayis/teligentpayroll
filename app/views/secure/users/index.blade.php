@section('leftmenu')
{{ View::make('partial.leftmenu') }}
@endsection

@section('content')
	<h3>User Management</h3>
	<table class="datatable">
		<thead>
			<tr>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Username</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->lastname}}</td>
					<td>{{$user->firstname}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->email}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection