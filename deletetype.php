<?php
require 'config.php';
$typenm=$_REQUEST["types_name"];
$typeid=$_REQUEST["type_id"];
                    $deltype=mysqli_query($conn,"DELETE FROM `types` WHERE `types`.`type_id` = $typeid");
                    if($deltype)
                    {
                        echo "<script>
                    alert('$typenm type is deleted!'); </script>";
                    header("location:alltypes.php");
                }
                    else
                    {
                    echo "<script>
                            alert('$typenm type is not deleted!');
                       </script>";
                       header("location:alltypes.php");
                       }
                
?>