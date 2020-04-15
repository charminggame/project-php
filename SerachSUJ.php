<!doctype html>
<html lang="en">
  <head>
    <title>Search Subject</title>
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
  <div class="jumbotron">
  <table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">SubjectID</th>
    <th scope="col">Subjectname</th>
    <th scope="col">TeacherID</th>
    </tr>
  </thead>
  <tbody>
    <tr>
<?php
//ดึงข้อมูล จากdatabase มาแสดง
  $connect = mysqli_connect('localhost','root','','test');
  $sql = 'SELECT * FROM subject';
  $result = mysqli_query($connect,$sql);
  if(!$result){
      echo mysqli_error().'<br>';
      die('Can not access database');
  } else {
      while($row = mysqli_fetch_assoc($result)){
            echo '<th scope="col">'.$row["SubjectID1"].'-'.$row["SubjectID2"].'</th>';
            echo '<th scope="col">'.$row["namesubject"].'</th>';
            echo '<th scope="col">'.$row["TeacherID"].'</th>';
            echo '</tr>';
            echo '</tbody>';
      }
  }
mysqli_close($connect);
  ?>
  
  </table>
  </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
