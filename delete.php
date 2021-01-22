<?php
    $sn= $_GET['sn'];
    $con = mysqli_connect("localhost","root","","crud");
    $sql = "DELETE FROM employee where sn=$sn";
    $result = mysqli_query($con, $sql);
    header('location: index.php');
?>