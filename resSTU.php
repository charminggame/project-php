<!doctype html>
<html lang="en">
  <head>
    <title>รายชื่อนักศึกษา</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
  <?php
  if($_REQUEST["SID"]!=0){
  ?>
  <div class="jumbotron">
  <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">StudentID</th>
    <th scope="col">Firstname</th>
    <th scope="col">Lastname</th>
    <th scope="col">Address</th>
    <th scope="col">Major</th>
    </tr>
  </thead>
  <tbody>
    <tr>
  <?php
  $connect = mysqli_connect('localhost','root','','test');
  $sql = 'SELECT * FROM student';
  $result = mysqli_query($connect,$sql);
  if(!$result){
      echo mysqli_error().'<br>';
      die('Can not access database');
  } else {
      while($row = mysqli_fetch_assoc($result)){
          while(list($key,$value)=each($row)){
            if($value==$_POST["SID"]){
            echo '<th scope="col">'.$row["StudentID"].'</th>';
            echo '<th scope="col">'.$row["SFirstname"].'</th>';
            echo '<th scope="col">'.$row["SLastname"].'</th>';
            echo '<th scope="col">'.$row["Address"].'</th>';
            echo '<th scope="col">'.$row["Major"].'</th>';
          }
        }
      }
  }
mysqli_close($connect);
  ?>
  </tr>
  </tbody>
  </table>
  </div>
<?php
}else{
?>
  <div class="jumbotron">
  <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">StudentID</th>
    <th scope="col">Firstname</th>
    <th scope="col">Lastname</th>
    <th scope="col">Address</th>
    <th scope="col">Major</th>
    </tr>
  </thead>
  <?php
  $connect = mysqli_connect('localhost','root','','test');
  $sql = 'SELECT * FROM student';
  $result = mysqli_query($connect,$sql);
  if(!$result){
      echo mysqli_error().'<br>';
      die('Can not access database');
  } else {
      while($row = mysqli_fetch_assoc($result)){
            echo '<tbody>';
            echo '<tr>';
            echo '<th scope="col">'.$row["StudentID"].'</th>';
            echo '<th scope="col">'.$row["SFirstname"].'</th>';
            echo '<th scope="col">'.$row["SLastname"].'</th>';
            echo '<th scope="col">'.$row["Address"].'</th>';
            echo '<th scope="col">'.$row["Major"].'</th>';
            ?>
            </tr>
            </tbody>
            <?php
      }
  }
mysqli_close($connect);

echo '</table>';

}

  ?>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>