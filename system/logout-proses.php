<?php
include("koneksi.php");
session_start();
session_destroy();
mysqli_close($connection);
header("location:../index.php");
