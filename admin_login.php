
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
    </style>
</head>

<body>
<?php
include "database.php";
 ?>
 
 <?php
if(isset($_POST["login"]))
{
  

$u_email=$_POST['u_email'];
$u_password=$_POST['u_password'];


$sql ="select * from users where u_email='$u_email' and u_password='$u_password' ";

$result= $conn->query($sql);
if($result->num_rows > 0){
    header("location:home.php");
}
else{
    echo "error";
}
}
 ?>
<div class="login-container">
    <h1>login</h1>
    <div class="row">
        <div class="col-6 my-5">
            
            
        <form action="<?php echo ($_SERVER["PHP_SELF"]);?>" method="post">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" placeholder="Enter email" id="email" name="u_email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="u_password">
                </div>
                
                <button type="submit" class="btn btn-primary" name="login">Submit</button>
            </form>
        </div>
        
    </div>
</div>

</body>
</html>