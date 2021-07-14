<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "probsolve";
    $con = mysqli_connect($server,$user,$password,$db);
    if($con){
        ?>
        <script>
            alert("Connection Successfull to DataBase");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("No connection! \n RELOAD the page.");
        </script>
        <?php
    }
// DATABASE Connection here
?>