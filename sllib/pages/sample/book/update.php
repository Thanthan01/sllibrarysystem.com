<?php
include ('../include/dbcon.php');
$id =$_GET['id'];
if (isset($_POST['update'])) {
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];
							


							if ($error > 0){
										
					$book_title=$_POST['book_title'];
					$category_id=$_POST['category_id'];
					$author=$_POST['author'];
					$author_2=$_POST['author_2'];
					$author_3=$_POST['author_3'];
					$author_4=$_POST['author_4'];
					$author_5=$_POST['author_5'];
					$book_copies=$_POST['book_copies'];
					$book_pub=$_POST['book_pub'];
					$publisher_name=$_POST['publisher_name'];
					$isbn=$_POST['isbn'];
					$copyright_year=$_POST['copyright_year'];
					$status=$_POST['status'];
// $still_profile1 = $row['book_image'];


					if ($status == 'Lost') {
						$remark = 'Not Available';
					} elseif ($status == 'Damaged') {
						$remark = 'Not Available';
					} else {
						$remark = 'Available';
					}


mysqli_query($con," UPDATE book SET book_title='$book_title', category_id='$category_id', author='$author', author_2='$author_2', author_3='$author_3', author_4='$author_4', author_5='$author_5', book_copies='$book_copies', 
book_pub='$book_pub', publisher_name='$publisher_name', isbn='$isbn', copyright_year='$copyright_year', status='$status', remarks='$remark' WHERE book_id = '$id' ")or die(mysqli_error());
echo "<script>alert('Successfully Updated Book Info!'); window.location='../book.php'</script>";	

									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
if(!empty($_FILES["image"]["tmp_name"])){
move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);          
$profile=$_FILES["image"]["name"];
$bi = " ,book_image = '$profile' ";
}else{
    $bi = '';
}

					$book_title=$_POST['book_title'];
					$category_id=$_POST['category_id'];
					$author=$_POST['author'];
					$author_2=$_POST['author_2'];
					$author_3=$_POST['author_3'];
					$author_4=$_POST['author_4'];
					$author_5=$_POST['author_5'];
					$book_copies=$_POST['book_copies'];
					$book_pub=$_POST['book_pub'];
					$publisher_name=$_POST['publisher_name'];
					$isbn=$_POST['isbn'];
					$copyright_year=$_POST['copyright_year'];
					$status=$_POST['status'];


					if ($status == 'Lost') {
						$remark = 'Not Available';
					} elseif ($status == 'Damaged') {
						$remark = 'Not Available';
					} else {
						$remark = 'Available';
					}
					
mysqli_query($con," UPDATE book SET book_title='$book_title', category_id='$category_id', author='$author', author_2='$author_2', author_3='$author_3', author_4='$author_4', author_5='$author_5', book_copies='$book_copies', 
book_pub='$book_pub', publisher_name='$publisher_name', isbn='$isbn', copyright_year='$copyright_year', status='$status', remarks='$remark' $bi WHERE book_id = '$id' ")or die(mysqli_error());
echo "<script>alert('Successfully Updated Book Info!'); window.location='../book.php'</script>";	

}
}
?>