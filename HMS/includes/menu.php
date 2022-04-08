<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon" href="images/hii.png" type="image/icon"/>
<script type="text/javascript">
	   document.addEventListener("DOMContentLoaded", function(){
		
	 	window.addEventListener('scroll', function() {
	       
	 		if (window.scrollY >230) {
	 			document.getElementById('navbar_top').classList.add('fixed-top');
	 			// add padding top to show content behind navbar
	 			navbar_height = document.querySelector('.navbar').offsetHeight;
	 			document.body.style.paddingTop = navbar_height + 'px';
	 		} else {
	 		 	document.getElementById('navbar_top').classList.remove('fixed-top');
	 			 // remove padding top from body
	 			document.body.style.paddingTop = '0';
	 		} 
	 	});
	 }); 
	 //DOMContentLoaded  end
</script>
</head>
<body>
	
</body>
</html>