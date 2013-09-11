@extends('master')

@section('container-main')

<h2>Register</h2>

{{ Form::open( array(
		'action' => array('UsersController@store'),
		'method' => 'POST',
		'class' => 'form-horizontal',
		'role' => 'form'
		)
	)}}

	<div class="form-group">

	{{ Form::label('email', 'E-mail', array(
	'class' => 'control-label col-lg-2', 
	'for' => 'email')) 
	}}
	<div class="col-lg-6">
	{{ Form::text('email', '', array(
	'class' => 'form-control col-lg-6', 
	'id' => 'email', 
	'placeholder' => 'Username',
	'required' => '')
	) }}
	</div>
  </div>

	<div class="form-group">

	{{ Form::label('username', 'Username', array(
	'class' => 'control-label col-lg-2', 
	'for' => 'username')) 
	}}
	<div class="col-lg-6">
	{{ Form::text('username', '', array(
	'class' => 'form-control col-lg-6', 
	'id' => 'username', 
	'placeholder' => 'Username',
	'required' => '')
	) }}
	</div>
  </div>

  <div class="form-group">

	{{ Form::label('password', 'Password', array('class' => 'control-label col-lg-2', 'for' => 'username')) }}
	<div class="col-lg-6">
	{{ Form::password('password', array('class' => 'form-control col-lg-6', 'id' => 'password', 'placeholder' => 'Password',
	'required' => '')) }}
	</div>
  </div>

  <div class="form-group">

	{{ Form::label('password_confirmation', 'Confirm Password', array('class' => 'control-label col-lg-2', 'for' => 'username')) }}
	<div class="col-lg-6">
	{{ Form::password('password_confirmation', array('class' => 'form-control col-lg-6', 'id' => 'password_confirmation', 'placeholder' => 'Confirm Password',
	'required' => '')) }}
	</div>
  </div>

  <div class="form-group">
    <div class="col-lg-2 col-lg-offset-6">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>

{{ Form::close() }}


@endsection