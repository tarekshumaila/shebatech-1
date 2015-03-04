<title>
    Shebatech iT services
</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script> 
<script type="text/javascript">
	
	function Slider(){
		$("#1").show("fade",2000);
		$("#1").delay(4000).hide("slide", {direction: "left"}, 2000);

		var sc = $("#slider img").size();
		var count = 2;

		setInterval(function(){
			$("#slider #"+count).delay(2000).show("fade",  2000);
			$("#slider #"+count).delay(4000).hide("slide",{direction:"left"}, 2000);

			if(count == sc){
				count = 1
			}else{
				count = count+1;
			}
		},10000);
	}

</script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/ShebaFlex.css">