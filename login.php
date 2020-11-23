<?php


if(array_key_exists('login',$_POST)){
    login();
}

else if(array_key_exists('logout',$_POST)){
    logout();
}

else if(array_key_exists('admin_login',$_POST)){
    admin_login();
}

else if(array_key_exists('admin_logout',$_POST)){
    admin_logout();
}

else if(array_key_exists('add_customer',$_POST)){
    add_customer();
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


        if($row != 0){
        $url='customer_dashboard.php';

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
            $url='login.html';
            echo "<script>alert('Invalid username or password.');window.location='login.html'</script>";
        }
}

function logout(){
    session_start();
    session_unset();
    session_destroy();
    $url='login.html';
    header('Location: '.$url);
}

function admin_login(){
        include('connection.php');
        session_start();
        $empid = $_POST['empid'];
        $password = $_POST['pswd'];

        $empid = stripcslashes($empid);
        $password = stripcslashes($password);
        $empid = mysqli_real_escape_string($con, $empid);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select*from admin where emp_id = '$empid' and emp_password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $url='admin_dashboard.php';

        if($row != 0){
            $_SESSION["logged"]=true;
            header('Location: '.$url);
            exit;
        }
        else{
            $url='login.html';
            echo "<script>alert('Invalid username or password.');window.location='login.html'</script>";
        }
}

function admin_logout(){
    session_start();
    session_unset();
    session_destroy();
    $url='login.html';
    header('Location: '.$url);
}

function add_customer(){
    include('connection.php');
    session_start();
    $customer_id = $_POST['customer_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $email_id = $_POST['email_id'];
    $mobile_no = $_POST['mobile_no'];
    $password = $_POST['password'];

     $sql = "INSERT INTO customers(cust_id, cust_firstname, cust_lastname, cust_age, cust_gender, cust_address, cust_city, cust_state, cust_mobileno, cust_emaili, cust_password)
                VALUES ('$customer_id', '$first_name', '$last_name', '$age', '$gender', '$address', '$city', '$state', '$mobile_no', '$email_id', '$password')";

}

?>