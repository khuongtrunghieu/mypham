<?php
    include("lib_db.php");
	?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Dang Nhap</title>
         <link type="image/x-icon" href="images/1374185_545645642181311_1738747448_n.jpg" rel="shortcut icon">
        <style>
				body {
				         margin:0px;
						 background: #71A8EF;
						 color:#313031;
						 font-size:11px; 
						 font-family:tahoma;
					}
				table{
				         font-size:11px;
					}
				form{
				         margin:0px;
					}
				.install_title{
								background:url(images/header_bg.png);
								
								line-height:40px; color:#FFFFFF;
								padding-left:20px;
								font-weight:bold
						}
				#login{
        				background:#f1f3f5;
						border:1px solid #cccccc; 
						margin-top:100px; 
						padding:30px;
					}
				#login .logindiv{
        				background:#e9ecef;
						border:1px solid #cccccc;
						padding:10px;
						}
				#login .loginheader{ 
				        font-size:16px; 
						color:#c64934; 
						font-weight:bold;
						margin-bottom:10px;
						}
				#login input{
				        margin-top:5px;
						}
				.line_4px{
				          background:#c64931; 
						  line-height:4px;
						  overflow:hidden;
						  }
				.nenxam{
				       background:#f7f3f7;
					   }
        </style>
    </head>
    <body cz-shortcut-listen="true">
                     <div class="install_title">ĐĂNG NHẬP PHẦN MỀM QUẢN LÝ WEBSITE MỸ PHẨM HÀN QUỐC</div>
                     <div class="line_4px">&nbsp;</div>
                             <div class="body">
                                 <form action="login.php" method="post">
                                     <table align="center" id="login" width="0" border="0" cellspacing="0" cellpadding="15">
                                             <tbody>
											    <tr>
                                                     <td>
														 <img src="images/security.png" width="64" height="64"><br>
														 <div style=" width:130px; text-align:justify; margin-top:10px;">Sử dụng  mật khẩu để đăng nhập vào hệ thống quản lý</div>
											        </td>
                                                     <td rowspan="2">
														 <div class="loginheader">Đăng nhập</div>
														 <div class="logindiv">
														    Username <input type="text" name="user" /><br>
			
															Mật khẩu<input type="password" id="pass" name="pass">   
																 <br>
		 
															<input type="submit" name="Submit" value="Đồng ý" alt=" 146712">
														 </div> 
                    								 </td>
                                                </tr>
         
                                             </tbody>
									 </table>
                                </form>
                             </div>
     </body>
</html>
