
<?php
// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'practice');

$sql = "SELECT *
       FROM files
       GROUP BY topic";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="style2.css">
  <style>
  .table{
    border-left: 1px solid black;
    border-right: 1px solid black;
    width:85%;
  }

  .btn{

    width:125px;
  }
  
</style>
 
  <title>Download files</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
     <a class="navbar-brand" href="#">Repository</a>
  <div class="container">
  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
    <ul class="navbar-nav  " >
   
      <li class="nav-item ">
        <a class="nav-link" href="download.php">FILTER BY FACULTY</a>
      </li>
      
    </ul>
    
  </div>
</div>
</nav>


<div class="container">

<table class="table table-striped mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">TOPIC</th>
    </tr>
  </thead>
  <tbody>
     <?php
      $i = 1;
      foreach ($files as $file): ?>
    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><form method="get"  action="view.php">
        <div class="input-group ">
          
         <input type="submit" class="btn btn-primary" name="topic" value="<?php echo $file['topic']; ?>" >
        </div>
      </form>
    </td>
      
    </tr>
    <?php endforeach;?>
    
  </tbody>
</table>
</div>

</body>
</html>


