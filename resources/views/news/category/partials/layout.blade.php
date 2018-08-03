<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Category</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="{{asset("site/images/favicon.ico")}}">
    <link rel="shortcut icon" href="{{asset("site/images/favicon.ico")}}" />
    <link rel="stylesheet" href="{{asset("site/css/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("site/css/style.css")}}">
    <script src="{{asset("site/js/jquery.js")}}"></script>
    <script src="{{asset("site/js/jquery-migrate-1.1.1.js")}}"></script>
    <script src="{{asset("site/js/script.js")}}"></script>
    <script src="{{asset("site/js/jquery.ui.totop.js")}}"></script>
    <script src="{{asset("site/js/superfish.js")}}"></script>
    <script src="{{asset("site/js/sForm.js")}}"></script>
    <script src="{{asset("site/js/jquery.equalheights.js")}}"></script>
    <script src="{{asset("site/js/jquery.mobilemenu.js")}}"></script>
    <script src="{{asset("site/js/jquery.easing.1.3.js")}}"></script>
    <script src="{{asset("site/js/owl.carousel.js")}}"></script>
    <script>
      $(document).ready(function(){
        $().UItoTop({ easingType: 'easeOutQuart' });
        /*carousel*/
        var owl=$("#owl");
        owl.owlCarousel({
          items : 1, //10 items above 1000px browser width
          navigation : true,
          pagination :  false
        });
        var owl=$("#owl1");
        owl.owlCarousel({
          items : 1, //10 items above 1000px browser width
          navigation : true,
          pagination :  false
        });
      })
    </script>
</head>

<body class="page1" id="top">
<!--==============================header=================================-->
<div class="menu_block">
        <div class="container_12">
            <div class="grid_12">
                <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                    <ul class="sf-menu sf-js-enabled sf-arrows">
                        <li class="current"><a href="{{route('news.main')}}">Home</a></li>
                        @include('news.log')
                        <li><a href="{{route('news.select')}}">Отфильтровать новости</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
<div class="menu_block">
    <div class="container_12">
        <div class="grid_12">
            <nav class="horizontal-nav full-width horizontalNav-notprocessed">
                <ul class="sf-menu sf-js-enabled sf-arrows">
                    <li class="current">@include('news.category.partials.search')</li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--==============================Content=================================-->
@yield('content')
<!--==============================footer=================================-->
@include('news.category.partials.footer')
</body>
</html>