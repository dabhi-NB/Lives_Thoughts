<?php
include('ad_header.php');
require 'config.php';
if(!empty($_SESSION["username"])){
    header("location:ad_index.php");
}
if(isset($_POST["submit"])){
    $usernameoremail=$_POST["usernameoremail"];
    $password=$_POST["password"];
    $result=mysqli_query($conn,"SELECT * FROM `admin` WHERE ad_name='$usernameoremail' OR ad_email='$usernameoremail'");
    $row=mysqli_fetch_assoc($result);
    
    if(mysqli_num_rows($result)>0){
        if($password==$row['ad_password']){
            $_SESSION["login"]=true;
            $_SESSION["ad_name"]=$row["ad_name"];
            header("location:ad_index.php");
        }
        else{
            echo "<script>alert('wrong password');</script>";
        }
    }
    else{
        echo"<script>alert('user not admin!');</script>";
    }
}
?>

<section class="newpage contact" id="login">
            <h1 class="heading"><span>admin Login</span>.</h1>
      <div class="row">
      <form class="" action="" method="post" autocomplete="off">
                    <label for="name"> username or email:</label>
                    <input type="text" name="usernameoremail" id="usernameoremail" required class="box">
              
                    <label for="password">password:</label>
                    <input type="password" name="password" id="password" required class="box">
                
                <button type="submit" name="submit" class="btn">admin login</button>
                <a href="ad_registration.php" class="btn">admin registration</a>
               <a href="ad_index.php" class="btn">Back</a>
               </div>
        </form>
        </section>
<?php
include('ad_footer.php');
?>