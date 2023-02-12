<?php

$conn = mysqli_connect('localhost','root','','win22');

if(!$conn){
    echo 'Error: ' . mysqli_connect_error();
}