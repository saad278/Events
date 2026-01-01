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

$e_place=$_POST['e_place'];  
$e_place_url=$_POST['e_place_url'];     
$sql ="UPDATE events
set e_place='$e_place',e_place_url='$e_place_url'
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
        <h1>choose place</h1>
    <br>
        
    <form action="damascus.php?id=<?php echo $id; ?>" method="post">
            <div class="form-group">
                <label for="eventServices">place:</label>
                <select id="eventServices" name="e_place" required>
                    <option value="dunez-mazzah">dunez-mazzah</option>
                    <option value="damaskino-kafarsoseh">damaskino-kafarsoseh</option>
                    <option value="uptown-mashroo3 dummar">uptown-mashroo3 dummar</option>
                    <option value="avenue mall-malki">avenue mall-malki</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name">location:</label>
                    <input type="text" class="form-control" placeholder="Enter name" id="email" name="e_place_url"
                    value="<?php
                    if(isset($_POST['add'])){
                   echo $e_place_url;
                    }
                    ?>">
                </div>
            <div class="form-group">
            
          </form>
          <input class="btn btn-primary" type="submit" name="add" value="add">
        </form>
    </div> 
    
</body>
</html>
