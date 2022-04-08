<?php
include 'connections.php';
$name=$_POST['name'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$msg=$_POST['msg'];

$insertquery="INSERT INTO contact (name,email,mobile,msg) VALUES('$name','$email','$mob','$msg')";
    $res=mysqli_query($con,$insertquery);
    if($res){
        ?>
        <script>
            alert("data save properly");
            window.location.href = "index.php";
        </script>
        <?php
    }else
    {
        ?>
        <script>
            alert("data not save properly");
            window.location.href = "contact.php";
        </script>
        <?php
    }

?>