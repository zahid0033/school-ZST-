<?php
/**
 * User: Md. Zahid Hossain
 * Date: 27-03-2019
 * Time: 11.00 PM
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname="zst";
$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}