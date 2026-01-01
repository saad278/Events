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
  <?php
  if(isset($_REQUEST["id"])){
    $id=$_REQUEST["id"];
$sql="select * from events where e_id='$id'";
  $result=$conn->query($sql);
  if($result->num_rows > 0)
  {
    while($row=$result->fetch_assoc()){
   echo '
    <h1 style="text-align: center; color: black;">select service:</h1>
    <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="food-drinks.php?id='.$row['e_id'].'">food and drinks</a>
          </li>
          </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="select city.php?id='.$row['e_id'].'">choose city</a>
          </li>
          </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="time.php?id='.$row['e_id'].'">time</a>
          </li>
          </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="wifi.php?id='.$row['e_id'].'">wifi</a>
          </li>
          </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="timeline.php?id='.$row['e_id'].'">timeline</a>
          </li>
          </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="sponser.php?id='.$row['e_id'].'">sponser</a>
          </li>
          </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="security.php?id='.$row['e_id'].'">security</a>
          </li>
          </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
           <li class="nav-item">
            <a class="nav-link" href="event_guide.php?id='.$row['e_id'].'">guide</a>
          </li>
          </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
           <li class="nav-item">
            <a class="nav-link" href="compitions_and_prizes.php?id='.$row['e_id'].'">compitions and prizes</a>
          </li>
          </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="children_rooms.php?id='.$row['e_id'].'">kids rooms</a>
          </li>
          </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="car_garage.php?id='.$row['e_id'].'">garage</a>
          </li>
          </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="bazar.php?id='.$row['e_id'].'">bazar</a>
          </li>
           </ul>
        </nav>
        <br>
         <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="attendence.php?id='.$row['e_id'].'">attendence</a>
          </li>
           </ul>
        </nav>
        <br>
        <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="accessoreis.php?id='.$row['e_id'].'">accessoreis</a>
          </li>
           </ul>
        </nav>
        <br>
         <nav class="navbar navbar-expand-sm bg-light navbar-light my-1  d-flex flex-column align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="rate.php?id='.$row['e_id'].'">rate</a>
          </li>
        </ul>
      </nav> ';
    }
  }
}
      ?>
</body>
</html>