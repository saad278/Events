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
  
$e_comp_type=$_POST['e_comp_type'];
$e_comp_diff=$_POST['e_comp_diff'];
$e_comp_prize=$_POST['e_comp_prize'];
$sql ="UPDATE events 
set e_comp_type='$e_comp_type',e_comp_diff='$e_comp_diff',e_comp_prize='$e_comp_prize'
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
      <h1>compitions and prizes</h1>
      <form action="compitions_and_prizes.php?id=<?php echo $id; ?>" method="post">
            
            
            

            <label for="eventServices">compition type:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_comp_type" value="general info">general info
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_comp_type" value="sports">sports
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_comp_type" value="history">history
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_comp_type" value="fun">fun
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_comp_type" value="cars">cars
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_comp_type" value="games">games
                </label>
            </div>
            <br>
            <label for="eventServices">difficulty:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_comp_diff" value=easy"">easy
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_comp_diff" value="medium">medium
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_comp_diff" value="hard">hard
                </label>
            </div>
            <br>
            <label for="eventServices">prize:</label>
                <select id="eventServices" name="e_comp_prize">
                    <option value="50000">50000</option>
                    <option value="100000">100000</option>
                    <option value="200000">200000</option>
                    <option value="400000">400000</option>
                </select>
            <br>
            <br>
            <input class="btn btn-primary" type="submit" name="add" value="add">
        </form>
    </div>

    
</body>
</html>
