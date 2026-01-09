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
$e_city=$_POST['e_city'];
$e_place=$_POST['e_place'];
$e_place_url=$_POST['e_place_url'];
$sql ="UPDATE events 
set e_city='$e_city',e_place='$e_place',e_place_url='$e_place_url'
where e_id='$id'";

    
     
    if($conn->query($sql)===TRUE){
        
        echo "data inserted";
       
    }else
    {
    echo "error".$conn->connect_error;
    }
    
}
?>