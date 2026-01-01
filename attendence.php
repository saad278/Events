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
        input[type=text] {
 width: 200%;
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
input[type=datetime-local] {
 width: 100%;
 padding: 12px 20px;
 margin: 8px 0;
 box-sizing: border-box;
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
  
$e_attend_num=$_POST['e_attend_num'];
$e_attend_age=$_POST['e_attend_age'];
$e_attend_gender=$_POST['e_attend_gender'];
$sql ="UPDATE events 
set e_attend_num='$e_attend_num',e_attend_age='$e_attend_age',e_attend_gender='$e_attend_age'
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
        <h1>attendance</h1>
        <form action="attendence?id=<?php echo $id; ?>" method="post">
            
            
            
            <label for="eventServices">attendance number:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_attend_num" value="1-100">1-100
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_attend_num" value="101-300">101-300
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_attend_num" value="more than 300">more than 300
                </label>
            </div>
            <br>
            <label for="eventServices">attendance age:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_attend_age" value="above 3 years">above 3 years
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_attend_age" value="above 7 years">above 7 years
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_attend_age" value="above 12 years">above 12 years
                </label>
            </div>
            <br>
            <label for="eventServices">attendance gender:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_attend_gender" value="only males">only males
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_attend_gender" value="only females">only females
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_attend_gender" value="both">both
                </label>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="add">Submit Event</button>
        </form>
    </div>

</body>
</html>
