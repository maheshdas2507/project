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
		
		input[type=text],input[type=email],select,input[type=password],input[type=date],input[type=number] {
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
		input[type=submit],input[type=button]{
			padding:10px;	
			
			background:#5abd56;
			border:1px solid;
			font-size:23px;
			margin:0% 75%;
		}
		.move-text{
			width:100%;
			font-size:18px;
			margin:0% 60%;
		}
		.form_head{
			font-size:23px;
			color:black;
			font-style:bold;
			font-weight:500;
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
		<div class="col-md-12 student-head">
			<p>Registration</p>
	
		</div>
	
	<form action="register_user.php" method="post">
	
	<div class="col-md-12 student-form">
	
	
	<table align="center">
	<tbody>
	
	<tr>	
	<td class="form_head">Name</td>
	<td><input type="text" name="stu_name" id="stu_name" placeholder="User Name">
	<p id="nerror"></p></td>
			</tr>
	
	

	<tr>	
	<td class="form_head">Date of Birth</td>
	<td><input type="date" name="stu_date" id="stu_date" placeholder="Date"><p id="derror"></p></td>
			</tr>


	<tr>	
	<td class="form_head">Email</td>
	<td><input type="email" name="stu_email" id="stu_email" placeholder="Email Id">
	<p class="eerror"></p>
	</td>
			</tr>

<tr>	<td class="form_head">Gender</td>
	<td><select name="gender" id="gender">
 <option value="----Select----" selected>----Select----</option>
 <option value="Male">Male</option>
  <option value="Female">Female</option>
</select><p id="gerror"></p></td>

</tr>
	<tr>	
	<td class="form_head">Mobile Number</td>
	<td><input type="number" name="stu_mobile" id="stu_mobile" placeholder="Mobile "><p id="merror"></p></td>
			</tr>
		
	<tr>
	<td class="form_head">Password</td>

		<td>	<input type="password" name="stu_pswd" id="stu_pswd" placeholder="Password">
			<p id="pwderror"></p></td>
 	
	
	</tr>
	<tr>
	
		<td> 
			<input type="submit" value="Register" onclick="return validate()"></td>
		
		
		
	</tr>
	<tr>
		
	<td><p class="move-text">Already Register <a href="user_form.php">Login</a> here</p> </td>
	</tr>
		
	</tbody>
	</table>
	
	</form>
	</div>
	
	<script>
function validate(){
			var name = document.getElementById("stu_name").value;
					//var  email=document.getElementById("stu_email").value;

					var  mobile=document.getElementById("stu_mobile").value;
					var  rank=document.getElementById("stu_rank").value;
		var  pswd=document.getElementById("stu_pswd").value;
		
		var gender=document.getElementById("gender").value;
		var date=document.getElementById("stu_date").value;
	var regularExpression = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
	 var flag=true;

	 var letters = /^[A-Za-z]+$/;
  
	 var re = /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    
	 
	 
	 if( name.toString().length === 0 )//|| name.value.match(letters) )
	 {
			
		document.getElementById("nerror").innerHTML="Enter Correct Name";
			//alert("Confirmation fields do not match, please retype and try again.");
			flag=false;//flag=false;
			//return false;
		}
		else 
		{
		document.getElementById("nerror").innerHTML="";
		}

		if(mobile.toString().length != 10 )
		{
			document.getElementById("merror").innerHTML="Enter Correct Mobile Number";
			flag=false;
		}
		else 
		{
		document.getElementById("merror").innerHTML="";
		}

		if(mobile.toString().length === 0 )
		{
			document.getElementById("rerror").innerHTML="Enter JEE Main Rank";
			flag=false;
		}
		else 
		{
		document.getElementById("rerror").innerHTML="";
		}

	//	if(email.toString().length === 0 )
	//	{
		//	document.getElementById("eerror").innerHTML="Enter Email Address";
		//	flag=false;
		//}
		
		
		if(date.toString() === "mm/dd/yyyy")
		{
			document.getElementById("derror").innerHTML="Select Correct Date";
			flag=false;
		}
		else 
		{
		document.getElementById("derror").innerHTML="";
		}

		if( !re.test(pswd))
		{
			console.log(pswd);
			document.getElementById("pwderror").innerHTML="Password must be minimum of eight character and contains at least 1 uppercase , 1 lowercase ,1 numbers and 1  special character.";
			flag=false;
		
		}
		else 
		{
		document.getElementById("pwderror").innerHTML="";
		}

	if(sel.toString() == "----Select----" )
		{
			document.getElementById("serror").innerHTML="Select Category";
			flag=false;
		}
		else 
		{
		document.getElementById("serror").innerHTML="";
		}

	if(gender.toString() == "----Select----" )
		{
			document.getElementById("gerror").innerHTML="Select Gender";
			flag=false;
		}
		else 
		{
			document.getElementById("gerror").innerHTML="";
		}

	return flag;
	
	}
	
	</script>

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
