<?php
 include('view.php');
 include('add.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="dashboard.css">
        <script src="script.js"></script>
         <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

</head>
<body>
<div class="header">
    <div class="logo">
        <i class="fas fa-bolt fa-3x"></i>
        <h1>ONWARD</h1>
    </div>
    <div class="logout">
      <form method="POST" action="login.php">
       <button type="submit" name="admin_logout"><i class="fas fa-power-off fa-3x"></i></button>
     </form>
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
            <h1 style="margin-left: 400px">ADD</h1>
            <span><?php echo $err;?></span>
            <form class="add-form" method="post" action="add.php" onsubmit="return add_validations()">
                <table>
                    <tr>
                        <td><label>CUSTOMER ID<br><input type="text" name="customer_id"></label></td>
                        <td><label>FIRST NAME<br><input type="text" name="first_name"></label></td>
                        <td><label>LAST NAME<br><input type="text" name="last_name"></label></td>
                    </tr>
                    <tr>
                        <td><label>GENDER<br><select name="gender"><option>MALE</option><option>FEMALE</option></select></label></td>
                        <td><label>AGE<br><input type="number" name="age"></label></td>
                    </tr>
                    <tr>
                        <td><label>ADDRESS<br><textarea name="address"></textarea></label></td>
                        <td><label>CITY<br><input type="text" name="city"></label></td>
                        <td><label>STATE<br><input type="text" name="state"></label></td>
                    </tr>
                    <tr>
                        <td><label>EMAIL ID<br><input type="text" name="email_id"></label></td>
                        <td><label>MOBILE NO<br><input type="text" name="mobile_no"></label></td>
                        <td><label>PASSWORD<br><input type="text" name="password"></label></td>
                    </tr>
                    <tr>
                        <td><input style="background-color: #9a4eff;padding: 10px;color: black" name="add_customer" type="submit" value="SUBMIT"></td>
                    </tr>
                </table>
            </form>

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

    if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}


</script>
</body>
</html>