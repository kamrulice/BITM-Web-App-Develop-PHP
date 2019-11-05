<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Global Variable</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
	<?php
		$FirstName ='';
		$LastName ='';
		$fullName ='';
		if(isset($_POST['btn'])){
			$FirstName = $_POST['FirstName'];
			$LastName = $_POST['LastName'];
			$fullName = $FirstName." ".$LastName;
		}

    
	?>
<div class="container-fluid">
	<div class="row">
		<div class="card card-body bg-light col-lg-6 mt-5 m-auto">
			<form action="" method="post">
				<div class="form-group">
					<label class="col-form-label col-lg-2">FirstName</label>
					<div class="col-lg-10">
						<input type="text" name="FirstName" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label col-lg-2">LastName</label>
					<div class="col-lg-10">
						<input type="text" name="LastName" class="form-control">
					</div>
				</div>
					<div class="form-group">
					 
					<div class="col-lg-10">
						<button type="submit" name="btn" class="btn btn-success btn-block">Submit</button> 
					</div>
				</div>
			</form>
			<div class="form-group">
				<label>Result</label>
				<textarea class="form-control">
					<?php echo $fullName; ?>
				</textarea>
			</div>
		</div>

	</div>
</div>

<script src="js/bootstrap.min.js" ></script>
</body>
</html>
