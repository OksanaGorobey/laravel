@extends ('adminviews.layout')

@section('page-title','Users')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    @include('adminviews.parials.search')
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th style="width: 100px">Actions</th>
                        </tr>
                        @forelse($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    @include('adminviews.parials.CRUD-buttons.edit',
                                    ['url'=>route('admin.admins.edit', $user->id)])
                                    @include('adminviews.parials.CRUD-buttons.delete',
                                    ['url'=>route('admin.admins.destroy', $user->id)])
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted"><b>Простите, по вашему запросу ничего не найдено... ((( </b></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                {{$users->links()}}
            </div>
            <!-- /.card -->
        </div>
        <div class="col-md-6">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">
                            Add new user
                    </h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{route('admin.admins.store')}}" method="post">
                    {{--{{ csrf_field() }}--}}
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div>
                        @if(session()->has('message'))
                            <div class="alert alert-info alert-dismissible">{{ session()->get('message') }}</div>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection