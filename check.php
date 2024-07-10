<?php 
if(isset($_POST['sub']))
{
$uname = $_POST['uname'];
$upass = $_POST['upass'];
$mysqli = mysqli_connect('db4free.net:3306','dba_user','KlnWin2023#','klnpc2023');
$res = mysqli_query($mysqli,"select * from user where uname='$uname'and upass='$upass'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "Login Success";

}
else
{
	echo "Login failed ";
}
}
?>

