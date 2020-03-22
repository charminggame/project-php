<html>
<head>
<title></title>
</head>
<body>

<form name="frmMain" action="" method="post">

<script language="JavaScript">
	function A(imgsrc)
	{
		document.frmMain.O.src=imgsrc;
	}
</script>
<a href="javascript:A('Image/1.png');"><input type="button" name="1" value="เปิดวิชา"></a> <br>
<a href="javascript:A('Image/2.png');"><input type="button" name="2" value="ปิดวิชา"></a> <br>
<br><br>
<img src="../Image/2.png" name="O" width="100" height="100" wid="O"><br>
</form>
</body>
</html>