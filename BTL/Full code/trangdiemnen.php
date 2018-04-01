<?php
	$conn = mysqli_connect('localhost', 'root', '', 'btlmypham') or die ('Không thể kết nối tới database');
	$conn->set_charset("utf8");
	$list1 = $conn->query("SELECT * FROM spham where IdDM = '1' ORDER BY idSP DESC");	
	// cho nay t viet
	$trang = $_REQUEST['trang'];
	$IdDM = 1;
	$sotin1trang = 8;
	if( isset($trang))
	{
		settype($trang, "int"); // ép về dạng số
	}else{
		$trang =1;
	}

	$from = ($trang - 1) * $sotin1trang;
	$list =	SanPhamTheoLoai_PhanTrang($IdDM, $from, $sotin1trang);
				
?>

<?php
	function SanPhamTheoLoai_PhanTrang($IdDM, $from, $sotin1trang){
		$conn = mysqli_connect('localhost', 'root', '', 'btlmypham') or die ('Không thể kết nối tới database');
		$conn->set_charset("utf8");
		$qr="
			SELECT * FROM spham 
			where IdDM = '$IdDM'
			ORDER BY idSP DESC
			LIMIT $from, $sotin1trang
		";
		return mysqli_query($conn,$qr);	
	}
	//den day
?>
<!DOCTYPE html>
	<html lang="vi" data-sbro-popup-lock="true" data-sbro-deals-lock="true" data-sbro-ads-lock="true">
	<?php
		include("head.php");
	?>
	<body class="cls-collection">
		<div id="fb-root"></div>
			<!--- header --->
		<div id="header">
			<?php
			include("header.php");
			?>
			<?php
		include("menu.php")
			?>
		</div>
			<!--- end header -->
		<div class="main-container col2-left-layout">
			<div class="container">
				<div class="container-inner">
					<div class="main">
						<div class="breadcrumbs">
							<ul>
								<li>
									<a class="home" title="Trở lại trang chủ" href="index.php" >Trang chủ</a>
								</li>	
								<li>
									<span>/</span>
									<strong>Trang điểm nền</strong>
								</li>
							</ul>
						</div>
					<div class="main-inner">
						<div class="row">
							<div class="col-main col-lg-9 col-lg-push-3 col-md-8 col-md-push-4 col-sm-12 col-xs-12">
								<div class="category-products">
									<h1>Trang điểm nền</h1>
									<div class="toolbar">
										<div class="sorter">		
										</div>
										<div class="pager">
										</div>
									</div>
		<!--gọi lấy sản phẩm từ database-->							
		<div class="row">					
			<?php
			include("goi_sp.php");
			?>
	    </div>
				
		<!---Phân trang-->		
			<div class="toolbar-bottom">
				<div class="toolbar">
					<div class="sorter"></div>
						<div class="pager">
							<div class="pages">
								<strong>Page:</strong>
								<div class="pager">              
										<div class="pages">
											<ul class="pagination">
												<?php // thay trang tự động
												$tongsotin = mysqli_num_rows($list1);
												$tongsotin;
												$tongsotrang = ceil($tongsotin/$sotin1trang);
												for($i=1; $i<=$tongsotrang; $i++){
												?>
													<li><a href="trangdiemnen.php?trang=<?php echo $i?>"><?php echo $i?></a></li>
												<?php
													}//hết trang
												?>					  
											</ul>
										</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- begin left -->
	<div id="footer">
		<?php
		  include("left.php");
		?>   
	</div>
	<!-- end footer -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

    <!-- begin footer -->
	<div id="footer">
		<?php
		  include("footer.php");
		?>       
		
	</div>
	<!-- end footer -->
    </body>
    </html>