<?php
 include "assingment.php";
 $firstNumber = '';
 $lastNumber = '';
 $result = '';
if(isset($_POST['btn'])){
	$firstNumber = $_POST['firstNumber'];
	$lastNumber = $_POST['lastNumber'];
	$btn = $_POST['btn'];
	$ob = new Number();
	$result = $ob->calculator($firstNumber,$lastNumber,$btn); 
}




?>
<!doctype html>
<!DOCTYPE html>
<html>
<head>
	<title>Global Variable</title>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
	 
<div class="container-fluid">
	<div class="row">
		<div class="card card-body bg-light col-lg-6 mt-5 m-auto">
			<form action="" method="post">
				<div class="form-group">
					<label class="col-form-label  ">FirstNumber</label>
					<div class=" ">
						<input type="number" name= "firstNumber" value="<?php echo $firstNumber; ?>" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="col-form-label  ">LastNumber</label>
					<div class=" ">
						<input type="number" name="lastNumber" value="<?php echo $lastNumber; ?>" class="form-control">
					</div>
				</div>
					<div class="form-group">
					 
					<div class="col-lg-10">
						<button type="submit" name="btn" class="btn btn-success btn-block" value="+">Addition</button> 
						<button type="submit" name="btn" class="btn btn-warning btn-block" value="-">Subtraction</button> 
						<button type="submit" name="btn" class="btn btn-info btn-block" value="*">Multiplication</button> 
						<button type="submit" name="btn" class="btn btn-danger btn-block" value="/">Division</button> 
					</div>
				</div>
			</form>
			<div class="form-group">
				<label>Result</label>
				<textarea class="form-control">
					<?php echo $result; ?>
				</textarea>
			</div>
		</div>

	</div>
</div>

<script src="js/bootstrap.min.js" ></script>
</body>
</html>







 