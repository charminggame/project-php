<?php
$Status=0;
$connect = mysqli_connect('localhost','root','','test');
$sql = 'SELECT * FROM subject';
$result = mysqli_query($connect,$sql);
if(!$result){
    echo mysqli_error().'<br>';
    die('Can not access database');
} else {
    while($row = mysqli_fetch_assoc($result)){
if($row["SubjectID1"].$row["SubjectID2"]==$_POST["SJID"]){
    $SUBID=$row["SubjectID1"].$row["SubjectID2"];
    $SID1=$row["SubjectID1"];
    $SID2=$row["SubjectID2"];
    $SUBname=$row["namesubject"];
    $TID=$row["TeacherID"];      //เก็บตัวแปรเพื่อนำไปใช้ในการทำงานต่อๆไป
    mysqli_close($connect);
    $connect = mysqli_connect('localhost','root','','test');
    $sql = 'SELECT * FROM ssubject';
    $result1 = mysqli_query($connect,$sql);
    if(!$result1){
        echo mysqli_error().'<br>';
        die('Can not access database');
    } else {
        $NPeople=0;
        $Status=0;
        while($row = mysqli_fetch_assoc($result1)){
            if($row["SubjectID1"].$row["SubjectID2"]==$_POST["SJID"]){    
                //เช็คว่ารหัสวิชา ตรงกับในdata base ไหม
                $NPeople=$row["Npeople"];
                $NPeople=$NPeople+1;
                $Status=$Status+1;
            } 
    }
    mysqli_close($connect);
    if($Status==1){ //อัพเดทที่ table ssubject
                $link = mysqli_connect("localhost", "root", "", "test");
                $sql = "UPDATE ssubject SET Npeople='".$NPeople."' WHERE SubjectID1='".$SID1."' and SubjectID2='".$SID2."'";
                if(mysqli_query($link, $sql)){
                    header('Refresh:1 ; URL=LookSUB.php');
                } else {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
                mysqli_close($link);
                exit();
    }else {
        //เพิ่มข้อมูลเข้าdata base
        $connect = mysqli_connect("localhost","root","","test");
        $sql='INSERT INTO `ssubject` (`SubjectID1`, `SubjectID2`, `namesubject`, `TeacherID`, `Npeople`) 
        VALUES ("'.$SID1.'","'.$SID2.'","'.$SUBname.'","'.$TID.'","1");';
        $result2=mysqli_query($connect,$sql);
        mysqli_close($connect);
        header('Refresh:1 ; URL=LookSUB.php');
        exit();
        
    }
}}}}
?>