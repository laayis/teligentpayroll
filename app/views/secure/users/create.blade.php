@section('leftmenu')
<?php echo View::make('partial.leftmenu') ?>	
@endsection

@section('content')
	{{Form::open(['route'=>'secure.users.store'])}}
		<p>
			<label>Admin</label>
			<span class="field">
				{{Form::checkbox('isadmin',Input::old('isadmin'),array('class'=>($errors->first('isadmin')) ? 'i-error' : ''))}}
				{{$errors->first('isadmin', '<span class="f-error">:message</span>');}}
			</span>
		</p>
		
		<p>
			<label>Username</label>
			<span class="field">
				{{Form::text('username',Input::old('username'),array('class'=>($errors->first('username')) ? 'i-error' : ' '))}}
					{{$errors->first('username', '<span class="f-error">:message</span>');}}
			</span>
		</p>

		<p>
			<label>Password</label>
			<span class="field">
				{{Form::text('password',Input::old('password'),array('class'=>($errors->first('password')) ? 'i-error' : ' '))}}
					{{$errors->first('password', '<span class="f-error">:message</span>');}}
			</span>
		</p>

		<p>
			<label>Last Name</label>
			<span class="field">
				{{Form::text('lastname',Input::old('lastname'),array('class'=>($errors->first('lastname')) ? 'i-error' : ' '))}}
					{{$errors->first('lastname', '<span class="f-error">:message</span>');}}
			</span>
		</p>

		<p>
			<label>First Name</label>
			<span class="field">
				{{Form::text('firstname',Input::old('firstname'),array('class'=>($errors->first('firstname')) ? 'i-error' : ' '))}}
					{{$errors->first('firstname', '<span class="f-error">:message</span>');}}
			</span>
		</p>

		<p>
			<label>Position</label>
			<span class="field">
				{{Form::text('position',Input::old('position'),array('class'=>($errors->first('position')) ? 'i-error' : ' '))}}
					{{$errors->first('position', '<span class="f-error">:message</span>');}}
			</span>
		</p>

		<p>
			<label>Contact No.</label>
			<span class="field">
				{{Form::text('contactno',Input::old('contactno'),array('class'=>($errors->first('contactno')) ? 'i-error' : ' '))}}
					{{$errors->first('contactno', '<span class="f-error">:message</span>');}}
			</span>
		</p>

		<p>
			<label>Email</label>
			<span class="field">
				{{Form::text('email',Input::old('email'),array('class'=>($errors->first('email')) ? 'i-error' : ' '))}}
					{{$errors->first('email', '<span class="f-error">:message</span>');}}
			</span>
		</p>

		<p>
			<label>Profile Picture</label>
			<span class="field">
				{{Form::text('userpic',Input::old('userpic'),array('class'=>($errors->first('userpic')) ? 'i-error' : ' '))}}
					{{$errors->first('userpic', '<span class="f-error">:message</span>');}}
			</span>
		</p>

		<p>
			<input type ="submit" value="Save">
		</p>
	{{Form::close()}}
@endsection