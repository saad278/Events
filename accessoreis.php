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
    
  $e_accessoreis=$_POST['e_accessoreis'];
  $e_stuff=$_POST['e_stuff'];
  $sql ="UPDATE events 
set e_accessoreis='$e_accessoreis',e_stuff='$e_stuff'
where e_id='$id'";
  
      if($conn->query($sql)===TRUE){
          
          echo "data inserted";
         
      }else
      {
      echo "error".$conn->connect_error;
      }
      
  }
  ?>
    <div class="login-container">
      <h1>accessoreis and stuff</h1>
      <form action="accessoreis?id=<?php echo $id; ?>" method="post">
            
            
            

            <label for="eventServices">accessoreis type:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="traditional">traditional
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="modern">modern
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="simple">simple
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="luxor">luxor
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="old style">old style
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_accessoreis" value="royal">royal
                </label>
            </div>
            <br>
            <label for="eventServices">stuff:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_stuff" value="ballons">ballons
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_stuff" value="paints">paints
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_stuff" value="figures">figures
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="add">Submit</button>
        </form>
    </div>

    
</body>
</html>
