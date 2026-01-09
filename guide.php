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
  
$e_guide_duration=$_POST['e_guide_duration'];
$e_guide_age=$_POST['e_guide_age'];
$e_guide_method=$_POST['e_guide_method'];
$sql ="UPDATE events
  set e_guide_duration='$e_guide_duration',e_guide_age='$e_guide_age',e_guide_method='$e_guide_method'
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