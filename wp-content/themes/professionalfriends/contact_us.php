		
<?php 

 $con=mysqli_connect('localhost','root','','professionalfriends');

 if($con == false)
 {
 	echo "Connection in not done";
 }
 else{
 	echo "done";
 }
if($_POST['submit']){
		$contact_name =$_POST['contact_name'];
		$contact_email = $_POST['contact_email'];
		$phone_number =$_POST['phone_number'];
		$Purpose =$_POST['Purpose'];
		$contry =$_POST['contry'];
		$city =$_POST['city'];
		$contact_message =$_POST['contact_message'];


		$query= "INSERT INTO `contact`('contact_name', 'contact_email', 'phone_number', 'Purpose', 'contry', 'city', 'contact_message' ) VALUES ('$contact_name','$contact_email','$phone_number','$Purpose', $contry, '$city', '$contact_message')";
		$run= mysqli_query($con,$query);
		if($run == TRUE)
		{
			echo("OKAY");
		}
		else
		{
			echo "
		 	not okay";
		}
	}
}
?>	