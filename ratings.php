<?php 
if(isset($_POST["add"]))
{
$participant=$_POST['participant'];
$event=$_POST['event'];
$rate=$_POST['rate'];
$sql ="INSERT INTO ratings(participant,event,rate)
VALUES('$participant','$event','$rate')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>