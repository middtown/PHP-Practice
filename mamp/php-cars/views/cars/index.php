<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Cars!</title>
</head>
<body>
  <div class="container">
  	<h1>Cars Index Page</h1>
  	<a href="new">Add a car</a>
    <section>
        <ul>
            <?php while($row = $cars->fetch_object()): ?>
                <li>
                    Here is a <?php echo $row->car ?> for <?php echo $row->owner?>
                    <form action="delete" method="POST">
                      <div class="form-group">
                    	<input type="hidden" class="form-control" name="id" value="<?php echo $row->id;?>">
                      </div>
                    	<button class="btn btn-danger" type="submit" value="Delete"> Delete </button>
                    </form>
                    <form action="edit" method="POST">
                      <div class="form-group">
                      <input name="id" class="form-control" type="text" value="<?php echo $row->id; ?>" style="display: none"/>
                      <input name="car" class="form-control" type="text" value="<?php echo $row->car; ?>" style="display: none"/>
                      <input name="owner" class="form-control" type="text" value="<?php echo $row->owner; ?>" style="display: none"/>
                      <button class="btn btn-info" type="submit" " value="Edit"> Edit </button>
                      </div>
                    </form>
                </li>
            <?php endwhile; ?>
        </ul>
    </section>	
  </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
