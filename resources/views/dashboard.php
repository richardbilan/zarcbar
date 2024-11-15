
@section('title', 'Financial Tracker')

@section('styles')
	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Bebas+Neue&amp;family=Figtree:wght@300;600&amp;display=swap'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Pacifico&amp;family=Quicksand&amp;display=swap'>
	<link rel="stylesheet" href="{{ asset('styles/styles_a.css') }}">
	@endsection

@extends('Components.Layout') 
@section('title', 'Username - Contact') 

@section('content') 

<h1>Welcome, {{ $user->username }}</h1>
<p>User ID: {{ $user->user_id }}</p>
<p>Email: {{ $user->email }}</p>

<script>
    </script>
@endsection


