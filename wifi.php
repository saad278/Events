 <?php 
    
    
    
    if(isset($_GET['id'])){
    $id=$_GET['id'];}
    $query = "select * from events where 'e_id' = '$id'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    ?>
    <?php
    if(isset($_POST['add'])){
    
    $e_wifi_fee=$_POST['e_wifi_fee'];
    $e_wifi_speed=$_POST['e_wifi_speed'];         
    $sql ="UPDATE events
    set e_wifi_fee='$e_wifi_fee',e_wifi_speed='$e_wifi_speed'
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