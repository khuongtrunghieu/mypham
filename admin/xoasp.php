<?php
include('lib_db.php');
//print_r($_REQUEST);exit();
//buoc 1 get input
$id_SP = isset($_REQUEST['idSP']) ? $_REQUEST['idSP'] : '';
//buoc 2 tao sql
$q = '';
$sql = "DELETE from spham ";
$sql .= " where id='{$id_SP}'";
//buoc 3 thuc thi
//echo $sql;exit();
$ret = exec_update($sql);
//print_r($ret);exit();
//buoc 4 output
?>
<html>
     <head>
			<base href="/webmypham/index.php">
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Trang quan ly</title>
			<link type="image/x-icon" href="images/favicon.ico"rel="shortcut icon">
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
			#menu_quan_ly
				{
					padding: 0px;
					margin: 0px;
					background:url(../webmypham/admin/images/navigation.png);
					height: 35px;
				}
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
			
			  <!--Content Start-->
    <div id="content">
        <div class="datalist">
		<div id="content">
			<div class="forms">
			<div class="heading">
				<h2>Xóa sản phẩm thành công /</h2> 
				<h2><a style ="color:#00F;text-decoration: underline;font-size:16px;"href="admin/addsp.php">Quay lại</a></h2>
			</div>
			<ul id="lst">
            <li>
				<div class="chk"><a id="checkall"></a> </div>
				<p class="title"><strong>Tên sản phẩm</strong></p>
				<p class="title"><strong>Gía </strong></p>
				<p class="title"><strong>Số lượng</strong></p>
				<p class="title"><strong>Hình ảnh</strong></p>
				<p class="title"><strong>Mô tả</strong></p>
				<p class="editHead">Sửa/Xóa</p>
			</li>
					<?php
						$sql = "SELECT * FROM spham ";
						$data_sp = select_list($sql);
						foreach ($data_sp as $data)
							{?>
									<li class="odd">
										<div class="chk">
										   <label>
												 <input class="chkl" type="checkbox" name="chk" value="checkbox" />
											</label>
										</div>
										<p class="title"><?php echo $data['nameSP']?></p>
										<p class="title"><?php echo $data['Gia']?> </p>
										<p class="title"><?php echo $data['SoLuong']?></p>
										<p class="title"><?php echo $data['HinhAnh']?></p>
										<p class="title"><?php echo $data['MoTa']?></p>
										<p class="edit">
											<a href="admin/suasp.php?id=<?php echo $data['idSP']?>">
												<img src="admin/images/editIco.png" alt="" />
											</a> 
											<a href="admin/xoasp.php?id=<?php echo $data['idSP']?>">
												<img src="admin/images/Delete_icon.gif" alt="" />
											</a>
										</p>
									</li>

							
					<?php		
						}
				?>
				</ul>
			</div>
		<!----	<h3>Buttons &amp; Progress bars</h3>	--->

			</div>
        </div>
      </div>
      <div id="calen">
        <div id="yuicalendar1"></div>
		
    <script type="text/javascript">
// BeginWebWidget YUI_Calendar: yuicalendar1 

  (function() { 
    var cn = document.body.className.toString();
    if (cn.indexOf('yui-skin-sam') == -1) {
      document.body.className += " yui-skin-sam";
    }
  })();

  var inityuicalendar1 = function() {
    var yuicalendar1 = new YAHOO.widget.Calendar("yuicalendar1");

   
    yuicalendar1.selectEvent.subscribe(selectHandler, yuicalendar1, true);
    yuicalendar1.deselectEvent.subscribe(deselectHandler, yuicalendar1, true);
    //--- end event subscribers ---//

    yuicalendar1.render();
  }

  function selectHandler(event, data) {
  };

  function deselectHandler(event, data) {
  YAHOO.util.Event.onDOMReady(inityuicalendar1);
    </script> 
				</div>
            </div>
			
				
	    </div>
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