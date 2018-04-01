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
			<link type="image/x-icon" href="admin/images/1374185_545645642181311_1738747448_n.jpg" rel="shortcut icon">
			
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
			<table border="0" cellspacing="0" cellpadding="0" width="100%"> 
			  <tbody>
			    <tr>
					<td valign="top">
					    <table class="bang_icon" width="100%" border="0" cellspacing="5" cellpadding="0" style="text-align:center; ">
							<tbody>
								 <tr>
									 <td>
										 <table class="bang_icon" width="100%" border="0" cellspacing="5" cellpadding="0" style="text-align:center; ">
											 <tbody>
												 <tr>
														<td width="25%">
															 <a target="_blank" href="index.php">
																 <img src="admin/images/checkin.png" width="48" height="48">
															 </a>
														</td>
														<td width="25%">
															 <a href="admin/sanphamadmin.php">
																 <img src="admin/images/categories.png" width="48" height="48">
															 </a>
														</td>
														<td width="25%">
															 <a href="/">
																<img src="admin/images/templatemanager.png"width="48" height="48">
															 </a>
														</td>
												 </tr>
												  <tr>
														<td>
                                                            <a target="_blank" href="webmypham/index.php">Vào website</a>
                                                        </td>
														<td><a href="admin/sanphamadmin.php">Sản Phẩm</a>
                                                        </td>
														<td><a href="/">Giao diện</a>
                                                        </td>
												  </tr>
												  <tr>
														<td>
															 <a href="lienhe_up.php">
																 <img src="admin/images/messaging.png" width="48" height="48">
															 
															 </a>
														</td>
														<td>
															 <a href="/">
																 <img src="admin/images/menu.png"width="48" height="48">
															 </a>
														</td>
														<td>
															 <a href="/">
																 <img src="admin/images/mediamanager.png"width="48" height="48">
															</a>
														</td>
												  </tr>
												  <tr>
														<td><a href="lienhe_up.php">Phản hồi</a></td>
														<td><a href="/">Menu</a></td>
														<td><a href="/">Gallery</a></td>
												  </tr>
												  <tr>
													<td>
														 <a href="thanhvien_up.php"><img src="admin/images/user.png"width="48" height="48"></a>
													</td>
													<td>
														 <a href="/"><img src="admin/images/support.png"width="48" height="48"></a>
													</td>
													<td>
														 <a href="/"><img src="admin/images/config.png"width="48" height="48"></a>
													</td>
												  </tr>
												  <tr>
													<td><a href="/">Thành viên</a></td>
													<td><a href="/">Nick hỗ trợ</a></td>
													<td><a href="/">Chức năng khác</a></td>
												  </tr>
												 
											</tbody>
										</table>  
					  
									</td>
								 </tr>
							</tbody>
				        </table>
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