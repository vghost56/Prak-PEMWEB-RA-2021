<?php

include "konek.php";

$nim=$_POST["nim"];
$nama=$_POST["nama"];
$prodi=$_POST["prodi"];
$angkatan=$_POST["angkatan"];

$sql="INSERT INTO MAHASISWA (nim,nama,prodi,angkatan) values('$nim','$nama',$prodi','$angkatan')";

$hasil=mysqli_query($kon,$sql);

?>