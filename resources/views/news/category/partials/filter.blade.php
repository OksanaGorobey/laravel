@extends ('news.category.partials.layout')


@section('content')
    <div class="bottom_block">

            <div class="bottom_block pb1">
                <div class="container_12">
                    <div class="grid_11">
                        <h2>Result of filters</h2>
                    </div>
                </div>
            </div>

        @foreach($news as $nw)
            <div class="container_12">
                <div class="grid_3">
                    <div id="owl1" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer">
                            <div class="owl-wrapper" style="width: 880px; left: 0px; display: block;"><div class="owl-item" style="width: 220px;"><div class="item">
                                        <div class="img_block ib1">
                                            <img src="{{$nw->img}}" alt="" class=" img_inner">
                                            <span class="l"></span>
                                            <span class="ll"></span>
                                            <span class="r"></span>
                                            <span class="rr"></span>
                                            <span class="lb"></span>
                                            <span class="llb"></span>
                                            <span class="rb"></span>
                                            <span class="rrb"></span>
                                        </div>
                                    </div></div>
                                <div class="owl-item" style="width: 220px;"><div class="item">
                                    </div></div></div></div>
                    </div>
                </div>
                <div class="grid_4 prefix_1">
                    <h3>{{$nw->title}} <a href="{{route('news.art.index', [$nw->category_id,$nw->id])}}" class="btn">more</a></h3>
                    <p class="col1">
                        <time datetime="2014-01-01">{{$nw->updated_at}}</time>
                    </p>
                    Curabitur vel lorem sit amet nullaertylllamcr fermentum. In vitae varius augue, eu onse ligula. Etiam dui er laoreet sit amet est ve
                </div>
            </div>
        @endforeach
    </div>


@endsection