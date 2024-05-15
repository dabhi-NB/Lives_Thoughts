<?php
include('header.php');
    require '../admin\config.php';
   
    if(!empty($_SESSION["username"])){
        $username=$_SESSION["username"];
        $result = mysqli_query($conn,"select * from login where username='$username'");
        
        if($row=mysqli_fetch_array($result)){
            
            if(isset($_POST["submit"])){
               $name=$_POST["name"];
               $email=$_POST["email"];
               $gender=$_POST["gender"];
               $age=$_POST["age"];
               $education=$_POST["education"];
               $contect_number=$_POST["contect_number"];
               $address=$_POST["address"];
               $lang_spoken=$_POST["lang_spoken"];
               $chk="";
               foreach($lang_spoken as $lang){
                $chk.=$lang.",";
               }

               $update=" UPDATE `login` SET `name`='$name',`email`='$email',`gender`='$gender',`age`='$age',`education`='$education',`contect_number`='$contect_number',`address`='$address',`lang_spoken`='$chk' WHERE `login`.`username`='$username'";
            mysqli_query($conn,$update);
            }
?>
<section class="newpage contact" id="account">
       <h1 class="heading"><span>account </span>details..</h1>
 <div class="row" >
 <form  class="" action="" method="POST" autocomplete="off">
 <table border="2" align="center" >
    <tr>
        <td><label for="name"> name :=></label></td>
        <td ><input type="text" name="name" id="name" value="<?php echo $row['name'];?>" class="box w"> </td>
    </tr>
    <tr>
        <td><label > user name:=></label> </td>
        <td ><input type="text" name="username" id="username" value="<?php echo $row['username'];?>" class="box w">
           </td>
    </tr>
    <tr>
        <td><label > email:=></label> </td>
        <td> <input type="email" name="email" id="email" value="<?php echo $row['email'];?>" class="box w">
            </td>
    </tr>
    <br>
    <tr>
        <td><label > gender:=></label> </td>
        <td > <input type="radio" name="gender" id="gender"  <?php if($row['gender']=="male"){?> checked="true" <?php } ?> value="male"> male</td>
       <td > <input type="radio" name="gender" id="gender" <?php if($row['gender']=="female"){?> checked="true" <?php } ?> value="female" > female
       
 </td><br></tr>
    <tr><td><label > age:=></label> </td>
        <td >  <input type="number" name="age" id="age" value="<?php echo $row['age'];?>" class="box w">
            </td></tr>
    <tr> <td><label > education:=></label> </td>
        <td><input type="text" name="education" id="education" value="<?php echo $row['education'];?>" class="box w">
            </td> </tr>
    <tr><td><label >contect_number:=></label> </td>
        <td ><input type="number" name="contect_number" id="contect_number" value="<?php echo $row['contect_number'];?>" class="box w">
            </td></tr>
    <tr><td><label > address:=></label> </td>
        <td >  <input type="text" name="address" id="address" value="<?php echo $row['address'];?>" class="box w">
            </td></tr>
  
    <tr><td><label > lang_spoken:=></label> </td>
        <td > <input type="checkbox" value="english"  name="lang_spoken[]" <?php if($row['lang_spoken']=="english"){?> checked="true" <?php } ?> >  english
           </td><br>
           
           <td > <input type="checkbox" value="gujarati"  name="lang_spoken[]" <?php if($row['lang_spoken']=="gujarati"){?> checked="true" <?php } ?> >  gujarati
           </td><br>
           <td > <input type="checkbox" value="hindi"  name="lang_spoken[]" <?php if($row['lang_spoken']=="hindi"){?> checked="true" <?php } ?> >  hindi
           </td><br>
           <td > <input type="checkbox" value="french" name="lang_spoken[]" <?php if($row['lang_spoken']=="french"){?> checked="true" <?php } ?> >  french
           </td>
    </tr>

              <tr><td><button type="submit" class="btn" id="submit" name="submit">update</button>
          <a href="index.php" class="btn">Back</a></td>
         </tr>
             </table></div>
   </form>
   </section>
<?php
include('footer.php');
   }
}
else{
   header("location:login.php");
}
?>
