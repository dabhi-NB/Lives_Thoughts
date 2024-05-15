<?php
include('ad_header.php');
    require 'config.php';
   
    $username=$_REQUEST["username"];
        $result = mysqli_query($conn,"select * from login where username='$username'");
        
        if($row=mysqli_fetch_array($result)){
?>
<section class="newpage contact" id="account">
       
       <h1 class="heading"><span>user account </span>details..<a href="alldetails.php" class="btn">Back</a></h1>
 <div class="row" >
 <form  class="" action="" method="POST" autocomplete="off">
<table border="2" align="">
    <tr>
        <td><label for="name"> name :=></label></td>
        <td class=" box"><?php echo $row['name'];?> </td>
    </tr>
    <tr>
        <td><label > user name:=></label> </td>
        <td class="box"><?php echo $row['username'];?> </td>
    </tr>
    <tr>
        <td><label > email:=></label> </td>
        <td class="box"><?php echo $row['email'];?> </td>
    </tr>
    <tr>
        <td><label > gender:=></label> </td>
        <td class="box"><?php echo $row['gender'];?> </td>
    </tr>
    <tr>
        <td><label > age:=></label> </td>
        <td class="box"><?php echo $row['age'];?> </td>
    </tr>
    <tr>
        <td><label > education:=></label> </td>
        <td class="box"><?php echo $row['education'];?> </td>
    </tr>
    <tr>
        <td><label >contect_number:=></label> </td>
        <td class="box"><?php echo $row['contect_number'];?> </td>
    </tr>
    <tr>
        <td><label > address:=></label> </td>
        <td class="box"><?php echo $row['address'];?> </td>
    </tr>
    <tr>
        <td><label > language spoken:=></label> </td>
        <td class="box"><?php echo $row['lang_spoken'];?> </td>
    </tr>
</table>
</div>
   </form>
   </section>
<?php
include('ad_footer.php');
   }
else{
   header("location:alldetails.php");
}
?>
