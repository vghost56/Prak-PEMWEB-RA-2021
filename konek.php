<?php
$host="localhost";
$user="root";
$password="";
$db="mg4_ajax"

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
    die("Koneksi gagal:".mysqli_connect_error());
}
?>