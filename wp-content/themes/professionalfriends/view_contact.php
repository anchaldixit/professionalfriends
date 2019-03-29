<?php get_header();?>

<?php
$con =mysqli_connect('localhost','root','','professionalfriends');

	function viewData(){
		global $con;
		$query = "SELECT * FROM `contact`";
		$run = mysqli_query($con,$query);
		if($run == TRUE)
		{ 
			?>
			<table border="2" width="90%">
				<tr>
					<td>id</td>
					<td>contact_name</td>
					<td>contact_email</td>
					<td>phone_number</td>
					<td>Purpose</td>
					<td>contry</td>
					<td>city</td>
					<td>contact_message</td>
				</tr>
			<?php
			while ($data=mysqli_fetch_assoc($run))
			{
				?>
				<tr>
					<td><?php echo $data['id']; ?></td>
					<td><?php echo $data['contact_name']; ?></td>
					<td><?php echo $data['contact_email']; ?></td>
					<td><?php echo $data['phone_number']; ?></td>
					<td><?php echo $data['Purpose']; ?></td>
					<td><?php echo $data['contry']; ?></td>
					<td><?php echo $data['city']; ?></td>
					<td><?php echo $data['contact_message']; ?></td>
				</tr>
				<?php
			}?></table><?php
		}
		else{
			echo "roung";
		}
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>view</title>
</head>
<body>
<?php viewData();  ?>
</body>
</html>