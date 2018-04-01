<div id="content-right">
         <form method="post" id="frm" name="form">
<table width="735" height="70" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolordark="#FFFFFF">
    <tr>
        <td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-left:1px solid #CCCCCC"><div align="left" style="color:#d4340c; font-family:Tahoma; font-size: 16px; font-weight:bold; padding-left:20px">QUẢN LÝ SẢN PHẨM   
        </div></td>
        <td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; height:65px; width:55px">
    <input type="button" value='' onClick="document.form.action='themsp_moi.php'; document.form.submit();" style="background:url(../images/bt_them.jpg); width:55px; height:65px;">
    </td>   
    <td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-right:1px solid #CCCCCC; height:65px; width:55px">
    <input type="button" value='' onClick="document.form.action='../adminmp/?m=sp&b=sp-xl-del';document.form.submit();" style="background:url(../images/bt_xoa.jpg); width:55px; height:65px;">       
        </td>
      </tr>
    </table>
    
<table width="735" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="9" class="tieude" align="center">DANH SÁCH SẢN PHẨM</td>
  </tr>
  <tr height="30" bgcolor="#ffcc99">
    <td align="center" width="50" style="border-left:1px solid #333;border-right:1px solid #333"><strong>Chọn</strong></td>
    <td align="center" width="80" style="border-right:1px solid #333"><strong>Tên sản phẩm</strong></td>
    <td align="center" width="135" style="border-right:1px solid #333"><strong>Loại sản phẩm</strong></td>
    <td align="center" width="100" style="border-right:1px solid #333"><strong>Mô tả</strong></td>
    <td align="center" width="100" style="border-right:1px solid #333"><strong>Hình</strong></td>
    <td align="center" width="100" style="border-right:1px solid #333"><strong>Giá ( VND )</strong></td>
    <td align="center" width="80" style="border-right:1px solid #333"><strong>Ghi Chú</strong></td>
    <td align="center" width="50" style="border-right:1px solid #333"><strong>Sửa</strong></td>
    <td align="center" width="50"><strong>Xóa</strong></td>    
  </tr>  
  <tr>
	<td width="50" align="center" style="border-left:1px solid #333;border-bottom:1px solid #333; border-right:1px solid #333">
			<input type="checkbox" name="chon[]" value="959"/></td>  
    <td width="80" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><b>Kem chống nắng Perfection Ultime TFS</b></td>
    <td width="135" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">Dưỡng Da</td>
    <td width="100" style="border-bottom:1px solid #333; border-right:1px solid #333">
		<div align="center" style="padding-left:3px; padding-right:3px;" onclick="var win=window.open('mota.php?id=959', 'open_window', 'width=570, height=320, left=0, top=0')">Xem mô tả</div></td>
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">
		<div onclick="var win=window.open('../zoom.php?id=959', 'open_window', 'width=405, height=530, left=0, top=0')">
			<img src="..\images\kemchongnang.jpg" width="90" height="90">
		</div>
	</td>
	<td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">580000</td>
	<td width="80" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">new</td>    
	<td width="50" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">	
		<a href="?m=sp&b=sp-update&id=959">Sửa</a>
	</td>
    <td width="50" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">
		<a href="?m=sp&b=sp-del&id=959" onclick="return check()">Xóa</a>
    </td>
  </tr>
   <tr>
  <td width="50" align="center" style="border-left:1px solid #333;border-bottom:1px solid #333; border-right:1px solid #333">
  <input type="checkbox" name="chon[]" value="8148"/></td>  
    <td width="80" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><b>Son Đa Năng INK GEL STICK</b></td>
    <td width="135" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">Trang Điểm Điểm</td>
    <td width="100" style="border-bottom:1px solid #333; border-right:1px solid #333">
  <div align="center" style="padding-left:3px; padding-right:3px;" onclick="var win=window.open('mota.php?id=8148', 'open_window', 'width=570, height=320, left=0, top=0')">Xem mô tả</div></td>
    <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><div onclick="var win=window.open('../zoom.php?id=8148', 'open_window', 'width=405, height=530, left=0, top=0')">
	<img src="..\images\son1.jpg" width="90" height="90"></div></td>
  <td width="100" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">350000</td>
  <td width="80" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">new</td>    
    <td width="50" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=sp&b=sp-update&id=8148">Sửa</a></td>
    <td width="50" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><a href="?m=sp&b=sp-del&id=8148" onclick="return check()">Xóa</a>
    </td>
  </tr>

 
  
   <tr>
  <td colspan="9" class="ketthuc" bgcolor="#ffcc99">
 <a href='?m=sp&b=sp-list&page=1'><font color='#FF0000'>[1]</font></a> &nbsp;<a href='?m=sp&b=sp-list&page=2'><font color='#FFF'>[2]</font></a> &nbsp;    </td>
  </tr> 
</table>
</form>        
</div>  