@extends ('news.category.partials.layout')


@section('content')

    <div class="bottom_block">
        <div class="container_12">
            <div class="grid_8">
                @foreach($cat as $cati)
                <h2>{{$cati->category}}</h2>
                 @endforeach
                        {{$news->links()}}
            </div>
            @foreach($news as $new)
            <div class="grid_3">
                <div class="text1">{{$new->title}}</div>
                <br>
                <a href="{{route('news.art.index', [$cati->id,$new->id])}}" class="btn">more</a>
                <div id="owl1" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                    <div class="owl-wrapper-outer">
                        <div class="owl-wrapper"
                             style="width: 880px; left: 0px; display: block; transition: all 200ms ease; transform: translate3d(0px, 0px, 0px);">
                            <div class="owl-item" style="width: 220px;">
                                <div class="item">
                                    <div class="img_block ib1">
                                        <img src="{{$new->img}}" alt="" class=" img_inner">
                                        <span class="l"></span>
                                        <span class="ll"></span>
                                        <span class="r"></span>
                                        <span class="rr"></span>
                                        <span class="lb"></span>
                                        <span class="llb"></span>
                                        <span class="rb"></span>
                                        <span class="rrb"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
@endsection