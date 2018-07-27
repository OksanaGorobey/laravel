{{ Form::open(['method' => 'DELETE', 'route' => ['admin.admins.destroy', $user->id]]) }}

{{ Form::submit('Delete',['class' => 'btn btn-danger btn-sm']) }}
{{ Form::close() }}