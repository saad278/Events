<?php 
if(isset($_POST["add"]))
{
  
$e_name=$_POST['e_name'];
$e_desc=$_POST['e_desc'];
$e_type=$_POST['e_type'];
$sql ="INSERT INTO events(e_name,e_desc,e_type)
VALUES('$e_name','$e_desc','$e_type')";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>