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

<div class="forum-search sections mb-5">
<div class="container">
<div class="row">
<div class="col-md-7">
<select class="form-select" aria-label="Default select example">
  <option selected> All categories</option>
  <option value="1">General Discussion</option>
  <option value="2">Questions & Answers</option>
</select>
</div>
<div class="col-md-5">
<ul>
<li class="searchlist"> <i class="fa fa-search" aria-hidden="true"></i> <input type="text" placeholder="Search"> </li>
<li class="forumlogin"> <a href="#">Login / Sign Up</a> </li>
</ul>
</div>
</div>
</div>
</div>

<div class="forum-welcome sections">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h2>Forum</h2>
<h5 class="mb-5">Welcome! Have a look around and join the discussions.</h5>
<div class="forumsort mb-2">
Sort by: <select class="form-select" aria-label="Default select example">
  <option selected>Recent Activity</option>
  <option value="1">Newest</option>
  <option value="2">Most Comments</option>
  <option value="3">Most Vived</option>
  <option value="3">Most Liked</option>
</select>
</div>
</div>
</div>
<div class="row mb-3">

<?php 
            $sql = "SELECT `form`.`title`
            ,`form`.`description`
            ,`form`.`created_at`
            ,`form`.`id`
            ,`form_cat`.`catName`

            ,`form_cat`.`id` as cid FROM form LEFT JOIN form_cat on `form`.`catId` = `form_cat`.`id`";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {?>
<div class="col-md-6" style="margin-top: 20px">
<div class="forumbox">
<div class="forumlogo">
<div class="forum-daris"><img src="../images/contactlogo.webp"> <span>Doctor Diaries</span></div>
<div class="blogdot">
<span></span>
<span></span>
<span></span>
</div>
</div>
<h5><?=$row['title']?></h5>
<!-- <div class="forumlink w-100 mb-3">
in <a href="#">Questions & Answers</a>
</div> -->
<p><a href="forum.php?title=<?=str_replace(' ','-',$row['title'])?>"><?php echo mb_strimwidth(strip_tags($row['description']), 0, 100, '...'); ?></a></p>
<div class="forumlogo">
<div class="forum-daris">
<i class="fa fa-eye" aria-hidden="true"></i> 
<span>16</span>
<i class="fa fa-comment-o" aria-hidden="true"></i> 
<span>1</span>
</div>
<div class="blogdot forumdot">
<i class="fa fa-heart-o" aria-hidden="true"></i> <span>0</span>
</div>
</div>
<div class="forum-recent">
Recent Activity <i class="fa fa-user" aria-hidden="true"></i> Sep 08
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