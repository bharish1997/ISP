<?php
    include('connection.php');
    $empid = $_POST['empid'];
    $password = $_POST['pswd'];

        //to prevent from mysqli injection
        $empid = stripcslashes($empid);
        $password = stripcslashes($password);
        $empid = mysqli_real_escape_string($con, $empid);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select*from admin where emp_id = '$empid' and emp_password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $url='admindashboard.php';

        if($row != 0){
            header('Location: '.$url);
        }
        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";
        }
?>