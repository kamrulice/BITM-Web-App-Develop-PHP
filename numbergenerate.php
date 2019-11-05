<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Global Variable</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
	<?php
		$Starting ='';
		$Ending ='';
		$sum ='';
		if(isset($_POST['btn'])){
			$Starting = $_POST['Starting'];
			$Ending = $_POST['Ending'];
			$sum=' ';
			 for($i = $Starting; $i<=$Ending; $i++){
			 $sum.= $i." ";	
			}
		}
	?>
<div class="container-fluid">
	<div class="row">
		<div class="card card-body bg-light col-lg-6 mt-5 m-auto">
			<form action="" method="post">
				<div class="form-group">
					<label class="col-form-label  ">Starting Number</label>
					<div class=" ">
						<input type="text" name="Starting" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label 2 ">Ending Number</label>
					<div class=" ">
						<input type="text" name="Ending" class="form-control">
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
					<?php echo $sum; ?>
				</textarea>
			</div>
		</div>

	</div>
</div>

<script src="js/bootstrap.min.js" ></script>
</body>
</html>










