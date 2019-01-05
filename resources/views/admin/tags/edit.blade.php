@extends('layouts.app')

@section('content')
<div class="col-md-8">
    
@include('admin.include.errors')
     <div class="card">
        <div class="card-header">
        Update Tag:
        </div>
        <div class="card-body">
            <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="post">
            @method('put')
            {{ csrf_field() }}

                <div class="form-group">
                    <label for="tag">Name</label>
                    <input type="text" name="tag" value="{{ $tag->tag }}"
                    class="form-control">
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
@stop