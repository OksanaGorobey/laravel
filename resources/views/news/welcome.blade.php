@extends ('news.layout')

@section('page-title','News of Terabithia')
@section('page-sm-title','Только свежие новости-только реальность')


@section('content')

   <style>

       .div1{
           width: 50%;
           min-height: 150px;
           float: left;
       }
       .div2{
           width: 50%;
           min-height: 150px;
           margin-left: 55%;
       }
   </style>

    <script>


    var PreventExitPop = true;

    function ExitPop() {
    if (PreventExitPop != false)
    { return "WARNING: Куда пошел? стоять!";
    } }
    window.onbeforeunload = ExitPop;
    </script>
    <div class="wrapper">
        <div id="0" class="title animated wow fadeIn animated" style="visibility: visible; animation-name: fadeIn;">
        <h2>TоП </h2>
        <hr class="separator">
    </div>

        <div class="div1"><nav>
                <ul>
                    <li><h3>................................................КоМмЕнТаТоРы.......</h3></li>
                    <hr class="separator">
                    @foreach($comments as $com)
                        <li><a href="{{route('news.commofuser',[$com->user_id])}}"><h3>{{$com->name}}  💬</h3></a><hr class="separator"></li>


                    @endforeach
                </ul>
            </nav></div>
        <div class="div2"><nav>
            <ul>
                <li><h3>........................................................СтАтЬи.......</h3></li>
                <hr class="separator">
                <li><a href="#">separator</a></li>
                <li><a href="#">separator</a></li>
                <li><a href="#">separator</a></li>
                <li><a href="#">separator</a></li>
                <li><a href="#">separator</a></li>
                <li><a href="#">separator</a></li>


                @foreach($articles as $art)
                    <li><a href="{{route('news.art.index', [$art->category_id,$art->article_id])}}"><h4>{{$art->title}}</h4></a><hr class="separator"></li>


                @endforeach
            </ul></nav>
        </div>
    </div>
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