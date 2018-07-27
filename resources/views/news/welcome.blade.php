@extends ('news.layout')

@section('page-title','News of Terabithia')
@section('page-sm-title','Только свежие новости-только реальность')


@section('content')
    {{--<script>--}}

    {{--var PreventExitPop = true;--}}

    {{--function ExitPop() {--}}
    {{--if (PreventExitPop != false)--}}
    {{--{ return "WARNING: Куда пошел? стоять!";--}}
    {{--} }--}}
    {{--window.onbeforeunload = ExitPop;--}}
    {{--</script>--}}
    <section class="testimonials wrapper">
        <div id="0" class="title animated wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
            <h2>Популярное</h2>
            <hr class="separator">
        </div>

        @include('news.partials.slide')

    </section>
    @foreach($catgrs as $cat)
        <section class="testimonials wrapper">


            <div id="{{$cat->id}}" class="title animated wow fadeIn animated"
                 style="visibility: visible; animation-name: fadeIn;">

                @if(Auth::check())
                    <a href="{{route('news.cat', [$cat->id])}}"><h2>{{$cat->category}}</h2></a>
                @else
                    @if($cat->id === 1)
                        <h2>{{$cat->category}}</h2>
                    @else
                        <a href="{{route('news.cat', [$cat->id ])}}"><h2>{{$cat->category}}</h2></a>
                    @endif
                @endif
                <hr class="separator">
            </div>
            <ul class="clearfix">
                @foreach($news as $new)
                    <li class="animated wow fadeInDown animated"
                        style="visibility: visible; animation-name: fadeInDown;">
                        <a href="{{route('news.art.index', [$cat->id,$new->id])}}"><h3>{{$new->title}}</h3></a>
                        <hr class="separator">
                        Kisicing elit sed do eiusmod tempor incididunt
                        ut labore et dolore magna aliqua enim ad minim veniam quis nostrud
                        laboris.
                    </li>
                @endforeach
            </ul>
        </section>
  @endforeach
@endsection