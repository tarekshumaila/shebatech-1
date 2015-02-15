<li class='flexgrow-equal' id="logocontainer">
    <a href="#">
        <img src="img/menu/1.png" id="logo" alt="logo"> 
    </a>
</li>

<li id="menu">
    <ul>
        <a href="#" class="menuitem first"> <li class="menu">Home</li> </a>
        <a href="#" class="menuitem second"> <li class="menu">About us</li>  </a>
        <a href="#" class="menuitem third"> <li class="menu">Services</li>  </a>
        <a href="#" class="menuitem fourth"> <li class="menu">Portfolio</li>  </a>
        <a href="#" class="menuitem fifth"> <li class="menu">Contact us</li>  </a>
    </ul>
</li>
<script type="text/javascript">
$( window ).scroll(function() {
  $("#menucontainer").animate({height:'80px'}, 500);
  $(".menuitem").animate({height:'80px'}, 500);
  $(".menuitem").animate({width:'95px'}, 500);
  $("#logo").animate({height:'80px'}, 500);
  $("#menu").animate({height:'80px'}, 500);
  $("#menu ul").animate({height:'80px'}, 500);
  $("#logocontainer").animate({height:'80px'}, 500);

  $(".menu").animate({'line-height':'90px'}, 500);
  $(".menu").animate({'font-size':'16px'}, 500);

});
</script>