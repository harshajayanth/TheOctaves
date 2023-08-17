<?php

$conn=mysqli_connect("localhost","root","","octaves");

if($conn->connect_error){
    echo "Connection Error";
}