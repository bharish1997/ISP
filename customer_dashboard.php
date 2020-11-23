<?php
    session_start();
    $url="login.html";
    if($_SESSION['logged']==true){
        echo '

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
        <script src="script.js"></script>
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="dashboard.css">

</head>
<body>
<div class="header">
    <div class="logo">
        <i class="fas fa-bolt fa-3x"></i>
        <h1>ONWARD</h1>
    </div>
    <div class="logout">
    <form method="POST" action="login.php">
       <button type="submit" name="logout"><i class="fas fa-power-off fa-3x"></i></button>
     </form>
    </div>
</div>
<div class="login-name" style="box-shadow: 3px 3px lightgrey;z-index: 1">

    <h3>Hello '.$_SESSION["firstname"].'</h3>
</div>

<div class="dash-cont">
        <div class="side-menu">
            <ul>
                <li onclick="profile()">PROFILE</li>
                <li onclick="usage()">USAGE</li>
                <li onclick="myplan()">MY PLANS</li>
                <li onclick="cc()">CUSTOMER CARE</li>
            </ul>
        </div>
    <div class="main-cont">
        <div id="profile">
            <h1>PROFILE</h1>
            <table class="profile-table">
                <tr>
                    <td><b>USER ID: </b> '.$_SESSION["userid"].'</td>
                    <td><b>FIRST NAME: </b>'.$_SESSION["firstname"].'</td>
                    <td><b>LAST NAME: </b>'.$_SESSION["lastname"].'</td>
                </tr>
                <tr>
                    <td><b>AGE: </b>'.$_SESSION["age"].'</td>
                    <td><b>GENDER: </b>'.$_SESSION["gender"].'</td>
                </tr>
                <tr>
                    <td><b>ADDRESS: </b>'.$_SESSION["address"].'</td>
                    <td><b>CITY: </b> '.$_SESSION["city"].'</td>
                    <td><b>STATE: </b>'.$_SESSION["state"].'</td>
                </tr>
                <tr>
                    <td><b>MOBILE NO: </b>'.$_SESSION["mobileno"].'</td>
                    <td><b>EMAIL ID: </b>'.$_SESSION["email"].'</td>

                </tr>
            </table>
        </div>
        <div id="usage">
            <h1>USAGE</h1>

        </div>
        <div id="myplan">
            <h1>MY PLANS</h1>
            <h3>Plan Name: '.$_SESSION["plan"].'</h3>
            <h3>Plan Started on: '.$_SESSION["s_date"].'</h3>
            <h3>Plan Expires on: '.$_SESSION["exp_date"].'</h3>
        </div>
        <div id="cc">
            <h1>CUSTOMER CARE</h1>
            <table>
                <tr>
                    <td>
                    <h3>EMAIL</h3>
                    <h5>Technician: techician@onward.com</h5>
                    <h5>Complaints: complaints@onward.com</h5>
                    <h5>Head Office: headoffice@onward.com</h5>
                    </td>

                <td>
                    <h3>Phone Number</h3>
                    <h5>Technician: 044-234785</h5>
                    <h5>Complaints: 044-3764927</h5>
                    <h5>Head Office: 044-94872648</h5>
                </td>
                <td>
                    <h3>OFFICE Address</h3>
                    <h5>No:7</h5>
                    <h5>Dubai Kuruku Sandhu,</h5>
                    <h5>Dubai Main Road,</h5>
                    <h5>Dubai.</h5>
                </td>
                </tr>
                </table>
        </div>
    </div>
</div>

</body>
</html>';
    }
    else{
    echo '<script>alert("First Login")</script>';
        header('Location: '.$url);
    }
 ?>