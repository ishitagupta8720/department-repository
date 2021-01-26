<?php



if (isset($_GET["view"])) {

  $code = $_GET["view"];
  $conn = mysqli_connect('localhost', 'root', '', 'practice');

  $sql = "SELECT *
       FROM material
        WHERE code= '$code'";

  $result = mysqli_query($conn, $sql);

   }

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
  padding-left: 150px;
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
                        <th>#</th>
                         <th>professor</th>
                        <th>File Name</th>
                        <th>size</th>
                        <th>Downloads</th>
                        <th>View</th>
                        <th>Download</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i = 1;
                while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo floor($row['size'] / 1000) . ' KB'; ?></td>
                    <td><?php echo $row['downloads']; ?></td>
                    <td><a href="uploads/<?php echo $row['name']; ?>" target="_blank">View</a></td>
                   <td><a href="upload1.php?file_id=<?php echo $row['id'] ?>">Download</a></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
 
