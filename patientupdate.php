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

    $sql="UPDATE patients SET fname = '".$_POST['fn']."' , lname = '".$_POST['ln']."' , email	= '".$_POST['email']."' , adrs = '".$_POST['address']."' , phn='".$_POST['phn']."' , disease='".$_POST['disease']."',bill='".$_POST['bill']."' WHERE id = ".$_REQUEST['id'];

    $result = mysqli_query($mysqli, $sql)or die(mysqli_error($mysqli));
    header("Location: patientrecords.php"); 
    exit();
    
?>