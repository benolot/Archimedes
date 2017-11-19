@extends('layout')
    @section('content')
    	<h1>Make a blog post</h1>
    	<a href="{{ route('admin.blog.new') }}">Post a news article</a>
    	<form method="post" action="{{ route('admin.blog.new.post') }}">
    		<input class="hidden" type="disabled" value="{{ Auth::id() }}" name="author_id" disabled="disabled" hidden="hidden" />
    		<br/>
    		<label>Title</label>
    		<input type="text" placeholder="title" name="title" />
    		<br/>
    		<br/>
    		<label>Content</label>
    		<textarea name="markdown_content" rows="10" cols="50"></textarea>
    		<br/>
    		{{ csrf_field() }}
    		<input type="submit" />
    	</form>
    @endsection
    