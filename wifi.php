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
    if(isset($_POST['add'])){
    
    $e_wifi_fee=$_POST['e_wifi_fee'];
    $e_wifi_speed=$_POST['e_wifi_speed'];         
    $sql ="UPDATE events
    set e_wifi_fee='$e_wifi_fee',e_wifi_speed='$e_wifi_speed'
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
      <h1>wifi</h1>
      <form action="wifi.php?id=<?php echo $id; ?>" method="post">
            
            
            
            <label for="eventServices">wifi fee:</label>
            <select id="eventServices" name="e_wifi_fee">
                <option value="free">free</option>
                <option value="500">500</option>
                <option value="1000">1000</option>
                <option value="2000">2000</option>
                <option value="4000">4000</option>
            </select>
            <br>
            <label for="eventServices">speed:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_wifi_speed" value="10mbps">10mbps
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_wifi_speed" value="20mbps">20mbps
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_wifi_speed" value="40mbps">40mbps
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_wifi_speed" value="80mbps">80mbps
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_wifi_speed" value="200mbps">200mbps
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_wifi_speed" value="500mbps">500mbps
                </label>
            </div>
            <br>
            
            
            <input class="btn btn-primary" type="submit" name="add" value="add">
        </form>
    </div>

    
</body>
</html>
