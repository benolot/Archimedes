@extends('layout')
    @section('content')
    	<h1>Admin homepage</h1>
    	<a href="{{ route('admin.blog.new') }}">Post a news article</a>
    @endsection
    