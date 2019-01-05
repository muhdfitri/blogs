@extends('layouts.app')

@section('content')
<div class="col-md-8">

@include('admin.include.errors')
     <div class="card">
        <div class="card-header">
        Create a new category
        </div>
        <div class="card-body">
            <form action="{{ route('category.store') }}" method="post">
            @method('post')
            {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
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