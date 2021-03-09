<?php session_start();
		include('database_info.php');
		
		$name=$_SESSION["name"];
$_SESSION["name"]=$name;
		$mysql = mysqli_connect("$dbservername", "$dbusername", "$dbpassword", "$dbname");
if($mysql->connect_error)
{
	echo "Not";
	die('Connection not established '. $mysql->connect_error());	
}
$search=$_POST["search"];
		
		
?>


<!DOCTYPE html>
<head>
	<title>Law</title>
	<link rel="shortcut icon" href="img/favicon.ico" />
	<!----------- INCLUSION OF FONT AWESOME LIBRARY------------->
	<script src="https://use.fontawesome.com/7d44bc7623.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
	
	<!---------- INCLUSION OF VIEWPORT --------------->
<!---------- INCLUSION OF VIEWPORT --------------->
	<meta name="viewport" content="width=1250">
	<!----------- INCLUSION OF  CSS FILES  ----------->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="stylesheet" type="text/css" href="css/common.css">
	<!----- INCLUSION OF BOOTSTRAP ------------>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<style>
		.student-head	p{
			text-align:center;
			font-size:25px;
			color:#5abd56;
			font-weight:600;
			
		
		}
		.student-head{
			margin-top:50px!important;
			margin:20px 0px;
		}
		
		table{
			border:1px solid black;
		margin-bottom:70px;
		}
		tr,td {
			border:1px solid black;
				width:auto;
				padding:20px 20px;
		}
		
		input[type=text],input[type=email],input[type=password] {
				
				font-size:18px;
				padding: 12px 20px;
				margin: 8px 0;
				
				box-sizing: border-box;
				
				outline: 0;
				
				border-bottom: 1px solid black;
			}
		input[type=submit],input[type=button]{
			padding:10px;	
			
			background:#5abd56;
			border:1px solid;
			font-size:23px;
			margin:0% 40%;
		}
		.move-text{
			
			font-size:18px;
			margin:0% 0% 0% 25%;
		}
	.form_head,th{
			font-size:23px;
			color:black;
			font-style:bold;
			font-weight:700;
			padding:20px 20px;
			text-align:center;
		}
		td{
			font-size:20px;
			color:black;
			
			
		}
		.profile{
			font-size:20px;
			
		}
		
		
		tr{
			text-align:center;
		}
		</style>
</head>

<body>
	<div class="container">
	<div class="row">
	
	<?php include('header.php');?>
	
	</div>
	
	<div class="row login-menu">
	<div class="col-md-12 menu-center">


		<ul>
				<li><a href="admin_add_law.php">Add Law</a></li>
				<li><a href="admin_add_lawyer.php">Add Lawyer</a></li>
				<li><a href="admin_view_law.php">View Law</a></li>
	   			<li><a href="admin_view_lawyer.php">View Lawyer</a></li>
				<li><a href="admin_view_user.php">View User</a></li>
				<li><a href="admin_view_feedback.php">View Feedback</a></li>
				<li><a href="admin_logout.php">Logout</a></li>
		</ul>
    
	</div>
	
	</div>	
	<div class="row">
		<div class="col-md-12 student-head">
			<p>Searched Lawyer</p>
	
		</div>
	
	<div class="col-md-12 student-form">
	
	
	<?php
			

if($mysql->connect_error)
{
	echo "Not";
	die('Connection not established '. $mysql->connect_error());	
}
			
			$i=1;
			
			echo "<br><br>";
			echo  "<table align='center' border='1' >
			<tr>
			<th>S.no.</th>
			<th>Lawyer Name</th>
			<th>Description</th>
			<th>Lawyer Type</th>
			<th>Location</th>
			<th>Total Case Won</th>
			<th>Contact Number</th>
		</tr>";
	if ($result = $mysql->query("SELECT * FROM lawyer WHERE (name LIKE '%".$search."%') OR (description LIKE '%".$search."%') OR (lawyer_type LIKE '%".$search."%') OR (location LIKE '%".$search."%') OR (contact_no LIKE '%".$search."%')"))
	{
	if($result->num_rows > 0)
	{
	while($row=$result->fetch_assoc())
	{
		echo "<tr>
				<td>".$i.".</td>
				<td>".$row['name']."</td>
				<td>".$row['description']."</td>
				<td>".$row['lawyer_type']."</td>
				<td>".$row['location']."</td>
				<td>".$row['case_won']."</td>
				<td>".$row['contact_no']."</td>
			</tr>";
			$i++;
	}

	}
		else{
			
			echo "<p>No lawyer Found";
		}
	}			echo "</table>";

$mysql->close();
?>
	
	</div>
	</div>
	<div class="row footer">
		
                <div class="col-md-12 cpy-text">
                		<p>CopyRight &copy 2019</p>
                </div>
            </div>
    </div>
		
		
	
	</div>	
</body>	
</html>
