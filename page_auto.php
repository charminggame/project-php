<?php
$uname=$_POST['uname'];
$status = 0;
$connect = mysqli_connect('localhost','root','','test');
$sql = 'SELECT * FROM student';   //เช็คว่าusername ตรงกับในdata base นักเรียนไหม
$result = mysqli_query($connect,$sql);
if(!$result){
    echo mysqli_error().'<br>';
    die('Can not access database');
} else {
    while($row = mysqli_fetch_assoc($result)){
        while(list($key,$value)=each($row)){
            if($value==$uname){
                $status++;
            } 
        }
    }
}
if($status==1){
    header("location:Stu1.php?uname=$uname");
} else {
    mysqli_close($connect);
    $connect = mysqli_connect('localhost','root','','test');
    $sql = 'SELECT * FROM teacher';   //เช็คว่าusername ตรงกับในdata base คุณครูไหม
    $result = mysqli_query($connect,$sql);
    if(!$result){
        echo mysqli_error().'<br>';
        die('Can not access database');
    } else {
       while($row = mysqli_fetch_assoc($result)){
           while(list($key,$value)=each($row)){
               if($value==$uname){
                   $status++;
                   if($status==1){
                        if($_POST['uname']==101){   //เช็คว่าusername ตรงกับในรหัสของ แอดมินหรือเปล่า
                            header("Refresh:1 ; URL=admin.php?uname=$uname");
                            exit();
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
 }else{
    header("Refresh:1 ; URL=teacher1.php?uname=$uname");
 }


?>