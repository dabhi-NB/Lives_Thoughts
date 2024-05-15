<?php
include('header.php');
require '../admin\config.php';
if(!empty($_SESSION["username"])){
   header("location:index.php");
}
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $conf_password=$_POST["conf_password"];
    $result=mysqli_query($conn,"select * from login where username='$username' or email='$email'");
    if(mysqli_num_rows($result)>0){
        echo "<Script>alert('username or email has already taken.');</Script>";
    }
    else{
            if($password==$conf_password){
                $query="INSERT INTO `login` (`id`, `username`, `password`, `conf_password`, `name`, `email`, `gender`, `age`, `education`, `contect_number`, `address`, `lang_spoken`) VALUES (NULL, '$username', '$password', '$conf_password', '', '', '', '', '', '', '', '')";
                mysqli_query($conn,$query);
                echo "<Script>alert('Registretion successful');</Script>";
                header("location: index.php");
            }
            else{
                echo"<Script>alert('password do not match');</Script>";
            }
    }
}

?>
<section class="newpage contact" id="registeration">
       
            <h1 class="heading"><span>Registration</span>.</h1>
      <div class="row" >
      <form class="" action="" method="post" autocomplete="off">

                    <label for="name"> name:</label>
                    <input type="text" name="name" id="name" required class="box">
                
                
                    <label for="username">user name:</label>
                   <input type="text" name="username" id="username" required class="box">
               
                   <label for="email">Email :</label></td>
                    <input type="email" name="email" id="email" required class="box">

                    <label for="password">password:</label>
                    <input type="password" name="password" id="password" required class="box">
                
                   <label for="conf_password">confirm password:</label>
                   <input type="conf_password" name="conf_password" id="conf_password" required class="box">
             <button type="submit" name="submit" class="btn">register</button>
               <a href="login.php" class="btn">login</a>
               <a href="index.php" class="btn">Back</a>
</div>
        </form>
        </section>
<?php
include('footer.php');
?>