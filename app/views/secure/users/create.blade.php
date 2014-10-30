@section('leftmenu')
{{ View::make('partial.leftmenu') }}
@endsection


@section('content')
	<div class="create-user">
			{{Form::open(['route'=>'secure.users.store'])}}
			<div class="large-12 columns ft-container">
				<div class="large-5 column form-title">
					<h4><i class="fa fa-user"></i> User Information</h4>
				</div>
			</div>
			
			<div class="row form-container">
				<div class="large-6 columns">
					{{Form::label('lastname','Last Name')}}
					{{Form::text('lastname',Input::old('lastname'),array('class'=>($errors->first('lastname')) ? 'i-error' : ' '))}}
					{{$errors->first('lastname', '<span class="f-error">:message</span>');}}
				</div>

				<div class="large-6 columns">
					{{Form::label('firstname','First Name')}}
					
						{{Form::text('firstname',Input::old('firstname'),array('class'=>($errors->first('firstname')) ? 'i-error' : ' '))}}
							{{$errors->first('firstname', '<span class="f-error">:message</span>');}}
					
				</div>
				
				<div class="large-6 columns left">
					{{Form::label('email', 'Email Address')}}
					{{Form::text('email',Input::old('email'),array('class'=>($errors->first('email')) ? 'i-error' : ' '))}}
							{{$errors->first('email', '<span class="f-error">:message</span>');}}
				</div>
				
				<div class="large-6 columns">
					{{Form::label('contactno','Contact Number')}}
						{{Form::text('contactno',Input::old('contactno'),array('class'=>($errors->first('contactno')) ? 'i-error' : ' '))}}
							{{$errors->first('contactno', '<span class="f-error">:message</span>');}}
				</div>

				<div class="large-6 columns left">
					{{Form::label('position','Position')}}
					{{Form::text('position',Input::old('position'),array('class'=>($errors->first('position')) ? 'i-error' : ' '))}}
							{{$errors->first('position', '<span class="f-error">:message</span>');}}
				</div>
			
			</div>
			
			<div class="large-12 columns ft-container">
						<div class="large-5 column form-title">
							<h4><i class="fa fa-key"></i> Account Information</h4>
						</div>
			</div>

			<div class="row form-container">
				
				<div class="large-12 column left">
					{{Form::label('isadmin', 'Allow access to User Management')}}
					{{Form::checkbox('isadmin',Input::old('isadmin'), false)}}
						{{$errors->first('isadmin', '<span class="f-error">:message</span>');}}
				</div>
				
				<div class="large-6 columns">
					{{Form::label('username','Username')}}

					{{
						Form::text('username',Input::old('username'),
						array('class'=>($errors->first('username')) ? 'i-error' : ' '))
					}}
					
					{{$errors->first('username', '<span class="f-error">:message</span>');}}

					{{Form::label('password','Password')}}
					{{Form::password('password',null,array('class'=>($errors->first('password')) ? 'i-error' : ' '))}}
							{{$errors->first('password', '<span class="f-error">:message</span>');}}

					{{Form::label('password_confirmation','Repeat Password')}}
					{{Form::password('password_confirmation',null,array('class'=>($errors->first('password_confirmation')) ? 'i-error' : ''))}}
						{{$errors->first('password_confirmation', '<span class="f-error">:message</span>');}}
					
				</div>

				<div class="large-6 columns">
					<table id="access-level" class="access-level">
						<thead>
							<tr>
								<td colspan="5">Select the modules allowed to be accessed.</td>
							</tr>
							<tr>
								<th>Module</th>
								<th>Read</th>
								<th>Create</th>
								<th>Update</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							@foreach($modules as $module)
							<tr>
								<td>{{strtoupper($module->description)}}</td>
								@for($i = 0; $i < 4; $i++)
									<td><p>{{Form::checkbox('chkmodule' . $module->id . '[]', $i,Input::old('chkmodule[]'),false)}}</p></td>
								@endfor
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>

			</div>
				{{Form::button('<i class="fa fa-save"></i> Save', array('type' => 'submit', 'class' => 'success button right'))}}
			{{Form::close()}}
		</div>
	
@endsection