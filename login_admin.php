<?php 
	session_start();
	
	include('database_info.php');
	
	$mysql = mysqli_connect("$dbservername", "$dbusername", "$dbpassword", "$dbname");
	
	$name=$_POST["user_name"];
	$password=$_POST["pswd"];
	$_SESSION["name"]=$name;

	if($name != "admin")
	{
	header('refresh:5;url=admin_form.php');		
			
		echo "Invalid Username";
			}
	


if($mysql->connect_error)
{
	echo "Not";
	die('Connection not established '. $mysql->connect_error());	
}

$sql="SELECT Password AS 'Password' from admin where Name='$name'";


		$qry = mysqli_query($mysql,$sql) ;
		//or die(mysql_error($mysql));	
		//echo "Hiii";
		
		if (!$qry) {	
		//echo "Hiiiii";
				echo "Username Not Exist";
				printf("Errormessage: %s\n", mysqli_error($conn));
		}
		/*if($qry -> )
		{
			die(mysqli_error());
			echo "Mobile Number Not Found";
			exit(1);
		}*/
		
		
		while($row = mysqli_fetch_array($qry,MYSQLI_ASSOC))
		{
			//echo "hii";
			
			$x=$row["Password"];
			
			
			if( $x == $password )
			{
			header('refresh:2;url=admin_add_law.php');					
				echo  "Login Sucessfully";
			}
			else
			{
					header('refresh:10;url=admin_form.php');
					echo "Username  and Password Not Matches";

			}
			
			
			
			
		}
		/*if(!$row){
			echo "\nUsername Not Found!";
			header('refresh:5;url=admin_form.html');

		}*/
		
																											
	
/*



if (!$check1_res) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}




*/
?>