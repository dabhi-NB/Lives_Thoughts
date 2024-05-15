<?php
include('ad_header.php');
require 'config.php';
if(!empty($_SESSION["username"])){
   header("location:ad_index.php");
}
if(isset($_POST["submit"])){
    $username=$_POST["name"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $conf_password=$_POST["conf_password"];
    $result=mysqli_query($conn,"select * from admin where ad_name='$username' or ad_email='$email'");
    if(mysqli_num_rows($result)>0){
        echo "<Script>alert('admin has already taken.');</Script>";
    }
    else{
            if($password==$conf_password){
                $query="INSERT INTO `admin` (`ad_id`, `ad_name`, `ad_password`, `ad_conf_password`, `ad_email`) VALUES ('', '$username', '$password', '$conf_password', '$email');";
                mysqli_query($conn,$query);
                echo "<Script>alert('admin Registretion successful');</Script>";
                header("location: ad_index.php");
            }
            else{
                echo"<Script>alert('password do not match');</Script>";
            }
    }
}

?>
<section class="newpage contact" id="registeration">
       
            <h1 class="heading"><span>admin Registration</span>.</h1>
      <div class="row" >
      <form class="" action="" method="post" autocomplete="off">

                    <label for="name"> admin name:</label>
                    <input type="text" name="name" id="name" required class="box">
                
                
                    <label for="username">user name:</label>
                   <input type="text" name="username" id="username" required class="box">
               
                   <label for="email">admin Email :</label></td>
                    <input type="email" name="email" id="email" required class="box">

                    <label for="password">password:</label>
                    <input type="password" name="password" id="password" required class="box">
                
                   <label for="conf_password">confirm password:</label>
                   <input type="conf_password" name="conf_password" id="conf_password" required class="box">
             <button type="submit" name="submit" class="btn">admin register</button>
               <a href="ad_login.php" class="btn">admin login</a>
               <a href="ad_index.php" class="btn">Back</a>
</div>
        </form>
        </section>
<?php
include('ad_footer.php');
?>