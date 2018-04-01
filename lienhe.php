<!DOCTYPE html>
<html lang="vi" data-sbro-popup-lock="true" data-sbro-deals-lock="true" data-sbro-ads-lock="true">
				<!--- head --->
				<div id="head">
					 <?php
					include("head.php");
					?>
				</div>
				<!--- end head -->

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
				<div class="main">
					<div class="container">
						<div class="breadcrumbs">
							<ul>
								<li>
									<a class="home" title="Trở lại trang chủ" href="/" >Trang chủ</a>
								</li>
								<li>
									<span>/</span>
									<strong>Liên hệ</strong>
								</li>
							</ul>
						</div>
					</div>
					<!---ảnh map--->
					<div class="ggmap col-xs-12" id="ggmap">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14896.089649792291!2d105.78687023467101!3d21.031789206358333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab406c95c753%3A0xdacf046ae21c6f43!2zQsOhbiBidcO0biBow6BuZyB0aMOhaSBsYW4!5e0!3m2!1svi!2s!4v1484732066956" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-md-4 col-md-push-8">
							<!---Địa chỉ--->
								<div class="widget-item contactpageinfo">
									<a href="/" class="contact-logo"><img src="images/Capture.PNG" alt=""></a>
									<ul class="widget-menu">
										<li class="widget-address"><i class="fa fa-map-marker"></i><span>Chi nhánh 1 : Tầng 31-P3108 CT12A - Kim Văn - Kim Lũ - Hoàng Mai - Hà Nội</span></li>
										<li><i class="fa fa-phone"></i><span>Hotline: 0966977902</span></li>
											<li class="widget-address"><i class="fa fa-map-marker"></i><span></span></li>
										<li><i class="fa fa-phone"></i><span></span></li>
										<li class="widget-address"><i class="fa fa-map-marker"></i><span></span></li>
										<li><i class="fa fa-phone"></i><span></span></li>
										<li><i class="fa fa-envelope"></i><span>hieukt52@wru.vn</span></li>
									</ul>					
								</div>
								<!-- End  -->
							</div>
							<div class="col-md-8 col-md-pull-4">
								<div class="section-article contactpage">
									<!--form-errors-custom-->
									<form accept-charset='UTF-8' action='/contact' id='contact' method='post'>
											<input name='FormType' type='hidden' value='contact' />
											<input name='utf8' type='hidden' value='true' />
										<div class="form-inline form-comment">
											<div class="form-group">
												<label for="name">Họ tên<span id="required">*</span></label>
												<input id="name" name="contact[Name]" type="text" value="" class="form-control">
											</div>
											<div class="form-group">
												<label for="email">Email<span id="required">*</span></label>
												<input id="email" name="contact[email]" class="form-control" type="email" value="">
											</div>
											<div class="form-group">
												<label for="phone">Số điện thoại<span id="required">*</span></label>
												<input type="text" id="phone" class="form-control" name="contact[phone]">
											</div>
											<div class="form-group">
												<label for="message">Lời nhắn<span id="required">*</span></label>
												<textarea id="message" name="contact[Body]" class="form-control custom-control" rows="3"></textarea>
											</div>
											<button type="submit" id="submitlienhe" class="btn btn-default">Gửi lời nhắn</button>

										</div>
									</form>
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