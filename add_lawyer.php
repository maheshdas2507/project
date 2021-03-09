<?php	session_start();
		include('database_info.php');
		$mysql = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	

	$name=$_POST["name"];
	$description=$_POST["description"];
	$lawyer_type=$_POST["lawyer_type"];
	$location=$_POST["location"];
	$case_won=$_POST["case_won"];
	$contact_no=$_POST["contact_no"];
	








$sql= "INSERT INTO lawyer( name, description, lawyer_type, location, case_won, contact_no) 
            VALUES ('$name', '$description', '$lawyer_type', '$location', '$case_won', '$contact_no')";


			
			
	
//$sql1="INSERT INTO login( Mobile, Password) VALUES ('$mobile',AES_ENCRYPT('$password','secret'))";


//$sql2="INSERT INTO Services(Service_Name,Amount(in BitCoin)) VALUES ('Parking','0'),('Flight','0'),('Movie','0'),('Recharge','0')";



if($mysql->query($sql)  ===  TRUE  )//&&  $mysql->query($sql1)  ===  TRUE )//&& $mysql->query($sql2)  ===  TRUE)
{
	header('refresh:2;url=admin_add_lawyer.php');
	
	echo "<br><br><h3>lawyer added successfully</h3><br/><br/>";
}
else
{
echo "Error:". $sql ."<br/>". $mysql->error;
}

	


$mysql->close();

?>
