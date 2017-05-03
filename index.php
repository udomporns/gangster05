<!DOCTYPE html>
<html lang="en">
<head>
  <title>GANGSTER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="./bootstrap.css" media="screen">
  <link rel="stylesheet" href="../assets/css/custom.min.css">
  <link rel="icon" href="wallet.png">
  
 <style>
.mySlides {display:none;}
</style> 

<div class="w3-content w3-section" style="max-width:1500px" >
  <img class="mySlides" src="img/61H.jpg" style="width:100%">
  <img class="mySlides" src="img/258H.jpg" style="width:100%">
  <img class="mySlides" src="img/328H.jpg" style="width:100%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000); // 
}
</script>
</head>

<body id="xx" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		<span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#xx">ALLACC SHOP</a>
    </div>
	
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#xx">HOME<span class="sr-only">(current)</span></a></li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">SHOP
		  <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#SHOP">KEY</a></li>
            <li><a href="#SHOP">CASE</a></li>
            <li><a href="#SHOP">WALLET</a></li> 
			<li><a href="#SHOP">OTHER</a></li> 
          </ul>
        </li>
        <li><a href="#login">LOGIN</a></li>
        <li><a href="#contact">CONTACT</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT GROUP</a></li>
      </ul>
    </div>
  </div>
</nav>


	
	
<br><center>
<div class="jumbotron">
  <h1>WELLCOME TO ALLACC SHOP</h1>
  <p class="text-primary">Every story has an end but in life every end is a new beginning.</p>
</div></center><br><br>

<section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>ABOUT</h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed">
                    <div class="inner">
						<h4>Kachamas Chobseang</h4>
                        <p class="subtitle">WORKER</p>
                        <div class="avatar"><img src="img/p.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed">
                    <div class="inner">
						<h4>Tharathip Somsri</h4>
                        <p class="subtitle">WORKER</p>
                        <div class="avatar"><img src="img/j.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed">
                    <div class="inner">
						<h4>Rachada Hongngon</h4>
                        <p class="subtitle">WORKER</p>
                        <div class="avatar"><img src="img/b.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-md-3">
				<div class="wow bounceInUp" data-wow-delay="1s">
                <div class="team boxed">
                    <div class="inner">
						<h4>Udomporn Sirinunthaket</h4>
                        <p class="subtitle">WORKER</p>
                        <div class="avatar"><img src="img/k.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section><br><br><br><br>
	
<!-- Container (SHOP Section) -->
<section id="SHOP" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>SHOP</h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
		
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>KEY</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="allacc/all/hh.jpg" class="img-circle person" alt="key" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>Key Two</p>
        <p>Key holder and keychain</p>
        <p>©2011-2017 Cocones™</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>CASE</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="allacc/all/aa.jpg" class="img-circle person" alt="case" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>Compact Case</p>
        <p>MacBook charger, cords, dongles</p>
        <p>©2011-2017 Cocones™</p>
      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>WALLET</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="//cdn.shopify.com/s/files/1/1285/7661/products/cocones-leather-passport-wallet-grey-tan-back_medium.jpeg?v=1462836375" class="img-circle person" alt="wallet" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>Passport Wallet</p>
        <p>Cocones Passport Wallet, your travel companion.</p>
        <p>©2011-2017 Cocones™</p>
      </div>
    </div>
  </div>
</div><br><br><br>
<p><a class="btn btn-primary btn-lg" href="twol.php">More</a></p>
</section><br><br><br>
  
<!-- Container (login Section) -->
<section id="login" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>LOGIN</h2>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
<div class="container" id="login">
<div class="row">
<div class="col-md-4 col-sm-offset-4">
<div class='panel panel-default'><div class='panel-heading'>Login</div>
<div class='panel-body'>﻿<a href='twol.php'>Login</a></div></div></div>
</div>
</div>
</section><br><br><br>

<!-- Container (Contact Section) -->
<section id="contact" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>CONTACT</h2>
					<p class="text-center"><em>We love our fans!</em></p>
					<i class="fa fa-2x fa-angle-down"></i>
					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>

  <div class="row">
    <div class="col-md-4">
      <p>Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> KKU</p>
      <p><span class="glyphicon glyphicon-globe"></span><a href="https://www.facebook.com">  Facebook</a></p>
	  <p><em>322-236 Web Application Programming<em></p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn btn-primary btn-sm pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div><br><br>
  
  
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#xx" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#xx']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
})
</script>

</body>
</html>
