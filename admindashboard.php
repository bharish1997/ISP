<?php
 require_once('view.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
        <script src="Desktop/script.js"></script>
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>
<body>
<div class="header">
    <div class="logo">
        <i class="fas fa-bolt fa-3x"></i>
        <h1>ONWARD</h1>
    </div>
    <div class="logout">
       <i  onclick="logout()" class="fas fa-power-off fa-3x"></i>
    </div>
</div>
<div class="login-name">

    <h3>Hello Admin</h3>
</div>

<div class="dash-cont">
        <div class="side-menu">
            <ul>
                <li onclick="view()">VIEW</li>
                <li onclick="add()">ADD</li>
                <li onclick="edit()">EDIT</li>
                <li onclick="del()">DELETE</li>
            </ul>
        </div>
    <div class="main-cont">
        <div id="view">
            <h1>VIEW</h1>
            <table>
                <tr>
                    <th>USER_ID</th>
                    <th>FIRST_NAME</th>
                    <th>LAST_NAME</th>
                    <th>MOBILE_NO</th>
                    <th>EMAIL_ID</th>
                    <th>AGE</th>
                    <th>GENDER</th>
                    <th>ADDRESS</th>
                    <th>CITY</th>
                    <th>STATE</th>
                </tr>
                <tr>
                    <?php
                    include('view.php');
                    while($row = mysqli_fetch_array($result)) {?>

                    <td><?php echo $row[0];?></td>
                    <td><?php echo $row[1];?></td>
                    <td><?php echo $row[2];?></td>
                    <td><?php echo $row[3];?></td>
                    <td><?php echo $row[8];?></td>
                    <td><?php echo $row[9];?></td>
                    <td><?php echo $row[4];?></td>
                    <td><?php echo $row[5];?></td>
                    <td><?php echo $row[6];?></td>
                    <td><?php echo $row[7];?></td>
                     </tr>
                    <?php
                      }

                    ?>

            </table>
        </div>
        <div id="add">
            <h1>ADD</h1>
        </div>
        <div id="edit">
            <h1>EDIT</h1>
        </div>
        <div id="del">
            <h1>DELETE</h1>
        </div>
    </div>
</div>

<script>

function logout(){
    window.location="adminlogin.html";
}

   function view() {
        document.getElementById("add").style.display="none";
        document.getElementById("view").style.display="flex";
        document.getElementById("edit").style.display="none";
        document.getElementById("del").style.display="none";
    }

    function add() {
        document.getElementById("add").style.display="flex";
        document.getElementById("view").style.display="none";
        document.getElementById("edit").style.display="none";
        document.getElementById("del").style.display="none";
    }

    function edit() {
        document.getElementById("add").style.display="none";
        document.getElementById("view").style.display="none";
        document.getElementById("edit").style.display="flex";
        document.getElementById("del").style.display="none";
    }
    function del() {
        document.getElementById("add").style.display="none";
        document.getElementById("view").style.display="none";
        document.getElementById("edit").style.display="none";
        document.getElementById("del").style.display="flex";
    }

</script>
</body>
</html>