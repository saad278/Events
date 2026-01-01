<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/d4dda18e1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <style>
       body {
        background-color: #E6E6FA
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
        input[type=text] {
  width: 50px;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=email] {
  width: 200%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 200%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
    </style>
    <title>Document</title>
</head>
<body>
<?php
    include "database.php";
   ?>
   <form action="public_search.php" method="GET">
   <nav class="navbar navbar-expand-sm d-flex flex-column align-items-center">
   <div class="input-group col-md-6">
    <input type="text" class="form-control" name="e_name">
    <div class="input-group-append">
    <input type="submit" class="btn btn-success" name="public_search" value="search">
     </div>
  </div>
  </nav>
   </form>
   <br>
   <?php
   if(isset($_GET["public_search"])){
    $e_name=$_GET['e_name'];
  $sql ="SELECT e_id,e_name,e_type FROM events where e_name like '$e_name%' ";
  $result=mysqli_query($conn,$sql);
  if($result->num_rows > 0)
  {
    while($row=$result->fetch_assoc()){
    echo ' 
    <nav class="navbar navbar-expand-sm bg-light navbar-light my-1 d-flex flex-column align-items-center">
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
   }
?>

</body>
</html>