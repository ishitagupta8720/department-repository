
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <style>
      form, .content {
  width: 60%;
  margin: 40px auto;
  padding: 20px;
  border: 1px solid black;
  background: rgb(235,230,190);
  border-radius: 0px 0px 5px 5px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: center;
  margin: 3px;
  font-weight: 500;
}
.input-group input {
  height: 32px;
  width: 27%;
  padding: 10px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid black;

  }

  .btn{
    background: rgb(70,110,100);
    border: 1px solid black;
    margin-bottom: 5px;

  }
  .a{
    border: 1px solid black;
    margin-bottom: 10px;
    padding:10px;
    align-content: center;
    font-size: medium;
  }
}
    </style>
    
    <title>Files Upload and Download</title>
  </head>

  <body>
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark"></nav>
    <div class="container">
      <div class="row">
        <form action="put.php" method="post" enctype="multipart/form-data" >
          <h3>Upload Research Material</h3>
          <div class="input-group">
          <label>Topic</label>
          <input type="text" name="topic" >
          </div>
          <input type="file" class="a" name="myfile"> <br>
          <button type="submit" class="btn" name="save1">UPLOAD</button>
        </form>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <form action="put.php" method="post" enctype="multipart/form-data" >
          
          <h3>Upload Teaching material</h3>
          <div class="input-group">
          <label>Course code</label>
          <input type="text" name="code" >
          </div>
          <input type="file" class="a" name="myfile"> <br>
          <button type="submit" class="btn"  name="save2">UPLOAD</button>
        </form>
      </div>
    </div>
  </body>
</html>
<?php include 'upload.php';?>