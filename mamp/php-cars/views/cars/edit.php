<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Cars!</title>
</head>
<body>
 <section class="container">
	<h1>Edit a car</h1>
	<form action="update" method="POST">
		<div class="form-group">
			<input name="id" class="form-control" type="text" value="<?php echo $_POST['id']; ?>" style="display:none" />
			<label for="car">Car name:</label>
			<input class="form-control" name="car" type="text" value="<?php echo $_POST['car']; ?>">
			<label for="owner">Owner:</label>
			<input class="form-control" name="owner" type="text" value="<?php echo $_POST['owner']; ?>">
			<button class="btn btn-info" type="submit" value="Submit"/> Submit </button>
		</div>
	</form>
 </section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>