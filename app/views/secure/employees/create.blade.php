@section('leftmenu')
{{ View::make('partial.leftmenu') }}
@endsection


@section('content')
	<div class="create-user">
			{{Form::open(['route'=>'secure.users.store'])}}
			<div class="large-12 columns ft-container">
				<div class="large-5 column form-title">
					<h4><i class="fa fa-user"></i> Personal Information</h4>
				</div>
			</div>
			
			<div class="row form-container">
				<div class="large-4 columns">
					{{Form::label('lastname','Last Name')}}
					{{Form::text('lastname',Input::old('lastname'),array('class'=>($errors->first('lastname')) ? 'i-error' : ' '))}}
					{{$errors->first('lastname', '<span class="f-error">:message</span>');}}
				</div>

				<div class="large-4 columns">
					{{Form::label('firstname','First Name')}}
					
						{{Form::text('firstname',Input::old('firstname'),array('class'=>($errors->first('firstname')) ? 'i-error' : ' '))}}
							{{$errors->first('firstname', '<span class="f-error">:message</span>');}}
					
				</div>
				
				<div class="large-4 columns">
					{{Form::label('middlename','Middle Name')}}
					{{Form::text('middlename', Input::old('middlename'), array('class'=>($errors->first('middlename')) ? 'i-error' : ' '))}}
					{{$errors->first('middlename', '<span class="f-error">:message</span>')}}
				</div>

				<div class="large-8 columns">
					{{Form::label('address','Home Address')}}
					{{Form::text('address', Input::old('address'), array('class'=>($errors->first('address')) ? 'i-error' : ' '))}}

					{{$errors->first('address', '<span class="f-error">:message</span>')}}
				</div>

				<div class="large-4 columns">
					{{Form::label('contactno','Contact Number')}}
						{{Form::text('contactno',Input::old('contactno'),array('class'=>($errors->first('contactno')) ? 'i-error' : ' '))}}
							{{$errors->first('contactno', '<span class="f-error">:message</span>');}}
				</div>

				<div class="large-6 columns left">
					{{Form::label('birthdate', 'Birthdate')}}
					<input type="date" name="birthdate">
							{{$errors->first('email', '<span class="f-error">:message</span>');}}
				</div>
				<div class="large-2 columns">
					{{Form::label('age', 'Age')}}	
					{{Form::text('age')}}
				</div>

				<div class="large-4 columns">
					{{Form::label('gender','Gender')}}
					<select>
						<option>Male</option>
						<option>Female</option>
						<option>Other</option>
					</select>
				</div>
				

			</div>
			
			<div class="large-12 columns ft-container">
						<div class="large-5 column form-title">
							<h4><i class="fa fa-key"></i> Employee Information</h4>
						</div>
			</div>

			<div class="row form-container">
				<div class="large-6 column">
					{{Form::label('employeenum','Employee Number')}}

					{{
						Form::text('employeenum',Input::old('employeenum'),
						array('class'=>($errors->first('employeenum')) ? 'i-error' : ' '))
					}}


					{{Form::label('email', 'Email Address')}}
					{{Form::text('email',Input::old('email'),array('class'=>($errors->first('email')) ? 'i-error' : ' '))}}
							{{$errors->first('email', '<span class="f-error">:message</span>');}}
				

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

						{{Form::label('date-hired','Date Hired')}}

					<input type="date" name="date-hired">

					 	{{Form::label('department','Department')}}

						{{
							Form::text('department',Input::old('department'),
							array('class'=>($errors->first('department')) ? 'i-error' : ' '))
						}}
						
						{{$errors->first('department', '<span class="f-error">:message</span>');}}

						{{Form::label('position','Position')}}

						{{
							Form::text('position',Input::old('position'),
							array('class'=>($errors->first('position')) ? 'i-error' : ' '))
						}}
						
						{{$errors->first('position', '<span class="f-error">:message</span>');}}
					
				</div>

				<div class="large-6 columns">
						{{Form::label('tin','TIN Number')}}

						{{
							Form::text('tin',Input::old('tin'),
							array('class'=>($errors->first('tin')) ? 'i-error' : ' '))
						}}
						
						{{$errors->first('tin', '<span class="f-error">:message</span>');}}
						
						{{Form::label('sss','SSS Number')}}

						{{
							Form::text('sss',Input::old('sss'),
							array('class'=>($errors->first('sss')) ? 'i-error' : ' '))
						}}
						
						{{$errors->first('sss', '<span class="f-error">:message</span>');}}

						{{Form::label('pag-ibig','Pag-Ibig Number')}}

						{{
							Form::text('pag-ibig',Input::old('pag-ibig'),
							array('class'=>($errors->first('pag-ibig')) ? 'i-error' : ' '))
						}}
						
						{{$errors->first('pag-ibig', '<span class="f-error">:message</span>');}}
						
						{{Form::label('philhealth','Philhealth Number')}}

						{{
							Form::text('philhealth',Input::old('philhealth'),
							array('class'=>($errors->first('philhealth')) ? 'i-error' : ' '))
						}}
						
						{{$errors->first('philhealth', '<span class="f-error">:message</span>');}}
						
				</div>

			</div>
				{{Form::button('<i class="fa fa-save"></i> Save', array('type' => 'submit', 'class' => 'success button right'))}}
			{{Form::close()}}
		</div>
	
@endsection