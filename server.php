<?php
session_start();


$username = "";
$email    = "";
$errors = array(); 


$db = mysqli_connect('localhost', 'root', '', 'practice');


if (isset($_POST['reg_user'])) {
 
  
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  

  
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($type)) { array_push($errors, "Usertype is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  
  if($_POST['type'] == 'Student')
  {

    $student_check_query = "SELECT * FROM student WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $student_check_query);
    $student = mysqli_fetch_assoc($result);
  
   if ($student) { // if user exists
    if ($student['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($student['email'] === $email) {
      array_push($errors, "email already exists");
    }
   }

  
   if (count($errors) == 0) {
    $password = md5($password_1);

    $query = "INSERT INTO student (username, email, password,type) 
          VALUES('$username', '$email', '$password', '$type')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index1.php');
   }

  }

  else
  {
    
    $faculty_check_query = "SELECT * FROM faculty WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $faculty_check_query);
  $faculty = mysqli_fetch_assoc($result);
  
  if ($faculty) { // if user exists
    if ($faculty['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($faculty['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

 
  if (count($errors) == 0) {
    $password = md5($password_1);

    $query = "INSERT INTO faculty (username, email, password,type) 
          VALUES('$username', '$email', '$password', '$type')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }

 }
  


}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $type = mysqli_real_escape_string($db, $_POST['type']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (empty($type)) {
    array_push($errors, "Usertype is required");
  }

   if($_POST['type'] == 'Student')
  {
    if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM student WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index1.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
 }

  else
  {
    if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM faculty WHERE username='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
 }

}

?>