<?php


$conn =mysqli_connect("localhost","root","","dashboard-crud");


if(!$conn){

    echo 'errrorrrr';
    exit();
}