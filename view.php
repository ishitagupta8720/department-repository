
<?php include('upload.php') ?>
 
<?php



if (isset($_GET["view"])) {

  $name = $_GET["view"];
  $conn = mysqli_connect('localhost', 'root', '', 'practice');

  $sql = "SELECT *
       FROM files
       WHERE username= '$name'";

  $result = mysqli_query($conn, $sql);

  $files = mysqli_fetch_all($result, MYSQLI_ASSOC); }

?>
<?php

if (isset($_GET["topic"])) {

  $topic = $_GET["topic"];
  $conn = mysqli_connect('localhost', 'root', '', 'practice');

  $sql = "SELECT *
       FROM files
       WHERE topic= '$topic'";

  $result = mysqli_query($conn, $sql);

  $files = mysqli_fetch_all($result, MYSQLI_ASSOC); }

?>


  <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
  <style>

  
    th,
td {
  border: 1px solid black;
}
.col-xs-8 {
  padding-left: 90px;
}
</style>
  <title>Download files</title>
 </head>
 <body>
 <nav class="navbar navbar-dark bg-dark">
  <!-- Navbar content -->
 </nav>
 


 <div class="container">
 <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <table class="table table-striped table-hover">
 
 
   <thead>
    <tr>
    <th>ID</th>
    <th>professor</th>
    <th>Filename</th>
    <th>Topic</th>
    <th>size (in mb)</th>
    <th>Downloads</th>
    <th>View</th>
    <th>Download</th>

      </tr>
    </thead>
    <tbody>
   <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['id']; ?></td>
      <td><?php echo $file['username']; ?></td>
      <td><?php echo $file['name']; ?></td>
      <td><?php echo $file['topic']; ?></td>
      <td><?php echo floor($file['size'] / 1000) . ' KB'; ?></td>
      <td><?php echo $file['downloads']; ?></td>
      <td><a href="uploads/<?php echo $file['name']; ?>" target="_blank">View</a></td>
      <td><a href="upload.php?file_id=<?php echo $file['id'] ?>">Download</a></td>
    </tr>
    <?php endforeach;?>
    </tbody>
  </table>
        </div>
    </div>
</div>
</body>
</html>
  
 
 
