
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


            </table>
        </div>
        <div id="add">
            <h1 style="margin-left: 400px">ADD</h1>
            <form class="add-form">
                <table>
                    <tr>
                        <td><label>CUSTOMER ID<br><input type="text"></label></td>
                        <td><label>FIRST NAME<br><input type="text"></label></td>
                        <td><label>LAST NAME<br><input type="text"></label></td>
                    </tr>
                    <tr>
                        <td><label>GENDER<br><select><option>MALE</option><option>FEMALE</option></select></label></td>
                        <td><label>AGE<br><input type="number"></label></td>
                    </tr>
                    <tr>
                        <td><label>ADDRESS<br><textarea></textarea></label></td>
                        <td><label>CITY<br><input type="text"></label></td>
                        <td><label>STATE<br><input type="text"></label></td>
                    </tr>
                    <tr>
                        <td><label>EMAIL ID<br><input type="text"></label></td>
                        <td><label>MOBILE NO<br><input type="text"></label></td>
                    </tr>
                    <tr>
                        <td><button style="background-color: #9a4eff;padding: 10px;color: black">SUBMIT</button></td>
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

</script>
</body>
</html>