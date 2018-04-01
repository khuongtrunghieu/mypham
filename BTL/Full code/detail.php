<!DOCTYPE html>
<html lang="vi" data-sbro-popup-lock="true" data-sbro-deals-lock="true" data-sbro-ads-lock="true">
	<?php
		include("head.php");
		// kết nối database
		$conn = mysqli_connect('localhost', 'root', '', 'btlmypham') or die ('Không thể kết nối tới database');
		// bật hỗ trợ unicode (xem tiếng Việt)
		$conn->set_charset("utf8");
		// tạo câu SQL lấy chi tiết sản phẩm có id do người dùng gửi
		$sqls = "SELECT * FROM spham WHERE idSP=" . $_REQUEST['id'];
		// thực hiện truy vấn
		$list = $conn->query($sqls);
		// lấy ra dòng thứ nhất để hiện thị kết quả
		$row = $list->fetch_array(MYSQLI_ASSOC);
	?>
	<body>
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
	<div class="main-container col1-layout" itemscope itemtype="#">
	<meta itemprop="url" content="giohang.php">
	<meta itemprop="image" content="<?=$row['HinhAnh']?>">
	<meta itemprop="shop-currency" content="VND">
	<div class="container">
		<div class="container-inner">
			<div class="main">
				<div class="breadcrumbs">
					<ul>
						<li><a class="home" title="Trở lại trang chủ" href="index.php" >Trang chủ</a></li>
						<li>
							<span>/</span>
							<strong><?=$row['nameSP']?></strong>
						</li>
					</ul>
				</div>
				<div class="col-main">                    
					<div class="product-view">
						<div class="product-essential">
							<form action="/cart/add" method="post" id="product_addtocart_form">
								<div class="row">
									<div class="product-img-box col-md-5 col-sm-12 col-xs-12">
										<div class="product-image">
											<a href="giohang.php">
												<img src="<?=$row['HinhAnh']?>" alt="<?=$row['nameSP']?>" title="<?=$row['nameSP']?>">  
											</a>
										</div>
										<div class="more-views ma-thumbnail-container">
											<h2>More Views</h2>
											<ul class="bxslider" >
												<li class="thumbnail-item">
													<a href="giohang.php">
														<img src="<?=$row['HinhAnh']?>" alt="<?=$row['nameSP']?>" class="img-responsive">
													</a>
												</li>
											</ul>   
										</div>
									</div>
									<div class="product-shop col-md-7 col-sm-12 col-xs-12">
										<div class="product-shop-inner">
											<div class="product-name">
												<h1 itemprop="name"><?=$row['nameSP']?></h1>
											</div>
											<div class="price-availability">
												<div class="price-box">		
													<p class="special-price">
														<span class="price" itemprop="price"><?=$row['Gia']?>₫</span>
													</p>	
												</div>	
											</div>
											<div class="short-description product_description">
												<div class="std rte">
													<h2><?=$row['nameSP']?></h2>

<h2><strong>SERUM CC CREAM COVER&nbsp;<a href="#">INNISFREE</a></strong></h2>

<p><strong>Thương Hiệu</strong>&nbsp;: &nbsp; Innisfree</p>

<p><strong>Xuất xứ</strong>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; Hàn Quốc</p>

<p><font color="#000000" face="times new roman, times, serif"><b>Trọng lượng : &nbsp; &nbsp; &nbsp;</b>35ml</font></p>

<h2><strong>SERUM CC CREAM COVER INNISFREE</strong><str...
													
												</div>
											</div>
											<div style="clear:both">
											</div>
											<div class="product-variant">
												<input type="hidden" name="id" value="<?=$row['idSP']?>" />	
											</div>
											<div class="add-to-box add-to-box2">
												<div class="add-to-cart">
													<div class="input-content">
														<label for="qty">Số lượng:</label>
														<input type="text" min="1" name="quantity" id="qty" maxlength="12" value="1" title="Số lượng" class="input-text qty">
														<input type="button" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty > 0 ) qty_el.value--;return false;" class="qty-decrease">
														<input type="button" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" class="qty-increase">
													</div>
													<button type="submit" title="Mua hàng" class="button btn-cart" >
														<span>Mua hàng</span>
													</button>
												</div>
											</div>                                              
										</div>
									</div>
								</div>
							<div class="clearer"></div>

							</form>
							<div class="product-collateral">
								<ul class="product-tabs">
									<li class="first"><a href="#product_tab_1">Mô tả sản phẩm</a></li>
									<li class=""><a href="#product_tab_2">Bình luận</a></li>
									<li class="last"><a href="#product_tab_3">Tags sản phẩm</a></li>
								</ul>
								<div class="product-tabs-content" id="product_tab_1">
									<div class="std rte">
										<h2>SERUM CC CREAM COVER INNISFREE</h2>

<h2><strong>SERUM CC CREAM COVER&nbsp;<a href="http://hanquochanquoc.vn/bo-trang-diem-innisfree">INNISFREE</a></strong></h2>

<p><strong>Thương Hiệu</strong>&nbsp;: &nbsp; Innisfree</p>

<p><strong>Xuất xứ</strong>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; Hàn Quốc</p>

<p><font color="#000000" face="times new roman, times, serif"><b>Trọng lượng : &nbsp; &nbsp; &nbsp;</b>35ml</font></p>

<h2><strong>SERUM CC CREAM COVER INNISFREE</strong><strong>&nbsp;</strong>LÀ SẢN PHẨM<strong>&nbsp;CC CREAM</strong>&nbsp;MỚI CỦA&nbsp;<strong>INNISFREE&nbsp;</strong>NẰM TRONG BỘ SƯU TẬP MÙA HÈ 2014&nbsp;VỚI CÔNG THỨC CHE PHỦ TỐT HƠN,&nbsp;ĐÃ NHẬN ĐƯỢC NHỮNG PHẢN HỒI TÍCH CỰC TỪ KHÁCH HÀNG, NHẤT LÀ KHẢ NĂNG TĂNG ĐỘ BÓNG BẨY VÀ BẮT SÁNG CHO DA. GIÚP BẠN CÓ LÀN DA HỒNG HÀO HƠN HẲN. ĐỘ CHE PHỦ CŨNG RẤT TỐT SẼ GIÚP BẠN CÓ LÀN DA HOÀN HẢO MỊN MÀNG VÀ ĐẸP TỰ NHIÊN.</h2>

<p>&nbsp;</p>

<p>&nbsp;</p>

<p><b>Công dụng</b></p>

<ul>
	<li>Che khuyết điểm, bổ sung dưỡng trẵng da.</li>
	<li>Điều chỉnh tone da và khả năng kiềm dầu cực tốt.</li>
	<li>Thích hợp cho làn da không đều màu/da dầu/ da hỗn hợp thiên dầu, da có nhiều khuyết điểm như vệt thâm mụn, nám,…</li>
	<li>Tăng độ bóng và bắt sóng cho da, giúp da thêm mịn, hồng hào,và sáng đều màu.</li>
</ul>

<p><strong>Serum CC Cream Cover Innisfree</strong><strong>&nbsp;chỉ có 1 tone duy nhất&nbsp;</strong>phù hợp với mọi loại da bởi khả năng tự điều chỉnh sắc tố da tối ưu theo công nghê Nhật Bản. Vì thế các bạn có làn da trung bình hoặc ngăm 1 tí vẫn dùng được màk không lo màu kem làm da bị trắng bệt nhé !!</p>

<p><b>Cách Dùng</b></p>

<p>Lưu ý: Sử dụng chổi đánh kem nền hoặc mút đánh kem nền sẽ giúp bạn oánh kem đều và mịn màng hơn là dùng tay bạn nhé!</p>

<p><u><strong><em>&nbsp;</em></strong></u><u><strong><em>Bước 1</em></strong><em>:</em></u>&nbsp;Bơm 1 lượng kem nhỏ ra mu bàn tay rồi dùng ngón tay xoa nhẹ, sau đó chấm nhẹ từng chấm nhỏ lên trán, dọc sống mũi, cằm, thái dướng và hai bên má. Tiếp tục dùng tay xoa đều ( hoặc dùng chổi, mút tản đều) những chấm kem đó để chúng nhanh chóng che phủ toàn bộ da mặt bạn.</p>

<p><strong><em>&nbsp;<u>Bước 2:&nbsp;</u></em></strong>Bơm một lượng nhỏ nữa ra mu bàn tay rồi chấm và xoa nhẹ lên các vùng da bị khuất trên mặt: khóe miệng, bọng mắt, vùng da dưới bọng mắt, xung quang mũi và sống mũi. Với phần hõm má, bạn dùng ngón tay vừa chấm vừa tán nhẹ để kem thấm đều lên da mặt. Tiếp tục dùng chỗ kem còn lại với vai trò kem che khuyết điểm, che đi các nốt mụn, vết thâm hay nếp nhăn trên mặt.</p>

<p><strong><em><u>Bước 3:</u>&nbsp;</em></strong>Tán thêm một chút kem lên vùng cằm dưới và cổ để không khiến da mặt trông trắng hơn da cổ.</p>

<address><strong><u><em>Bước 4:</em></u></strong>&nbsp;Bạn có thể dùng thêm kem che khuyết điểm đặc dụng nếu da có quá nhiều vết mụn hay rỗ. Tiếp đó phủ thêm một lớp phấn thật nhẹ (nếu muốn) để có màu da sáng mịn hơn.&nbsp;</address>

<address>&nbsp;</address>

<address>&nbsp;</address>

<address>
<p align="center"><strong>Mọi trao đổi và hợp tác, xin vui lòng liên hệ:</strong></p>

<p align="center">&nbsp;</p>

<p align="center"><strong>KÊNH PHÂN PHỐI &amp;NHẬP KHẨU MỸ PHẦM HÀN QUỐC</strong></p>

<p align="center">&nbsp;</p>

<address><strong>Holine : MR.Hiếu - 0966977902</strong></address>

<address><strong>Địa chỉ :CT12A- P3108 -Kim Văn,Kim Lũ - Hoàng Mai - Hà Nội</strong></address>

<address><strong>Website : THEFACESHOP VN</strong></address>

<address><strong>Facebook :&nbsp;https://www.facebook.com/khtrhiieu.197</strong></address>
</address>

<address>&nbsp;</address>
									</div>
								</div>
								
								<div class="product-tabs-content" id="product_tab_2" style="display: none;">
									<div class="box-collateral box-reviews row" id="customer-reviews">
										<div class="fb-comments" data-href="https://hanquochanquoc.vn/serum-cc-cream-cover-innisfree" data-width="100%" data-numposts="7"></div>
									</div>
								</div>
								
								
								<div class="product-tabs-content" id="product_tab_3" style="display: none;">
									<div class="box-collateral box-tags">

										
										<h2>Chưa có tag sản phẩm</h2>
										
									</div>
								</div>
								
							</div>
						</div> 
					
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<script> 
		var selectCallback = function(variant, selector) {

			var addToCart = jQuery('.add-to-cart .btn-cart'),
				productPrice = jQuery('.price-availability .price-box .special-price .price'),
				comparePrice = jQuery('.price-availability .price-box .old-price .price');

			if (variant) {
				if (variant.available) {
					// We have a valid product variant, so enable the submit button
					addToCart.removeClass('disabled').removeAttr('disabled').val('Add to Cart');

				} else {
					// Variant is sold out, disable the submit button
					addToCart.val('Sold Out').addClass('disabled').attr('disabled', 'disabled');
				}

				// Regardless of stock, update the product price
				productPrice.html(Bizweb.formatMoney(variant.price, "{{amount_no_decimals_with_comma_separator}}₫"));

				// Also update and show the product's compare price if necessary
				if ( variant.compare_at_price > variant.price ) {
					productPrice.addClass("on-sale")
					comparePrice
						.html(Bizweb.formatMoney(variant.compare_at_price, "{{amount_no_decimals_with_comma_separator}}₫"))
						.show();
				} else {
					comparePrice.hide();
					productPrice.removeClass("on-sale");
				}
			} else {
				addToCart.val('Unavailable').addClass('disabled').attr('disabled', 'disabled');
			}
			if (variant && variant.image) {  
				var originalImage = jQuery(".product-image img"); 
				var newImage = variant.image;
				var element = originalImage[0];
				Bizweb.Image.switchImage(newImage, element, function (newImageSizedSrc, newImage, element) {
					jQuery(element).parents('a').attr('href', newImageSizedSrc);
					jQuery(element).attr('src', newImageSizedSrc);
				});
			}
		};
		jQuery(function($) {
			

			 // Add label if only one product option and it isn't 'Title'. Could be 'Size'.
			 

			  // Hide selectors if we only have 1 variant and its title contains 'Default'.
			  
			  $('.selector-wrapper').hide();
			    

			   });
	</script>
	<!-- begin footer --->
	<div id="footer">
		<?php
		  include("footer.php");
		?>       
		
	</div>
	<!-- end footer -->
	</body>
	</html>