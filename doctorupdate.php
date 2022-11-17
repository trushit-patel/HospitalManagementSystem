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

    $sql="UPDATE doctors SET fname = '".$_POST['fn']."' , lname = '".$_POST['ln']."' , address = '".$_POST['address']."' , phn='".$_POST['phn']."' WHERE id = ".$_REQUEST['id'];

    $result = mysqli_query($mysqli, $sql);
    header("Location: doctordetails.php"); 
    exit();
    
?>