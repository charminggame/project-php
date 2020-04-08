<!doctype html>
<html lang="en">
  <head>
    <title>Student</title>
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
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ml-auto p-2 bd-highlight">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                if($value==$_GET['uname']){
                                    echo $row["StudentID"].'&nbsp'.$row["SFirstname"].'&nbsp'.$row["SLastname"];
                                }
                            }
                        }
                    }
                    mysqli_close($connect);
                    ?>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                      <a class="text-danger dropdown-item" href="index.php">Logout</a>
                  </div>
              </li>
          </ul>
      </div>
  </nav>


<div class="container">
    <div class="d-flex justify-content-end">
    </div>
</div>

<div class="container">
    <div class="row">
    <div class="col alert alert-primary" role="alert">
    <div class="p-3 mb-2 bg-primary text-white">Search</div>
        <a href="ค้นหาอาจารย์.php">-ค้นหาอาจารย์</a><br>
        <a href="ค้นหารายวิชา.php">-ค้นหารายวิชา</a><br>
    </div>
    <div class="col alert alert-primary" role="alert">
    <div class="p-3 mb-2 bg-primary text-white">Information</div>
        <a href=".php">-ดูข้อมูลรายวิชา</a><br>
        <a href="REQSubj.php">-ร้องขอเปิดรายวิชา</a><br>
    </div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


