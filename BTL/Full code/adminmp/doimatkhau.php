<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trang quản trị</title>
<link type="text/css" rel="stylesheet" href="css/main.css" />
<link type="text/css" rel="stylesheet" href="../css/menu.css" />
<script type="text/javascript" src="../quanly.js"></script> 
</head>

<body onload="kt();">
<script type="text/javascript" src="Scripts/tooltip/wz_tooltip.js"></script> 
<script type="text/javascript" src="Scripts/tooltip/tip_balloon.js"></script> 
<script type="text/javascript" src="Scripts/tooltip/tip_centerwindow.js"></script> 
<script type="text/javascript" src="Scripts/tooltip/tip_followscroll.js"></script>

<div id="container">
 <div id="header">
	 <?php include "header.php";?> 
</div>    
  <div id="menu-quantri">
	<?php include "menu_quantri.php";?>
  </div>  
  
 <div id="main">  
    
<form name="form1" method="post" onSubmit="return admin_changepw(pw_old.value,pw.value,cpw.value);">
<table border="0" width="960" cellpadding="0" cellspacing="0" style="padding-top:5px ">
<tr bgcolor="#d4340c" style="color:#0B55C4; font-family:Tahoma; font-size: 13px; font-weight:bold" align="center" height="30">
<td class="tieude">ĐỔI MẬT KHẨU</td>
</tr>
</table>

   <table width="960"  border="0" cellpadding="5" cellspacing="1">
 <tr height="30" bgcolor="#FFFFFF" onmouseover="style.background='FFCC99'" onmouseout="style.background='#FFFFFF'">
      <td style="padding-left:250px" align="left">Tên đăng nhập:</td>
      <td width="500" align="left">      <input type="hidden" name="user" value="" />
      </td>
    </tr>
	<tr height="30" bgcolor="#FFFFFF" onmouseover="style.background='#d4340c'" onmouseout="style.background='#FFFFFF'">
      <td style="padding-left:250px">Mật khẩu cũ: </td>
      <td><input name="pw_old" type="password" id="pw_old" /></td>
    </tr>
	<tr height="30" bgcolor="#FFFFFF" onmouseover="style.background='#d4340c'" onmouseout="style.background='#FFFFFF'">
      <td style="padding-left:250px">Mật khẩu:</td>
      <td><input name="pw" type="password" id="pw" /></td>
    </tr>
	<tr height="30" bgcolor="#FFFFFF" onmouseover="style.background='#d4340c'" onmouseout="style.background='#FFFFFF'">
      <td style="padding-left:250px">Viết lại mật khẩu:</td>
      <td><input name="cpw" type="password" id="cpw" /></td>
    </tr>
    <tr height="30" bgcolor="#FFFFFF" onmouseover="style.background='#FFF'" onmouseout="style.background='#FFFFFF'">
      <td colspan="2" align="center" class="ketthuc">
	 <input type="submit" name="Thực hiện" value="Thực hiện" class="button" onmouseover="style.background='url(img/button-2-o.gif)'" onmouseout="style.background='url(img/button-o.gif)'" onclick="document.form.submit();">
    <input type="submit" name="xoa" value="Xóa" class="button" onmouseover="style.background='url(img/button-2-o.gif)'" onmouseout="style.background='url(img/button-o.gif)'" onclick="return check()">
        <input name="act" type="hidden" value="act" /></td>
    </tr>
  </table>
  <input type="hidden" name="act" />
</form>

    </div>

</div>
</body>
</html>
