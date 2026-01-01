<?php 
if(isset($_POST["add"]))
{
  
$sender=$_POST['sender'];
$reciever=$_POST['reciever'];
$massage=$_POST['massage'];
$sql ="INSERT INTO participant_massage_box(sender,reciever,massage)
VALUES('$sender','$reciever','$massage')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>