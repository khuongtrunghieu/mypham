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