

	 <?php include "header.php";?>   
	<?php include "menu_quantri.php";?>
 
		 <div id="main">  
			<form method="post">
				<table width="960" height="70" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" bordercolordark="#FFFFFF">
					  <tr>
							<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-left:1px solid #CCCCCC"><div align="left" style="color:#d4340c; font-family:Tahoma; font-size: 16px; font-weight:bold; padding-left:20px">QUẢN LÝ THÀNH VIÊN</div></td>
							<td style="border-top:1px solid #CCCCCC; border-bottom: 1px solid #CCCCCC; border-right:1px solid #CCCCCC; height:65px; width:55px">
							<input type="submit" name="xoa" value='' onClick="return checktv();document.form.submit();" style="background:url(../images/bt_xoa.jpg); width:55px; height:65px;">       
							</td>
					  </tr>
				</table>

<table width="960" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="9" class="tieude" align="center">DANH SÁCH THÀNH VIÊN</td>
  </tr>
  <tr height="30" bgcolor="#ffcc99">
    <td align="center" width="50" style="border-left:1px solid #333;border-right:1px solid #333"><strong>Chọn</strong></td>
    <td align="center" width="150" style="border-right:1px solid #333"><strong>Tên đăng nhập</strong></td>
    <td width="150" align="center" style="border-right:1px solid #333"><strong>Họ tên</strong><strong></strong></td>
    <td align="center" width="180" style="border-right:1px solid #333"><strong>Địa chỉ</strong></td>
    <td align="center" width="175" style="border-right:1px solid #333"><strong>Email</strong></td>
    <td align="center" width="150" style="border-right:1px solid #333"><strong>Điện thoại</strong></td>
    <td align="center" width="80" style="border-right:1px solid #333"><strong>Hiệu lực</strong></td>
    
  </tr>  
  <tr>
  <td width="50" align="center" style="border-left:1px solid #333;border-bottom:1px solid #333; border-right:1px solid #333">
  <input type="checkbox" name="chon[]" value="Admin"/></td>  
    <td width="150" height="30" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><b>Admin</b></td>
    <td width="150" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">
    Hạnh 56TH3 </a>
    </td>
    <td width="180" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px">Hà Nội</td>
    <td width="175" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px">hanh1996@gmail.com</td>
    <td width="150" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px">1657990372</td>
    <td width="80" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333; ">	
	<a href='?m=thanhvien&active=Admin&n=1'><img src='img/hieuluc.gif' border='0'></a></td>
  </tr>
   <tr>
  <td width="50" align="center" style="border-left:1px solid #333;border-bottom:1px solid #333; border-right:1px solid #333">
  <input type="checkbox" name="chon[]" value="longphung"/></td>  
    <td width="150" height="30" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><b>hanhnguyen</b></td>
    <td width="150" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">
    hanh </a>
    </td>
    <td width="180" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px">Hà Nội</td>
    <td width="175" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px">hanh29021996@gmail.com</td>
    <td width="150" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px">0971789000</td>
    <td width="80" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333; ">	
	<a href='?m=thanhvien&active=longphung&n=1'><img src='img/hieuluc.gif' border='0'></a></td>
  </tr>


   <tr>
  <td width="50" align="center" style="border-left:1px solid #333;border-bottom:1px solid #333; border-right:1px solid #333">
  <input type="checkbox" name="chon[]" value="windgod1996"/></td>  
    <td width="150" height="30" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333"><b>Hanh1996</b></td>
    <td width="150" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333">
    Nguyễn Thị Hạnh </a>
    </td>
    <td width="180" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px">559 Kim Ngưu</td>
    <td width="175" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px">hanhnt42@wru.vn</td>
    <td width="150" align="left" style="border-bottom:1px solid #333; border-right:1px solid #333; padding-left:5px; padding-right:5px">0986266121</td>
    <td width="80" align="center" style="border-bottom:1px solid #333; border-right:1px solid #333; ">	
	<a href='?m=thanhvien&active=windgod1996&n=1'><img src='img/hieuluc.gif' border='0'></a></td>
  </tr>
   <tr>
	<td colspan="9" class="ketthuc">
 <a href='?m=thanhvien&page=1'><font color='#FF0000'>[1]</font></a> &nbsp;    </td>
  </tr> 
</table>
  <input type="hidden" name="act">
</form>    	<div id="content-left">       	 
                </div>
        
        <div id="content-right">
                 </div>  
         </div>

 </div>
</body>
</html>
    