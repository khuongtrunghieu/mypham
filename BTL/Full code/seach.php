<?php
	$conn = mysqli_connect('localhost', 'root', '', 'btlmypham') or die ('Không thể kết nối tới database');
	$conn->set_charset("utf8");
	if (isset($_REQUEST['query'])) {
		$xxxx = $_REQUEST['query'];
		$list = $conn->query("SELECT * FROM `spham` WHERE `nameSP` LIKE '%".$xxxx."%'");
	}
	else
		$list = $conn->query("SELECT * FROM `spham`");
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
									<?php if (mysqli_num_rows($list) > 0) { ?>
									<strong>Sản Phẩm Tìm Được </strong>
									<?php } else { ?>
									<strong>Không Tìm Thấy </strong>
									<?php } ?>
								</li>
							</ul>
						</div>
					<div class="main-inner">
						<div class="row">
							<div class="col-main col-lg-9 col-lg-push-3 col-md-8 col-md-push-4 col-sm-12 col-xs-12">
								<div class="category-products">
									<h1><?php if (mysqli_num_rows($list) > 0) { ?>
									<strong>Kết Qủa Tìm Được </strong>
									<?php } else { ?>
									<strong>Không Tìm Thấy Sản Phẩm </strong>
									<?php } ?></h1>
									<div class="toolbar">
										<div class="sorter">		
										</div>
										<div class="pager">
										</div>
									</div>
		<!---gọi lấy sản phẩm từ database--->							
		<div class="row">					
			<?php
			include("goi_sp.php");
			?>
	    </div>
				
		
			</div>
		</div>
	<!-- begin left -->
	<div id="footer">
		<?php
		  include("left.php");
		?>   
	</div>
	
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

    <!-- begin footer --->
	<div id="footer">
		<?php
		  include("footer.php");
		?>       
		
	</div>
	<!-- end footer -->
    </body>
    </html>