<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/d4dda18e1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <title>Document</title>
</head>
<body>
   <?php
    include "database.php";
   ?>
   <h2>select operation:</h2>
   <nav class="navbar navbar-expand-sm bg-light navbar-light my-1">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="search.php">search</a>
          </li>
        </ul>
      </nav> 
      <h3>events:</h3>
   <?php
  $sql="select e_id,e_name,e_type from events";
  $result=$conn->query($sql);
  if($result->num_rows > 0)
  {
    while($row=$result->fetch_assoc()){
    echo ' 
    <nav class="navbar navbar-expand-sm bg-light navbar-light my-1">
        <ul class="navbar-nav">
          <div class="container">       
    <table class="table">
      <thead>
        <tr>
          <th>name</th>
          <th>type</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          
          <td>'.$row['e_name'].'</td>
          <td>'.$row['e_type'].'</td>
      </tbody>
    </table>
  </div>
  
          <li class="nav-item">
            <a class="nav-link" href="show.php?id='.$row['e_id'].'">show details</a>
          </li>
          </ul>
      </nav> 
    ';
  }
}

   ?>
   
</body>
</html>