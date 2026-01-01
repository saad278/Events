<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Event Management</title>
    <style>
        body {
            background-color: #E6E6FA;
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
  
$e_product=$_POST['e_product'];
$e_num_shops=$_POST['e_num_shops'];
$sql ="UPDATE events 
set e_product='$e_product',e_num_shops='$e_num_shops'
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
      <h1>bazar</h1>
      <form action="bazar.php?id=<?php echo $id; ?>" method="post">
            
            
            

            <label for="eventServices">products:</label>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_product" value="food">food
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_product" value="accessoreis and tools">accessoreis and tools
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_product" value="makeup and beauty">makeup and beauty
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_product" value="figures and stickers">figures and stickers
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_product" value="clothes">clothes
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                  <input type="radio" class="form-check-input" name="e_product" value="drawings and frames">drawings and frames
                </label>
            </div>
            <br>
            <label for="eventServices">number of shops:</label>
            <select id="eventServices" name="e_num_shops" required>
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="40">40</option>
                <option value="70">70</option>
            </select>
            <br>
            <br>
            <button type="submit" class="btn btn-primary" name="add">Submit Event</button>
        </form>
    </div>

    
</body>
</html>
