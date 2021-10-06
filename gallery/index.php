<?php require_once('../con.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">
    <title>Study MBBS</title>
  </head>
  <body style="font-family: 'Open Sans', sans-serif;">
<header>
<div class="minihedaer">
<div class="container">
<div class="row">
<div class="col-md-4">
<p>Pioneering in Health and Education</p>
</div>
<div class="col-md-8">
<ul>
<li><i class="fa fa-phone" aria-hidden="true"></i> TOLL FREE <a href="tell:1800-121-3933"> 1800-121-3933</a></li>
<li> <i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@valuemed.co.in">info@doctordiaries.org</a></li>
<li><a href="#" class="bluebgf">Apply Now</a></li>
</ul>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="../images/logo.webp"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon fa fa-bars"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Universities</a>
        </li>
		  <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Gallery</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
	   <li class="nav-item">
          <a class="nav-link" href="#">Forum</a>
        </li>
	   <li class="nav-item">
          <a class="nav-link" href="#">FAQ</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</header>
<style type="text/css">
  .col-sm-4 {
    margin-left: 14px !important;
    width: 31.333333% !important;;
}
</style>
<div class="about-banner sections">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2><span class="redb">Gallery</span></h2>
<h3>WE DIDN'T BECOME</h3>
<h1 class="redb">EXPERTS</h1>
<h3>OVERNIGHT</h3>
</div>
</div>
</div>
</div>

<div class="about-unlimted sections">
<div class="container">
<div class="row">
  <?php 
            $sql = "SELECT * FROM gallery";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
            ?>

            <div class="col-sm-12">
            <h3><span style="color:#003a70;"><?=$row['title']?></span></h3>
            </div>

            <?php
            $sql1 = "SELECT * FROM galery_images where `image_id`= ".$row['id'];
            $result1 = $conn->query($sql1);

            if ($result1->num_rows > 0) {
            while($row1 = $result1->fetch_assoc()) {

             ?>

             <div class="col-sm-3">
             <a   class="pic" href="<?=GALLERY.$row1['image']?>">
               <img src="<?=GALLERY.$row1['image']?>" typeof="foaf:Image" class="image-style-atge-no-style-lg" style="width: 276px;margin-bottom: 10px;box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;"/></a>
             </div>


            <?php } } ?>
            <?php } } ?>
 
</div>
</div>
</div>

 
<ul class="cityname sidebaricon">
<li><a href="#"><img src="../images/f.webp"/> </a></li>
<li><a href="#"><img src="../images/i.webp"/>  </a></li>
<li><a href="#"><img src="../images/t.webp"/> </a></li>
<li><a href="#"><img src="../images/y.webp"/> </a></li>
</ul>
<footer class="section">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<img src="../images/222.webp" class="footerlogo">
<ul class="cityname">
<li><a href="#">Bengaluru </a></li>
<li><a href="#">Gulbarga   </a></li>
<li><a href="#">Cochin   </a></li>
<li><a href="#">Trivandrum   </a></li>
<li><a href="#">Ernakulam  </a></li>
<li><a href="#">Kannur </a></li>
</ul>
<ul class="cityname">
<li><a href="#">Calicut </a></li>
<li><a href="#">Chennai  </a></li>
<li><a href="#">Coimbatore </a></li>
<li><a href="#">Tiruchi </a></li>
<li><a href="#">Madurai  </a></li>
<li><a href="#">Noida </a></li>
</ul>
<ul class="cityname">
<li><a href="#"><img src="../images/f.webp"/> </a></li>
<li><a href="#"><img src="../images/i.webp"/>  </a></li>
<li><a href="#"><img src="../images/t.webp"/> </a></li>
<li><a href="#"><img src="../images/y.webp"/> </a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul class="cityname">
<li><a href="#">Home </a></li>
<li><a href="#">Universities  </a></li>
<li><a href="#">About Us </a></li>
<li><a href="#">Gallery </a></li>
<li><a href="#">Contact Us  </a></li>
<li><a href="#">Blog </a></li>
<li><a href="#">Forum  </a></li>
<li><a href="#">FAQ </a></li>
</ul>
</div>
</div>
<div class="row">
<div class="col-md-6 text-center">
<p style="    color: #fff;"><b>© 2020 Doctor Diaries.  All rights reserved.</b></p>
</div>
<div class="col-md-6">
</div>
</div>
</div>
</div>
</footer>


    <!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

<!-- Add fancyBox -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
  // add all to same gallery
  $(".pic").attr("data-fancybox","mygallery");
  // assign captions and title from alt-attributes of images:
  $(".pic").each(function(){
    $(this).attr("data-caption", $(this).find("img").attr("alt"));
    $(this).attr("title", $(this).find("img").attr("alt"));
  });
  // start fancybox:
  $(".pic").fancybox();
});

</script>


  </body>
</html>