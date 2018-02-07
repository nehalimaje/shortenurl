<?php
include('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post">
	<input type="text" name="txturl">
	<input type="submit" name="btnsubmit">
</form>
</body>
</html>
<?php
if(isset($_POST['btnsubmit']))
{
	$url = mysqli_real_escape_string($conn,$_POST['txturl']);
	$id=rand(10000,99999);  
    $shorturl=base_convert($id,20,36);
    $sql = "insert into tbl_url(id,url,shortenurl)values('$id','$url','$shorturl')";
    $rs = mysqli_query($conn,$sql);
    echo "Shortened url is <a href='decodeurl.php?url=$shorturl' target='_blank'>". $shorturl ."</a>";  

}

?>

