function login(){
    window.location="login.html";
}
function customer() {
       document.getElementById("customer-login").style.display = "flex";
       document.getElementById('admin-login').style.display="none";
}
function admin() {
         document.getElementById('admin-login').style.display="flex";
         document.getElementById("customer-login").style.display = "none";

    }

function index() {
    window.location="index.html";
}


function profile() {
        document.getElementById("profile").style.display="flex";
        document.getElementById("usage").style.display="none";
        document.getElementById("myplan").style.display="none";
        document.getElementById("cc").style.display="none";
    }

    function usage() {
        document.getElementById("profile").style.display="none";
        document.getElementById("usage").style.display="flex";
        document.getElementById("myplan").style.display="none";
        document.getElementById("cc").style.display="none";
    }

    function myplan() {
        document.getElementById("profile").style.display="none";
        document.getElementById("usage").style.display="none";
        document.getElementById("myplan").style.display="flex";
        document.getElementById("cc").style.display="none";
    }
    function cc() {
        document.getElementById("profile").style.display="none";
        document.getElementById("usage").style.display="none";
        document.getElementById("myplan").style.display="none";
        document.getElementById("cc").style.display="flex";
    }


    function validation() {
        var id = document.f1.email.value;
        var ps = document.f1.pswd.value;
        if (id.length === "" && ps.length === "") {
            alert("User Name and Password fields are empty");
            return false;
        } else {
            if (id.length === "") {
                alert("User Name is empty");
                return false;
            }
            if (ps.length === "") {
                alert("Password field is empty");
                return false;
            }
        }
    }
