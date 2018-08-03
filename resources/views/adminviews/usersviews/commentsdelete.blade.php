{{ Form::open(['method' => 'DELETE', 'route' => ['admin.coms.destroy', $com->id]]) }}

{{ Form::submit('Delete',['class' => 'btn btn-danger btn-sm']) }}
{{ Form::close() }}