@extends ('adminviews.layout')

@section('page-title','Tags & Topics')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Add Tag</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->

                            {{Form::open(['method'=>'post', 'route' => ['admin.tatop.store']])}}
                            {{ csrf_field() }}
                            <div class="card-body">
                                <div class="form-group">
                                   {{Form::text('tag',null,['class'=>'form-control'])}}
                                    </div>

                                <div class="card-footer">
                                {{Form::submit('Add',['class'=>'btn btn-warning'])}}
                                </div>

                        {{Form::close()}}

                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All tags</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <tbody><tr>
                                    <th style="width: 10px">#</th>
                                    <th>Теги</th>
                                    <th>{{$tags->links()}}</th>
                                    <th style="width: 40px"></th>
                                </tr>
                                @foreach($tags as $tg)
                                <tr>
                                    <td>{{$tg->id}}</td>
                                    <td>{{$tg->tag_name}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @endforeach
                                </tbody></table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    </div>
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">
                    <!-- Horizontal Form -->
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Add Topic</h3>
                        </div>
                        {{Form::open(['method'=>'post', 'route' => ['admin.tatop.store']])}}
                        {{ csrf_field() }}
                        <div class="card-body">
                            <div class="form-group">
                                {{Form::text('top',null,['class'=>'form-control'])}}
                            </div>

                            <div class="card-footer">
                                {{Form::submit('Add',['class'=>'btn btn-success'])}}
                            </div>

                            {{Form::close()}}
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All topics</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <tbody><tr>
                                    <th style="width: 10px">#</th>
                                    <th>Теги</th>
                                    <th></th>
                                    <th style="width: 40px"></th>
                                </tr>
                                @foreach($topic as $top)
                                <tr>
                                    <td>{{$top->id}}</td>
                                    <td>{{$top->category}}</td>
                                    <td></td>
                                    <td></td>

                                </tr>
                                    @endforeach
                                </tbody></table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div>
        </div><!-- /.container-fluid -->
    </section>

 @endsection