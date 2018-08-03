@extends ('adminviews.layout')

@section('page-title','Editor')

@section('content')

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title"> Edit
            </h3>
        </div>

        {{Form::open(['method'=>'put', 'route' => ['admin.updatecom', $comments->id],'class'=>'form-horizontal card'])}}
        <input name="_method" type="hidden" value="PUT">
        <label for="email">Name</label>
        {{$comments->user_name}}
            <label for="email">Comments</label>
            {{Form::text('comments', $comments->comment, ['class'=>'form-control'])}}
        </div>
    <label for="email">Time</label>
    {{$comments->updated_at}}
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    {{Form::close()}}
    <div>

    </div>
    </div>

@endsection