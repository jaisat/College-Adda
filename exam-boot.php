<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>

  <link rel="stylesheet" type="text/css" href="e style.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link href='https://fonts.googleapis.com/css?family=Atma' rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Sofia' rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Satisfy' rel="stylesheet">

  <style>
      hr{
          color:red;
      }
  
  </style>
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-lg-justify-content-center navbar-dark fixed-top"> <!--dont know why it is not working  -->
            
            
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="collapsibleNavbar">
        <div class="navigation"><!--can i not link my own css file while using bootstrap-->
            <ul class="navbar-nav" >
                <!--use .nav-flex for vertical navigation bar-->
                
                <li class="nav-item">
                    <a href="home.php" class="nav-link">Home</a><!--.active is used for making the tab active-->
                </li>
                <li class="nav-item">
                    <a href="college_list.php" class="nav-link">College</a>
                </li>
                <li class="nav-item">
                    <a href="exam-boot.php" class="nav-link active">Exam</a>
                </li>
                <li class="nav-item">
                        <a href="info.php" class="nav-link">Info</a>
                </li>
                <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Tools
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="rank form.php">Rank Predictor</a>
                          <ul>
                              <li><a href="rank predictor.php">JEE Main</a></li>
                              <li><a href="#">JEE Advanced</a></li>
                              <li><a href="#">BITSAT</a></li>
                          </ul>
                          <a class="dropdown-item" href="#">College Predictor</a>
                          <a class="dropdown-item" href="#">Counsellor</a>
                        </div>
                      </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About Us</a>
                </li>
            </ul>
        </div>
    </nav>
  


<div class="container">this is a WBJEE
    ahaksdkj
this web is designed by develooper text-primary
this is it
</div>







<hr>
<hr>
<hr>
<!--<div class="d-flex p-3 bg-warning justify-content-center">-->
<div class="d-flex p-1 justify-content-center">

    <a href="exam.html">
    <button class="btn-outline-dark btn-lg" type="button"> 
        <img src="logo//IIT-Roorkee-Logo.png" alt="iit" width="200px">
    </button>
    </a>

    <div class="container bg-light text-primary">This link give complete information about the JEE Advanced <br> <!--by writing this para flex is not working properly why?  -->
    <button class="btn-muted btn-sm" type="button">read more>></button></div>

    
</div>

<hr>
<div class="d-flex justify-content-center">
    
        <a href="exam.html">
                <button class="btn-outline-dark btn-lg" type="button">
            <img src="logo//jee main.jpg" alt="iit" width="217px">
        </button>
        
        </a>
        <div class="container bg-light text-primary">This link give complete information about the JEE Mains <br> <!--by writing this para flex is not working properly why?  -->
        <button class="btn-muted btn-sm" type="button">read more>></button></div>
        
</div>

<hr>
<div class="d-flex p-3 justify-content-center">
        <a href="exam.html">
                <button class="btn-outline-dark btn-lg" type="button">
            <img src="logo//bits.png" alt="iit" width="200px">
        </button>
        
        </a>
        <div class="container bg-light text-primary">This link give complete information about the BITS <br> <!--by writing this para flex is not working properly why?  -->
        <button class="btn-muted btn-sm" type="button">read more>></button></div>
        
</div>

<hr>

<div class="d-flex p-3 justify-content-center">
        <a href="exam.html">
                <button class="btn-outline-dark btn-lg" type="button">
            <img src="logo//WBJEE.jpg" alt="iit" width="200px">
        </button>
        
        </a>
        <div class="container bg-light text-primary">This link give complete information about the WBJEE<br> <!--by writing this para flex is not working properly why?  -->
        <button class="btn-muted btn-sm" type="button">read more>></button></div>
        
</div>

<hr>
<div class="d-flex p-3 justify-content-center">
        <a href="exam.html">
                <button class="btn-outline-dark btn-lg" type="button">
            <img src="logo//vit.png" alt="vit" width="200px" height="200px">
        </button>
        
        </a>
        <div class="container bg-light text-primary">This link give complete information about the VIT<br> <!--by writing this para flex is not working properly why?  -->
        <button class="btn-muted btn-sm" type="button">read more>></button></div>
        
</div>

<hr>
<div class="d-flex p-3 justify-content-center">
        <a href="exam.html">
                <button class="btn-outline-dark btn-lg" type="button">
            <img src="logo//comedk.jpg" alt="iit" width="200px" height="200px">
        </button>
        
        </a>
        <div class="container bg-light text-primary">This link give complete information about the COMEDK <br> <!--by writing this para flex is not working properly why?  -->
        <button class="btn-muted btn-sm" type="button">read more>></button></div>
        
</div>

<hr>
<div class="d-flex p-3 justify-content-center">
        <a href="exam.html">
                <button class="btn-outline-dark btn-lg" type="button">
            <img src="logo//uptu.png" alt="iit" width="200px">
        </button>
        
        </a>
        <div class="container bg-light text-primary">This link give complete information about the UPTU <br> <!--by writing this para flex is not working properly why?  -->
        <button class="btn-muted btn-sm" type="button">read more>></button></div>
        
</div>
<!--<div class="container">
        <div class="jumbotron">
            AMRITA UNIVERSITY <a href="#">Apply Now</a>
        </div>

    </div>-->
<hr>
</div>


<div class="footer">
<?php

//include("footer.php");

?>
</div>
<div class="footer">
    <?php

    include("footer.php");

    ?>
    </div>

</body>
</html>