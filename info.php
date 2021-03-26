
<!doctype html>
<html>
<head>
    <title>Announcement</title>
    <!--<link rel="stylesheet" type="text/css" href="news.css">-->
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style type="text/css" media="screen">
    
    
h1{
	font-family:Acme;
	color: #fbc00f;
	border-bottom: 4px solid red;
	padding:11px;
}
data:hover{
	color:red;
	
}
body{
	background-image:url("11.jpg");
}


a:link {
  color: #00f3ff;
}

/* visited link */
a:visited {
  color: #00f3ff;
  
}

/* mouse over link */
a:hover {
  color: red;
}

/* selected link */
a:active {
  color: green;
} 

.data{
    //padding:10px;
    color:#3d4aff;
    font-family:Quicksand;
    font-size:17px;
    border-left: 4px solid #00f3ff ;
    margin:15px;
}
.footer{
    background-color:black;
}

	</style>

</head>
<body>


		<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-md-justify-content-center fixed-top">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-center" id="collapsibleNavbar">

                
        <ul class="navbar-nav container-fluid">
          
          
            <li class="nav-item">
                <a href="home.php" class="nav-link">Home</a><!--.active is used for making the tab active-->
            </li>
            <li class="nav-item">
                <a href="college_list.php" class="nav-link">College</a>
            </li>
            <li class="nav-item">
                <a href="exam-boot.php" class="nav-link">Exam</a>
            </li>
            <li class="nav-item">
                    <a href="info.php" class="nav-link active">Info</a>
            </li>
            <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                          Tools
                        </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Rank Predictor</a>
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
			</nav>
			
			<div class="hidden"><hr><hr><hr></div>


 <h1>Announcements:</h1>
<!-- <hr color="#00f3ff"> -->
<!--<ul>
<li><a href="https://www.nirfindia.org/Home">NIRF2019</a></li>
<hr color="#00f3ff">
<li><a href="https://www.bitsadmission.com/hdmain.aspx">BITSAT 2019:Slot Booking Started</a></li>
<hr color="#00f3ff">
<li><a href="https://jeeadv.ac.in/examination/eligibility-criteria.html">JEE Adavanced 2019:Performance Criteria in Class XII</a></li>
<hr color="#00f3ff"> 
<li><a href="http://www.vit.ac.in/">VITEE 2019:Slot Booking</a></li>
<hr color="#00f3ff">
<li><a href="https://jeeadv.ac.in/important-dates.html">JEE Advanced 2019:Exam Date Revised</a></li>
<hr color="#00f3ff">
<li><a href="https://admissions.cusat.ac.in/">CUTSAT CAT 2019: Official Answer Keys</a></li>
<hr color="#00f3ff">
<li><a href="https://upsee.nic.in/publicinfo/public/home.aspx">UPSEE 2019:Last Date Extended</a></li>
 <hr color="#00f3ff"> 
<li><a href="https://www.iisc.ac.in/ug/">IISc Bangalore Admissions 2019:Registered started</a></li>
<hr color="#00f3ff">
<li><a href="http://srmadmtest2019.srmuniv.ac.in/mocktest/login.aspx">SRMJEE 2019:Official Mock Test</a></li>
<hr color="#00f3ff">
<li><a href="https://www.bitsadmission.com/mbamain.aspx">BITSAT:MBA PROGRAMME ANNOUNCEMENT 2019-20</a></li>
<hr color="#00f3ff">
<button type="button" class="btn btn-info">More>></button>
</ul>-->






<div class="data">
    <a href="#">
<?php
        $con = mysqli_connect('localhost','root','');
        mysqli_select_db($con,'student');
        $s = "select * from info where id<10";
        $result = mysqli_query($con, $s);
        $num = mysqli_num_rows($result);


        while($row=mysqli_fetch_assoc($result)){
            $name = $row['description'];
            /*$email = $row['Email'];
            $pass = $row['Password'];*/
            $id = $row['id'];
            echo " &nbsp&nbsp&nbsp&nbsp".$id.". ".$name."<br>";//how to add link here for each name different link
            echo "<hr>";
            
        }



    ?>
    </a>
    </div>
    <div class="footer">
    <?php

    include("footer.php");

    ?>
    </div>


</body>
</html>
