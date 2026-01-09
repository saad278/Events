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
  
$e_name=$_POST['e_garage_type'];
$e_type=$_POST['e_type'];
$e_desc=$_POST['e_desc'];
$sql ="UPDATE events 
set e_name='$e_name',e_type='$e_type',e_desc='$e_desc'
where e_id='$id'";
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>   