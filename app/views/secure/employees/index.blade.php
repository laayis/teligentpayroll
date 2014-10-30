@section('leftmenu')
{{ View::make('partial.leftmenu') }}
@endsection

@section('content')
	<h3>Employee Management</h3>
	<table class="datatable">
		<thead>
			<tr>
				<th>Last Name</th>
				<th>First Name</th>
				<th>Middle Name</th>
			</tr>
		</thead>
		<tbody>
			@foreach($employees as $employee)
				<tr>
					<td>{{$employee->lastname}}</td>
					<td>{{$employee->firstname}}</td>
					<td>{{$employee->employeename}}</td>
					<td>{{$employee->email}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection