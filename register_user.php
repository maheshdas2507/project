<?php	//session_start();
		include('database_info.php');
$mysql = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);

	$name=$email=$mobile=$rank=$dob=$gender=$category=$password="";
	$name=$_POST["stu_name"];
	$email=$_POST["stu_email"];
	$mobile=$_POST["stu_mobile"];
	
	$dob=$_POST["stu_date"];
	$gender=$_POST["gender"];
	
	$password = $_POST["stu_pswd"];
	
	
	//$encrypt_pswd = AES_ENCRYPT($password,'secret');
/*	$password = md5($_POST["password"]);
*/


$sql= "INSERT INTO user_register( Name, Email, Gender, Date_Of_Birth, Mobile, Password) 
            VALUES ('$name', '$email', '$gender','$dob','$mobile','$password')";


			
			
	




if($mysql->query($sql)  ===  TRUE  )//&&  $mysql->query($sql1)  ===  TRUE )//&& $mysql->query($sql2)  ===  TRUE)
{
	header('refresh:2;url=user_form.php');
	echo "<h3>Data entered successfully</h3><br/><br/>";
	echo "<h1>Thank You!</h1><br/><br/>";
	echo "You will be redirected in 2 seconds!";
}
else
{
echo "Error:". $sql ."<br/>". $mysql->error;
}

	


$mysql->close();


?>
