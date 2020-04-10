<?php
$num=0;
$connect = mysqli_connect('localhost','root','','test');
$sql = 'SELECT * FROM ssubject';
$result = mysqli_query($connect,$sql);
if(!$result){
    echo mysqli_error().'<br>';
    die('Can not access database');
} else {
    while($row = mysqli_fetch_assoc($result)){
      $num=$num+1;
      if(isset($_POST["update$num"])){
        $SID=$_POST["SID$num"];
        $SID1=$row["SubjectID1"];
        $SID2=$row["SubjectID2"];
        mysqli_close($connect);
        $connect = mysqli_connect('localhost','root','','test');
        $sql = 'SELECT * FROM ssubject';
        $result1 = mysqli_query($connect,$sql);
        if(!$result1){
            echo mysqli_error().'<br>';
            die('Can not access database');
        } else {
          while($row = mysqli_fetch_assoc($result1)){
            $c='close';
            if($row["SubjectID1"].$row["SubjectID2"]==$SID){
            if(strlen($row["status"]) == strlen($c)){
               mysqli_close($connect); 
               $link = mysqli_connect("localhost", "root", "", "test");
               $sql = "UPDATE ssubject SET status='open' WHERE SubjectID1='".$SID1."' and SubjectID2='".$SID2."'";
              if(mysqli_query($link, $sql)){
                header('Refresh:1 ; URL=LookSUBA.php');
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }
              mysqli_close($link);
              exit();
            } else {
              mysqli_close($connect); 
               $link = mysqli_connect("localhost", "root", "", "test");
               $sql = "UPDATE ssubject SET status='close' WHERE SubjectID1='".$SID1."' and SubjectID2='".$SID2."'";
              if(mysqli_query($link, $sql)){
                header('Refresh:1 ; URL=LookSUBA.php');
              } else {
                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
              }
              mysqli_close($link);
              exit();
            }
        }}
        
      }

      }
    }}

?>