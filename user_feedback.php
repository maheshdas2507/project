<?php session_start();
		include('database_info.php');
		
		$email=$_SESSION["email"];
$_SESSION["email"]=$email;
		$mysql = mysqli_connect("$dbservername", "$dbusername", "$dbpassword", "$dbname");
if($mysql->connect_error)
{
	echo "Not";
	die('Connection not established '. $mysql->connect_error());	
}
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
			margin-bottom:70px;
		}
		tr,td {
				width:400px;
				padding:20px 0px;
		}
		
		textarea,input[type=text],input[type=email],input[type=password] {
				width: 100%;
				font-size:18px;
				padding: 12px 20px;
				margin: 8px 0;
				
				box-sizing: border-box;
				border: 0;
				outline: 0;
				background: transparent;
				border: 1px solid black;
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
				<li><a href="user_view_profile.php">View Profile</a></li>
				<li><a href="view_law.php">View Law</a></li>
	   			<li><a href="view_lawyer.php">View Lawyer</a></li>
				<li><a href="user_feedback.php">Give Feedback</a></li>
				<li><a href="user_logout.php">Logout</a></li>
		</ul>
    
	</div>
	
	</div>
	
	<div class="row">
		<div class="col-md-12 student-head">
			<p>Give Feedback</p>
	
		</div>
	
	<form action="feedback_user.php" method="post">
	<div class="col-md-12 student-form">
	
	<table align="center">
	
	<tbody>
	<tr>	
	<td>  <textarea name="feedback" rows="7"  placeholder="Enter feedback" id="feedback"></textarea>
	<p id="ferror"> </p></td>
			</tr>
	
	
	<tr>
	
		<td> 
		
		<input type="submit" value="Submit" onclick="return validate()"> 
		 
		</td>
	<script>
			function validate(){
			var feedback=document.getElementById("feedback").value;
			var flag=true;
			
			if(feedback.toString().length === 0 )
			{
			document.getElementById("ferror").innerHTML="Enter Feedback";
			flag=false;
			}
			else 
			{
			document.getElementById("ferror").innerHTML="";
		}

		return flag;
	
	}
	
		</script>
		</tr>
			
	</tbody>
	</table>
	
	</form>
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
