@extends('layouts.app')

@section('content')

<div class="col-md-8">

@include('admin.include.errors')

    <div class="card">
        <div class="card-header">
        Edit post : {{ $post->title }}
        </div>
        <div class="card-body">
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
            @method('put')
            {{ csrf_field() }}

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </div>

                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="featured">Featured</label>
                    <input type="file" name="featured" class="form-control">
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
                </div>

                <div class="form-group">
                    <div class="text-left">
                        <button class="btn btn-outline-dark" type="submit">
                        Submit</button>
                    </div>
                </div>
            </form>
    </div>
        </div>
            </div>
                </div>

@stop