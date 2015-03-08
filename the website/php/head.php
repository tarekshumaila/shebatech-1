<title>
    Shebatech iT services
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script> 
<script type="text/javascript">
	
	function Slider(){
		$("#1").fadeIn(2000);
		$("#slider #1 h1").fadeIn(2000);
		$("#slider #1 img").fadeIn(2000);

		$("#1").delay(5000).fadeOut(2000);

		var sc = $("#slider img").size();
		var count = 2;
		var countbg = 4;
		var bgcount = 6;

		setInterval(function(){
			$("#slider #"+count).css("background-image","url(../img/sliderbg/"+countbg+".jpg)");
			$("#slider #"+count).fadeIn(2000);
			//ANIMATION

			$("#slider #"+count+" h1").delay(2000).fadeIn(2000);
			$("#slider #"+count+" img").delay(2000).fadeIn(2000);
			$("#slider #"+count).delay(5000).fadeOut(2000);
			$("#slider #"+count+" h1").delay(2000).fadeOut(2000);
			$("#slider #"+count+" img").delay(2000).fadeOut(2000);

			if(countbg == bgcount){
				countbg = 3;
			}else{
				countbg = countbg+1;
			}

			if(count == sc){
				count = 1;
			}else{
				count = count+1;
			}
		},9200);
	}

</script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/ShebaFlex.css">