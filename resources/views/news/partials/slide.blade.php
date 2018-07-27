<style>
    #slider {
        position: relative;
        overflow: hidden;
        width: 600px;
        height: 400px;
        margin: 20px auto;
        padding: 0;
        list-style: none;
    }

    .slide {
        position: absolute;
        width: 600px;
        height: 400px;
        transition: all 1s ease-in 0.1s;
        left: 0;
    }

    .arrows {
        position: relative;
        margin: 0 auto;
        width: 600px;
    }

    .arrow {
        position: absolute;
        cursor: pointer;
    }

    .no_active {
        color: red;
    }

    .next {
        right: 0;
    }
</style>
<ul id="slider">
    @foreach($news as $new)
        <li class="slide active">
            <img src="{{$new->img}}">
            <div style="width:200px; height:200px;  padding: 1em;
     font-size: 2em; margin-top:-100px; text-align:center; color:white;"><a href="{{route('news.art.index', [$new->category_id,$new->id])}}">{{$new->title}}</a>
            </div>
        </li>
    @endforeach
</ul>
<div class="arrows">
    <span class="arrow next" id="next">Вправо</span>
    <span class="arrow prew" id="prew">Влево</span>
</div>
<script>
  var next = document.getElementById('next')
  next.addEventListener("click", nexti, false);
  var prew = document.getElementById('prew')
  prew.addEventListener("click", prewi, false);

  var slides = document.getElementsByClassName('slide')
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.zIndex = slides.length - i
  }

   function  nexti() {
    var activeEl = document.querySelector('.active')
    if (activeEl.nextElementSibling) {
      activeEl.style.left = '-100%'
      activeEl.classList.remove('active')
      activeEl.nextElementSibling.classList.add('active')
      this.classList.remove('no_active')
      prew.classList.remove('no_active')
      if (!activeEl.nextElementSibling.nextElementSibling) {
        this.classList.add('no_active')
      }
    }
  }
  function prewi () {
    var activeEl = document.querySelector('.active')
    if (activeEl.previousElementSibling) {
      activeEl.previousElementSibling.style.left = '0%'
      activeEl.classList.remove('active')
      activeEl.previousElementSibling.classList.add('active')
      this.classList.remove('no_active')
      next.classList.remove('no_active')
      if (!activeEl.previousElementSibling.previousElementSibling) {
        this.classList.add('no_active')
      }
    }
  }
  window.onload = function() {
    setInterval(function() { // ставим пятисекундный интервал для перелистывания картинок
      nexti();
    },5000);
  };
</script>
