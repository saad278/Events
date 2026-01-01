<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
    <style>
      body {
           background-color: #E6E6FA
       }
       .login-container {
           max-width: 400px;
           margin: 0 auto;
           margin-top: 50px;
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
 width: 200%;
 padding: 12px 20px;
 margin: 8px 0;
 box-sizing: border-box;
}
.form-control{
            width: 200%;
        }
   </style>
</head>
<style>
       
    </style>
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
  
$e_timeline=$_POST['e_timeline'];
$sql ="UPDATE events
    set e_timeline='$e_timeline'
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
<div class="login-header">
  
</div>
<div class="login-container">
    <h1>Event timeline</h1>
    <div class="row">
        <div class="col-6 my-5">
            
        <form action="timeline.php?id=<?php echo $id; ?>" method="post">
                <div class="form-group">
                  <label for="text">description:</label>
                  <textarea class="form-control" rows="8" cols="10" id="comment" name="e_timeline">
                    <?php
                    if(isset($_POST['add'])){
                   echo $e_timeline;
                    }
                    ?>"
                  </textarea>
              </div>
              <br>
                <button type="submit" class="btn btn-primary" name="add">Submit</button>
            </form>
        </div>
        
    </div>
</div>

</body>
</html>