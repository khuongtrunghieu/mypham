<?php
	$conn = mysqli_connect('localhost', 'root', '', 'btlmypham') or die ('Không thể kết nối tới database');
	$conn->set_charset("utf8");
	$list = $conn->query("SELECT * FROM spham");					
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
			</style>
</head>
<body>
    <div align="center" id="khung_giua_quanly">
		<!-- begin top admin-->

             <?php
			 include("headeradmin.php");
			 ?>
        <!--end top admin-->
		<div id="noidung_admin" style="padding-top: 80px;">
			<div id="content">
                 <div class="datalist">
		            <div id="content">
		              	<div class="forms">
						<div class="heading">
		          	        	<h2>Thêm sản phẩm</h2>
						</div>			
							<form method="POST" enctype="multipart/form-data" action="admin/addsp-up.php" class="styleForm">
								<p>Tên sản phẩm<br />
									<input name="nameSP" type="varchar" value="Nhập tên" class="large" onFocus="if(this.value=='Nhập tên')this.value=''" onBlur="if(this.value=='')this.value='Nhập tên'" />
								</p>
                                <p>Mô tả<br />
									<input name="MoTa" type="text" value="Nhập nội dung" class="large" onFocus="if(this.value=='Nhập nội dung')this.value=''" onBlur="if(this.value=='')this.value='Nhập nội dung'" />
								</p>
                                <p>Gía<br />
									<input name="Gia" type="double" value="Nhập giá" class="large" onFocus="if(this.value=='Nhập giá')this.value=''" onBlur="if(this.value=='')this.value='Nhập giá'" />
								</p>
								<p>Số lượng<br />
									<input name="SoLuong" type="int" value="" class="large" onFocus="if(this.value=='')this.value=''" onBlur="if(this.value=='')this.value=''" />
								</p>
								
								<p>Hình ảnh<br />
                                     <input name="HinhAnh" type="file"/>
                                </p>
							<!--	<button>Luu</button>	-->
								<input name="save" type="submit" value="Thêm" />
							</form>
		              	</div>
                     </div>
                </div>
                
            </div>
			
	    </div>
		 <div class="push"></div>
		<div id="common_echo" style="top: 738px;"></div>
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