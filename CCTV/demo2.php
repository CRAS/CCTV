<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Pages 2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="scripts/zepto.js"></script>
	<script type="text/javascript" src="scripts/cueslider.js"></script>
</head>
<body>
	<div class="welcom"></div>
	<div class="banner">
		<ul>
            <li style="left: -180px; top: 5px; opacity: 0; width: 236px; height: 253px;">
            	<div class="img1"></div>
<!--            <img src="images/cueslider/iconia.png" width="90%" height="90%"/>--></li>
            <li style="left: 43px; top: 0px; width: 236px; height: 253px;">
            	<div class="img2"></div>
<!--            <img src="images/cueslider/iconia_tabA100.png" width="90%" height="90%"/>--></li>
            <li style="left: 175px; top: -200px; width: 290px; height: 310px;">
            	<div class="img3"></div>
<!--            <img src="images/cueslider/iconia_tabA200.png" width="90%" height="90%"/>--></li>
            <li style="left: 480px; top: -205px; width: 236px; height: 253px;">
            	<div class="img4"></div>
<!--            <img src="images/cueslider/iconia_tabA500.png" width="90%" height="90%"/>--></li>
            <li style="left: 196px; top: 220px; opacity: 1; width: 220px; height: 235px;">
            	<div class="img5"></div>
            <!--<img src="images/cueslider/iconia_tabA510.png" width="90%" height="90%"/>--></li>
            <li style="left: 500px; top: 210px; width: 270px; height: 295px;">
            	<div class="img6"></div>
            <!--<img src="images/cueslider/iconia_tabW500.png" width="90%" height="90%"/>--></li>
            <li style="left: 609px; top: 12px; width: 245px; height: 262px;">
            	<div class="img7"></div>
<!--            <img src="images/cueslider/iconia_tabA200.png" width="90%" height="90%"/>--></li>
            <li style="left: 915px; top: 5px; opacity: 0; width: 236px; height: 253px;">
            	<div class="img8"></div>
<!--            <img src="images/cueslider/iconia_tabW500.png" width="90%" height="90%"/>--></li>
        </ul>
        <div class="next"></div>
        <div class="back"></div>
	</div>
	<script type="text/javascript">
		$(function(){
			$('div.banner > ul li').cueslider({
				transitionProperty : 'left top opacity width height'.split(' ')
			});
		});
	</script>
</body>
</html>