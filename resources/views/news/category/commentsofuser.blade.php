@extends ('news.category.partials.layout')


@section('content')
    <div class="bottom_block">


        <div class="container_12">

                <div class="grid_4 prefix_1">
                    @foreach($name as $item)
                    <h3>{{$item->user_name}}</h3>
                    @endforeach

                        {{$comments->links()}}
                </div>

            @foreach($comments as $com)
            <div class="grid_4 prefix_1">
                <h3></h3>
                <p class="col1">
                    <time datetime="2014-01-01">{{$com->updated_at}}</time> -
                    <a href="{{route('news.art.index', [$com->category_id,$com->article_id])}}">{{$com->title}}</a>
                </p>
                {{$com->comment}} </div>
@endforeach


        </div>
    </div>


@endsection