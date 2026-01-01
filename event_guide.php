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
  
$e_guide_duration=$_POST['e_guide_duration'];
$e_guide_age=$_POST['e_guide_age'];
$e_guide_method=$_POST['e_guide_method'];
$sql ="UPDATE events
  set e_guide_duration='$e_guide_duration',e_guide_age='$e_guide_age',e_guide_method='$e_guide_method'
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
      <h1>event guide</h1>
      <form action="event_guide.php?id=<?php echo $id; ?>" method="post">
            
            
            <br>
            <label for="eventServices">duration:</label>
            <select id="eventServices" name="e_guide_duration" value="">
                <option value="5 minutes">5 minutes</option>
                <option value="10 minutes">10 minutes</option>
                <option value="15 minutes">15 minutes</option>
            </select>
            <br>
            <label for="eventServices">guide age:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_guide_age" value="18-23 years">18-23 years
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_guide_age" value="24-30 years">24-30 years
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_guide_age" value="31-45 years">31-45 years
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_guide_age" value="above 45">above 45
                </label>
            </div>
            <br>
            <label for="eventServices">guide method:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_guide_method" value="walking in the place">walking in the place
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_guide_method" value="presentation">presentation
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_guide_method" value="social media">social media
                </label>
              </div>
              <br>
            <button type="submit" class="btn btn-primary" name="add">add</button>
        </form>
    </div>

    
</body>
</html>
