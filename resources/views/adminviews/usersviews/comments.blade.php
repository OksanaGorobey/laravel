@extends ('adminviews.layout')

@section('page-title','Comments')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Responsive Hover Table</h3>

                            <div class="card-tools">
                                {{$comm->links()}}
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <tbody><tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th>Comments</th>
                                <th></th>
                                </tr>
                                @foreach($comm as $com)
                                <tr>
                                    <td>{{$com->id}}</td>
                                    <td>{{$com->user_name}}</td>
                                    <td>{{$com->updated_at}}</td>
                                    @if($com->active === 1)
                                       <td><p class="one">
                                        <a href="{{route('admin.act', [$com->id])}}"><span class="label">✘</span></a></li>
                                        </p></td>
                                    @else
                                    <td><p class="four">
                                        <a href="{{route('admin.act', [$com->id])}}" ><span class="label">✔</span></a></li>
                                        </p></td>
                                    @endif
                                    <td>{{$com->comment}}</td>
                                    <td>@include('adminviews.usersviews.commentsedit',
                                    ['url'=>route('admin.coms.edit', $com->id)])
                                        @include('adminviews.usersviews.commentsdelete',
                                        ['url'=>route('admin.coms.destroy', $com->id)])
                                    </td>
                                </tr>
                                  @endforeach
                                </tbody></table>
                        </div>

                        </div>
                    <!-- /.card -->
                </div>
            </div><!-- /.row -->
        </div></section>
<style>
    a {
        display: inline-block;
        text-decoration: none;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 5px 5px;
        padding: 5px 5px;
        font-size: 20px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        transition: 0.4s ease-in-out;
    }

    .one a {
        border-radius: 10px;
        color: #EC4D3C;
        background-color: white;
        background-image: -webkit-radial-gradient(#FCD2D1 2px, rgba(255,0,0,0) 2px);
        background-image: -o-radial-gradient(#FCD2D1 2px, rgba(255,0,0,0) 2px);
        background-image: radial-gradient(#FCD2D1 2px, transparent 2px);
        background-size: 12px 12px;
        box-shadow: 2px 2px 3px rgba(0,0,0,0.3);
    }
    .one a:hover {background-size: 16px 16px;}
    .four a{
        border-radius: 10px;
        color: #598428;
        background: -webkit-linear-gradient(70deg, #C3D600, #C3D600 50%, #A5B400 50%);
        background: -o-linear-gradient(20deg, #C3D600, #C3D600 50%, #A5B400 50%);
        background: linear-gradient(20deg, #C3D600, #C3D600 50%, #A5B400 50%);
        box-shadow: 2px 2px 3px rgba(0,0,0,0.3);
    }
    .four a:hover {
        background: -webkit-linear-gradient(-110deg, #C3D600, #C3D600 50%, #A5B400 50%);
        background: -o-linear-gradient(-160deg, #C3D600, #C3D600 50%, #A5B400 50%);
        background: linear-gradient(-160deg, #C3D600, #C3D600 50%, #A5B400 50%);
    }
</style>
 @endsection