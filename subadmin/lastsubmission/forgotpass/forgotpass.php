<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>
<body >
		<div class="row">
			<div class="col-md-2"></div>
				<div class="col-md-4" style="background-image: url('../images/qsn.jpg');">
					
				</div>
			<div class="card col-md-4">
			<div class="card-header badge-info">
				<center>Security Question</center>
			</div>

	<form method="POST" action="Controller/matchsecurity.php">

					<div class="form-group form-row">
						<label class="col-md-4">Security Question</label>
						<select name="sqsn" class="form-control col-md-8">
							<option value="1">What is Your nick name?</option>
							<option value="2">What is Your pet's name?</option>
							<option value="3">What is Your lucky number?</option>
							<option value="4">What is Your favorite color?</option>
							<option value="5">What is Your favorite hobby?</option>
							<option value="6">What is Your favorite actor/actress?</option>
							<option value="7">What is Your favorite movie?</option>
							<option value="8">What is Your best friend's nick name?</option>
							<option value="9">What is Your favorite car model?</option>
							<option value="10">What is Your favorite nation?</option>

						</select>
					</div>

					<div class="form-group form-row">
						<label class="col-md-4">Security Answer</label>
						<input type="text" name="sans" class="form-control col-md-8">
					</div>
				<div>
					<input type="submit" name="btn">
				</div>
				</form>
				</div>
				</div>
				<div class="col-md-3"></div>
			</div>
	     </div>

</body>
</html>