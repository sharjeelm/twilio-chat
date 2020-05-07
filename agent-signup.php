



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<link href="agent-signup.css" rel="stylesheet">


</head>


<body style= "background-image: url('assets/mg/agent-signup-background.jpg')  ; 
background-color :  #808080;">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
	  
        <a class="nav-link" href="vediotokenget.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <a class="nav-link">Welcome:<?php include('logincheck.php');?> </a>
    </ul>
  </div>
</nav>





<div id="titile" style = "margin-top: 10%;">
	<h4><strong>Create New Agent Account </strong></h4>
	
</div>







<script src="agent-signup.js"></script>
<script src="md5.js"></script>
  
 <div id="form-container">
 	<form id = "form-signup"  name="formname" onsubmit="return false">
 		<div>
 			<input type="text" id="firstname" name="firstname" placeholder="First Name" autocomplete="off"/>
 			<input type="text" id="lastname" name="lastname" placeholder="Last Name" autocomplete="off"/>
 		</div>

 		<div>
 			<input type="text" id="username" name="username" placeholder="Username ie Alizaagent01 " autocomplete="off"/>
 			<span id="erro"></span>
 		</div>


        <div>
 			<input type="password" id="password" name="password" placeholder="Password" autocomplete="off"/>
 			<input type="password" id="confirmpassword" name="confirmpassword" placeholder="Confirm password" autocomplete="off"/>
		 </div>
		 <div>
			<label>Select Agent Gif image</label><input type="file" name="image">			
			
		 </div>

		 <!-- Write your comments here 
		 <label class="btn btn-light">
			<i class="fa fa-image"></i>Select Agent gif<input type="file" style="display: none;" name="image">		
			</label>

 		<div id="show-password"><label>Show password</label><input type="checkbox" name="checkbox" onclick="show()" /></div>-->
        <p id="signup">By clicking on <strong>Signup</strong> a new agent will be created</p>
 		<div>
 			<p><strong>Please fill form carefully</strong></p>
 			<input type="submit" name="submit" id="submit" value="Signup" onclick="signup()" />
 			
 		</div>
 	</form>
 </div>
 <div id="password-message">
 	<h4>Please password must contain the following</h4>
 	<p id="uppercase" class="invalid"><b>A lowercase letter</b></p>
 	<p id="lowercase" class="invalid"><b>A uppercase letter</b></p>
 	<p id="digit" class="invalid"><b>A number</b></p>
 	<p id="lengths" class="invalid"><b>Length must be between 8 to 20</b></p>
 	
 </div>
 </body>
</html>




