<!DOCTYPE html>
<html lang="ru">
<head>
    <title>News</title>
    <meta charset="utf-8">
    <meta name="author" content="pixelhint.com">
    <meta name="description" content="Sublime Stunning free HTML5/CSS3 website template"/>
    <link rel="stylesheet" type="text/css" href="{{asset("/sublime/css/reset.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/sublime/css/fancybox-thumbs.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/sublime/css/fancybox-buttons.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/sublime/css/fancybox.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/sublime/css/animate.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/sublime/css/main.css")}}">

    <script type="text/javascript" src="{{asset("/sublime/js/jquery.js")}}"></script>
    <script type="text/javascript" src="{{asset("/sublime/js/fancybox.js")}}"></script>
    <script type="text/javascript" src="{{asset("/sublime/js/fancybox-buttons.js")}}"></script>
    <script type="text/javascript" src="{{asset("/sublime/js/fancybox-media.js")}}"></script>
    <script type="text/javascript" src="{{asset("/sublime/js/fancybox-thumbs.js")}}"></script>
    <script type="text/javascript" src="{{asset("/sublime/js/wow.js")}}"></script>
    <script type="text/javascript" src="{{asset("/sublime/js/main.js")}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<body>

<section class="billboard light">
    <header class="wrapper light">
        <nav>
            <ul>
               @include('news.log')
                <li>
                    @include('news.partials.menu')
                </li>
                <li>
                </li>
                <li>
                </li>
                <li>
                    @include('news.partials.search')
                </li>
            </ul>
        </nav>
    </header>

    <div class="caption light animated wow fadeInDown clearfix">
        <h1>@yield('page-title')</h1>
        <p>@yield('page-sm-title')</p>
        <hr>
    </div>
    <div class="shadow"></div>
</section><!--  End billboard  -->

@yield('content')


@include('news.partials.footer')
</body>
</html>