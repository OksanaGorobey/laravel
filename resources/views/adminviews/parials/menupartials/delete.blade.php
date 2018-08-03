
{{ Form::open(['method' => 'DELETE', 'route' => ['admin.menu.destroy', $qu->id_ex]]) }}
{{ Form::submit('Del',['class'  => 'btn btn-danger btn-sm']) }}
{{ Form::close() }}