@section('leftmenu')
{{ View::make('partial.leftmenu') }}
@endsection

@section('content')
	<div class="create-user">

			<div class="large-12 columns ft-container">
				<div class="large-5 column form-title">
					<h4><i class="fa fa-user"></i> User Information</h4>
				</div>
			</div>
			
			<div class="row form-container">
				<div class="large-4 columns">
					{{Form::label('lastname','Last Name')}}
					{{Form::text('lastname')}}
				</div>

				<div class="large-4 columns">
					{{Form::label('firstname','First Name')}}
					{{Form::text('firstname')}}
				</div>

				<div class="large-4 columns">
					{{Form::label('middlename','Middle Name')}}
					{{Form::text('middlename')}}
				</div>
				
				<div class="large-8 columns left">
					{{Form::label('address', 'Address')}}
					{{Form::text('address')}}
				</div>
				
				<div class="large-4 columns">
					{{Form::label('contactnum','Contact Number')}}
					{{Form::text('contactnum')}}
				</div>

				<div class="large-8 columns left">
					{{Form::label('position','Position')}}
					{{Form::text('position')}}
				</div>
			
			</div>
			
			<div class="large-12 columns ft-container">
						<div class="large-5 column form-title">
							<h4><i class="fa fa-key"></i> Account Information</h4>
						</div>
			</div>

			<div class="row form-container">
				<div class="large-12 column left">
					{{Form::label('adminaccess', 'Allow access to User Management')}}
					{{Form::checkbox('adminaccess')}}
				</div>

				<div class="large-3 columns">
					{{Form::label('username','Username')}}
					{{Form::text('username')}}
				</div>

				<div class="large-3 columns">
					{{Form::label('password','Password')}}
					{{Form::password('password')}}
				</div>

				<div class="large-3 columns">
					{{Form::label('rppassword','Repeat Password')}}
					{{Form::password('rppassword')}}
				</div>

				<div class="large-12 columns">
					<table id="access-level" class="access-level">
					    <thead>
					        <tr>
					            <th>Module</th>
					            <th>Create</th>
					            <th>Read</th>
					            <th>Update</th>
					            <th>Delete</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					        	<td>Employee Management</td>
					        	<td>{{Form::checkbox('emcreate')}}</td>
					        	<td>{{Form::checkbox('emread')}}</td>
					        	<td>{{Form::checkbox('emupdate')}}</td>
					        	<td>{{Form::checkbox('emdelete')}}</td>
					        </tr>
					        <tr>
					        	<td>Reports</td>
					        	<td>{{Form::checkbox('rpcreate')}}</td>
					        	<td>{{Form::checkbox('rpread')}}</td>
					        	<td>{{Form::checkbox('rpupdate')}}</td>
					        	<td>{{Form::checkbox('rpdelete')}}</td>
					        </tr>
					    </tbody>
					</table>
				</div>
			</div>

		</div>
		
		
	
@endsection