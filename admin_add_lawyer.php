<?php	session_start();
		include('database_info.php');
	
	$name=$_SESSION["name"];
	$_SESSION["name"]=$name;

	$mysql = mysqli_connect("$dbservername", "$dbusername", "$dbpassword", "$dbname");
	
	

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
				width:400px!important;
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
		.branch-name{
			font-size:18px;
			color:black;
			padding-left:7px;
		}
		.category-txt{
			font-size:20px;
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
			<p>Add Lawyer</p>
	
		</div>
	
	<form action="add_lawyer.php" method="post">
	
	<div class="col-md-12 student-form">
	
	
	<table align="center">
	<tbody>
	
	<tr>	
	<td class="form_head">Lawyer name </td>
	<td><input type="text" name="name"  id="clg_name" placeholder="Lawyer name">
		<p id="nerror"></p></td>
			</tr>
	
	<tr>	
	<td class="form_head">Description</td>
	<td><input type="text" name="description" id="clg_addr" placeholder="Description">
	<p id="aerror"></p></td>
			</tr>
	
	<tr>	
	<td class="form_head">Lawyer Type</td>
	<td>
		<select name="lawyer_type">
			<option name="Local Court" >Local Court</option>
			<option name="High Court" >High Court</option>
			<option name="Supreme Court" >Supreme Court</option>
		</select>
	</td>
			</tr>


	<tr>	
	<td class="form_head">Location</td>
	<td><input type="text" name="location" id="clg_addr" placeholder="Description">
	<p id="aerror"></p></td>
			</tr>


	<tr>	
	<td class="form_head">Total Case Won </td>
	<td><input type="text" name="case_won" id="clg_addr" placeholder="Case Won">
	<p id="aerror"></p></td>
			</tr>
	
	<tr>	
	<td class="form_head">Contact Number</td>
	<td><input type="text" name="contact_no" id="clg_city" placeholder="Contact Number">
	<p id="cierror"></p></td>
			</tr>


	
	<tr>
	
		<td> 
			<input type="submit" value="Add Lawyer" onclick="return validate()"></td>
		<script>
		function validate(){
			var clg_name = document.getElementById("clg_name").value;
			var clg_addr=document.getElementById("clg_addr").value;
			var  clg_city=document.getElementById("clg_city").value;
			
	
		console.log(clg_stream);
	
			var flag=true;

	
	var chklength = CheckForm();
		if(chklength === 0 )
		{
			document.getElementById("berror").innerHTML="Select AtLeast One Branch";
			flag=false;
		}
		else 
		{
			document.getElementById("berror").innerHTML="";
			
		}
			
	
	 if( clg_name.toString().length === 0 )//|| name.value.match(letters) )
	 {
			
		document.getElementById("nerror").innerHTML="Enter law title";
			//alert("Confirmation fields do not match, please retype and try again.");
			flag=false;//flag=false;
			//return false;
	}
	else 
	{
			document.getElementById("nerror").innerHTML="";
			
	}

	if(clg_addr.toString().length === 0 )
		{
			document.getElementById("aerror").innerHTML="Enter law description";
			flag=false;//flag=false;
		}
		else 
		{
			document.getElementById("aerror").innerHTML="";
			
		}
		
		if(clg_city.toString().length === 0 )
		{
			document.getElementById("cierror").innerHTML="Enter law section";
			flag=false;
		}
		else 
		{
			document.getElementById("cierror").innerHTML="";
			
		}
		
		
	return flag;
	
	}
	function CheckForm(){
	var checked=false;
	var elements = document.getElementsByName("clg_stream[]");
	var j=0;
	for(var i=0; i < elements.length; i++){
		if(elements[i].checked) {
			checked = true;
			j=j+1;
		}
	}
	return j;
}	
	</script>

		
		
	</tr>
		
	</tbody>
	</table>
	
	</form>
	</div>


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
