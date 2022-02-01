<?php
include ('../include/dbcon.php');
$id =$_GET['id'];
if (isset($_POST['update'])) {

							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
// $admin_type = $_POST['admin_type'];
$still_profile = $row['admin_image'];

$result=mysqli_query($con,"select * from admin") or die (mysqli_error());
$row=mysqli_num_rows($result);

if($password != $confirm_password)
{
echo "<script>alert('Password do not match!'); window.location='../admin.php'</script>";
}else
{
mysqli_query($con," UPDATE admin SET firstname='$firstname', middlename='$middlename', lastname='$lastname', username='$username', password='$password', 
confirm_password='$confirm_password', admin_image='$still_profile' WHERE admin_id = '$id' ")or die(mysqli_error());
echo "<script>alert('Successfully Update Admin Info!'); window.location='../admin.php'</script>";	
}
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										

move_uploaded_file($_FILES["image"]["tmp_name"],"../../img/upload/" . $_FILES["image"]["name"]);			
$profile=$_FILES["image"]["name"];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
// $admin_type = $_POST['admin_type'];

$result=mysqli_query($con,"select * from admin") or die (mysqli_error());
$row=mysqli_num_rows($result);

if($password != $confirm_password)
{
echo "<script>alert('Password do not match!'); window.location='../admin.php'</script>";
}else

{		
mysqli_query($con," UPDATE admin SET firstname='$firstname', middlename='$middlename', lastname='$lastname', username='$username', password='$password', 
confirm_password='$confirm_password', admin_image='$profile' WHERE admin_id = '$id' ")or die(mysqli_error());
echo "<script>alert('Successfully Updated Admin Info!'); window.location='../	admin.php'</script>";
}

}
}
?>