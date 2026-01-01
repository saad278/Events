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
    
  $e_ad=$_POST['e_ad'];
  $e_blogger=$_POST['e_blogger'];
  $sql ="UPDATE events 
set e_ad='$e_ad',e_blogger='$e_blogger'
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
      <h1>advertising and marketing</h1>
      <form action="advertising?id=<?php echo $id; ?>" method="post">
            
            
            

            <label for="eventServices">advertising method:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_ad" value="posters">posters
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_ad" value="?social media">social media
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_ad" value="street screens">street screens
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_ad" value="street campagins">street campaigns
                </label>
            </div>
            <br>
            <label for="eventServices">marketing blogger:</label>
            <select id="eventServices" name="e_blogger">
                <option value="saadon-0993642111">saadon-0993642111</option>
                <option value="abo hmed-0993744033">abo hmed-0993744033</option>
                <option value="toteh-0996903261">toteh-0996903261</option>
                <option value="mero-0998835031">mero-0998835031</option>
                <option value="abo raed-0942215823">abo raed-0942215823</option>
            </select>
            <br>
            <br>
            <button type="submit" class="btn btn-primary" name="add">Submit Event</button>
        </form>
    </div>

    
</body>
</html>
