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
		.admin-head	p{
			text-align:center;
			font-size:25px;
			color:#5abd56;
			font-weight:600;
			
		
		}
		.admin-head{
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
		
		input[type=text],input[type=password] {
				width: 100%;
				font-size:18px;
				padding: 12px 20px;
				margin: 8px 0;
				border-bottom
				box-sizing: border-box;
				border: 0;
				outline: 0;
				background: transparent;
				border-bottom: 1px solid black;
			}
		input[type=submit]{
			padding:10px;	
			background:#5abd56;
			border:1px solid;
			font-size:23px;
			margin:0% 45%;
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
				<li><a href="index.php">Home</a></li>
				<li><a href="admin_form.php">Admin Login</a></li>
				<li><a href="user_form.php">User Login</a></li>
				<li><a href="user_register.php">Register</a></li>
	   			
		</ul>
    
	</div>
	
	</div>
	
	<div class="row">
		<div class="col-md-12 admin-head">
			<p>Admin Login</p>
	
		</div>
	
	<form action="login_admin.php" method="post">
	<div class="col-md-12 admin-form">
	
	<table align="center">
	
	<tbody>
		<div class="col-md-6">
	<tr>		<td><input type="text" name="user_name" id="user_name" placeholder="Username" required="true">	<p id="uerror"></p> </td>
		</tr>
		</div>

	
	<tr>
		<div class="col-md-6">
		<td>	<input type="password" name="pswd" id="pswd" placeholder="Password" required="true">
		<p id="perror"></p>	</td>
		</div>
 	
	
	</tr>
	<tr>
	
		<td> <input type="submit" value="Login" onclick="return validate()"> </td>
		</tr>
	</tbody>
	</table>
		<script>	
	function validate(){
			var  user=document.getElementById("user_name").value;
			var  pswd=document.getElementById("pswd").value;
			var flag=true;
			
			if(user.toString().length === 0 )
			{
			document.getElementById("uerror").innerHTML="Enter Username";
			flag=false;
			}
			else 
			{
			document.getElementById("uerror").innerHTML="";
			}
		
		
		if(pswd.toString().length === 0 )
		{
			document.getElementById("perror").innerHTML="Enter Password";
			flag=false;
		}
		else 
		{
			document.getElementById("perror").innerHTML="";
			
		}
		
		return flag;
	
	}
	</script>
	
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
