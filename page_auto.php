<?php 
$status = 0;
$connect = mysqli_connect('localhost','root','','test');
$sql = 'SELECT * FROM student';
$result = mysqli_query($connect,$sql);
if(!$result){
    echo mysqli_error().'<br>';
    die('Can not access database');
} else {
    while($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        while(list($key,$value)=each($row)){
            if($value==$_POST['uname']){
                $status++;
            } 
        }
    }
}
if($status==1){
    header("location:admin.php");
} else {
    mysqli_close($connect);
    $connect = mysqli_connect('localhost','root','','test');
    $sql = 'SELECT * FROM teacher';
    $result = mysqli_query($connect,$sql);
    if(!$result){
        echo mysqli_error().'<br>';
        die('Can not access database');
    } else {
       while($row = mysqli_fetch_assoc($result)){
           echo '<tr>';
           while(list($key,$value)=each($row)){
               if($value==$_POST['uname']){
                   $status++;
                   if($status==1){
                        if($_POST['uname']==101){
                            header('Refresh:1 ; URL=index.php');
                        }
                   }
               } 
           }
       }
    }
    mysqli_close($connect);
}
 if($status!=1){
    echo "<script>alert('Username and Password Incorrect!');</script>";
    header('Refresh:1 ; URL=index.php');
 }


?>