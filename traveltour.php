<?php
  session_start();
  if (!isset($_SESSION['SESSION_EMAIL'])) {
      header("Location: index.php");
      die();
  }
?>


<!DOCTYPE html>
<html>
<head>
<title></title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Neonderthaw&family=Staatliches&family=The+Nautigal:wght@700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 
<link rel="stylesheet" type="text/css" href="hos_style.css">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script> 
	       <script src="http://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>  
</head>

<style>
.tooltip {  
    position: relative;  
    display: inline-block;  
      
}  
.tooltip .tooltiptext {  
    visibility: hidden;  
    width: 120px;  
    background-color: red;  
    color: #fff;  
    text-align: center;  
    border-radius: 6px;  
    padding: 5px 0;  
    position: absolute;  
    z-index: 1;  
    bottom: 100%;  
    left: 50%;  
    margin-left: -60px;  
}  
.tooltip:hover .tooltiptext {  
    visibility: visible;  
}  
</style>

<body style = "background-image: url('place img/s2.jpg') ; background-repeat: no-repeat; background-size: 100% 47%; height: 1400px;">

<nav class = "navbar bg-dark navbar-dark navbar-fixed-top" > <!-- style = " background-image: linear-gradient(to top, rgba(255,0,0,0), rgba(255, 252, 252, 0.89));border-style: none;height:60px;"-->
<div class = "container-fluid" style = "color: white">
    <div class="navbar-header">  
	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">  
          <span class="icon-bar"></span>  
          <span class="icon-bar"></span>  
          <span class="icon-bar"></span>                          
      </button> 
      <a class="navbar-brand" href="#" style = "color: black">TravelTour</a>  
    </div> 
    <div>	
	<div class="collapse navbar-collapse" id="myNavbar">  
    <ul class="nav navbar-nav">  
      <li class="active"><a href="#">Home</a></li>  
      <li><a href="#places">Places</a></li>  
      <li><a href="#aboutus">About Us</a></li>  
      <li><a href="#contact">Contact</a></li>  
    </ul>  
	
        <ul class="nav navbar-nav navbar-right">  
      <!--  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>  -->
       <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>  
    </ul>  
	</div>
	</div>
</div>
</nav>

<!--<div style="position: absolute; background-color: rgba(8, 8, 8, 0.49); border-style: none; height: 100px; width: 400px; top:225px;left: 280px"></div>-->
<h1 style = "position: abolute; padding-top: 150px;font-family: 'Anton', sans-serif;font-size: 100px;padding-left: 300px;color: #fcc077;">VISIT </br>AZERBAIJAN</h1>

<div style="position: absolute; background-image: linear-gradient(to bottom, rgba(255,0,0,0),rgba(187, 182, 196, 0.38), rgb(122, 193, 245));border-style: none; height: 100px; bottom: 0px; width: 1348px;"></div>
<div style="position: absolute; background-color: #7AC1F5;border-style: none;height:700px;  bottom: -700px; width: 1349px;"></div>

<p style = "position: absolute; margin-top: 360px; margin-left: 600px; font-size: 25px; color: white;"><b>Favourite Places</b></p>

<div id="myCarousel" class="carousel slide" data-ride="carousel" style = "margin-top: 480px; position: absolute; background-color: #7AC1F5;">  
    <!-- Indicators -->  
    <ol class="carousel-indicators">  
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>  
      <li data-target="#myCarousel" data-slide-to="1"></li>  
      <li data-target="#myCarousel" data-slide-to="2"></li>  
    </ol>    
    <!-- Wrapper for slides -->  
    <div class="carousel-inner" role="listbox">  
    <div class="item active" style = "margin-left: 170px;"> 
<div style = "position: inline-block; cursor: pointer">	
       <img title="Gadabay" src = "place img/gedebey2.jfif" height = "300" width = "250" />
       <img title="Xizi" src = "place img/xizi.jpg" height = "300" width = "250" style = "padding-left: 15px" />
       <img title="Culfa" src = "place img/culfa.jpg" height = "300" width = "250" style = "padding-left: 15px"/>
       <img title="Siyazan" src = "http://photos.wikimapia.org/p/00/00/81/65/97_big.jpg" height = "300" width = "250" style = "padding-left: 15px"/>
    <!--<p  style = "position: absolute; color: white;"><b>Gədəbəy</b></p>
<p style = "position: absolute; top: 1150px; left: 430px; color: white;"><b>Xızı</b></p>
<p style = "position: absolute; top: 1150px; left: 700px; color: white;"><b>Culfa</b></p>
<p style = "position: absolute; top: 1150px; left: 970px; color: white;"><b>Siyəzən</b></p>-->
</div></div>   
    <div class="item" style = "margin-left: 170px;"> 
<div style = "position: inline-block; cursor: pointer">	
       <img title="Laza" src = "place img/laza2.jpg" height = "300" width = "250" />
       <img title="Goygol" src = "place img/goygol.jpg" height = "300" width = "250" style = "padding-left: 15px" />
       <img title="Qax" src = "place img/qax.jpg" height = "300" width = "250" style = "padding-left: 15px"/>
       <img title="Astara" src = "place img/astara.jfif" height = "300" width = "250" style = "padding-left: 15px"/>
    </div></div>     
    <div class="item" style = "margin-left: 170px;"> 
<div style = "position: inline-block; cursor: pointer">		
       <img title="Ismayilli" src = "place img/ismayilli.jpg" height = "300" width = "250" />
       <img title="Mingacevir" src = "place img/mingecevir.jpg" height = "300" width = "250" style = "padding-left: 15px" />
       <img title="Qabala" src = "place img/qebele2.jpg" height = "300" width = "250" style = "padding-left: 15px"/>
       <img title="Quba" src = "place img/quba.jpg" height = "300" width = "250" style = "padding-left: 15px"/>
    </div></div> 
    </div>    
    <!-- Left and right controls -->  
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style = "background-color: transparent;	">  
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>  
      <span class="sr-only">Previous</span>  
    </a>  
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">  
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>  
      <span class="sr-only">Next</span>  
    </a>  
</div><!-- corousel end -->    




<div id="aboutus">
<img src = "place img/goygol.jfif" height = "600" width = "1349" style = "position: absolute; top: 1360px; left: 0px;" />
<div style="position: absolute; background-image: linear-gradient(to top, rgba(255,0,0,0),rgba(187, 182, 196, 0.38), rgb(122, 193, 245));border-style: none; height: 100px; bottom: -800px; width: 1349px;"></div>
<p style = "font-size: 30px; color: white; position: absolute; top: 1620px; left: 600px;"><b>About Us</b></p>
<p style = "font-size: 15px; color: white; position: absolute; top: 1680px; left: 270px; width: 400px;">During a 2005 investigation of an accounting fraud case involving AIG, Gen Re executives became implicated. On March 15, 2005, the AIG board forced Greenberg to resign from his post as chairman and CEO after New York state regulators claimed that AIG had engaged in questionable transactions and improper accounting.[54] On February 9, 2006, AIG agreed to pay a $1.6 billion fine.</p>
<p style = "font-size: 15px; color: white; position: absolute; top: 1680px; left: 700px; width: 400px;">During a 2005 investigation of an accounting fraud case involving AIG, Gen Re executives became implicated. On March 15, 2005, the AIG board forced Greenberg to resign from his post as chairman and CEO after New York state regulators claimed that AIG had engaged in questionable transactions and improper accounting.[54] On February 9, 2006, AIG agreed to pay a $1.6 billion fine.</p>

</div>

<div id = "contact">
<img src = "place img/instagram1.png" height = "30" width = "30" style =  "position: absolute; top: 1900px; left: 1000px;"/>
<img src = "place img/facebook.png" height = "30" width = "30" style =  "position: absolute; top: 1900px; left: 1050px;"/>
<img src = "place img/twitter.png" height = "30" width = "30" style =  "position: absolute; top: 1900px; left: 1100px;"/>
</div>

</body>
