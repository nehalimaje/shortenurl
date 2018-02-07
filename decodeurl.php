<?php
include('config.php');
$url= $_GET["url"];  
  
echo $sql = 'select * from tbl_url where shortenurl="'.mysqli_real_escape_string($conn,$url).'"';  
  
$rs=mysqli_query($conn,$sql);  
  
while($row = mysqli_fetch_array($rs))  
{  
$res=$row['url'];  
header("location:".$res);  
}  
?>