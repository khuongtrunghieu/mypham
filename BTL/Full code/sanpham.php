<?php
	$conn = mysqli_connect('localhost', 'root', '', 'btlmypham') or die ('Không thể kết nối tới database');
	$conn->set_charset("utf8");
	$list = $conn->query("SELECT * FROM spham");					
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
		include("menu.php");
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
							<strong>Tất cả sản phẩm</strong>
						</li>
					</ul>
				</div>
				<div class="main-inner">
					<div class="row">
						<div class="col-main col-lg-9 col-lg-push-3 col-md-8 col-md-push-4 col-sm-12 col-xs-12">
							<div class="category-products">
								<h1>Tất cả sản phẩm</h1>
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
				
	<!---Phân trang--->		
				
						
						
			<div class="toolbar-bottom">
				<div class="toolbar">
					<div class="sorter"></div>
						<div class="pager">
							<div class="pages">
								<strong>Page:</strong>
								<div class="pager">              
										<div class="pages">
											<ul class="pagination">
												<li class="active"><a href="#" style="pointer-events:none">1</a></li>
												<li><a href="/collections/all?page=2">2</a></li>
												<li><a href="/collections/all?page=3">3</a></li>
												<li><a href="">...</a></li>
												<li><a href="/collections/all?page=5">5</a></li>
												<li><a href="/collections/all?page=2" title="2">&raquo;</a></li>				  
											</ul>
										</div>
								</div>
							</div>
						</div>
					</div>
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