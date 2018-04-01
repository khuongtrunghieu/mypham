<?php
	$conn = mysqli_connect('localhost', 'root', '', 'btlmypham') or die ('Không thể kết nối tới database');
	$conn->set_charset("utf8");
	$list = $conn->query("SELECT * FROM `spham` order by `idSP` DESC limit 8"); // xuất sản phẩm
	
	
				
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
									<strong>Sản Phẩm Mới </strong>
								</li>
							</ul>
						</div>
					<div class="main-inner">
						<div class="row">
							<div class="col-main col-lg-9 col-lg-push-3 col-md-8 col-md-push-4 col-sm-12 col-xs-12">
								<div class="category-products">
									<h1>Sản Phẩm Mới</h1>
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
	<!-- begin left --->
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

    <!-- begin footer --->
	<div id="footer">
		<?php
		  include("footer.php");
		?>       
		
	</div>
	<!-- end footer -->
    </body>
    </html>