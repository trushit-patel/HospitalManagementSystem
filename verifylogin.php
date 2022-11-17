<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="hospital";
    session_start();
    // Create connection
    $mysqli =mysqli_connect($servername, $username, $password,$dbname);
    if($mysqli) {
        echo "success\n";
    } 
    else {
        die("Error". mysqli_connect_error()); 
    } 
    $sql="SELECT * FROM users WHERE usern ='".$_POST['un']."' AND pass='".$_POST['pw']."' ";

    echo $sql;
    
    $result = mysqli_query($mysqli, $sql);
    if($result->num_rows>0){
        $_SESSION["scope"] = "loggedin";
        header("Location: wellcome.php"); 
        exit();
    }else{
        header("Location: login.php");
        exit();
    }
    mysql_close($mysqli);
?>