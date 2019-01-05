@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <table class="table table-hover">
            <thead>
                <th>Category name</th>

                <th>Edit</th>

                <th>Delete</th>
            </thead>

            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->name }}</td>
                        <td><a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-info">Edit</a></td>
                        <td><form action="{{ route('category.delete', ['id' => $category->id]) }}" method="post">
                        @method('delete')
                        {{ csrf_field() }}
                        <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                        </form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@stop