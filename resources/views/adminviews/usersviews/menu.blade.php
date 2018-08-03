@extends ('adminviews.layout')

@section('page-title','Menu')

@section('content')
    <div class="row">
        <div class="col-md-6">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Add New</h3>
                </div>
                {{Form::open(['method'=>'post', 'route' => ['admin.menu.store']])}}
                {{ csrf_field() }}
                <div class="field">
                    <label for="message">Menu item</label>
                    {{Form::text('menu')}}
                </div>
                <div class="field">
                    <label for="message">Level</label>
                    {{Form::number('id', null,['min'=>1,'max'=>3])}}
                </div>
                <ul class="actions">
                    {{Form::submit('Add')}}
                </ul>
                {{Form::close()}}
            </div>

        </div>


    <!-- /.col -->
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">All Items</h3>

            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table">
                    <tbody>
                    <tr>
                        <th style="width: 10px">Level</th>
                        <th>Task</th>
                        <th style="width: 40px">Item</th>
                    </tr>
                @foreach($query as $qu )
                    <tr>
                        <td>{{$qu->id}}</td>
                        <td>{{$qu->name}}</td>
                        <td>@include('adminviews.parials.menupartials.delete',
                                    ['url'=>route('admin.menu.destroy', $qu->id_ex)])
                            @include('adminviews.parials.CRUD-buttons.edit',
                                        ['url'=>route('admin.admins.edit', $qu->id_ex)])</td>
                    </tr>
                @endforeach

                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>

    </div>
    <!-- /.col -->
    </div>
@endsection