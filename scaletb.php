<?php
include "mydb.php";

$query="Select * from scales";
$result=mysqli_query($conn,$query);

if($result -> num_rows > 0){
    $data = array();
    while($row = $result -> fetch_assoc()){
        $data[] = $row;
    }
}
else
{
    $data="";
}
echo json_encode($data);