<?php
	$fno=$_GET['fno'];             //GET방식으로 전송 받음 
	include "../5team/connect_db2.php";

	$sql="select count(*) from student_tbl where no='$fno' ";
	$res=mysqli_query($connect, $sql);
	$rs=mysqli_fetch_array($res);
	$num=$rs[0];
?>

<html>
	<head><title> 학번 중복검사 </title>
	</head>
	<body>
	<form name="chkid_form">
	<table width="350" border="1" bordercolor="blue"align="center" cellpadding="5" >
	<tr bgcolor="#3300CC"><td><font color="#FFFFFF"> ■ 학번 중복검사 
	</font></td>
	</tr>
	<tr height="120"><td align="center"> 

<?php 
	if($num>0) { 
		echo "[ ";
		echo $fno; 
		echo " ] 는 이미 사용 중인 학번입니다. <br> ";
		echo " 다른 학번을 선택하세요.<br><br>";
	} else {
		echo "[ ";
		echo $fno;
		echo " ] 는 사용할 수 있는 학번입니다.<br><br> ";
	} 
?>

  <input type="button" name="Button" value=" 닫기 " onClick="self.close();"></td>
	</tr>
	</table>
	</form>
	</body>
</html>