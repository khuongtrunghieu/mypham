<div class="header-container">
			<div class="top-link">
				<div class="container">
					<div class="top-link-inner">
						<div class="row">
							<div class="col-md-7 col-sm-12 col-xs-12">
								<div class="left-header">
									<div class="header-dress">
										<p>P3108-Kim Văn-Kim-Lũ-Hoàng Mai-Hà Nội</p>
									</div>
									<div class="header-email">
										<p><a href="mailto:hbquanhoa@gmail.com">hieukt52@wru.vn</a></p>
									</div>
									<div class="header-phone">
										<p>0966977902</p>
									</div>
								</div>
							</div>
							<div class="col-md-5 col-sm-12 col-xs-12">
								<div class="right-header">
<!-- --->
			<?php if(isset($_SESSION['login_user'])) { ?>
			<a id="modal_trigger" href="#modal" class="btn">XIN CHAO: <?=$_SESSION['login_user'] ?></a>
			<?php } else { ?>
			<a id="modal_trigger" href="#modal" class="btn">LOGIN</a>
			<?php } ?>
			<div id="modal" class="popupContainer" style="display:none;">
					<header class="popupHeader">
							<span class="header_title">Login</span>
							<span class="modal_close"><i class="fa fa-times"></i></span>
					</header>

					<section class="popupBody">
							<!-- Social Login -->
							<div class="social_login">
									<div class="">
											<a href="https://www.facebook.com/khtrhiieu.197" class="social_box fb">
													<span class="icon"><i class="fa fa-facebook"></i></span>
													<span class="icon_title">Connect with Facebook</span>

											</a>

											<a href="https://accounts.google.com/signin/v2/identifier?hl=vi&continue=https%3A%2F%2Fwww.google.com.vn%2F_%2Fchrome%2Fnewtab%3Fei%3D9mPAWv2DL8jO0gSq3K-QBQ%26yv%3D2&flowName=GlifWebSignIn&flowEntry=AddSession" class="social_box google">
													<span class="icon"><i class="fa fa-google-plus"></i></span>
													<span class="icon_title">Connect with Google</span>
											</a>
									</div>

									<div class="centeredText">
											<span>Or use your Email address</span>
									</div>

									<div class="action_btns">
											<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
											<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
									</div>
							</div>

							<!-- Username & Password Login form -->
							<div class="user_login">
									<form action="login.php" method="post">
											<label>Email / Username</label>
											<input type="text" name="username" />
											<br />

											<label>Password</label>
											<input type="password" name="password" />
											<br />

											<div class="checkbox">
													<input id="remember" type="checkbox" />
													<label for="remember">Remember me on this computer</label>
											</div>

											<div class="action_btns">
													<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
													<div class="one_half last"><a href="#" class="btn btn_red"><input type="submit">Login</input></a></div>
											</div>
									</form>

									<a href="#" class="forgot_password">Forgot password?</a>
							</div>

							<!-- Register Form -->
							<div class="user_register">
									<form action="login2.php" method="post">
											<label>Full Name</label>
											<input type="text" />
											<br />

											<label>Email Address</label>
											<input type="email" />
											<br />

											<label>Password</label>
											<input type="password" />
											<br />

											<div class="checkbox">
													<input id="send_updates" type="checkbox" />
													<label for="send_updates">Send me occasional email updates</label>
											</div>

											<div class="action_btns">
													<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
													<div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
											</div>
									</form>
							</div>
					</section>
			</div>
<!-- --->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header">
				<div class="container">
					<div class="header-inner">
						<div class="row">
							<div class="header-content clearfix">
								<div class="col-xs-12 col-md-3 col-sm-12">		
									<a href="#" title="THE FACE SHOP" class="logo">
										<strong>Bán buôn, bán lẻ mỹ phẩm THE FACE SHOP</strong>
										<img src="images\Capture.PNG" alt="Bán buôn, bán lẻ mỹ phẩm THE FACE SHOP tại Hà Nội">
									</a>	
								</div>
								<div class="col-xs-12 col-md-9 col-sm-12">
									<div class="search-cart-wrap clearfix">
										<form id="search_mini_form" action="seach.php" method="get">
											<div class="form-search">
												<label for="search">Tìm kiếm:</label>
												<div class="box-search-select">
													<input id="search" type="text" name="query" class="input-text" placeholder="Tìm kiếm...">
													<button type="submit" title="Search" class="button"><span>Tìm kiếm </span></button>
												</div>
											</div>
										</form>
										<div class="top-cart-wrapper">
											<div class="top-cart-contain"> 
												<div class="mini-cart" id="mini_cart_block">
													<div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle top-cart-title">
														<a href="#">
															<div class="cart-box">
																<span class="title cl_old">Giỏ hàng</span>
																<span id="cart-total">0</span>
															</div>
														</a>
													</div>
													<div>
														<div class="top-cart-content arrow_box">
															<div class="block-subtitle">Sản phẩm đã cho vào giỏ hàng</div>
															<ul id="cart-sidebar" class="mini-products-list"><li class="item"><p>Không có sản phẩm nào trong giỏ hàng.</p></li></ul>
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
				</div>
			</div>
		</div>
		
		