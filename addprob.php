<?php
    require "dbcon.php";
    if(isset($_POST['submit_'])){
        if($_POST['passw']=="admin123"){
            $pcat = $_POST['option_'];
            $pdes = $_POST['probdesc'];
            $psol = $_POST['probsol'];
            $insertquery = "INSERT INTO `$pcat` (`probdes`, `probsol`) VALUES ('$pdes', '$psol')";
            $iquery = mysqli_query($con, $insertquery);
            echo "\n $iquery";
            if($iquery){
                ?>
                <script>
                    alert("Problem Successfully registered in system");
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert("unsuccessfull opertion! try again.");
                </script>
                <?php
                }
        }else{
            ?>
            <script>
                alert("unsuccessfull opertion! Admin Password is wrong.");
            </script>
            <?php
            }
    }
?>
<!DOCTYPE html>
<html lang = "en" dir="ltr">
<head>
<title>Add a problem</title>
</head>
<body>
<br><br>
<h1>Welcome!!</h1>
<p><-- <a href="index.php">Back</a> to problem search.</p>
<p>Add a problem:    </p>
<form action="" method="post">  
<br> <br>
Problem Category: <select name="option_" required>
        <option value="" disabled selected>Select your option</option>
        <option name="option_" value="machine related problem">1. Machine Related Problem</option>
        <option name="option_" value="tool related problem">2. Tool Related Problem</option>
        <option name="option_" value="work piece related problem">3. Work Piece Related Problem</option>
        <option name="option_" value="others">4. Others</option>
      </select> 
<br> <br>
Problem Description: <input type="text" size=50 name="probdesc" placeholder="Enter Your Problem Description here.." required>
<br><br>
Solution: &nbsp; &nbsp; <input type="text" size=50  name="probsol" placeholder="Enter solution here..." required>
<br><br>
<label for="passw">Admin Password: </label> <input type="password" name="passw" placeholder="##unauthorised-not-allowed##" size="22">
<br> <br>
<input type="submit" name="submit_" value="Register a problem">
</form>
</body>
</html>