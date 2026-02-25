<html>
<head><title> 회원 가입 </title>
</head>
<body>
<center><br><font size=5><b> 회 원 가 입</b> </font><hr>
▶▶ [ <a href="login.php"> 로 그 인 </a> ] ◀◀ <p>
<form name="user_form" action="add_db.php" method="post" onSubmit="return chk_input()">
<table border=1 width=700 align=center cellspacing=0 cellpadding="3">
<tr>
  <td width="696" height="30" colspan="2" bgcolor="blue">&nbsp;<font color="white">
  <b> ■ 회원 가입</b> [* 표는 반드시 기입할 사항입니다. ] </font></td>
</tr>

<tr>     <!-- 아이디 입력상자에 변수 fuserid 선언  --> 
  <td width="20%" height="30" bgcolor="#FFFF99"><p align="right"> * 아이디  </p></td>
  <td width="80%"><input type="text" name="fuserid" id="fuserid" size="12" maxlength="12" onblur="if(fuserid.value!='') chk_id();">
  <input type="button" name="Button" value=" > 중복검사 < " onClick="chk_id();">
  <font size="2"> (영문과 숫자 12자리까지) </font>

<script>
  function chk_id( )
  {
	if(user_form.fuserid.value=='') {
		alert('● [ 아이디 ]를 입력해야 검사할 수 있습니다...');
		user_form.fuserid.focus();
	} else {
window.open('id_chk.php?fuserid='+user_form.fuserid.value,'IDwin', 'width=400, height=200');
	}
  }
</script>

  </td>
</tr>

<tr>     <!-- 성명 입력상자에 변수 fno 선언  --> 
  <td width="20%" height="30" bgcolor="#FFFF99"><p align="right"> * 학번  </p></td>
  <td width="80%"><input type="text" name="fno" id="fno" size="12" maxlength="10" onblur="if(fuserid.value!='') chk_no();">
  <input type="button" name="Button" value=" > 중복검사 < " onClick="chk_no();">
  <font size="2"> (숫자만 기입해서 8자까지)  </font></td>
</tr>
<script>
  function chk_no( )
  {
	if(user_form.fno.value=='') {
		alert('● [ 학번 ]을 입력해야 검사할 수 있습니다...');
		user_form.fno.focus();
	} else {
window.open('no_chk.php?fno='+user_form.fno.value,'NOwin', 'width=400, height=200');
	}
  }
</script>

<tr>     <!-- 성명 입력상자에 변수 fname 선언  --> 
  <td width="20%" height="30" bgcolor="#FFFF99"><p align="right"> * 이름  </p></td>
  <td width="80%"><input type="text" name="fname" id="fname" size="12" maxlength="10">
  <font size="2"> (5글자까지 가능)  </font></td>
</tr>

<tr>     <!-- 비밀번호 입력상자에 변수 fpasswd 선언  --> 
  <td width="20%" height="30" bgcolor="#FFFF99"><p align="right"> * 비밀번호  </p></td>
  <td width="80%"><input type="password" name="fpasswd" id="fpasswd" size="13" 
	maxlength="13">
  <font size="2"> (영문과 숫자 혼합 10자리까지)  </font></td>
</tr>

<tr>     <!--  비밀번호 확인 입력상자에 변수 fpasswd_re 선언  --> 
  <td width="20%" height="30" bgcolor="#FFFF99"><p align="right"> * 비밀번호 확인  </p></td>
  <td width="80%"><input type="password" name="fpasswd_re" id="fpasswd_re" 
	size="13" maxlength="13" onblur="chk_passwd()">
  <font size="2"> (비밀번호와 똑같이 입력하세요.)  </font></td>

<script>
 function chk_passwd( )
  {
	if(user_form.fpasswd.value != user_form.fpasswd_re.value) {
		alert("● [ 비밀번호 입력 오류 ] \r\n -> [ 비밀번호 ]를 다시 입력하세요.");
		user_form.fpasswd.value="";
		user_form.fpasswd_re.value="";
		user_form.fpasswd.focus();
		return false;
	}
  }
  
 function chk_input() {
	if(user_form.fuserid.value=="") {
		alert("● [ 아이디 ]를 입력하세요.");
		user_form.fuserid.focus();
		return false;
		
	} else if(user_form.fname.value=="") {
		alert("● [ 이름 ]을 입력하세요.")
		user_form.fname.focus();
		return false;

	} else if(user_form.fpasswd.value=="") {
		alert("● [ 비밀번호 ]를 입력하세요.")
		user_form.fpasswd.focus();
		return false;

	} else if(user_form.fpasswd_re.value=="") {
		alert("● [ 비밀번호 확인 ]을 입력하세요.")
		user_form.fpasswd_re.focus();
		return false;

	} else {
		return true;
	}
} 
</script>  
  
</tr>

<tr>     <!-- 비밀번호 입력상자에 변수 ftype 선언  --> 
  <td width="20%" height="30" bgcolor="#FFFF99"><p align="right"> * 학과  </p></td>
  <td width="80%"><input type="text" name="ftype" id="ftype" size="13" 
	maxlength="13">
  <font size="2"> (최대 15자)  </font></td>
</tr>


<tr>
  <td width="696" height="50" colspan="2"><p align="center"> 
  <input type="submit" name="smt" value=" ◀◀  가입 하기   " > &nbsp;&nbsp;&nbsp;
  <input type="reset" name="rst" value="   다시 작성  ▶▶ ">
</tr>
</table>
</form>
</body>
</html>