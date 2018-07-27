
<style>
    .sub-menu { height: 0; overflow: hidden; opacity: 0; transition: all 0.5s ease-in;}

</style>
<ul class="menu">
    <li class="menu-item">
        <a href="#" style="color:rgb(50,75,78)" >Меню</a>
        <ul class="sub-menu">
            <li>
                <a href="#" style="color:rgb(50,75,78)">Это</a>
            </li>
            <li>
                <a href="#" style="color:rgb(50,75,78)">Выпадающее</a>
            </li>
            <li class="menu-item">
                <a href="#" style="color:rgb(50,75,78)">Меню</a>
                <ul class="sub-menu">
                    <li>
                        <a href="#" style="color:rgb(50,75,78)">A </a>
                    </li>
                    <li>
                        <a href="#" style="color:rgb(50,75,78)">Это</a>
                    </li>
                    <li>
                        <a href="#" style="color:rgb(50,75,78)">Еще</a>
                    </li>
                    <li class="menu-item">
                        <a href="#" style="color:rgb(50,75,78)">Одно</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#" style="color:rgb(50,75,78)">Простите </a>
                            </li>
                            <li>
                                <a href="#">Увлеклась</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
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