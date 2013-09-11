@extends('master')

@section('container-main')

	<h2>{{ $user->username }}</h2>

	<em>{{ $user->email }}</em>

@endsection