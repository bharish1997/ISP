<?php
    include('connection.php');
    include('admin_dashboard.php');
    session_start();
        $err="";

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

       if (empty($_POST["customer_id"])) {
            $err = "Name is required";
         } else{
    $name = test_input($_POST["customer_id"]);
            }
//
//        else if($first_name === ""){
//        echo "<script>alert('FIRST_NAME IS EMPTY')</script>";
//
//        }
//
//        else if($last_name === ""){
//        echo "<script>alert('LAST_NAME IS EMPTY')</script>";
//
//        }
//
//        else if($age === ""){
//        echo "<script>alert('AGE IS EMPTY')</script>";
//
//        }
//
//        else if($address === ""){
//        echo "<script>alert('ADDRESS IS EMPTY')</script>";
//
//        }
//
//        else if($city === ""){
//        echo "<script>alert('CITY IS EMPTY')</script>";
//
//        }
//
//        else if($state === ""){
//        echo "<script>alert('STATE IS EMPTY')</script>";
//
//        }
//
//        else if($email_id === ""){
//        echo "<script>alert('EMAIL_ID IS EMPTY')</script>";
//
//        }
//
//        else if($mobile_no === ""){
//        echo "<script>alert('MOBILE NUMBER IS EMPTY')</script>";
//        }
//
//        else if($password === ""){
//        echo "<script>alert('PASSWORD IS EMPTY')</script>";
//        }
//
//    else{
//        $sql = "INSERT INTO customers(cust_id, cust_firstname, cust_lastname, cust_age, cust_gender, cust_address, cust_city, cust_state, cust_mobileno, cust_emailid, cust_password)
//                VALUES ('".$_POST["customer_id"]."', '".$_POST["first_name"]."', '".$_POST["last_name"]."','".$_POST["age"]."','".$_POST["gender"]."','".$_POST["address"]."','".$_POST["city"]."','".$_POST["state"]."','".$_POST["mobile_no"]."','".$_POST["email_id"]."', '".$_POST["password"]."')";
//
//        if(mysqli_query($con,$sql)){
//                    echo "<script>alert('SUCCESS')</script>";
//                    exit();
//                }
//                else {
//		echo "Error: " . $sql . " " . mysqli_error($con);
//        }
//    }

?>