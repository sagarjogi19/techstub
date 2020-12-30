<?php
include 'Magic.php';

/* check form submit or not */
if(isset($_POST['sub'])){
	if($_POST['num'] > 0) { /* check number grater than 0 or not */
		$main=['a','e','i','o','u']; /* static array of vowel */
		$test=new Magic($_POST['num']); /* create object of magic class and pass number as argument */
		$arr=$test->magicRecursive($main); /* fetch result in array */
	} else {
			$error="Number must be greater than 0.";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Magical String</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Magical String</h2>
  
  <form class="form-inline" name="frmMagic" method="post">
    <div class="form-group">
      <label for="email">Enter Integer:</label>
      <input type="number" class="form-control" id="num" placeholder="Enter integer" name="num">
	 
    </div>
    <button type="submit" class="btn btn-default" name="sub">Submit</button>
	 <?php if(isset($error)) {?>
			<br><span style="color:red;"><?php echo $error; ?></span>
	  <?php } ?>
  </form>
</div>
<?php /* check if array is set or not */
if(isset($arr)) { ?>
<div class="container">
<h3>Result</h3>
<table class="table table-bordered">
    <tr>
      <th scope="col">Magical String</th>
	  <td><?php echo json_encode($arr); ?></td>
    </tr>
	<tr>
      <th scope="col">Total</th>
	  <td><?php echo count($arr); ?></td>
    </tr>
  </tbody>
</table>
</div>
<?php } ?>
</body>
</html>