<?php
ob_start();
//include('config.php');


?>
<?php
include('header.php');
?>
<div class="container">
	<?php
include('menu.php');

?>
	<div id="footer">
		<div class="container">
			<div class="row ">
				<div class="col-md-6  col-md-offset-3" style="margin-top:2%">
					<div class="form-box">
						<h1 style="color:white" id="log">Accedi</h1>


						<form role="form" id="contact-form" action="signup/log/index.php" method="post" onsubmit="return checkForm_log(this);">
							<!-- name field -->
							<div class="form-group">
								<div id="nameError" class="sr-only" role="alert"></div>
								<label for="form-name-field" class="sr-only">Email</label>
								<div class="input-group">
									<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
									<input type="text" class="form-control" id="email_log" value="" placeholder="email" name="email_log">
								</div>
							</div>
							<!-- email field -->
							<div class="form-group">
								<div id="emailError" class="sr-only" role="alert"></div>
								<label for="form-email-field" class="sr-only">Password</label>
								<div class="input-group">
									<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
									<input type="password" class="form-control" id="psw_log" value="" placeholder="password" name="psw_log">
								</div>
							</div>



							<div class="checkbox">
								<label id="label">
									<input type="checkbox" id="checkbox-form">accetto le regole privacy </label>
							</div>
							<br>
							<div id="mostra"></div>
							<br>
							<button type="submit" class="btn btn-success btn-block">Invia</button>
							<!--                            <div id="mostra"></div>-->
						</form>

						<div class="text-center">
							<h2><a href="registrati.php" style="color:white !important;">Registrati</a></h2>
							<br>
						</div>
						
					

						<br>
					</div>
				</div>

			</div>
		</div>
	</div>

</div>
<br>



<?php
include('footer.php');
?>

