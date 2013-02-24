<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Login Slideshow</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="/static/bootstrap/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="/static/bootstrap/css/bootstrap.css" type="text/css" />
    <style>
        body { margin:0; }
    </style>
</head>
<body>
   <div class=row-fluid>
		<div id="carousel" class="carousel slide">
  			<div class="carousel-inner">   				
    			<div class="active item"><img src="screenshots/2.png"></div>
    			<div class="item"><img src="screenshots/4.png"></div>
    			<div class="item"><img src="screenshots/3.png"></div>
  			</div>
  			<!-- Carousel nav -->
  			<a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
  			<a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>
		</div>    
  	</div>
    <script type="text/javascript">
	    $(function () {
		    $("#carousel").carousel({interval: false});	 
	    });
    </script>
</body>
</html>
