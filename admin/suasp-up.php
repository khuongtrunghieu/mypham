<?php
include('lib_db.php');
//buoc 1 get input
//$id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
$idSP = isset($_REQUEST['idSP']) ? $_REQUEST['idSP'] : '';

$sqlold = "select * from spham where id={$idSP}";
$dataold = select_one($sqlold);
$uploadHinhAnh = $dataold['HinhAnh'];
$uploadGia = $dataold['Gia'];
$uploadSoLuong = $dataold['SoLuong'];
$uploadMoTa = $dataold['MoTa'];

$nameSP = isset($_REQUEST['nameSP']) ? $_REQUEST['nameSP'] : '';
$SoLuong = isset($_REQUEST['SoLuong']) ? $_REQUEST['SoLuong'] : '';
$Gia = isset($_REQUEST['Gia']) ? $_REQUEST['Gia'] : '';

// upload .pdf
   if($_FILES['HinhAnh']['nameSP'] != NULL){ // Đã chọn file
            if($_FILES['HinhAnh']['size'] > 1048576){
                echo "File không được lớn hơn 1mb";
            }else{
                // file hợp lệ, tiến hành upload
                $path = 'upload/'; // file sẽ lưu vào thư mục data
                $tmp_name = $_FILES['HinhAnh']['tmp_name'];
                $namefile = $_FILES['HinhAnh']['nameSP'];
                $type = $_FILES['HinhAnh']['type']; 
                $size = $_FILES['HinhAnh']['size']; 
                $uploadfilep = 'admin/'.$path.$namefile;
                move_uploaded_file($tmp_name,$path.$namefile);
                
           }  
   } 
$MoTa = isset($_REQUEST['MoTa']) ? $_REQUEST['MoTa'] : '';
$HinhAnh = isset($_REQUEST['HinhAnh']) ? $_REQUEST['HinhAnh'] : '';
//buoc 2 tao sql
$q = '';
$sql ='';
$sql .= "update spham ";
$sql .= " set ";

$sql .= " nameSP='{$nameSP}'";
$sql .= " ,Gia='{$Gia}'";
$sql .= " ,SoLuong='{$SoLuong}'";

$sql .= " ,HinhAnh='{$uploadHinhAnh}'";
$sql .= " ,MoTa='{$uploadMoTa}'";
$sql .= " ,SoLuong='{$uploadSoLuong}'";
$sql .= " ,Gia='{$uploadGia}'";

$sql .= " ,MoTa='{$MoTa}'";
$sql .= " ,HinhAnh='{$HinhAnh}'";

$sql .= " where id='{$idSP}'";
$ret = exec_update($sql);
//print_r($ret);exit();
//buoc 4 output
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
					height: 35px;}
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
							<h2>Sủa sản phẩm thành công /</h2> 
							<h2><a style ="color:#00F;text-decoration: underline;font-size:16px;"href="admin/addsp.php">Quay lại</a></h2>
						</div>
						<ul id="lst">
						<li>
							<div class="chk"><a id="checkall"></a> </div>
							<p class="title"><strong>Tên sản phẩm </strong></p>
							<p class="title"><strong>Gía</strong></p>
							<p class="title"><strong>Số lượng</strong></p>
							<p class="title"><strong>Hình ảnh</strong></p>
							<p class="title"><strong>Mô tả</strong></p>
							<p class="editHead">Sửa/Xóa</p>
						</li>
								<?php
										$sql = "SELECT * FROM spham  where nameSP='{$nameSP}'";
										$data_sp = select_list($sql);
										if (is_array($data_sp)) {
										foreach ($data_sp as $data)
										{
										echo '
												<li class="odd">
													<div class="chk">
													   <label>
															 <input class="chkl" type="checkbox" name="chk" value="checkbox" />
														</label>
													</div>
													<p class="title">'.$data['nameSP'].'</p>
													<p class="title">'.$data['Gia'].'</p>
													<p class="title">'.$data['SoLuong'].'</p>
													<p class="title">'.$data['HinhAnh'].'</p>
													<p class="title">'.$data['MoTa'].'</p>
													<p class="edit">
													
														<a href="admin/suasp.php?id='.$data['idSP'].'">
															<img src="admin/images/editIco.png" alt="" />
														</a> 
														<a href="admin/xoa.php?id='.$data['idSP'].'">
															<img src="admin/images/Delete_icon.gif" alt="" />
														</a>
													</p>
												</li>
											';
										}}
									?>
				
							</ul>
						</div>
		<!----	<h3>Buttons &amp; Progress bars</h3>	--->

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

						// The following event subscribers demonstrate how to handle
						// YUI Calendar events, specifically when a date cell is 
						// selected and when it is unselected.
						//
						// See: http://developer.yahoo.com/yui/calendar/ for more 
						// information on the YUI Calendar's configurations and 
						// events.
						//
						// The YUI Calendar API cheatsheet can be found at:
						// http://yuiblog.com/assets/pdf/cheatsheets/calendar.pdf
						//
						//--- begin event subscribers ---//
						yuicalendar1.selectEvent.subscribe(selectHandler, yuicalendar1, true);
						yuicalendar1.deselectEvent.subscribe(deselectHandler, yuicalendar1, true);
						//--- end event subscribers ---//

						yuicalendar1.render();
					  }

					  function selectHandler(event, data) {
					  // The JavaScript function subscribed to yuicalendar1.  It is called when
					  // a date cell is selected.
					  //
					  // alert(event) will show an event type of "Select".
					  // alert(data) will show the selected date as [year, month, date].
					  };

					  function deselectHandler(event, data) {
					  // The JavaScript function subscribed to yuicalendar1.  It is called when
					  // a selected date cell is unselected.
					  };    

					  // Create the YUI Calendar when the HTML document is usable.
					  YAHOO.util.Event.onDOMReady(inityuicalendar1);


					// EndWebWidget YUI_Calendar: yuicalendar1 
						</script> 
				</div>
            </div>
		</div>
	</div>
        <div class="push"></div>

		<div id="foot">
			<p>© Garden Fruits. Administrator.  |  Designed by: <a href="" target="_blank">Nguyễn Hạnh</a></p>
        </div>
</body>
</html>