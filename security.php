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
  
$e_security_method=$_POST['e_security_method'];
$e_security_level=$_POST['e_security_level'];
$e_security_team=$_POST['e_security_team'];
$sql ="UPDATE events
    set e_security_method='$e_security_method',e_security_level='$e_security_level',e_security_team='$e_security_team'
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