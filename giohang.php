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
											<strong>Giỏ hàng</strong>
										</li>
									</ul>
								</div>
				<div class="col-main">
                    <div class="cart">
                        <div class="page-title title-buttons">
                            <h1>Giỏ hàng</h1>
                        </div>
                        <form action="/cart" method="post">
                            <fieldset class="table-responsive">
                                <table id="shopping-cart-table" class="data-table cart-table">
                                    <colgroup>
                                        <col width="1">
                                        <col>
                                        <col width="1">
                                        <col width="1">
                                        <col width="1">
                                        <col width="1">
                                        <col width="1">
                                    </colgroup>
                                    <thead>
                                        <tr class="first last">
                                            <th rowspan="1">&nbsp;</th>
                                            <th rowspan="1"><span class="nobr">Tên sản phẩm</span></th>
                                            <th class="a-center" colspan="1"><span class="nobr">Giá</span></th>
                                            <th rowspan="1" class="a-center">Số lượng</th>
                                            <th class="a-center" colspan="1">Tổng tiền</th>
                                            <th rowspan="1" class="a-center">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr class="first last">
                                            <td colspan="50" class="a-right last">
                                                <button type="button" class="button btn-continue" onclick="window.location.href='/collections/all'">
                                                <span> <span>Tiếp tục mua sắm</span></span>
                                                </button>
                                                <button type="submit" class="button btn-update">
                                                    <span><span>Cập nhật</span></span>
                                                </button>
                                                <button type="button" onClick="window.location.href='cart/clear'" class="button btn-empty" id="empty_cart_button">
                                                    <span><span>Xóa giỏ hàng</span></span>
                                                </button>                                              
                                            </td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        
                                        <tr class="first first odd">
                                             <td>
                                                <a href="detai.php" title="Serum CC Cream Cover Innisfree" class="product-image">
                                                    <img alt="Serum CC Cream Cover Innisfree" src="images/kemnencc.jpg"  width="150" height="150" alt="Serum CC Cream Cover Innisfree">
                                                </a>  
                                            </td>
                                            <td>
                                                <h2 class="product-name">
                                                    <a href="detai.php">Serum CC Cream Cover Innisfree</a>
                                                </h2>   
                                            </td>
                                            <td class="a-right">
                                                <span class="cart-price">
                                                <span class="price">319.000₫</span>                
                                                </span>
                                            </td>
                                            <!-- inclusive price starts here -->
                                            <td class="a-center">
                                                <input name="Lines" min="1" value="1" size="4" title="Số lượng" class="input-text qty" maxlength="12">
                                            </td>
                                            <!--Sub total starts here -->
                                            <td class="a-right">
                                                <span class="cart-price">
                                                <span class="price">319.000₫</span>                            
                                                </span>
                                            </td>
                                            <td class="a-center last"><a href="/cart/change?line=1&quantity=0" title="Xóa sản phẩm" class="btn-remove btn-remove2">Remove item</a></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
								<!--<script type="text/javascript">decorateTable('shopping-cart-table')</script>-->
                            </fieldset>
                        </form>
                        <div class="cart-collaterals row">
                            <div class="col-1 col-xs-12 col-sm-6 col-md-4">
                            </div>
                            <div class="col-2 col-xs-12 col-sm-6 col-md-4">
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-4 ">
                                <div class="totals">
                                    <table id="shopping-cart-totals-table">
                                        <colgroup>
                                            <col>
                                            <col width="1">
                                        </colgroup>
                                        <tfoot>
                                            <tr>
                                                <td style="" class="a-right" colspan="1">
                                                    <strong>Tổng tiền</strong>
                                                </td>
                                                <td style="" class="a-right">
                                                    <strong><span class="price">319.000₫</span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        </tbody>
                                    </table>
                                    <ul class="checkout-types">
                                        <li>    
                                            <button type="button" class="button btn-proceed-checkout btn-checkout" onclick="window.location.href='/checkout'">
                                                <span><span>Thanh toán</span></span>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
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