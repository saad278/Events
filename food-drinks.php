<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Event Management</title>
    <style>
        body {
            background-color: #E6E6FA
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
  <?php

  include "database.php";
  ?>
  <?php 
    
    
    
    if(isset($_GET['id'])){
    $id=$_GET['id'];}
    $query = "select * from events where 'e_id' = '$id'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    ?>
  <?php 
  if(isset($_POST["add"]))
  {
    
  $e_food=$_POST['e_food'];
  $e_drink=$_POST['e_drink'];
  $sql ="UPDATE events
    set e_food='$e_food',e_drink='$e_drink'
    where e_id='$id'
    ";
  
      if($conn->query($sql)===TRUE){
          
          echo "data inserted";
         
      }else
      {
      echo "error".$conn->connect_error;
      }
      
  }
  ?>
    <div class="login-container">
      <h1>food and drinks</h1>
      <form action="food-drinks.php?id=<?php echo $id; ?>" method="post">
            
            
            

            <label for="eventServices">food:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_food" value="shawrma" required>shawrma
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_food" value="grills" required>grills
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_food" value="yalangy" required>yalangy
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_food" value="rice" required>rice
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_food" value="burger" required>burger
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_food" value="pizza" required>pizza
                </label>
            </div>
            <br>
            <label for="eventServices">drinks:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_drink" value="juices" required>juices
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_drink" value="coffees" >coffees
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_drink" value="sodas" >sodas
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="add">Submit Event</button>
        </form>
    </div>

    
</body>
</html>
