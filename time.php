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
  
$e_date=$_POST['e_date'];
$e_time=$_POST['e_time'];
$sql ="UPDATE events
    set e_date='$e_date',e_time='$e_time'
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
        <h1>date and time</h1>
        <form action="time.php?id=<?php echo $id; ?>" method="post">
            
            
            <div class="form-group">
                <label for="eventTime">date:</label>
                <input type="datetime-local" id="eventTime" name="e_date" required>
            </div>
            <div class="form-group">
                <label for="name">time:</label>
                <select id="eventServices" name="e_time">
                <option value="1:00-3:00 pm">1:00-3:00 pm</option>
                <option value="3:00-5:00 pm">3:00-5:00 pm</option>
                <option value="5:00-7:00 pm">5:00-7:00 pm</option>
                <option value="7:00-9:00 pm">7:00-9:00 pm</option>
            </select>
            </div>
            
            <button type="submit" class="btn btn-primary" name="add">Submit Event</button>
        </form>
    </div>

    
    
</body>
</html>
