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