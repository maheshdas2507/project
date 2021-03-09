<?php	session_start();
		include('database_info.php');
		$mysql = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
	

	$law_title=$_POST["law_title"];
	$description=$_POST["description"];
	$law_section=$_POST["law_section"];
	








$sql= "INSERT INTO law( law_title, description, law_section) 
            VALUES ('$law_title', '$description', '$law_section')";


			
			
	
//$sql1="INSERT INTO login( Mobile, Password) VALUES ('$mobile',AES_ENCRYPT('$password','secret'))";


//$sql2="INSERT INTO Services(Service_Name,Amount(in BitCoin)) VALUES ('Parking','0'),('Flight','0'),('Movie','0'),('Recharge','0')";



if($mysql->query($sql)  ===  TRUE  )//&&  $mysql->query($sql1)  ===  TRUE )//&& $mysql->query($sql2)  ===  TRUE)
{
	header('refresh:2;url=admin_add_law.php');
	
	echo "<br><br><h3>law added successfully</h3><br/><br/>";
}
else
{
echo "Error:". $sql ."<br/>". $mysql->error;
}

	


$mysql->close();

?>
