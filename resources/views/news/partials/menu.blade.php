
<style>
    .sub-menu { height: 0; overflow: hidden; opacity: 0; transition: all 0.5s ease-in;}

</style>


<ul class="menu">
    @foreach($mf as $m1)
    <li class="menu-item">
        <a href="#" style="color:rgb(50,75,78)" >{{$m1->name}}</a>
        <ul class="sub-menu">
            @foreach($ms as $m2)
            <li class="menu-item">
                <a href="#" style="color:rgb(50,75,78)">{{$m2->name}}</a>
                <ul class="sub-menu">
                    @foreach($mt as $m3)
                    <li>
                        <a href="#" style="color:rgb(50,75,78)">{{$m3->name}}</a>
                    </li>
                  @endforeach
                </ul>
            </li>
                @endforeach
        </ul>
    </li>
    @endforeach
</ul>

<script>
  var el = document.getElementsByClassName('menu-item');
  for(var i=0; i<el.length; i++) {
    el[i].addEventListener("mouseenter", showSub, false);
    el[i].addEventListener("mouseleave", hideSub, false);
  }

  function showSub(e) {
    if(this.children.length>1) {
      this.children[1].style.height = "auto";
      this.children[1].style.overflow = "visible";
      this.children[1].style.opacity = "1";
    } else {
      return false;
    }
  }

  function hideSub(e) {
    if(this.children.length>1) {
      this.children[1].style.height = "0px";
      this.children[1].style.overflow = "hidden";
      this.children[1].style.opacity = "0";
    } else {
      return false;
    }
  }
</script>