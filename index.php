<!DOCTYPE html>
<html lang = "en" dir="ltr">
<head>
    <title>Welcome</title>
    <script>
        function myFunction() {
            var x = document.getElementById("requestProblem");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
</head>
<body>
<h1>WELCOME</h1>
<p> welcome to 8D problem solving webportal. </p>
<p>You can may search a problem form the given form and get the soltion according to the registered problems. <br>
If your problem is not in the list then you may request one by clicking on the 'Request a problem' button</p>
<p><ol>
    <li>select a category from the dropdown.</li>
    <li>select a problem from the dropdown.</li>
    <li>your solution will be provided.</li>
</ol></p>
<div id="show_problems">
    <h2>Select a problem under the catorgies:</h2>
       <form action="" method="post">
            <h3>1. Machine Related Problem</h3>
            <label for="prob1">Select problem: </label>    
            <select name="prob1" required>
                <option value="" selected disabled>--choose a problem--</option>
                <?php 
                    {
                        $server = "localhost";
                        $user = "root";
                        $password = "";
                        $db = "probsolve";
                        $con1 = mysqli_connect($server,$user,$password,$db);
                        if(!$con1){
                            ?>
                            <script>
                                alert("NO CONNECTION");
                            </script>
                            <?php
                        }else{
                            $pcat = "machine related problem";
                            $query = "SELECT * FROM `$pcat`";
                            $result = mysqli_query($con1,$query);
                            //echo "<p>$result</p>";
                        }// end of else
                        if($result){
                            while($row = mysqli_fetch_array($result)){
                                $problem = $row['probdes'];
                                echo '<option>'. $problem .'</option>';
                            }
                        }
                    
                    } // end of getsol                
                ?>
            </select>
            <button type="submit" name="getsol1">Get Solution</button>
            <br>
            <?php
            if(isset($_POST['getsol1'])){
                $probdes = $_POST['prob1'];
                $sql = "SELECT * FROM `$pcat` WHERE probdes = '$probdes'";
                $result = mysqli_query($con1,$sql);
                $row = mysqli_fetch_assoc($result);
                echo "<p>&nbsp;&nbsp;&nbsp;Problem: " .($row['probdes']);
                echo "<br>&nbsp;&nbsp;&nbsp;Solution:<b> " . $row['probsol'] . "</b></p>";
                mysqli_close($con1);
            }
            ?>
       </form>
       <form action="" method="post">
       <h3>2. Tool Related Problem</h3>
       <label for="prob2">Select problem: </label>    
            <select name="prob2" required>
                <option value="" selected disabled>--choose a problem--</option>
                <?php 
                    {
                        $server = "localhost";
                        $user = "root";
                        $password = "";
                        $db = "probsolve";
                        $con1 = mysqli_connect($server,$user,$password,$db);
                        if(!$con1){
                            ?>
                            <script>
                                alert("NO CONNECTION");
                            </script>
                            <?php
                        }else{
                            $pcat = "tool related problem";
                            $query = "SELECT * FROM `$pcat`";
                            $result = mysqli_query($con1,$query);
                            //echo "<p>$result</p>";
                        }// end of else
                        if($result){
                            while($row = mysqli_fetch_array($result)){
                                $problem = $row['probdes'];
                                echo '<option>'. $problem .'</option>';
                            }
                        }
                    
                    } // end of getsol
                ?>
            </select>
        <button type="submit" name="getsol2">Get Solution</button>
        <br>
        <?php
            if(isset($_POST['getsol2'])){
                $probdes = $_POST['prob2'];
                $sql = "SELECT * FROM `$pcat` WHERE probdes = '$probdes'";
                $result = mysqli_query($con1,$sql);
                $row = mysqli_fetch_assoc($result);
                echo "<p>&nbsp;&nbsp;&nbsp;Problem: " .($row['probdes']);
                echo "<br>&nbsp;&nbsp;&nbsp;Solution:<b> " . $row['probsol'] . "</b></p>";
                mysqli_close($con1);
            }
        ?>
       </form>
       <form action="" method="post">
        <h3>3. Work Piece Related Problem</h3>
        <label for="prob3">Select problem: </label>    
            <select name="prob3" required>
                <option value="" selected disabled>--choose a problem--</option>
                <?php 
                    {
                        $server = "localhost";
                        $user = "root";
                        $password = "";
                        $db = "probsolve";
                        $con1 = mysqli_connect($server,$user,$password,$db);
                        if(!$con1){
                            ?>
                            <script>
                                alert("NO CONNECTION");
                            </script>
                            <?php
                        }else{
                            $pcat = "work piece related problem";
                            $query = "SELECT * FROM `$pcat`";
                            $result = mysqli_query($con1,$query);
                            //echo "<p>$result</p>";
                        }// end of else
                        if($result){
                            while($row = mysqli_fetch_array($result)){
                                $problem = $row['probdes'];
                                echo '<option>'. $problem .'</option>';
                            }
                        }
                    
                    } // end of getsol
                ?>
            </select>
        <button type="submit" name="getsol3">Get Solution</button>
        <br>
        <?php
            if(isset($_POST['getsol3'])){
                $probdes = $_POST['prob3'];
                $sql = "SELECT * FROM `$pcat` WHERE probdes = '$probdes'";
                $result = mysqli_query($con1,$sql);
                $row = mysqli_fetch_assoc($result);
                echo "<p>&nbsp;&nbsp;&nbsp;Problem: " .($row['probdes']);
                echo "<br>&nbsp;&nbsp;&nbsp;Solution:<b> " . $row['probsol'] . "</b></p>";
                mysqli_close($con1);
            }
        ?>
       </form>
       <form action="" method="post">
       <h3>4. Others</h3>
       <label for="prob4">Select problem: </label>    
            <select name="prob4" required>
                <option value="" selected disabled>--choose a problem--</option>
                <?php 
                    {
                        $server = "localhost";
                        $user = "root";
                        $password = "";
                        $db = "probsolve";
                        $con1 = mysqli_connect($server,$user,$password,$db);
                        if(!$con1){
                            ?>
                            <script>
                                alert("NO CONNECTION");
                            </script>
                            <?php
                        }else{
                            $pcat = "others";
                            $query = "SELECT * FROM `$pcat`";
                            $result = mysqli_query($con1,$query);
                            //echo "<p>$result</p>";
                        }// end of else
                        if($result){
                            while($row = mysqli_fetch_array($result)){
                                $problem = $row['probdes'];
                                echo '<option>'. $problem .'</option>';
                            }
                        }
                    
                    } // end of getsol
                ?>
            </select>
        <button type="submit" name="getsol4">Get Solution</button>
        <br>
        <?php
            if(isset($_POST['getsol4'])){
                $probdes = $_POST['prob4'];
                $sql = "SELECT * FROM `$pcat` WHERE probdes = '$probdes'";
                $result = mysqli_query($con1,$sql);
                $row = mysqli_fetch_assoc($result);
                echo "<p>&nbsp;&nbsp;&nbsp;Problem: " .($row['probdes']);
                echo "<br>&nbsp;&nbsp;&nbsp;Solution:<b> " . $row['probsol'] . "</b></p>";
                mysqli_close($con1);
            }
        ?>
       </form>
    <!-- End of all forms -->
</div>            
    <div> 
        <p>Your problem not on the list??<br>check in others category. <br> still not found? <br>
        <button onclick="myFunction()">Click</button> here to request a problem. </p>
        <div id="requestProblem" style="display: none;">
            <form action="" method="post">
                <label for="reqprob">Describe the Problem: </label> <input type="text" name="reqprob" size="70" required>
                <br> <br>
                <label for="probcat"> Select category: </label> 
                <select name="option_" required>
                        <option value="" disabled selected>Select your option</option>
                        <option  value="machine related problem" <?php if(isset($_POST['option_']) && $_POST['option_']=='machine related problem') echo "selected ='selected'"; ?> >1. Machine Related Problem</option>
                        <option  value="tool related problem" <?php if(isset($_POST['option_']) && $_POST['option_']=='tool related problem') echo "selected ='selected'"; ?> >2. Tool Related Problem</option>
                        <option  value="work piece related problem" <?php if(isset($_POST['option_']) && $_POST['option_']=='work piece related problem') echo "selected ='selected'"; ?> >3. Work Piece Related Problem</option>
                        <option  value="others" <?php if(isset($_POST['option_']) && $_POST['option_']=='others') echo "selected ='selected'"; ?> >4. Others</option>
                </select>
                <?php
                    if(isset($_POST['probreq'])){
                        $server = "localhost";
                        $user = "root";
                        $password = "";
                        $db = "probsolve";
                        $con = mysqli_connect($server,$user,$password,$db);
                        if(!$con){
                            ?>
                            <script>
                                alert("NO CONNECTION");
                            </script>
                            <?php
                        }else{
                            $reqprob = $_POST['reqprob'];
                            $category = $_POST['option_'];
                            $insertquery = "INSERT into requestedprob(probdes,category) values('$reqprob','$category')";
                            $iquery = mysqli_query($con, $insertquery);
                            if($iquery){
                                ?>
                                <script>alert("Request successfully made.");</script>
                                <?php
                            }else{
                                ?>
                                <script>
                                alert("unsuccessfull opertion! try again.");
                                </script>
                                <?php
                            }
                        }
                        mysqli_close($con);
                    } // end of set probreq
                ?>
                <button type="submit" name="probreq">Request Problem</button>
            </form>
        </div>
    </div>
<p> If you are an Admin then you may add a problem from the link below:</p>
<p><a href="addprob.php">Click Here</a> to add a problem</p>
</body>
</html>