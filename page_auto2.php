<?php
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
    $TID=$row["TeacherID"];
    mysqli_close($connect);
    $connect = mysqli_connect('localhost','root','','test');
    $sql = 'SELECT * FROM ssubject';
    $result1 = mysqli_query($connect,$sql);
    if(!$result1){
        echo mysqli_error().'<br>';
        die('Can not access database');
    } else {
        while($row = mysqli_fetch_assoc($result1)){
            echo $_POST["SJID"];
            echo $row["SubjectID1"].$row["SubjectID2"];
            if($row["SubjectID1"].$row["SubjectID2"]==$_POST["SJID"]){
                $NPeople=$row["Npeople"];
                mysqli_close($connect);
                $connect = mysqli_connect("localhost","root","","test");
                $sql="UPDATE ssubject SET Npeople='.($NPeople+1).' WHERE id=2";
                exit();
            } else {
                echo 1;
                /*$NPeople=$row["Npeople"];
                mysqli_close($connect);
                $connect = mysqli_connect("localhost","root","","test");
                $sql='INSERT INTO `ssubject` (`SubjectID1`, `SubjectID2`, `namesubject`, `TeacherID`, `Npeople`) 
                VALUES ("'.$SID1.'","'.$SID2.'","'.$SUBname.'","'.$TID.'","1");';
                $result2=mysqli_query($connect,$sql);
                mysqli_close($connect);
                exit();*/
            }

}
    }}}}
?>