<?php


if(array_key_exists('login',$_POST)){
    login();
}

else if(array_key_exists('logout',$_POST)){
    logout();
}

function login(){

    include('connection.php');
    session_start();
    $userid = $_POST['userid'];
    $password = $_POST['pswd'];

        //to prevent from mysqli injection
        $userid = stripcslashes($userid);
        $password = stripcslashes($password);
        $userid = mysqli_real_escape_string($con, $userid);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select*from customers where cust_id = '$userid' and cust_password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $ord="SELECT *  FROM orders WHERE cust_id = '$userid' ORDER BY start_date DESC";
        $ord_result = mysqli_query($con, $ord);
        $ord_row= mysqli_fetch_array($ord_result, MYSQLI_ASSOC);

         $url='customer_dashboard.php';
        if($row != 0){
            $_SESSION["userid"]=$row['cust_id'];
            $_SESSION["firstname"]=$row['cust_firstname'];
            $_SESSION["lastname"]=$row['cust_lastname'];
            $_SESSION["age"]=$row['cust_age'];
            $_SESSION["gender"]=$row['cust_gender'];
            $_SESSION["address"]=$row['cust_address'];
            $_SESSION["city"]=$row['cust_city'];
            $_SESSION["state"]=$row['cust_state'];
            $_SESSION["mobileno"]=$row['cust_mobileno'];
            $_SESSION["email"]=$row['cust_emailid'];
            $_SESSION["logged"]=true;
            $_SESSION["plan"]=strtoupper($ord_row['plan_name']);
            $_SESSION["s_date"]=$ord_row['start_date'];
            $_SESSION["exp_date"]=$ord_row['expiry_date'];
            header('Location: '.$url);
            exit;
        }
        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";
        }
}

function logout(){
    session_start();
    session_unset();
    session_destroy();
    $url='login.html';
    header('Location: '.$url);
}

?>