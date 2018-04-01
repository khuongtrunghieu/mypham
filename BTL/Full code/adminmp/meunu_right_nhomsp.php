	<div id="content-right">
        <form method="post" id="frm" name="form">
		<table width="735" height="70" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolordark="#FFFFFF">
			<tr>
					<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-left:1px solid #CCCCCC">
				<div align="left" style="color:#d4340c; font-family:Tahoma; font-size: 16px; font-weight:bold; padding-left:20px">QUẢN LÝ NHÓM SẢN PHẨM</div>
				</td>
				<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; height:65px; width:55px">
					<input type="button" value='' onClick="document.form.action='../adminmp/nhomsp-del.php';document.form.submit();" style="background:url(../images/bt_them.jpg); width:55px; height:65px;"> 
				</td>   
				<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-right:1px solid #CCCCCC; height:65px; width:55px">
					<input type="button" value='' onClick="document.form.action='../adminmp/nhomsp-del.php';document.form.submit();" style="background:url(../images/bt_xoa.jpg); width:55px; height:65px;">       
				</td>
			</tr>
		</table>
    
		<table width="735" border="0" cellspacing="0" cellpadding="0">  
			  <tr height="30" bgcolor="#d4340c">
					<td align="center" width="50" style="border-left:1px solid #333;border-right:1px solid #333"><strong><font color="#FFFFFF">Chọn</font></strong></td>
					<td align="center" width="485" style="border-right:1px solid #333"><strong><font color="#FFFFFF">Tên nhóm sản phẩm</font></strong></td>    
					<td align="center" width="100" style="border-right:1px solid #333"><strong><font color="#FFFFFF">Sửa</font></strong></td>
					<td align="center" width="100"><strong><font color="#FFFFFF">Xóa</font></strong></td>    
			  </tr>  
			  <tr>
				<td width="50" align="center" style="border-left:1px solid #333;border-bottom:1px solid #333; border-right:1px solid #333">
					<input type="checkbox" name="chon[]" value="1"/>
				</td>  
				<td width="485" height="30" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">
					<div align="left" style="padding-left:100px"><b>Trang Điểm Nền</b></div>
				</td>    
				<td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=mn&amp;b=nhomsp-update&amp;idn=1">Sửa</a></td>
				<td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=mn&b=nhomsp-del&idn=1" onclick="return check()">Xóa</a>
				</td>
			  </tr>
    <tr>
  <td width="50" align="center" style="border-left:1px solid #333;border-bottom:1px solid #333; border-right:1px solid #333">
  <input type="checkbox" name="chon[]" value="1"/></td>  
    <td width="485" height="30" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><div align="left" style="padding-left:100px"><b>Trang Điểm Điểm</b></div></td>    
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=mn&amp;b=nhomsp-update&amp;idn=1">Sửa</a></td>
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=mn&b=nhomsp-del&idn=1" onclick="return check()">Xóa</a>
    </td>
  </tr>
    <tr>
  <td width="50" align="center" style="border-left:1px solid #333;border-bottom:1px solid #333; border-right:1px solid #333">
  <input type="checkbox" name="chon[]" value="1"/></td>  
    <td width="485" height="30" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><div align="left" style="padding-left:100px"><b>Mỹ Phẩm Tẩy Trang</b></div></td>    
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=mn&amp;b=nhomsp-update&amp;idn=1">Sửa</a></td>
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=mn&b=nhomsp-del&idn=1" onclick="return check()">Xóa</a>
    </td>
  </tr>
    <tr>
  <td width="50" align="center" style="border-left:1px solid #333;border-bottom:1px solid #333; border-right:1px solid #333">
  <input type="checkbox" name="chon[]" value="1"/></td>  
    <td width="485" height="30" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><div align="left" style="padding-left:100px"><b>Dưỡng Da</b></div></td>    
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=mn&amp;b=nhomsp-update&amp;idn=1">Sửa</a></td>
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=mn&b=nhomsp-del&idn=1" onclick="return check()">Xóa</a>
    </td>
  </tr>
   <tr>
  <td width="50" align="center" style="border-left:1px solid #333;border-bottom:1px solid #333; border-right:1px solid #333">
  <input type="checkbox" name="chon[]" value="2"/></td>  
    <td width="485" height="30" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><div align="left" style="padding-left:100px"><b>Sản Phẩm Khác</b></div></td>    
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=mn&amp;b=nhomsp-update&amp;idn=2">Sửa</a></td>
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=mn&b=nhomsp-del&idn=2" onclick="return check()">Xóa</a>
    </td>
  </tr>
   
</table> 
</form>       
 </div>