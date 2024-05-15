<?php
require 'config.php';
$tnm=$_REQUEST["thoughts_name"];
$tid=$_REQUEST["thoughts_id"];
                    $deltype=mysqli_query($conn,"DELETE FROM all_thoughts WHERE `all_thoughts`.`thoughts_id` = $tid");
                    if($deltype)
                    {
                        echo "<script>
                    alert('$tnm type is deleted!'); </script>";
                    header("location:allthoughts.php");
                }
                    else
                    {
                    echo "<script>
                            alert('$tnm type is not deleted!');
                       </script>";
                       header("location:alltypes.php");
                       }
                
?>