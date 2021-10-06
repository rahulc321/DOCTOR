<?php require_once('../con.php'); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrapmin.css" />
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

<div class="contact-banner sections" style="background-image: url(images/blog01.webp);">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2 class="mb-4"><span class="redb">Blog</span></h2>
<div class="contactimgb">
<img src="../images/blog.webp">
</div>
</div>
</div>
</div>
</div>

<div class="contact-fact sections">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2>Some Fun Facts <br>From Us.</h2>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="featured-color testmnl">
<ul class="list-unstyled">
  <li class="media">
    <img class="mr-3" src="../images/about-1.webp" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1 bluecolor">150+</h5>
   Cool Mentors
    </div>
  </li>
  <li class="media">
    <img class="mr-3" src="../images/about-3.webp" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1 bluecolor">1200+</h5>
   Universities
    </div>
  </li>
   <li class="media">
    <img class="mr-3" src="../images/about-2.webp" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1 bluecolor">100+</h5>
   Courses
    </div>
  </li>
     <li class="media">
    <img class="mr-3" src="../images/about-4.webp" alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1 bluecolor">97%</h5>
   Graduates
    </div>
  </li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="allblogpost sections">
<div class="container-fluid">
<div class="row mb-4">
<div class="col-md-12">
<p>All Posts</p>
</div>
</div>
<div class="row mb-3">
<style type="text/css">
  .w-100 {
     
    height: 293px !important;
}
</style>

<?php 
            $sql = "SELECT `blog`.`title`,`blog`.`image`
            ,`blog`.`description`
            ,`blog`.`created_at`
            ,`blog`.`id`
            ,`category`.`catName`

            ,`category`.`id` as cid FROM blog LEFT JOIN category on `blog`.`catId` = `category`.`id`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {?>
<div class="col-md-4" style="margin-top: 20px">
<div class="blogbox">
<img src="<?=SITEURL.$row['image']?>" class="w-100">
<div class=" blogboxinner">
<div class="blogdate">
<div><?=date('F d-Y',strtotime($row['created_at']))?></div>
<div class="blogdot">
<span></span>
<span></span>
<span></span>
</div>
</div>
<div class="blogtitle">
<h3><a href="single.php?title=<?=str_replace(' ','-',$row['title'])?>"><?=$row['title']?></a></h3>
</div>
</div>
</div>
</div>
<?php } 
  }?>


 





</div>



 












</div>
</div>

<!---  footer start here --->
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
<p style="    color: #fff;"><img src="../images/iso.webp" class="iso">ISO Certified</p>
</div>
</div>
</div>
</div>
</footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="../https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="../https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="../https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>