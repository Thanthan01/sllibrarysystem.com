<?php
include('../include/dbcon.php');
$id =$_GET['id'];
if (isset($_POST['update'])) {
				//				$image = $_FILES["image"] ["name"];
				//			$image_name= addslashes($_FILES['image']['name']);
				//			$size = $_FILES["image"] ["size"];
				//			$error = $_FILES["image"] ["error"];
							


				//			if ($error > 0){
										
// $school_number = $_POST['school_number'];
// $firstname = $_POST['firstname'];
// $middlename = $_POST['middlename'];
// $lastname = $_POST['lastname'];
// $contact = $_POST['contact'];
// $gender = $_POST['gender'];
// $address = $_POST['address'];
// $type = $_POST['type'];
// $level = $_POST['level'];
// $still_profile = $row['user_image'];


// mysqli_query($con," UPDATE user SET school_number='$school_number', firstname='$firstname', middlename='$middlename', lastname='$lastname', contact='$contact', 
// gender='$gender', address='$address', type='$type', level='$level', user_image='$still_profile' WHERE user_id = '$id' ")or die(mysqli_error());
// echo "<script>alert('Successfully Update User Info!'); window.location='user.php'</script>";	
							//		}else{
							//			if($size > 10000000) //conditions for the file
							//			{
							//			die("Format is not allowed or file size is too big!");
							//			}
										

// move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
// $profile=$_FILES["image"]["name"];

$school_number = $_POST['school_number'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$type = $_POST['type'];
$level = $_POST['level'];
$section = $_POST['section'];

{		
mysqli_query($con," UPDATE user SET school_number='$school_number', firstname='$firstname', middlename='$middlename', lastname='$lastname', contact='$contact', 
gender='$gender', address='$address', type='$type', level='$level', section='$section' WHERE user_id = '$id' ")or die(mysqli_error());
echo "<script>alert('Successfully Updated User Info!'); window.location='../member.php'</script>";
}

// }
// }
}
?>