<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Event Management</title>
    <style>
        body {
            background-color: #E6E6FA ;
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            padding: 20px;
            background-color: snow;
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
  
$e_security_method=$_POST['e_security_method'];
$e_security_level=$_POST['e_security_level'];
$e_security_team=$_POST['e_security_team'];
$sql ="UPDATE events
    set e_security_method='$e_security_method',e_security_level='$e_security_level',e_security_team='$e_security_team'
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
      <h1>security</h1>
      <form action="security.php?id=<?php echo $id; ?>" method="post">
            
            
            

            <label for="eventServices">security method:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_security_method" value="cameras">cameras
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_security_method" value="security guards">security guards
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_security_method" value="police">police
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_security_method" value="dogs">dogs
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_security_method" value="drones">drones
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_security_method" value="alert devices">alert devices
                </label>
            </div>
            <br>
            <label for="eventServices">security level:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_security_level" value="low">low
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_security_level" value="medium">medium
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_security_level" value="high">high
                </label>
            </div>
            <br>
            <label for="eventServices">security team:</label>
            <select id="eventServices" name="e_security_team">
                <option value="general security-0993642111">general security-0993642111</option>
                <option value="al jabal-0993744033">al jabal-0993744033</option>
                <option value="black ops-0996903261">black ops-0996903261</option>
                <option value="white hemlets-0998835031">white helmets-0998835031</option>
            </select>
            <br>
            <br>
            <button type="submit" class="btn btn-primary" name="add">Submit Event</button>
            </form>
        </div>
</body>
</html>
