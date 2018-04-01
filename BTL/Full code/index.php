<?php
	$conn = mysqli_connect('localhost', 'root', '', 'btlmypham') or die ('Không thể kết nối tới database');
	$conn->set_charset("utf8");
	$list1 = $conn->query("SELECT * FROM spham");	
    $trang = 1;
    $sotin1trang = 8;
    $from = ($trang - 1) * $sotin1trang;
	$list =	SanPhamTheoLoai_PhanTrang( $from, $sotin1trang);	
?>

<?php
	function SanPhamTheoLoai_PhanTrang( $from, $sotin1trang){
		$conn = mysqli_connect('localhost', 'root', '', 'btlmypham') or die ('Không thể kết nối tới database');
		$conn->set_charset("utf8");
		$qr="
			SELECT * FROM spham 
			
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
										<li><a class="home" title="Trở lại trang chủ" href="index.php">Trang chủ</a></li>
										<li>
											<span>/</span>
											<strong>Thefaceshop</strong>
										</li>
									</ul>
								</div>
								<div class="main-inner">
									<div class="row">
										<div class="col-main col-lg-9 col-lg-push-3 col-md-8 col-md-push-4 col-sm-12 col-xs-12">
											<div class="category-products">
												<h1>The face shop</h1>
				<!--slideshow--->
				<?php
						include("slideshow.php")
				?>							
								
				<!--box liệt kê sản phẩm --->
					<div class="row">
					<!--vòng lặp --->
					<?php while ($row = $list->fetch_array()) { ?>				
						<div class="">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6 product-loop">
								<div class="item">
									<div class="item-inner">
										<div class="ma-box-content">
											<!---  ảnh --->
											<div class="products clearfix">
												<a href="detail.php?id=<?=$row['idSP']?>" title="<?=$row['nameSP']?>" class="product-image" rel="author">
													<span class="product-image">
														<img src="<?=$row['HinhAnh']?>" alt="<?=$row['nameSP']?>">
													</span>
													<span class="product-image image-rotator">
														<img src="<?=$row['HinhAnh']?>" alt="<?=$row['nameSP']?>">
													</span>   
												</a>
											</div>
											<!--- nội dung --->
										<div class="item-content">
												<!-- tên sản phẩm --->
												<h3 class="product-name">
													<a href="detail.php?id=<?=$row['idSP']?>" title="<?=$row['nameSP']?>"><?=$row['nameSP']?></a>
												</h3>
											<!-- giá sản phẩm --->
											<div class="price-box">
												<p class="special-price">
													<span class="price-label">Giá: </span>
													<span class="price"><?=$row['Gia']?>₫</span>
												</p>
											</div>
											<!-- nút mua hàng --->
											<form action="detail.php" method="post">
												<div class="actions">
													<ul class="add-to-links">
														<li>
															<input type="hidden" name="id" value="<?=$row['idSP']?>">
															<button type="submit" title="Mua hàng" class="button btn-cart add_to_cart">
																<i class="fa fa-shopping-cart"></i>
																<span><span>Mua hàng</span></span>
															</button>
														</li>
													</ul>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php }
				$list->close();
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
															<?php
																$tongsotin = mysqli_num_rows($list1);
																$tongsotin;
																$tongsotrang = ceil($tongsotin/$sotin1trang);
																for($i=1; $i<=$tongsotrang; $i++){
																?>
																	<li><a href="index.php?trang=<?php echo $i?>"><?php echo $i?></a></li>
																<?php
																	}
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
						<!-- begin left --->
						<div id="footer">
							<?php
							  include("left.php");
							?>    	
						</div>
						<!-- end left -->
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