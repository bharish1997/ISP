
<?php
    include('connection.php');

    $sql='select * from customers';
    $result = mysqli_query($con, $sql);

?>