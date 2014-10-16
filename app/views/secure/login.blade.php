@section('content')
  <div class="container">
    <div class="large-6 large-centered column login-form">
      <h3>Teligent Systems Inc. Payroll System</h3>
      {{Form::open(['action' => 'LoginController@checkLogin'])}}
        {{ Form::label('username', 'Username') }}
        {{ Form::text('username') }}
        {{ Form::label('password','Password') }}
        {{ Form::password('password') }}
        {{ Form::submit('Login', ['class' => 'button success expand']) }}
      {{ Form::close() }} 
    </div>
  </div>
@endsection