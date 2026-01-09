<?php 
if(isset($_POST["add"]))
{
$event=$_POST['event'];
$reviewer=$_POST['reviewer'];
$review=$_POST['review'];
$sql ="INSERT INTO reviews(event,reviewer,review)
VALUES('$event','$reviewer','$review')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>