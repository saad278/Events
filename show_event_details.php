<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rental List</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background: #5c6d7c;
    padding: 40px;
    color: #fff;
}

.container {
    background: #4f6070;
    padding: 20px;
    border-radius: 6px;
}

/* Top bar */
.top-bar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.btn-add {
    background: #f07c22;
    border: none;
    padding: 10px 16px;
    color: #fff;
    font-weight: bold;
    cursor: pointer;
    border-radius: 3px;
}

.results select {
    margin-left: 8px;
    padding: 4px;
}

/* Table */
table {
    width: 100%;
    border-collapse: collapse;
}

thead {
    background: #445564;
}

th, td {
    padding: 12px;
    text-align: left;
    border-bottom: 1px solid #3c4b59;
}

tbody tr:hover {
    background: #55687a;
}

/* Actions */
.actions {
    display: flex;
    gap: 6px;
}

.btn-edit {
    background: #f4b342;
    border: none;
    padding: 6px 10px;
    cursor: pointer;
    border-radius: 3px;
}

.btn-delete {
    background: #e0564a;
    border: none;
    padding: 6px 10px;
    cursor: pointer;
    border-radius: 3px;
    color: #fff;
}

.display {
    font-size: 18px;
    cursor: pointer;
}

/* Pagination */
.pagination {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-top: 20px;
}

.pagination button {
    background: #6b7d8d;
    border: none;
    padding: 6px 10px;
    color: #fff;
    cursor: pointer;
    border-radius: 3px;
}

.pagination .active {
    background: #f07c22;
}

.pagination .info {
    margin-left: auto;
    opacity: 0.8;
}
</style>
<body>

<?php
    include "database.php";
   ?>
   <?php
  $sql="select * from events";
  $result=$conn->query($sql);
  if($result->num_rows > 0)
  {
    while($row=$result->fetch_assoc()){
    echo ' 
<div class="container">

    <!-- Top Bar -->
    

    <!-- Table -->
    <table>
        <thead>
            <tr>
                <th>name</th>
                <th>type</th>
                <th>city</th>
                <th>place</th>
                <th>location</th>
                <th>start date</th>
                <th>duration</th>
                <th>time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$row['e_name'].'</td>
                <td>
                '.$row['e_type'].'
                </td>
                <td>'.$row['e_city'].'</td>
                <td>'.$row['e_place'].'</td>
                <td>'.$row['e_place_url'].'</td>
                <td>'.$row['e_date'].'</td>
                <td>'.$row['e_duration'].'</td>
                <td>'.$row['e_time'].'</td>
                </tr>
                </tr>
                

            
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th>descriptions</th>
                <th>food</th>
                <th>drink</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$row['e_desc'].'</td>
                <td>
                '.$row['e_food'].'
                </td>
                <td>'.$row['e_drink'].'</td>
                </tr>
                </tr>
                

            
        </tbody>
    </table>
 
    <table>
        <thead>
            <tr>
                <th>accessories</th>
                <th>stuff</th>
                <th>ad</th>
                <th>blogger</th>
                <th>product</th>
                <th>shops number</th>
                <th>kids room</th>
                <th>sponser</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$row['e_accessories'].'</td>
                <td>
                '.$row['e_stuff'].'
                </td>
                <td>'.$row['e_ad'].'</td>
                <td>'.$row['e_blogger'].'</td>
                <td>'.$row['e_product'].'</td>
                <td>'.$row['e_num_shops'].'</td>
                <td>'.$row['e_kids_room'].'</td>
                <td>'.$row['e_sponser'].'</td>
                </tr>
                </tr>
                

            
        </tbody>
    </table>
       

    <table>
        <thead>
            <tr>
                <th>guide duration</th>
                <th>guide method</th>
                <th>guide age</th>
                <th>garage type/th>
                <th>garage service</th>
                <th>garage fee</th>
                <th>wifi speed</th>
                <th>wifi fee</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$row['e_guide_duration'].'</td>
                <td>
                '.$row['e_guide_method'].'
                </td>
                <td>'.$row['e_guide_age'].'</td>
                <td>'.$row['e_garage_type'].'</td>
                <td>'.$row['e_garage_service'].'</td>
                <td>'.$row['e_garage_fee'].'</td>
                <td>'.$row['e_wifi_speed'].'</td>
                <td>'.$row['e_wifi_fee'].'</td>
                </tr>
                </tr>
                

            
        </tbody>
    </table>
 
<table>
        <thead>
            <tr>
                <th>compition type</th>
                <th>compition difficulty</th>
                <th>compition prize</th>
                <th>security method</th>
                <th>security level</th>
                <th>security team</th>
                <th>state</th>
                <th>organizer rating</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$row['e_comp_type'].'</td>
                <td>
                '.$row['e_comp_diff'].'
                </td>
                <td>'.$row['e_comp_prize'].'</td>
                <td>'.$row['e_security_method'].'</td>
                <td>'.$row['e_security_level'].'</td>
                <td>'.$row['e_security_team'].'</td>
                <td>'.$row['e_state'].'</td>
                <td>'.$row['e_rating'].'</td>
                </tr>
                </tr>
                

            
        </tbody>
    </table>

<table>
        <thead>
            <tr>
                <th>ntimeline</th>
                <th>conditions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>'.$row['e_timeline'].'</td>
                <td>
                '.$row['e_conditions'].'
                </td>
                </tr>
                </tr>
                

            
        </tbody>
    </table>

</div>
 ';
  }
}
?>
</body>
</html>
