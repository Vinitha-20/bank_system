<?php

$username = "root";
$password = "";
$server = 'localhost';
$db = 'Xpert_Bank';

$conn = mysqli_connect($server,$username,$password,$db);

if($conn){
    ?>

    <!-- <script>
        alert('Connection Successful');
    </script> -->

    <?php
}else{
    die("no connection" . mysqli_connect_error());
}
?>