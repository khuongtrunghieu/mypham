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
  <br clear="all" />
  <div id="main">  
          <div id="content-left">          
        <table width="215" border="0" cellspacing="0" cellpadding="0">
  <tr>
   <td class="menu" height="30"><div align="left" style="color:#FFF; font-family:Tahoma; font-size: 13px; font-weight:bold">QUẢN LÝ SẢN PHẨM:</div></td>
  </tr>
  <tr>
   <td height="50" style="padding-left:20px">
   <div align="left">
   <img align="absmiddle" src="../images/towred1-r.gif"><a href="themsp_moi.php" class="admin-menu-left"> Thêm sản phẩm mới.</a><br>
  <div style="height:10px"></div>
  <img align="absmiddle" src="../images/towred1-r.gif"><a href="#" class="admin-menu-left"> Danh sách sản phẩm</a>    
    </div>
   </td>   
  </tr>
  <tr>
    <td><script>
function danhmuc(j){

  objName = "danhmuc[" + j + "]";
  var obj=document.getElementById(objName);
//alert(objName);
var objImg = obj.parentNode.getElementsByTagName("img")[0];
objImg.src="../admincp/img/expand_uf.gif";

  if(obj.style.display == "none"){
    obj.style.display = "block";
    objImg.src="../admincp/img/expand_uf.gif";


  }else{
    obj.style.display = "none";
    objImg.src="../admincp/img/expand_f.gif";
  }
}
</script>
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td>
      <div style="padding-left:20px;">
        <table border=0 cellspacing=0 cellpadding=0 >
          <tr>
            <td height=30px width=100%>
              <a onclick="danhmuc(1);"><img src="img\expand_f.gif" width=9 height=9 /></a>
              <img src="img\file_uf.gif" width=20 height=20 />
              <a style="color:#000000" onclick='danhmuc(1);' onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Danh mục sản phẩm</a>
            </td> 
          </tr>    
        </table>
      </div>
<table width=195 id='danhmuc[1]' style='display:none' border=0 cellspacing=0 cellpadding=0>
    <tr>
    <td>
      <div style="padding-left:40px">
          <img src="img\file_c.gif" width=20 height=20 />
          <a href=../admincp/?m=sp&b=sp-list&idl=7 style="color:#000000" onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Trang Điểm Nền</a>
      </div>
    </td>
  </tr>
    <tr>
    <td>
      <div style="padding-left:40px">
          <img src="img\file_c.gif" width=20 height=20 />
          <a href=../admincp/?m=sp&b=sp-list&idl=6 style="color:#000000" onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Trang Điển Điểm</a>
      </div>
    </td>
  </tr>
    <tr>
    <td>
      <div style="padding-left:40px">
          <img src="img\file_c.gif" width=20 height=20 />
          <a href=../admincp/?m=sp&b=sp-list&idl=5 style="color:#000000" onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Mỹ Phẩm Tẩy Trang</a>
      </div>
    </td>
  </tr>
     <tr>
    <td>
      <div style="padding-left:40px">
          <img src="img\file_c.gif" width=20 height=20 />
          <a href=../admincp/?m=sp&b=sp-list&idl=5 style="color:#000000" onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Dưỡng Da</a>
      </div>
    </td>
  </tr>
   <tr>
    <td>
      <div style="padding-left:40px">
          <img src="img\file_c.gif" width=20 height=20 />
          <a href=../admincp/?m=sp&b=sp-list&idl=5 style="color:#000000" onMouseOver="style.color='#0099CC'" onMouseOut="style.color='#000000'">Sản Phẩm Khác</a>
      </div>
    </td>
  </tr>
     
 
    </td>
  </tr>
</table>
</table></td>
  </tr>
</table>

        </div>

<table width="735" border="0" cellspacing="0" cellpadding="0" ">
  <tr>
    <td colspan="2" class="tieude" align="center" border-left:1px solid #CCCCCC">THÊM SẢN PHẨM MỚI</td>
  </tr>  
  <form method="post" enctype="multipart/form-data" onsubmit="return sp_insert(loaisp.value,tensp.value,hinh.value,ghichu.value);" id="forminsert" name="forminsert">    <tr><td style="padding-left:80px" height="30">Nhóm sản phẩm:</td><td><select name="nhomsp" style="width:240px;" onChange="comboChange(this.value)">
        <option value="choncm">-- Chọn nhóm sản phẩm --</option></select></td></tr>  <tr bgcolor="#FFFFFF">
    <td width="200" style="padding-left:80px" height="30">Loại sản phẩm:</td>
    <td width="535">
    
			<div id=loaisanpham>
			<select name="loaisp" style="width:240px;" id='loaisp'>
				<option value="chonlsp">-- Chọn loại sản phẩm --</option><option value=1> Trang Điểm Nền </option><option value=2> Trang Điểm Điểm </option><option value=3> Mỹ Phẩm Tẩy Trang </option><option value=4> Dưỡng Da </option><option value=5> Sản Phẩm Khác </option></select></div>    </td>
  </tr>
  <tr>
    <td style="padding-left:80px" height="30">Tên sản phẩm:</td>
    <td><input type="text" name="tensp" style="width:240px" value=""></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td style="padding-left:80px" height="30">Mô tả:</td>  
    <td><textarea name="mota" cols="27" rows="5"  style="width:240px"></textarea> </td>
  </tr>
  <tr>
  	<td colspan="2" style="padding-left: 50px">
    </td>
  </tr>
  <tr>
    <td style="padding-left:80px" height="30">Hình ảnh:</td>
    <td><input name="hinh" type="file" size="30"></td>
  </tr>
  <tr bgcolor="#FFFFFF">
    <td style="padding-left:80px" height="30">Giá:</td>
    <td><input name="gia" type="text" maxlength="20" style="width:240px" value="" onkeyup="valid(this,'numbers')" onblur="valid(this,'numbers')"></td>
  </tr>
  <tr>
    <td style="padding-left:80px" height="30">Ghi chú:</td>
    <td>   
    <select name="ghichu" style="width:240x" >
    <option value="chonmenu">----------Chọn----------</option>
  	<option value="new">Mặt hàng mới</option>
	<option value="hienthi">Hiển thị</option>
	<option value="hangdat">Hàng đặt</option>
    </select>
    </td>
  </tr>  
  <tr>
  	<td align="center" colspan="2" height="35" style="border-bottom:1px solid #CCCCCC ">
    <input name="" type="submit" value="Thêm" class="button" onmouseover="style.background='url(img/button-2-o.gif)'" onmouseout="style.background='url(img/button-o.gif)'">
    <input name="" type="reset" value="Xóa trắng" class="button" onmouseover="style.background='url(img/button-2-o.gif)'" onmouseout="style.background='url(img/button-o.gif)'">    
    </td>
  </tr>
  <input type="hidden" name="act">
  </form>
</table>
</body>
</html>