<?php

$serverName = "34.107.22.127";
$dBUsername = "root";
$dBPassword = "CDbp4sINuyyJ6FP4";
$dBname = "limbo";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBname);

if (!$conn) {
    die("Connection failed:" . mysqli_connect_error());
}
