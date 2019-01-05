@extends('layouts.app')

@section('content')
<div class="col-md-8">
    <div class="card">
        <table class="table table-hover" data-form="deleteForm">
            <thead>
                <th>Images</th>

                <th>Title</th>

                <th>Edit</th>

                <th>Delete</th>
            </thead>

            <tbody>
                @foreach($posts as $post)
             <tr>
                <td><img src="{{ $post->images }}" alt="{{ $post->title }}" width="90px" height="50px"></td>
                <td>{{ $post->title }}</td>
                <td><a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-sm btn-info">Edit</a></td>
                <!-- Button trigger modal -->
                <td><form action="{{ route('post.delete', ['id' => $post->id]) }}" method="post">
                    @method('delete')
                    {{ csrf_field() }}
                    <button class="btn btn-sm btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach         
            </tbody>
        </table>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                ...
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>

 </div>
@stop