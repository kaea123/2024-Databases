<!DOCTYPE html>
<html lang="en">

<?php

include("config.php");

// Connect to database
$dbconnect = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(mysqli_connect_errno())
{
    echo "Connection failed:" .mysqli_connect_error();
    exit;
}

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore Unofficial Holidays: A comprehensive database of fun and unique unofficial holidays. Learn about quirky celebrations and observances around the world.">
    <meta name="keywords" content="Unofficial holidays, unique celebrations, quirky observances, fun holidays, unusual days, special occasions">

    <meta name="author" content="Kaea Lundon">

    <title>Unofficial Holidays Database</title>

    <link rel="stylesheet" href="holiday_style.css">

    <link rel="icon" type="image/png" href="images/favicon.ico">
    

</head>