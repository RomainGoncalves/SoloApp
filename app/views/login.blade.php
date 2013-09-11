@extends('master')

@section('container-main')

<h2>Login</h2>

{{ Form::open(array('class' => 'form-horizontal', 'role' => 'form')) }}
	<div class="form-group">
	{{ Form::label('username', 'Username', array('class' => 'control-label col-lg-1', 'for' => 'username')) }}
	<div class="col-lg-6">
	{{ Form::text('username', '', array('class' => 'form-control col-lg-6', 'id' => 'username', 'placeholder' => 'Username')) }}
	</div>
  </div>

  <div class="form-group">

	{{ Form::label('password', 'Password', array('class' => 'control-label col-lg-1', 'for' => 'username')) }}
	<div class="col-lg-6">
	{{ Form::password('password', array('class' => 'form-control col-lg-6', 'id' => 'password', 'placeholder' => 'Password')) }}
	</div>
  </div>
  <div class="form-group">
    <div class="col-lg-offset-6">
      <button type="submit" class="btn btn-primary">Sign in</button>
    </div>
  </div>

{{ Form::close() }}


@endsection