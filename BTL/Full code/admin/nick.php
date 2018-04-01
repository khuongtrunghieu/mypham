<?php 
include("lib_db.php");
?>

<html>
     <head>
			<base href="/webmypham/index.php">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Trang quan ly</title>
			<link type="image/x-icon" href="images/1374185_545645642181311_1738747448_n.jpg" rel="shortcut icon">
			
            <link rel="stylesheet" type="text/css" href="admin/css/styleAdmin.css" id="linkExtCss"/>
			<script type="text/javascript">
				function check(){
					if(confirm("Bạn thật sự muốn thoát ?")){
						return true;
					}else{
						return false;
					}
				}
            </script>
            <style>
			#menu_quan_ly {
					padding: 0px;
					margin: 0px;
					background:url(../webmypham/admin/images/navigation.png);
					height: 35px;
}
			</style>
	</head>

	<body>
            
        <div align="center" id="khung_giua_quanly">
             <?php
			 include("headeradmin.php");
			 ?>


			<div id="noidung_admin" style="padding-top: 80px;">
				 <h2 class="admin_header">
					  <div> Chào mừng bạn đến với trang quản lý website</div>
				 
				 </h2> 
				<p style=" z-index:-9">Bạn có thể bật chức năng quản lý trực tiếp để quản lý sản phẩm, bài viết, dịch vụ ngay trên website, hoặc truy cập vào menu quản lý trên đây để quản lý các mục khác ,click vào đây để <a href="admin.php?f=video"><strong>xem video trợ giúp tổng thể</strong></a>  <br>

				</p> 
			<table border="0" cellspacing="0" cellpadding="0" width="100%"> 
			  <tbody>
			    <tr>
					<td valign="top">
					    <div>

 <div style=" padding-top:5px;margin-bottom:10px"><div style="padding-bottom:10px">Thêm nick hỗ trợ mới <strong style="color:red">( nếu bạn thêm nick mà không thấy nick sáng dù đã online thì login logout lại nhiều lần, lỗi trên là do server của Yahoo cập nhật chậm, đối với nick skype để biểu tượng skype sáng khi online bạn vào Tool-&gt;Pption-&gt;Privacy-&gt;Allow my online status to be shown on the web )</strong> </div>&nbsp;
Tiêu đề nick <input type="text" name="title" id="title" style="width:200px"> Nick <input type="text" name="dm_name" id="dm_name" style="width:100px">
<input onclick="javascript:submit_form('common_echo','button2','modules/gianhang_nick/them.php','dm_name,title');" type="button" name="button2" id="button2" value="Đồng ý">
</div>

<div id="caidat_nick" class="bang_admin">
<div class="bang_admin_header">
<span style="display:inline-block;width:60px">Sắp xếp</span>
<span style="display:inline-block;width:270px">Sửa tiêu đề</span>
<span style="display:inline-block;width:260px">Nick / email / điện thoại </span>
<span style="display:inline-block;width:140px">Loại</span>
<span style="display:inline-block;width:150px">Sửa biểu tượng</span>
<span style="display:inline-block;width:90px">Luôn sáng nick</span>
</div>

<div class="header2" style="height:40px;"><div class="ten_header2"><input id="order_3" maxlength="3" value="0" class="orderbox" type="text" autocomplete="off">&nbsp;<input id="name_3" value="yahoo" class="namebox" type="text">&nbsp;<input id="nick_3" value="doyouloveme_18012011@yahoo.com.vn" class="namebox" type="text">&nbsp;
	<select onchange="doi_nick_loai(3,this.value)" class="kieu" id="loai_3">
	<option selected="selected" value="0">Yahoo messenger</option>
	<option value="1">Skype</option>
	<option value="2">Điện thoại</option>
	<option value="3">Email</option>
	<option value="4">Facebook</option>
	</select>
	<a href="#" onclick="ajaxwin=dhtmlwindow.open('ajaxbox', 'ajax', 'modules/gianhang_nick/suanick_chonanh_pop.php?id=3&amp;loai=0&amp;value=2', 'Chọn loại ảnh', 'width=500px,height=400px,resize=1,scrolling=1,center=1'); return false"> <img align="absmiddle" src="templates/images/kinhlup.gif"> <img style="margin-left:10px; " align="absmiddle" src="templates/nick/0/2.gif"></a></div>
		
		<a class="nut_xoa" href="javascript:xoa_nick(3);">Xóa</a>
	   <a style="margin-right:20px" class="nut_xoa" href="javascript:gianhang_nick_luon_sang(3);"><img id="luonsang_3" src="templates/images/check_0.gif"></a>
	
		</div><div class="header2" style="height:40px;"><div class="ten_header2"><input id="order_2" maxlength="3" value="0" class="orderbox" type="text" autocomplete="off">&nbsp;<input id="name_2" value="Miss Duyên" class="namebox" type="text">&nbsp;<input id="nick_2" value="0985 819 780" class="namebox" type="text">&nbsp;
	<select onchange="doi_nick_loai(2,this.value)" class="kieu" id="loai_2">
	<option value="0">Yahoo messenger</option>
	<option value="1">Skype</option>
	<option selected="selected" value="2">Điện thoại</option>
	<option value="3">Email</option>
	<option value="4">Facebook</option>
	</select>
	<a href="javascript:alert('Không có tùy chọn cho loại này')"> <img align="absmiddle" src="templates/images/kinhlup.gif">  </a></div>
		
		<a class="nut_xoa" href="javascript:xoa_nick(2);">Xóa</a>
	   <a style="margin-right:20px" class="nut_xoa" href="javascript:gianhang_nick_luon_sang(2);"><img id="luonsang_2" src="templates/images/check_0.gif"></a>
	
		</div><div style="padding:10px"><input onclick="submit_form2('common_echo','nut','modules/gianhang_nick/capnhat_nick.php','caidat_nick');" name="" type="button" value="Cập nhật"> ( không nhập @yahoo.com.vn sau tên nick )</div>

</div>

</div>
			         </td>
				     <td>&nbsp;</td>
			    </tr> 
			  </tbody>
		    </table>  
			 
			<br style="line-height:150px;">
			</div>
			 <div class="push"></div>
			<div id="common_echo"></div>
            <div id="fixloi" style="display:none"></div>
			<!-- begin stylehovermenu-->
			
			
			<?php
			    include("hovermenu.php");
			?>
			<!-- end stylrhovermenu-->
			<div id="hintbox"></div>
			<div class="highslide-container" style="padding: 0px; border: medium none; margin: 0px; position: absolute; left: 0px; top: 0px; width: 100%; z-index: 1001; direction: ltr;">
			     <a class="highslide-loading" title="Click to cancel" href="javascript:;" style="position: absolute; top: -9999px; opacity: 0.75; z-index: 1;">Loading...</a>
				 <div style="display: none;"></div>
				 <div class="highslide-viewport highslide-viewport-size" style="padding: 0px; border: medium none; margin: 0px; visibility: hidden;"></div>
				 <table cellspacing="0" style="padding: 0px; border: medium none; margin: 0px; visibility: hidden; position: absolute; border-collapse: collapse; width: 0px;">
				     <tbody style="padding: 0px; border: medium none; margin: 0px;">
					 <tr style="padding: 0px; border: medium none; margin: 0px; height: auto;">
					     <td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: url(&quot;/;) repeat scroll 0px 0px transparent; height: 20px; width: 20px;"></td>
						 <td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: url(&quot;/;) repeat scroll 0px -40px transparent; height: 20px; width: 20px;"></td>
						 <td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: url(&quot;/;) repeat scroll -20px 0px transparent; height: 20px; width: 20px;"></td>
					</tr>
					<tr style="padding: 0px; border: medium none; margin: 0px; height: auto;">
						     <td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: url(&quot;/;) repeat scroll 0px -80px transparent; height: 20px; width: 20px;"></td>
							 <td style="padding: 0px; border: medium none; margin: 0px; position: relative;" class="glossy-dark highslide-outline"></td>
							 <td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: url(&quot;/;) repeat scroll -20px -80px transparent; height: 20px; width: 20px;"></td>
					</tr>
					<tr style="padding: 0px; border: medium none; margin: 0px; height: auto;">
							<td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: url(&quot;/;) repeat scroll 0px -20px transparent; height: 20px; width: 20px;"></td>
							<td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: url(&quot;/;) repeat scroll 0px -60px transparent; height: 20px; width: 20px;"></td>
						     <td style="padding: 0px; border: medium none; margin: 0px; line-height: 0; font-size: 0px; background: url(&quot;/;) repeat scroll -20px -20px transparent; height: 20px; width: 20px;"></td>
					</tr>
					</tbody>
				</table>
			</div>
			<div id="hintbox"></div>
 
</div>
<div id="foot">
          <p>&copy; Garden Fruits. Administrator.  |  Designed by: <a target="_blank" href="">Nguyễn Hạnh</a></p>
        </div>
	</body>
</html>