<title>
    Shebatech iT services
</title>
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
<link rel="icon" href="../favicon.ico" type="image/x-icon">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script> 
<script type="text/javascript">

	function Slider(){
		

		

		$("#1").fadeIn(2000);
		$("#1").delay(5000).fadeOut(2000);

		var count = 2;
		var slides = 4

		setInterval(function(){
			$("#slider #"+count).fadeIn(2000);
			
			$("#slider #"+count).delay(5000).fadeOut(2000);

			if(count == slides){
				count = 1;
			}else{
				count = count+1;
			}
		},9200);
	}

</script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="css/ShebaFlex.css">