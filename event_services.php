<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home of Events</title>
    <link rel="stylesheet" href="style.css" />
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #eae2e2;
    height: 100vh;
    overflow: hidden;
}

/* Layout wrapper */
.wrapper {
    display: flex;
    height: 100vh;
}

/* LEFT SECTION */
.left {
    width: 60%;
    padding: 40px;
}

.title {
    font-size: 50px;
    font-weight: bold;
    font-style: italic;
    margin-bottom: 30px;
}

.event-img {
    width: 90%;
    border-radius: 4px;
    height: 90%;
}

/* RIGHT SECTION */
.right {
    width: 60%;
    background: #000;
    display: flex;
    align-items: center;
    justify-content: center;
}

.menu {
    width: 70%;
    text-align: center;
}

.menu a {
    display: block;
    padding: 20px 0;
    color: white;
    text-decoration: none;
    font-size: 18px;
    font-weight: 500;
}

.menu a:hover {
    opacity: 0.8;
}

hr {
    border: none;
    border-top: 1px solid #444;
}
</style>
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
<div class="wrapper">

    <!-- Left Section -->
    <div class="left">
        <h1 class="title">Home of events</h1>
        <img src="c:\Users\ACER\Desktop\New folder\4d2e6dabe53fd71151c02692ba709815.jpg" class="event-img" alt="Events Image">
    </div>

    <!-- Right Section -->
    <div class="right">
        <div class="menu">
            <a href="place_view.php?id='.$row['e_id'].'">place</a>
            <hr>

            <a href="food_drinks_view.php?id='.$row['e_id'].'">food and drinks</a>
            <hr>

            <a href="car_garage_view.php?id='.$row['e_id'].'">car garage</a>
            <hr>

            <a href="review_view.php?id='.$row['e_id'].'">reviews</a>
            <hr>

            <a href="show_review.php?id='.$row['e_id'].'">show reviews</a>
            <hr>

            <a href="#">provider login</a>
        </div>
    </div>

</div>
';
    }
  }
}
      ?>
</body>
</html>
