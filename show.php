<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <script src="js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/d4dda18e1f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <style>
   body{
padding-top:40px;
background:#E6E6FA    
}
.card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}

.avatar-md {
    height: 5rem;
    width: 5rem;
}

.fs-19 {
    font-size: 19px;
}

.primary-link {
    color: #314047;
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
}

a {
    color: #02af74;
    text-decoration: none;
}

.bookmark-post .favorite-icon a, .job-box.bookmark-post .favorite-icon a {
    background-color: #da3746;
    color: #fff;
    border-color: danger;
}
.favorite-icon a {
    display: inline-block;
    width: 30px;
    height: 30px;
    font-size: 18px;
    line-height: 30px;
    text-align: center;
    border: 1px solid #eff0f2;
    border-radius: 6px;
    color: rgba(173,181,189,.55);
    -webkit-transition: all .5s ease;
    transition: all .5s ease;
}


.candidate-list-box .favorite-icon {
    position: absolute;
    right: 22px;
    top: 22px;
}
.fs-14 {
    font-size: 14px;
}
.bg-soft-secondary {
    background-color: rgba(116,120,141,.15)!important;
    color: #74788d!important;
}

.mt-1 {
    margin-top: 0.25rem!important;
}
  </style>
    <title>Document</title>
</head>
<body>
   <?php
    include "database.php";
   ?>
   <?php
    if(isset($_REQUEST["id"])){
      $id=$_REQUEST["id"];
  $sql="select * from events where e_id='$id'";
  $result=$conn->query($sql);
  if($result->num_rows > 0)
  {
    while($row=$result->fetch_assoc()){
    echo ' 
    <h5 style="text-align: center">event details</h5>
    <nav class="navbar navbar-expand-sm  navbar-light my-1 d-flex flex-column align-items-center">
      <ul class="navbar-nav">
    <div class="container">       
    <table class="table table-light">

      <tbody>
        <tr>
          <th>name</th>
          <td>'.$row['e_name'].'</td>
          </tr>
          <tr>
          <th>desc</th>
          <td>'.$row['e_desc'].'</td>
          </tr>
          <tr>
          <th>type</th>
          <td>'.$row['e_type'].'</td>
          </tr>
          <tr>
          <th>place</th>
          <td>'.$row['e_place'].'</td>
          </tr>
          <tr>
          <th>place url</th>
          <td>'.$row['e_place_url'].'</td>
          </tr>
          <tr>
          <th>num of attended</th>
          <td>'.$row['e_attend_num'].'</td>
          </tr>
          <tr>
          <th>date</th>
          <td>'.$row['e_date'].'</td>
          </tr>
          <tr>
          <th>time</th>
          <td>'.$row['e_time'].'</td>
          </tr>
          <tr>
          <th>accessoreis</th>       
          <td>'.$row['e_accessoreis'].'</td>
          </tr>
          <tr>
          <th>stuff</th>
          <td>'.$row['e_stuff'].'</td>
          </tr>
          <tr>
          <th>kids room</th>
          <td>'.$row['e_kids_room'].'</td>
          </tr>
          <tr>
          <th>comp type</th>
          <td>'.$row['e_comp_type'].'</td>
          </tr>
          <tr>
          <th>comp diff</th>
          <td>'.$row['e_comp_diff'].'</td>
          </tr>
          <tr>
          <th>comp prize</th>
          <td>'.$row['e_comp_prize'].'</td>
          </tr>
          <tr>
          <th>food</th>
          <td>'.$row['e_food'].'</td>
          </tr>
          <tr>
          <th>drink</th>
          <td>'.$row['e_drink'].'</td>
          </tr>
          <tr>
          <th>car garage type</th>
          <td>'.$row['e_garage_type'].'</td>
          </tr>
          <tr>
          <th>car garage service</th>
          <td>'.$row['e_garage_service'].'</td>
          </tr>
          <tr>
          <th>car garage fee</th>
          <td>'.$row['e_garage_fee'].'</td>
          </tr>
          <tr>
          <th>ad</th>
          <td>'.$row['e_ad'].'</td>
          </tr>
          <tr>
          <th>blogger</th>
          <td>'.$row['e_blogger'].'</td>
          </tr>
          <tr>
          <th>product</th>
          <td>'.$row['e_product'].'</td>
          </tr>
          <tr>
          <th>shops</th>
          <td>'.$row['e_num_shops'].'</td>
          </tr>
          <tr>
          <th>wifi fee</th>
          <td>'.$row['e_wifi_fee'].'</td>
          </tr>
          <tr>
          <th>wifi speed</th>
          <td>'.$row['e_wifi_speed'].'</td>
          </tr>
          <tr>
          <th>timeline</th>
          <td>'.$row['e_timeline'].'</td>
          </tr>
          <tr>
          <th>sponser</th>
          <td>'.$row['e_sponser'].'</td>
          </tr>
          <tr>
          <th>security method</th>
          <td>'.$row['e_security_method'].'</td>
          </tr>
          <tr>
          <th>security level</th>
          <td>'.$row['e_security_level'].'</td>
          </tr>
          <tr>
          <th>security team</th>
          <td>'.$row['e_security_team'].'</td>
          </tr>
          <tr>
          <th>guide duration</th>
          <td>'.$row['e_guide_duration'].'</td>
          </tr>
          <tr>
          <th>guide method</th>
          <td>'.$row['e_guide_method'].'</td>
          </tr>
          <tr>
          <th>guide age</th>
          <td>'.$row['e_guide_age'].'</td>
          <tr>
         <th>rating</th>
         <td>'.$row['e_rating'].'</td>
          </tr>
    </tbody>
    </table>
  </div>
</ul>
</nav>
    ';
  }
}
}
   ?>
   
</body>
</html>