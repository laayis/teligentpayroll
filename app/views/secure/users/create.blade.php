@section('leftmenu')
{{ View::make('partial.leftmenu') }}
@endsection

@section('content')
	<div class="swiper-container">
	  <div class="swiper-wrapper">
	      <!--First Slide-->
	      <div class="swiper-slide"> 
	        <!-- Any HTML content of the first slide goes here -->
			<h3>Account Information</h3>
	        {{Form::open(['route'=>'secure.users.store'])}}
				<p>
					<label>Admin</label>
					<span class="field">
						{{Form::checkbox('isadmin',Input::old('isadmin'), false)}}
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
						{{Form::password('password',null,array('class'=>($errors->first('password')) ? 'i-error' : ' '))}}
							{{$errors->first('password', '<span class="f-error">:message</span>');}}
					</span>
				</p>

				<p>
					<label>Confirm Password</label>
					<span class="field">
						{{Form::password('password_confirmation',null,array('class'=>($errors->first('password_confirmation')) ? 'i-error' : ''))}}
						{{$errors->first('password_confirmation', '<span class="f-error">:message</span>');}}
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

				<p class="swipe-control">
					<a href="#" class="button next">Next <i class="fa fa-angle-right"></i> </a>
				</p>
				
	      </div>
	      
	      <!--Second Slide-->
	      <div class="swiper-slide">
	        <!-- Any HTML content of the second slide goes here -->
			<h3>Access Level</h3>
			<table class="access-level" style="width:100%">
				<tr>
					<th>Module</th>
					<th>Read</th>
					<th>Create</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
				@foreach($modules as $module)
				<tr>
					<td>{{strtoupper($module->description)}}</td>
					@for($i = 0; $i < 4; $i++)
						<td><p>{{Form::checkbox('chkmodule' . $module->id . '[]', $i,Input::old('chkmodule[]'),false)}}</p></td>
					@endfor
				</tr>
				@endforeach
			</table>
	        	<p class="swipe-control">
	        		<a href="#" class="button prev"><i class="fa fa-angle-left"></i> Previous</a>
	        		{{Form::button('<i class="fa fa-save"></i> Save', array('type' => 'submit', 'class' => 'success button'))}}
				</p>
			{{Form::close()}}
	      </div>
	  </div>
	</div>
	
@endsection