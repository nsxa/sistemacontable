<?php
//echo "Hola mundo";
?>
<!DOCTYPE html>

<html>
<link href="bootstrap.min.css" rel="stylesheet">
<link href="docs.min.css" rel="stylesheet">
<link rel="stylesheet" href="my.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
	
	
	
	$("#registrarse").click(function(){
		
		
		});
	
	$("#ingresar").click(function(){
		
		var userr=$("#user").value;
		
		
		
				
				var username=$("#user").val();
				var password=$("#pass").val();
				var dataString = 'username='+username+'&password='+password;
				
				$.ajax({
				type: "GET",
				url: "ajaxLogin.php?"+dataString,
				data : dataString,
				cache: false,

				success: function(d){
				
	
					
//$("body").load("dashboard.php").hide().fadeIn(1500).delay(6000);

					window.location = "dashboardindex.php";
					
				},
				});
		})

		
		/*
		$.ajax({
			url : "dashboard.php",
			type: "POST",
			data : $("#formingresar").serialize(),
			
			//alert(data);
			var user=$("#user").val;
			
			success: function(r)
			{
			window.location = 'dashboard.php?user='.user;
				
			alert("ingresar");
			$("#response").html(r);
			},
			});*/
			
			//window.location = 'dashboard.php';
			


		});
	

</script>
</script>
<form id="formingresar">
<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingresar</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">darse de alta</label> 
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="userf" class="label">Correo</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="passr" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				
				<div class="group">
					<!-- <input type="submit" class="button" value="Sign In"> -->
					<button id="ingresar" type="button" class="btn btn-primary">Ingresar</button>
					
				</div>
				
				</form>
				
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Olvidaste tu password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				<div class="group">
					<label for="userff" class="label">Usuario</label>
					<input id="user2" type="text" class="input">
				</div>
				<div class="group">
					<label for="passrr" class="label">Password</label>
					<input id="pass2" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="passrrr" class="label">Repetir Password</label>
					<input id="pass22" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email</label>
					<input id="pass2" type="text" class="input">
				</div>
				<div class="group">
				
				<button id="registrarse" type="button" class="btn btn-primary">Registrarse</button>
					<!--<input type="submit" class="button" value="Sign Up">-->
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					
				</div>
			</div>
		</div>
	</div>
</div>

<div id="response">



</div>


</html>
