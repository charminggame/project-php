<!doctype html>
<html lang="en">
  <head>
    <title>Search Subject</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="#">ระบบแสดงเจตจำนงการเปิดรายวิชา</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
  </nav>
  <div class="jumbotron">
  <table class="table table-dark">

<?php
$connect = mysqli_connect("localhost","root","","test");
if(!isset($smtUpdate)){
	$sql='select * from ssubject ';
	$result=mysqli_query($connect,$sql);
	if(!$result){
        echo mysqli_error().'<br>';
        die('Can not access database');
	}else{
		while ($row = mysqli_fetch_array($result)){
			echo '<form method="post" action="LookSUBA2.php">'."\n";
			echo 'stasus';
			echo '<input type="text" name="sta"   value="">';
		}
		echo '<td><input name="update" type="submit" value="update""></td>'."\n";
		echo '</form>';
		mysqli_close($connect);
	}
}
?>

</table>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>