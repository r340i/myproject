<?php

$conn = mysqli_connect('localhost','root','','M3');

if(!$conn){
    echo 'Error: ' . mysqli_connect_error();
}
