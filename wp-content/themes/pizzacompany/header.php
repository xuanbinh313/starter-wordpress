<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PizzaCompany
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;600;700;800;900&amp;family=Oswald:wght@500;700&amp;display=swap">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/core.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/tables.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/mobile.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/phone.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/480.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/768.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/1024.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-slider-1.6.0.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/checkout.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/formstyle.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/styles(1).css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/JCarousel.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/SmartProductCollections.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/SmartProductCollectionsCustom.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/MegaMenu.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/Custom.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/nivo-slider.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/anywhereSlidersCustomCss-1-1.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/anywhereSliders.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/ajaxCart.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/popup-3-option.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/Ribbons.common.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/Ribbons.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.custom-1.css" rel="stylesheet" type="text/css">
</head>

<body <?php body_class("home-page-body source-page"); ?>>
	<?php wp_body_open(); ?>
	<div id="master-wrapper-custom-id" class="master-wrapper-page">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'pizzacompany'); ?></a>
		<header id="_main-header" class="">
			<div class="container">
				<div class="top-wrap">
					<div class="left-wrap">
						<div class="logo">
							<?php
							the_custom_logo();
							if (is_front_page() && is_home()) :
							?>
								<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
							<?php
							else :
							?>
								<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
							<?php
							endif;
							$pizzacompany_description = get_bloginfo('description', 'display');
							if ($pizzacompany_description || is_customize_preview()) :
							?>
								<p class="site-description"><?php echo $pizzacompany_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
															?></p>
							<?php endif; ?>
						</div>
					</div>
					<div class="mid-wrap">
						<div class="form-group list-radio">
							<div class="form-radio ">
								<input type="radio" id="order-delivery" name="order" checked="checked" onclick="slideButtonClick(2); SaveAddress(null);">
								<label for="order-delivery"> <em class="ri-takeaway-line"></em><span>Đặt giao hàng</span></label>
							</div>
							<div class="form-radio">
								<input type="radio" id="put-to-get" name="order" onclick="slideButtonClick(1); SaveAddress(null);">
								<label for="put-to-get"> <em class="ri-store-3-line"></em><span>Đặt đến lấy</span></label>
							</div>
							<input hidden="" id="topnav-mode-delivery">
						</div>
						<div class="form-group">
							<div class="form-select div-autocomplete" id="select-address">
								<label> <em class="ri-map-pin-line icon-order-delivery active"></em></label>
								<span tabindex="-1" role="presentation" class="k-widget k-autocomplete input-autocomplete k-autocomplete-clearable k-state-default" style=""><input id="autocomplete-address" class="input-autocomplete k-input" placeholder="Nhập địa chỉ của bạn" autocomplete="off" onblur="addressOnblur(this.value, false )" onfocusout="inputAutoComplete_OutFocus('select-address')" onfocus="inputAutoComplete_OnFocus('select-address')" data-role="autocomplete" type="text" role="textbox" aria-haspopup="true" aria-disabled="false" aria-readonly="false" aria-owns="autocomplete-address_listbox" aria-autocomplete="list" aria-busy="false"><span unselectable="on" class="k-icon k-clear-value k-i-close" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading" style="display:none"></span></span>
							</div>
							<div class="form-select d-none div-autocomplete" id="select-store">
								<label> <em class="ri-home-3-line"></em></label>
								<span tabindex="-1" role="presentation" class="k-widget k-autocomplete input-autocomplete k-autocomplete-clearable k-state-default" style=""><input id="autocomplete-store" class="input-autocomplete k-input" autocomplete="off" placeholder="Nhập cửa hàng" onblur="addressOnblur(this.value, true)" onfocusout="inputAutoComplete_OutFocus('select-store')" onfocus="inputAutoComplete_OnFocus('select-store')" data-role="autocomplete" type="text" role="textbox" aria-haspopup="true" aria-disabled="false" aria-readonly="false" aria-owns="autocomplete-store_listbox" aria-autocomplete="list" aria-busy="false"><span unselectable="on" class="k-icon k-clear-value k-i-close" title="clear" role="button" tabindex="-1"></span><span class="k-icon k-i-loading" style="display:none"></span></span>
							</div>
						</div>
					</div>
					<div class="right-wrap">
						<div class="account">
							<div href="/customer/info" class="icon"><em class="ri-account-circle-line"></em></div>
							<div class="login-and-register">
								<a href="/login?returnUrl=%2F" class="register">Đăng nhập</a>
								<span>/</span>
								<a href="/register?returnUrl=%2F" class="login">Tạo tài khoản</a>
							</div>
						</div>
						<div class="language">
							<a href="/changelanguage/1?returnUrl=%2F" title="English">
								<img title="English" alt="English" src="/images/flags/us.png ">
							</a>
						</div>
					</div>
					<div class="button-hambuger">
						<div class="burger-bt-inner">
							<span></span>
						</div>
					</div>
				</div>
				<div class="bottom-wrap">
					<div class="left-wrap">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'pizzacompany'); ?></button> -->
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'container' => 'ul',
								'menu_class' => 'main-menu mega-menu',
								'walker'         => new My_Walker_Nav_Menu()
							)
						);
						?>
						<!-- <ul class="main-menu mega-menu" data-isrtlenabled="false" data-enableclickfordropdown="false">
							<li class=" ">
								<a href="/promotion-4" class="" title="Khuyến mãi"><span> Khuyến mãi</span></a>
							</li>
							<li class=" has-sublist">
								<a href="/pizza" class="with-subcategories" title="Pizza"><span> Pizza</span></a>
								<div class="plus-button"></div>
								<div class="sublist-wrap">
									<ul class="sublist">
										<li class="back-button">
											<span>Back</span>
										</li>
										<li class=" ">
											<a href="/hai-san-pesto" class="" title="Công Thức Đặc Biệt"><span> Công Thức Đặc Biệt</span></a>
										</li>
										<li class=" ">
											<a href="/hai-san-cao-cap" class="" title="Hải Sản Cao Cấp "><span> Hải Sản Cao Cấp </span></a>
										</li>
										<li class=" ">
											<a href="/thap-cam-cao-cap" class="" title="Thập Cẩm Cao Cấp "><span> Thập Cẩm Cao Cấp </span></a>
										</li>
										<li class=" ">
											<a href="/truyen-thong" class="" title="Truyền Thống"><span> Truyền Thống</span></a>
										</li>
										<li class=" ">
											<a href="/pizza-chay" class="" title="Pizza Chay"><span> Pizza Chay</span></a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
						<ul class="mega-menu-responsive">
							<li class="all-categories">
								<span class="labelfornextplusbutton">Danh mục sản phẩm</span>
								<div class="plus-button"></div>
								<div class="sublist-wrap">
									<ul class="sublist">
										<li class="back-button">
											<span>Back</span>
										</li>
									</ul>
								</div>
							</li>


							<li class=" ">

								<a href="/promotion-4" class="" title="Khuyến mãi"><span> Khuyến mãi</span></a>

							</li>



							<li class=" has-sublist">

								<a href="/pizza" class="with-subcategories" title="Pizza"><span> Pizza</span></a>

								<div class="plus-button"></div>
								<div class="sublist-wrap">
									<ul class="sublist">
										<li class="back-button">
											<span>Back</span>
										</li>


										<li class=" ">

											<a href="/hai-san-pesto" class="" title="Công Thức Đặc Biệt"><span> Công Thức Đặc Biệt</span></a>

										</li>



										<li class=" ">

											<a href="/hai-san-cao-cap" class="" title="Hải Sản Cao Cấp "><span> Hải Sản Cao Cấp </span></a>

										</li>



										<li class=" ">

											<a href="/thap-cam-cao-cap" class="" title="Thập Cẩm Cao Cấp "><span> Thập Cẩm Cao Cấp </span></a>

										</li>



										<li class=" ">

											<a href="/truyen-thong" class="" title="Truyền Thống"><span> Truyền Thống</span></a>

										</li>



										<li class=" ">

											<a href="/pizza-chay" class="" title="Pizza Chay"><span> Pizza Chay</span></a>

										</li>

									</ul>
								</div>
							</li>



							<li class=" has-sublist">

								<a href="/ga-ngon-vibe" class="with-subcategories" title="Gà Ngon Vĩbe"><span> Gà Ngon Vĩbe</span></a>

								<div class="plus-button"></div>
								<div class="sublist-wrap">
									<ul class="sublist">
										<li class="back-button">
											<span>Back</span>
										</li>


										<li class=" ">

											<a href="/ga-bbq" class="" title="Gà BBQ"><span> Gà BBQ</span></a>

										</li>



										<li class=" ">

											<a href="/ga-xot-han-2" class="" title="Gà Xốt Hàn"><span> Gà Xốt Hàn</span></a>

										</li>

									</ul>
								</div>
							</li>



							<li class=" ">

								<a href="/nui-bo-lo" class="" title="Nui Bỏ Lò"><span> Nui Bỏ Lò</span></a>

							</li>



							<li class=" ">

								<a href="/my-y" class="" title="Mỳ Ý"><span> Mỳ Ý</span></a>

							</li>



							<li class=" ">

								<a href="/khai-vi" class="" title="Khai vị"><span> Khai vị</span></a>

							</li>



							<li class=" ">

								<a href="/salad" class="" title="Salad"><span> Salad</span></a>

							</li>



							<li class=" ">

								<a href="/thuc-uong" class="" title="Thức uống"><span> Thức uống</span></a>

							</li>



							<li class=" ">

								<a href="/chat-vibe" class="" title="Chất Vĩbe"><span> Chất Vĩbe</span></a>

							</li>



						</ul> -->

					</div>
					<div class="right-wrap">
						<div class="search-button"><em class="mdi mdi-magnify"></em></div>
						<div class="searchbox">
							<form method="get" id="small-search-box-form" action="/search">
								<input type="text" class="search-box-text" id="small-searchterms" autocomplete="off" name="q" placeholder="Tìm kiếm sản phẩm" aria-label="Tìm kiếm cửa hàng">
								<button type="submit"><em class="mdi mdi-magnify"></em></button>

							</form>
						</div>
						<div class="mobile-flyout-wrapper">
							<div class="close-side-menu" style="">
								<span class="close-side-menu-text">Giỏ hàng</span>
								<span class="close-side-menu-btn">Close</span>
							</div>
							<div class="cart custom-cart" id="topcartlink">



								<div class="icon">
									<a href="/cart">
										<em class="ri-shopping-cart-2-line"></em>
									</a>
								</div>

								<p>
									<a href="/cart" style="text-decoration:none;">
										Giỏ hàng
									</a>
								</p>

								<div class="amount">
									<span class="cart-qty" id="_TotalProducts">
										0
									</span>
								</div>


								<div id="flyout-cart" class="flyout-cart" data-removeitemfromcarturl="/EmporiumTheme/RemoveItemFromCart" data-flyoutcarturl="/EmporiumTheme/FlyoutShoppingCart">
									<div class="mini-shopping-cart">
										<div class="flyout-cart-scroll-area">
											<p></p>
											<h5><span style="color: #000000;"><strong>Rất tiếc!!! Bạn không có sản phẩm ở đây.</strong></span></h5>
											<p></p>
										</div>
									</div>
								</div>

								<script>
									var myIdContent = document.getElementById('_TotalProducts').innerHTML;
									setInterval(function() {
										var totalProductEl = document.getElementById('_TotalProducts');
										var amountIdEl = document.getElementById("amount-id");
										if (totalProductEl && amountIdEl && totalProductEl.textContent != amountIdEl.textContent) {
											amountIdEl.textContent = totalProductEl.textContent;

										}

										var amountCartEl = document.getElementById('totals-price-custom');
										var bottomAmount = document.getElementById('total-summary-id');

										if (amountCartEl && bottomAmount && amountCartEl.textContent != bottomAmount.textContent) {
											bottomAmount.textContent = amountCartEl.textContent;

										}

										if (document.getElementById("mobile-total-bottom-id")) {
											if (document.getElementById("_TotalProducts") && window.innerWidth <= 576 && document.getElementById("_TotalProducts").textContent != 0) {

												document.getElementById("mobile-total-bottom-id").style.display = "-webkit-box";
											} else {
												document.getElementById("mobile-total-bottom-id").style.display = "none";
											}
										}

									}, 1000);
								</script>



							</div>
						</div>

					</div>
				</div>
			</div>
			<div class="mobile-wrap">

			</div>
			<div class="backdrop"></div>
			<div class="fake-header">
				<div class="container">
					<div class="header-scroll">
						<div class="left-wrap">
							<div class="logo">



								<a href="/" class="logo">


									<img alt="The Pizza Company" title="The Pizza Company" src="http://thepizzacompany.vn/images/thumbs/000/0003940_logo den.png"> <img class="logo-mobile" src="/Themes/Emporium/Content/img/LogoTPC_Delivery_(VN)_New.png">
								</a>
							</div>
						</div>
						<div class="mid-wrap"> </div>
						<div class="right-wrap">
							<div class="account"><a href="#"> <em class="ri-account-circle-line"></em></a></div>
						</div>
					</div>
				</div>
			</div>
		</header>