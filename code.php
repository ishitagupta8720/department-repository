<?php

  $conn = mysqli_connect('localhost', 'root', '', 'practice');

 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">


    <style>

  .table{
    border-left: 1px solid black;
    border-right: 1px solid black;
    border-bottom: 1px solid black;
    width:85%;
    margin-bottom: 27px;
  }

</style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"></nav>
   
    <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2 mt-4 ml-4" role="group" aria-label="First group">
    <form method="get"  action="code.php">
    <div class="input-group">
    <button type="submit" class="btn btn-secondary" name="year1" value="First">First Year</button>
    <button type="submit" class="btn btn-secondary" name="year2" value="Second">Second Year</button>
    <button type="submit" class="btn btn-secondary" name="year3" value="Third">Third Year</button>
    <button type="submit" class="btn btn-secondary" name="year4" value="Fourth">Fourth Year</button>
    </div>
   </form>
  </div>
  
</div>

<div class="container">

<?php

if (isset($_GET["year1"])) : ?>
  
<h4>Even Semester</h4>
  <table class="table table-striped md-5">
 <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Code</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Exploration in engineering</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE101L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Network analysis and synthesis</td>
     <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE102L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Quantum Mechanics</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE103L" >
        </div>
      </form>
      </td>
      
    </tr>
  </tbody>
</table>

<h4>Odd Semester</h4>

<table class="table table-striped">
 <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Code</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Programming in C++</td>
     <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE104L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Solid State Devices</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE105L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Engineering Calculus</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE106L" >
        </div>
      </form>
      </td>
      
    </tr>
  </tbody>
</table>
 <?php endif ?>


<?php

if (isset($_GET["year2"])) : ?>

<h4>Even Semester</h4>
  <table class="table table-striped">
 <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Code</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Analog Circuits-1</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE201L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Signals and Systems</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE202L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Digital Design</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE203L" >
        </div>
      </form>
      </td>
      
    </tr>
  </tbody>
</table>

<h4>Odd Semester</h4>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Code</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Analog Circuits-2</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE204L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Embedded Systems</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE205L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Linux Apache MySql Php</td>
     <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE206L" >
        </div>
      </form>
      </td>
      
    </tr>
  </tbody>
</table>

 <?php endif ?>

 <?php

if (isset($_GET["year3"])) : ?>

<h4>Even Semester</h4>
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Code</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Antenna Theory</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE301L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Linear Integrated Circuits </td>
     <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE302L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Analog communications</td>
     <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE303L" >
        </div>
      </form>
      </td>
      
    </tr>
  </tbody>
</table>

<h4>Odd Semester</h4>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Code</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Digital communications</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE304L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Digital signal processing</td>
     <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE305L" >
        </div>
      </form>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Control Systems</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE306L" >
        </div>
      </form>
      </td>
      
    </tr>
  </tbody>
</table>
 <?php endif ?>


 <?php

if (isset($_GET["year4"])) : ?>

<h4>Even Semester</h4>
  <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
     <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Code</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Thread Elective - III</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE401L" >
        </div>
      </form>
      </td>
     
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Thread Elective - IV</td>
     <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE402L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Elective- IV</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE403L" >
        </div>
      </form>
      </td>
      
    </tr>
  </tbody>
</table>

<h4>Odd Semester</h4>
<table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Code</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Elective - VI</td>
     <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE404L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Elective-VII</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE405L" >
        </div>
      </form>
      </td>
      
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Elective-VIII</td>
      <td>
       <form method="get" action="teach.php">
        <div class="input-group">
          
         <input type="submit" class="btn" name="view" value="EECE406L" >
        </div>
      </form>
      </td>
      
    </tr>
  </tbody>
</table>
 <?php endif ?>

 
 

</tbody>


</div>
</body>
</html>

