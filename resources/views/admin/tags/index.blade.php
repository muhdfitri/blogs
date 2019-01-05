@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <table class="table table-hover">
            <thead>
                <th>Tags</th>

                <th>Edit</th>

                <th>Delete</th>
            </thead>

            <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <td>{{ $tag->tag }}</td>
                        <td><a href="{{ route('tag.edit', ['id' => $tag->id]) }}" class="btn btn-sm btn-info">Edit</a></td>
                        <td><form action="{{ route('tag.delete', ['id' => $tag->id]) }}" method="post">
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