@extends ('adminviews.layout')

@section('page-title','Editor')

@section('content')

    <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">@if($user->id) Edit  {{$user->name}}
                @else
                    Add new user
                @endif
            </h3>
        </div>

        {{Form::open(['method'=>'put', 'route' => ['admin.admins.update', $user->id],'class'=>'form-horizontal card'])}}
        <div class="form-group">
            <label for="name">Name</label>
            {{Form::text('name', $user->name, ['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            {{Form::email('email', $user->email, ['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>

            <div class="coll-sm-10">
                {{Form::password('password', ['class'=>'form-control'])}}</div>
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
    {{Form::close()}}
    <div>
        @if(session()->has('message'))
            <div class="alert alert-info alert-dismissible">{{ session()->get('message') }}</div>
        @endif

    </div>


@endsection