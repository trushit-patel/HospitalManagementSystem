<?php
    session_start();

    if($_SESSION['scope']!="loggedin"){
      header("location:login.php");
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="hospital";

    // Create connection
    $mysqli =mysqli_connect($servername, $username, $password,$dbname);
    $sql="DELETE FROM patients WHERE id=".$_REQUEST['id'];

    $result = mysqli_query($mysqli, $sql);
    header("Location: patientrecords.php"); 
    exit();
    mysql_close($mysqli);
?>