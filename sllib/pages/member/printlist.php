<?php
include('../session.php');

 include ('../include/dbcon.php');

?>
<html>

<head>
		<title>SLTCFI | LIB</title>
		 <link rel="icon" type="text/css" href="../../img/logo.png">
		<style>
		
		
.container {
	width:100%;
	margin:auto;
}
		
.table {
    width: 100%;
    margin-bottom: 20px;
}	

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}
		
@media print{
#print {
display:none;
}
}

#print {
	width: 90px;
    height: 30px;
    font-size: 18px;
    background: white;
    border-radius: 4px;
	margin-left:28px;
	cursor:hand;
}
		</style>
		
<script>
function printPage() {
    window.print();
}
</script>
		
</head>


<body>
	<div class = "container">
		<div id = "header">
		<center>
				<img src="../../img/slbanner.png" height="20%" width="100%">
			</center>
			<br>
			<button type="submit" id="print" onclick="printPage()">Print</button>	
			<p style = "margin-left:30px; margin-top:50px; font-size:14pt; font-weight:bold;">Member List&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
        <div align="right">
		<b style="color:blue;">Date Prepared:</b>
		<?php include('currentdate.php'); ?>
        </div>			
		<br/>
<?php
							$result= mysqli_query($con,"select * from user 
							order by user.user_id DESC ") or die (mysqli_error());
?>
						<table class="table table-striped">
						  <thead>
								<tr>
								<tr>
									<th>User Name</th>
									<th>Contact</th>
									<th>Gender</th>
									<th>Address</th>
									<th>Type</th>
									<th>Level</th>
									<th>Section</th>
									<th>Status</th>
								</tr>
								</tr>
						  </thead>   
						  <tbody>
<?php
							while ($row= mysqli_fetch_array ($result) ){
							$id=$row['user_id'];
?>
							<tr>
								<td style="text-align:center;"><?php echo $row['firstname']." ".$row['middlename']." ".$row['lastname']; ?></td> 
								<td style="text-align:center;"><?php echo $row['contact']; ?></td> 
								<td style="text-align:center;"><?php echo $row['gender']; ?></td> 
								<td style="text-align:center;"><?php echo $row['address']; ?></td> 
								<td style="text-align:center;"><?php echo $row['type']; ?></td> 
								<td style="text-align:center;"><?php echo $row['level']; ?></td> 
								<td style="text-align:center;"><?php echo $row['section']; ?></td> 
								<td style="text-align:center;"><?php echo $row['status']; ?></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							
							<?php 
							}					
							?>
						  </tbody> 
					  </table> 

<br />
<br />
							<?php
								include('../include/dbcon.php');
								$user_query=mysqli_query($con,"select * from admin where admin_id='$id_session'")or die(mysqli_error());
								$row=mysqli_fetch_array($user_query); {
							?>        <h2><i class="glyphicon glyphicon-user"></i> <?php echo '<span style="color:blue; font-size:15px;">Prepared by:'."<br /><br /> ".$row['firstname']." ".$row['lastname']." ".'</span>';?></h2>
								<?php } ?>


			</div>
	
	
	
	

	</div>
</body>


</html>