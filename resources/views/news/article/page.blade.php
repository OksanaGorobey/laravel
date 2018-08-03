<!DOCTYPE HTML>

<html  lang="ru">
<head>
    <title>Article</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="{{asset("/massively/assets/css/main.css")}}" />
    <noscript><link rel="stylesheet" href="{{asset("/massively/assets/css/noscript.css")}}" /></noscript>

</head>
<body class="is-loading">

<!-- Wrapper -->
<div id="wrapper" class="fade-in">

    <!-- Intro -->
    <div id="intro">
       @foreach($news as $new)
        <h1>{{$new->title}}</h1>
            <p>Автор Ksym G. Owly</p>
        <ul class="actions">
            <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Продолжить</a></li>
        </ul>
    </div>

    <!-- Header -->
    <header id="header">
        <a href="#" class="logo">Читать</a>
    </header>

    <!-- Nav -->
    <nav id="nav">
        <ul class="links">
            @include('news.log')
            <li><a href="{{ route('news.main') }}">Home</a></li>
        </ul>
        <ul class="icons">
            <li>@include('news.article.partials.search')</li>
        </ul>
    </nav>

    <!-- Main -->
    <div id="main">

        <!-- Featured Post -->
        <article class="post featured">
            <header class="major">
                <h2>{{$new->title}}</h2>
                <p>Kisicing elit sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua enim ad minim veniam quis nostrud
                    laboris.</p>
            </header>
            @if( stristr($new->img, 'modnewspic') === FALSE )
                <img class="image main" src="{{ asset('gallery/'. $new->img.'')}}" alt="" />
                @else

                <img class="image main" src="{{$new->img}}" alt="" />

            @endif
        </article>
        <footer>
            <div class="box">
                <p> {{$new->article}} </p>
            </div>
        </footer>
        @endforeach
<script>
  function getRandomInt(max) {
    return Math.floor(Math.random() * Math.floor(max));}


    var now = setTimeout(function data () {
      var i = getRandomInt(6);
      var n = document.getElementById('now');
      n.innerHTML = 'Now:' + i;
      now = setTimeout(data, 3000); //Запускаем через 3 секунд функцию data()
      return i;
    }, 1000);
  var all = setTimeout(function data () {
    var i = getRandomInt(6);
    var a = document.getElementById('all');
    while (true){
      sum += i;
      a.innerHTML = 'All:' + sum;
    }
    all = setTimeout(data, 3000); //Запускаем через 3 секунд функцию data()
    return i;
  }, 1000);



</script>
        <ul class="actions">
            <li><span id="now" class="button special disabled">Now:</span></li>
            <li><span id="all" class="button disabled">All:</span></li>
            @foreach ($tags as $tag)
            <li><a href="{{route('news.tagpage',[$tag->id])}}">#{{$tag->tag_name}}</a></li>
                @endforeach
        </ul>
    </div>

<!-- Footer -->
    <footer id="footer">
    @include('news.article.partials.form')
        @include('news.article.partials.derivation')
    </footer>
</div>
<div id="copyright">
    <ul><li>© ООО Шаблон сайта</li><li>Бесплатные шаблоны сайтов: <a href="http://ftemplate.ru">FTemplate</a></li></ul>
</div>
<!-- Scripts -->
<script src="{{asset("/massively/assets/js/jquery.min.js")}}"></script>
<script src="{{asset("/massively/assets/js/jquery.scrollex.min.js")}}"></script>
<script src="{{asset("/massively/assets/js/jquery.scrolly.min.js")}}"></script>
<script src="{{asset("/massively/assets/js/skel.min.js")}}"></script>
<script src="{{asset("/massively/assets/js/util.js")}}"></script>
<script src="{{asset("/massively/assets/js/main.js")}}"></script>

</body>
</html>