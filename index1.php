<?php include 'upload.php';?>

<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  else
  {
    $usern = $_SESSION['username'] ;
  }

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <style>
      .jumbotron{
        background-image: url("https://www.firststudent.com/wp-content/themes/first_student/images/home-visual.jpg");
        
        background-repeat: no-repeat;
       background-position: top;
       background-size: cover;

       height:450px;
      }

      .a{
       
        text-align: right;
        font-weight: 200;
        padding-right: 100px;
        padding-top: 50px;

      }
      .col-lg-4 {

    padding-bottom: 70px;
    padding-top: 50px;

}
.card{

  border:1px solid black;
}
.display-4{

  font-size: 60px;
}
.lead
{
  font-size: 27px;
  padding-right: 60px;
}
    </style>
    <title>Files Upload and Download</title>
  </head>
  <body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Repository</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="container">
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav  " >
    <?php  if (isset($_SESSION['username'])) : ?>  

      <li class="nav-item ">
        <a class="nav-link" href="index1.php?logout='1'">LOGOUT</a>
      </li>
     <?php endif ?>
      <li class="nav-item ">
        <a class="nav-link" href="https://lms.bennett.edu.in/login/index.php">LMS</a>
      </li>
      
    </ul>
    
  </div>
</div>
</nav>
 <?php  if (isset($_SESSION['username'])) : ?>
 <div class="jumbotron jumbotron-fluid">
  
  <div class="container">
    <div class="a">
    <h1 class="display-4">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
    <p class="lead">This is your Dashboard</p>
  </div>
  </div>

</div>
 <?php endif ?>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 ml-5">
  <div class="card">
  
  <div class="card-body">
    <h5 class="card-title">Reseach Material</h5>
    <p class="card-text">Research papers on various topics by faculty members of the CSE department of Bennett University </p>
    <a href="download.php" class="btn btn-primary" target="_blank">View</a>
  </div>
</div>
  </div>
  <div class="col-lg-4 ml-5">
  <div class="card">
  
  <div class="card-body">
    <h5 class="card-title">Teaching Material</h5>
    <p class="card-text">Notes, Presentions and all the teaching material for each course of computer science </p>
    <a href="code.php" class="btn btn-primary" target="_blank">View</a>
  </div>
</div>
  </div>
</div>
</div>
    

  </body>
</html>

