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
  <style>
    body{
padding-top:40px;
background:#E6E6FA    
}
.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}

.avatar-md {
    height: 5rem;
    width: 5rem;
}

.fs-19 {
    font-size: 19px;
}

.primary-link {
    color: #314047;
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
}

a {
    color: #02af74;
    text-decoration: none;
}

.bookmark-post .favorite-icon a, .job-box.bookmark-post .favorite-icon a {
    background-color: #da3746;
    color: #fff;
    border-color: danger;
}
.favorite-icon a {
    display: inline-block;
    width: 30px;
    height: 30px;
    font-size: 18px;
    line-height: 30px;
    text-align: center;
    border: 1px solid #eff0f2;
    border-radius: 6px;
    color: rgba(173,181,189,.55);
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
}


.candidate-list-box .favorite-icon {
    position: absolute;
    right: 22px;
    top: 22px;
}
.fs-14 {
    font-size: 14px;
}
.bg-soft-secondary {
    background-color: rgba(116,120,141,.15)!important;
    color: #74788d!important;
}

.mt-1 {
    margin-top: 0.25rem!important;
}
  </style>
    <title>Document</title>
</head>
<body>
   <?php
    include "database.php";
   ?>
   <h2 style="text-align: center">select operation:</h2>
   <br>
   <nav class="navbar navbar-expand-sm bg-light navbar-light my-1 d-flex flex-column align-items-center">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="add_event.php">add</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="delete.php">delete</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="search.php">search</a>
          </li>
        </ul>
      </nav> 
      <br>
      <h3 style="text-align: center">events:</h3>
      <br>
   <?php
  $sql="select e_id,e_name,e_type from events";
  $result=$conn->query($sql);
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
          <li class="nav-item">
            <a class="nav-link" href="services.php?id='.$row['e_id'].'">services</a>
            </li>
          <li class="nav-item">
          <a class="nav-link" href="edit.php?id='.$row['e_id'].'">edit</a>
          </li>
          
          </ul>
      </nav> 
    ';
  }
}

   ?>
   
</body>
</html>