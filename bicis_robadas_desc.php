<!DOCTYPE html>
<html lang="es">
		<?php
		//empezamos el php
			$host_db = "localhost";
			$user_db = "root";
			$pass_db = "";
			$db_name = "projecte1_bis";
			$anuncio = $_REQUEST['anuncio'];
			$query = "SELECT * FROM `anunci` WHERE `anu_id` = $anuncio";
			// Hacemos la conexion a la base de datos
			$conexion= mysqli_connect($host_db, $user_db, $pass_db, $db_name);

			if (!$conexion) { //la exclamacion es para negar, es decir para hacer un if not
				echo "Error: No se puedo conectar a MYSQL." . PHP_EOL;
				echo "Errno de depuracion: " . mysqli_connect_errno() . PHP_EOL;
				echo "Error de depuracion. " . mysqli_connect_error() . PHP_EOL;
				exit;
			}
			//hacemos la busqueda en la base de datos
			$busqueda = mysqli_query($conexion, $query);
			//hacemos que mientras hayan resultados en la base de datos que nos lo muestre en result
			while($result = mysqli_fetch_array($busqueda)){
		?>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $result['anu_titol'] ?></title>
		<meta name="description" content="Sección de bicicletas Robadas" />
		<meta name="robots" content="INDEX,FOLLOW" />
		<link rel="icon" href="media/favicon/default/favicon_bikingpoint_web_1.png" type="image/x-icon" />
		<link rel="shortcut icon" href="media/favicon/default/favicon_bikingpoint_web_1.png" type="image/x-icon" />
		<script type="text/javascript" src="js/meigee/jquery.min.js"></script>
		<!--[if lt IE 7]>
		<script type="text/javascript">
		//<![CDATA[
		    var BLANK_URL = 'https://www.bikingpoint.es/js/blank.html';
		    var BLANK_IMG = 'https://www.bikingpoint.es/js/spacer.gif';
		//]]>
		</script>
		<![endif]-->
		<link type="text/css" rel="stylesheet" href="skin/m/1491489593/skin/frontend/blacknwhite/biking/css/styles.css%2c/skin/frontend/base/default/css/widgets.css%2c/skin/frontend/base/default/css/ma/jquery.fancybox-thumbs" media="all" />
		<script type="text/javascript" src="https://www.bikingpoint.es/skin/m/1491395015/js/prototype/prototype.js,/js/lib/ccard.js,/js/prototype/validation.js,/js/scriptaculous/builder.js,/js/scriptaculous/effects.js,/js/scriptaculous/dragdrop.js,/js/scriptaculous/controls.js,/js/scriptaculous/slider.js,/js/varien/js.js,/js/varien/form.js,/js/varien/menu.js,/js/mage/translate.js,/js/mage/cookies.js,/js/,/js/magestore/storepickup.js,/js/varien/biking.js,/js/varien/product.js,/js/varien/configurable.js,/js/calendar/calendar.js,/js/calendar/calendar-setup.js,/skin/frontend/blacknwhite/biking/js/ajaxwishlist.js,/skin/frontend/base/default/js/readmore.js,/skin/frontend/blacknwhite/biking/js/configurableswatches/imagesloaded.js,/skin/frontend/blacknwhite/biking/js/jquery.easing.js,/skin/frontend/blacknwhite/biking/js/jquery.selectbox-0.2.min.js,/skin/frontend/blacknwhite/biking/js/script.js,/skin/frontend/blacknwhite/biking/js/jquery.iosslider.min.js,/skin/frontend/blacknwhite/biking/js/jquery.backstretch.min.js,/skin/frontend/blacknwhite/biking/,/skin/frontend/blacknwhite/biking/js/jquery.ui.totop.js,/skin/frontend/blacknwhite/biking/js/jquery.fancybox.pack.js,/skin/frontend/blacknwhite/biking/sizechartpopup/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js,/skin/frontend/blacknwhite/biking/sizechartpopup/js/fancybox/source/jquery.fancybox.js,/skin/frontend/blacknwhite/biking/sizechartpopup/js/fancybox/source/helpers/jquery.fancybox-buttons.js,/skin/frontend/blacknwhite/biking/sizechartpopup/js/fancybox/source/helpers/jquery.fancybox-thumbs.js,/skin/frontend/blacknwhite/biking/sizechartpopup/js/fancybox/source/helpers/jquery.fancybox-media.js,/skin/frontend/blacknwhite/biking/sizechartpopup/js/fancybox/no-conflict.js,/skin/frontend/blacknwhite/biking/js/cloud-zoom.1.0.2.min.js,/skin/frontend/blacknwhite/biking/js/configurableswatches/product-media.js,/skin/frontend/blacknwhite/biking/js/configurableswatches/swatches-product.js" ></script>
		<link type="text/css" rel="stylesheet" href="skin/m/1429785810/skin/frontend/blacknwhite/biking/css/print.css" media="print" />
		<link type="text/css" rel="stylesheet" href="js/calendar/calendar-win2k-1.css"  />
		<link rel="canonical" href="bicicleta-scott-scale-rc-900-pro-2017.html" />
		<!--[if lt IE 8]>
		<link type="text/css" rel="stylesheet" href="https://www.bikingpoint.es/skin/m/1429785810/skin/frontend/blacknwhite/biking/css/styles-ie.css" media="all" />
		<![endif]-->
		<!--[if lt IE 10]>
		<script type="text/javascript" src="https://www.bikingpoint.es/skin/m/1453138081/skin/frontend/blacknwhite/biking/js/script_ie.js" ></script>
		<![endif]-->
		<!--[if lt IE 9]>
		<script type="text/javascript" src="https://www.bikingpoint.es/skin/m/1429785816/skin/frontend/blacknwhite/biking/js/html5.js,/skin/frontend/blacknwhite/biking/js/css3-mediaqueries.js,/skin/frontend/blacknwhite/biking/js/selectivizr-min.js" ></script>
		<![endif]-->
		<!--[if IE 8]>
		<link type="text/css" rel="stylesheet" href="https://www.bikingpoint.es/skin/m/1429785810/skin/frontend/blacknwhite/biking/css/styles-ie-8.css" media="all" />
		<![endif]-->
		<script type="text/javascript">
		//<![CDATA[
			Mage.Cookies.path     = 'index.html';
			Mage.Cookies.domain   = '.www.bikingpoint.es';
		//]]>
		</script>

		<script type="text/javascript">
		//<![CDATA[
			optionalZipCountries = ["IE","PA","HK","MO"];
		//]]>
		</script>

		<!-- Magic Zoom Plus Magento module version v4.14.5 [v1.6.44:v5.2.1] -->
		<script type="text/javascript">window["mgctlbx$Pltm"] = "Magento";</script>

		<link type="text/css" href="skin/frontend/base/default/css/magiczoomplus/magiczoomplus.css" rel="stylesheet" media="screen" />
		<link type="text/css" href="skin/frontend/base/default/css/magiczoomplus/magiczoomplus.module.css" rel="stylesheet" media="screen" />

		<script type="text/javascript" src="skin/frontend/base/default/js/magiczoomplus.js"></script>
		<script type="text/javascript" src="skin/frontend/base/default/js/magictoolbox.utils.js"></script>
		<script type="text/javascript">
			var mzOptions = {
				'zoomWidth':'auto',
				'zoomHeight':'auto',
				'zoomPosition':'right',
				'zoomDistance':15,
				'selectorTrigger':'click',
				'transitionEffect':true,
				'lazyZoom':false,
				'rightClick':false,
				'zoomMode':'zoom',
				'zoomOn':'hover',
				'upscale':true,
				'smoothing':true,
				'variableZoom':false,
				'zoomCaption':'off',
				'expand':'window',
				'expandZoomMode':'zoom',
				'expandZoomOn':'click',
				'expandCaption':true,
				'closeOnClickOutside':true,
				'cssClass':'',
				'hint':'once',
				'textHoverZoomHint':'Hover to zoom',
				'textClickZoomHint':'Click to zoom',
				'textExpandHint':'Click to expand',
				'textBtnClose':'Close',
				'textBtnNext':'Next',
				'textBtnPrev':'Previous'
			}
		</script>
		<script type="text/javascript">
			var mzMobileOptions = {
				'textHoverZoomHint':'Touch to zoom',
				'textClickZoomHint':'Double tap to zoom',
				'textExpandHint':'Tap to expand'
			}
		</script>
		<script type="text/javascript" src="skin/frontend/base/default/js/magictoolbox_utils.js"></script>
		<script type="text/javascript">
			var magicToolboxLinks = [];
			var magicToolboxProductId = 13468;
			var magicToolboxTool = 'magiczoomplus';
			var magicToolboxToolMainId = 'MagicZoomPlusImage'+magicToolboxProductId; 
			var magicToolboxOptionTitles = ['color'];
			var magicToolboxSwitchMetod = 'click';
			var magicToolboxMouseoverDelay = 0;
			var mjsAddEventMethod = 'je1';

			if(typeof(magicJS.Doc.je1) == 'undefined') mjsAddEventMethod = 'jAddEvent';

			$mjs(window)[mjsAddEventMethod]('load', function() {
				magicToolboxPrepareOptions();
			});
			var allowHighlightActiveSelectorOnUpdate = true;
			mzOptions['onUpdate'] = function(id, oldA, newA) {
				if(allowHighlightActiveSelectorOnUpdate) {
					magicToolboxHighlightActiveSelector(newA);
				}
				allowHighlightActiveSelectorOnUpdate = true;
			};
		</script>

		<!-- Magic Zoom Plus Magento module version v4.14.5 [v1.6.44:v5.2.1] -->
		<script type="text/javascript">window["mgctlbx$Pltm"] = "Magento";</script>
		<link type="text/css" href="skin/frontend/base/default/css/magiczoomplus/magicscroll.css" rel="stylesheet" media="screen" />
		<script type="text/javascript" src="skin/frontend/base/default/js/magicscroll.js"></script>
		<script type="text/javascript">
			MagicScrollOptions = {
				'width':'auto',
				'height':'auto',
				'orientation':'horizontal',
				'mode':'scroll',
				'items':'3',
				'speed':600,
				'autoplay':0,
				'loop':'infinite',
				'step':'auto',
				'arrows':'inside',
				'pagination':false,
				'easing':'cubic-bezier(.8, 0, .5, 1)',
				'scrollOnWheel':'auto',
				'lazy-load':false
			}
		</script>
		<script type="text/javascript">
			jQuery( window ).load(function(){	
				var readmore_number = 2; 
				var active_read_more = 0;
				if(active_read_more == 0 ){
					readmorep(readmore_number);
				}
			});
		</script>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
		<script>
			jQuery(window).load(function() {
				jQuery.backstretch(["https://www.bikingpoint.es/media/images/default/Plantilla.jpg"], {duration: 4000, fade: 750});
			});
		</script>
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:200,300,400,500,600,700,800" rel="stylesheet" type="text/css">
		<script type="text/javascript">
			jQuery(window).load(function() {
				if(!((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i)) || (navigator.userAgent.match(/Android/i)))){
					jQuery().UItoTop({
						text: "Top"
					});
				}
			});
		</script>
		<style type="text/css">
			.container_12 {max-width: 1272px;}
		</style>
		<script type="text/javascript">
			//<![CDATA[
				var Translator = new Translate({"Please select an option.":"Por favor, seleccione una opci\u00f3n.","This is a required field.":"Campo requerido.","Please enter a valid number in this field.":"Por favor, escriba un n\u00famero v\u00e1lido en este campo.","Please use letters only (a-z or A-Z) in this field.":"Por favor, utilice s\u00f3lo letras (a-z \u00f3 A-Z) en este campo.","Please use only letters (a-z), numbers (0-9) or underscore(_) in this field, first character should be a letter.":"Por favor, use s\u00f3lo letras (a-z), n\u00fameros (0-9) o guiones bajos(_) en este campo. El primer car\u00e1cter debe ser una letra.","Please enter a valid phone number. For example (123) 456-7890 or 123-456-7890.":"Por favor, escriba un n\u00famero de tel\u00e9fono v\u00e1lido.","Please enter a valid date.":"Por favor, escriba una fecha v\u00e1lida.","Please enter a valid email address. For example johndoe@domain.com.":"Por favor, escriba una direcci\u00f3n de correo v\u00e1lida. Por ejemplo perez@dominio.com","Please enter 6 or more characters. Leading or trailing spaces will be ignored.":"Por favor, escriba 6 o m\u00e1s caracteres. Los espacios al principio y al final ser\u00e1n ignorados.","Please make sure your passwords match.":"Aseg\u00farese de que sus contrase\u00f1as coinciden.","Please enter a valid URL. For example http:\/\/www.example.com or www.example.com":"Por favor, escriba una URL v\u00e1lida. Por ejemplo http:\/\/www.ejemplo.com o www.ejemplo.com","Please enter a valid social security number. For example 123-45-6789.":"Por favor, escriba un n\u00famero v\u00e1lido de seguridad social.","Please enter a valid zip code. For example 90602 or 90602-1234.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please enter a valid zip code.":"Por favor, escriba un c\u00f3digo postal v\u00e1lido.","Please use this date format: dd\/mm\/yyyy. For example 17\/03\/2006 for the 17th of March, 2006.":"Por favor, use este formato de fecha: dd\/mm\/aaaa. Por ejemplo, 17\/03\/2006 para 17 de marzo de 2006.","Please enter a valid $ amount. For example $100.00.":"Por favor, escriba un importe v\u00e1lido.","Please select one of the above options.":"Por favor, seleccione una de las opciones arriba.","Please select one of the options.":"Por favor, seleccione una de las opciones.","Please select State\/Province.":"Por favor, seleccione Estado\/Provincia","Please enter a number greater than 0 in this field.":"Por favor, escriba un n\u00famero mayor que 0 en este campo.","Please enter a valid credit card number.":"Por favor, escriba un n\u00famero de tarjeta de cr\u00e9dito v\u00e1lido.","Please wait, loading...":"Por favor, espere. Cargando...","Complete":"Completa","Add Products":"A\u00f1adir productos","Please choose to register or to checkout as a guest":"Por favor, elija registrarse o comprar como invitado","Please specify payment method.":"Por favor, especifique forma de pago.","Add to Cart":"A\u00f1adir al carrito","In Stock":"En existencia","Out of Stock":"Sin Stock"});
			//]]>
		</script>
		<link rel="">
	</head>

	<body class=" catalog-product-view floating-header onlyhome-slider boxed-layout hover-scale popup-mobile popup-tablet sticky-mobile sticky-tablet none sidebar-left catalog-product-view product-bicicleta-scott-scale-rc-900-pro-2017 categorypath-bicicletas-html category-bicicletas">
		<!-- Logo Schema added by CreareSEO -->
		<script type="application/ld+json">
			{
				"@context": "http://schema.org",
				"@type": "Organization",
				"url": "https://www.bikingpoint.es/",
				"logo": "https://www.bikingpoint.es/skin/frontend/base/default/images/logo_biking.png"
			}
		</script>
		<script>dataLayer = [{"visitorLoginState":"Logged out","visitorType":"NOT LOGGED IN","visitorLifetimeValue":0,"visitorExistingCustomer":"No","track":1}];</script>

		<!-- Google Tag Manager -->
		<noscript>
			<iframe src="http://www.googletagmanager.com/ns.html?id=GTM-NSSP8B" height="0" width="0" style="display:none;visibility:hidden"></iframe>
		</noscript>
		<script>
			(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-NSSP8B');
		</script>
		<!-- End Google Tag Manager -->

		<!-- Product Schema added by CreareSEO -->
		<script type="application/ld+json">
			{
				"@context": "http://schema.org",
				"@type": "Product",
				"description": "La Bicicleta Scott Scale RC 900 PRO 2017 te va a hacer sentir un profesional. Una bicicleta de alta gama con ruedas de 29 pulgadas, equipada con material de primera y una estética que no deja indiferente a nadie. Es la más económica entre las que monta el cuadro Scale RC Carbon HMX. Viene equipando con una horquilla FOX 32 SC de 100m de recorrido con mando de bloqueo remoto rideloc y eje Boost de 15x110mm.  Monta el grupo Shimano XT M8000 de 1x11v al completo, unas ruedas Syncros XR2.0 de alta gama con cubiertas Scwalbe Rocket Ron Evo 29x2,25. Los componentes restantes son Syncros y Ritchey de alta calidad, resistencia y ligereza para dejar el conjunto en 10 Kilos.",
				"name": "Bicicleta Scott Scale RC 900 PRO 2017",
				"image": "https://www.bikingpoint.es/media/catalog/product/1/8/18024_image_5.jpg",
				"sku": "18024",
				"url": "https://www.bikingpoint.es/bicicleta-scott-scale-rc-900-pro-2017.html",
				"itemCondition": "http://schema.org/NewCondition",
				"offers": [  
				{
					"@type": "Offer",
					"price": "3199.20",
					"availability": "InStock",
					"priceCurrency": "EUR"
				}
				]
			}
		</script>
		<noscript>
			<div class="global-site-notice noscript">
				<div class="notice-inner">
					<p>
						<strong>JavaScript seems to be disabled in your browser.</strong><br />
						You must have JavaScript enabled in your browser to utilize the functionality of this website.
					</p>
				</div>
			</div>
		</noscript>
		<div class="header-wrapper sticky-logo sticky-nav">
			<header id="header">
				<div class="container_12">
					<div class="row clearfix">
						<div class="grid_12">
							<span class="logo">
								<strong></strong>
								<a href="#" title="" class="logo">
									<img src="media/images/default/Logo2_biking.png" alt="" />
								</a>
							</span>
							<div class="header-top-right">
								<div class="quick-access accountlink cartlink checkoutlink loginlink">
									<p class="welcome-msg"><span>93 846 34 93 / 678 73 41 21 (L-J: 8:30-13h/15-19:30h; V:8:00h-15:00h)</span></p>
									<ul class="links">
										<li class="first"><a href="https://www.bikingpoint.es/customer/account/" title="Mi cuenta" class="top-link-account">Mi cuenta</a></li>
										<li ><a href="#" title="Mi lista de deseos" class="top-link-wishlist"><i class="fa fa-heart-o"></i>Mi lista de deseos</a></li>
										<li ><a href="#" title="Mi cesta" class="top-link-cart">Mi cesta</a></li>
										<li ><a href="#" title="Realizar Pedido" class="top-link-checkout">Realizar Pedido</a></li>
										<li class=" last"><a href="login.php" title="Iniciar sesión" class="top-link-login"><i class="fa fa-key"></i>Iniciar sesión</a></li>
									</ul>
								</div>
								<div class="clear"></div>
								<form id="search_mini_form" action="https://www.bikingpoint.es/catalogsearch/result/" method="get">
									<div class="search-open">
										<i class="fa fa-search"></i>
									</div>
									<div class="form-search">
										<div class="indent">
											<label for="search">Search:</label>
											<input id="search" type="text" name="q" value="" class="input-text" maxlength="128" />
											<button type="submit" title="Buscar" class="button"><span><i class="fa fa-search"></i><span>Buscar</span></span></button>
											<div id="search_autocomplete" class="search-autocomplete"></div>
											<script type="text/javascript">
												//<![CDATA[
												var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Buscar en toda la tienda...');
												searchForm.initAutocomplete('https://www.bikingpoint.es/catalogsearch/ajax/suggest/', 'search_autocomplete');
												//]]>
												if(jQuery('body').hasClass('floating-header')){
													/* Touch behavior */
													function searchListener(e){
														var touch = e.touches[0];
														if(jQuery(touch.target).parents('#search_mini_form').length == 0){
															jQuery('#search_mini_form').removeClass('show');
															document.removeEventListener('touchstart', searchListener, false);
														}
													}
													
													jQuery('#search_mini_form .search-open').on('click', function(event){
														event.stopPropagation();
														jQuery('#search_mini_form').toggleClass('show');
														document.addEventListener('touchstart', searchListener, false);
														
														jQuery(document).on('click.searchEvent', function(e) {
															if (jQuery(e.target).parents('#search_mini_form').length == 0) {
																jQuery('#search_mini_form').removeClass('show');
																jQuery(document).off('click.searchEvent');
															}
														});
													});
												}
											</script>
											<div class="clear"></div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="topline">
					<div class="container_12">
						<div class="grid_12">
							<div class="row clearfix">
								<span class="small_logo">
									<strong></strong>
									<a href="#" title="" class="small-logo">
										<img src="media/images/default/small_logo.png" alt="" />
									</a>
								</span>
								<nav class="nav-container">
									<ul class="nav-wide" id="nav-wide">
										<li class="level0 nav-1 first level-top"><a href="#" class="level-top"><span>Inicio</span></a></li>
										<li class="level0 nav-2 level-top parent"><a href="#" class="level-top"><span>Bicicletas</span></a></li>
										<li class="level0 nav-3 first level-top"><a href="#" class="level-top"><span>Componentes</span></a></li>
										<li class="level0 nav-4 level-top parent"><a href="#" class="level-top"><span>Accesorios</span></a></li>
										<li class="level0 nav-5 level-top parent"><a href="#" class="level-top"><span>Nutrici&oacute;n</span></a></li>
										<li class="level0 nav-6 last level-top"><a href="#" class="level-top"><span>Outlet</span></a></li>
										<li class="level0 nav-7 last level-top"><a href="#" class="level-top"><span>Blog</span></a></li>
										<li class="level0 nav-8 last level-top"><a href="#" class="level-top"><span>Tiendas</span></a></li>
										<li class="level0 nav-1 first level-top"><a href="bicis_robadas.php" class="level-top"><span>Robos</span></a></li>
									</ul>
								</nav>
								<div class="menu-button">
									<i class="fa fa-bars"></i><span>Menu</span>
								</div>
								<span class="wishlist-items">0</span>
								<div class="top-cart">
									<div class="block-title no-items cart-button">
										<a id="cartHeader" href="javascript:void(0);">
											<span class="title-cart">
												<i class="fa fa-shopping-cart"></i>
												<span>Cesta</span>
												<span class="cart-divider">&nbsp;</span>
												<span>0</span>
											</span>
										</a>
									</div>
									<div id="topCartContent" class="block-content" style="display:none;">
										<div class="indent">
											<div class="inner-wrapper">
												<p class="cart-empty">
													<i class="fa fa-shopping-cart"></i>
													<span>No tiene artículos en su carrito de compras.</span>
													<span class="small-label">Add some to cart or <a href="login.php" class="top-link-login">login</a></span>
												</p>
											</div>
										</div>
									</div>
									<script type="text/javascript">
										/* Top Cart */
										topCart();

										/* Cart Products Remover */
										function cartProductRemove(element, text){
											jQuery(element).on('click', function(event){
												event.preventDefault();
												jQuery('body').append('<div class="cart-remove-box">'+ text.confirm +'<br/><a href="'+ jQuery(this).attr('href') +'" class="confirm"><span>'+ text.submit + '</span></a><a href="javascript:void(0);" class="cancel"><span>' + text.calcel + '</span></a></div>');
												jQuery('.cart-remove-box a').on('click', function(){
													jQuery('.cart-remove-box').remove();
												});
											});
										}
										cartProductRemove('.top-cart #mini-cart li.item a.btn-remove', {
											confirm: 'Está seguro de quitar este artículo del carrito de compras?',
											submit: 'Ok',
											calcel: 'Cancelar'
										});

										jQuery('#mini-cart li:nth-child(2)').addClass('second');
										jQuery('#mini-cart li:nth-child(3)').addClass('last');
									</script>
								</div>
								<div class="clear"></div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</header>
		</div>

		<script type="text/javascript">
			/* Login ajax */
			jQuery('.top-link-login').on('click', function(){
				ajaxLogin("meigeeactions/login/index.html", false);
				return false;
			});
		</script>
		<div class="content-wrapper">
			<div class="container_12">
				<div class="main-container col1-layout">
					<div class="row clearfix">
						<div class="grid_12">
							<div class="breadcrumbs">
								<ul>
									<li >
										<a href="#" title="Inicio" >Inicio</a>
										<span> / </span>
									</li>
									<li typeof="v:Breadcrumb">
										<a href="bicis_robadas.php" title="Bicicletas Robadas" rel="v:url" property="v:title">Bicicletas Robadas</a>
										<span> / </span>
									</li>
									<li >
										<strong><?php echo $result['anu_titol'] ?></strong>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="row clearfix">
						<div class="grid_12 col-main">

							<script type="text/javascript">
								var optionsPrice = new Product.OptionsPrice({"productId":"13468","priceFormat":{"pattern":"%s\u00a0\u20ac","precision":2,"requiredPrecision":2,"decimalSymbol":",","groupSymbol":"\u00a0","groupLength":3,"integerRequired":1},"includeTax":"true","showIncludeTax":true,"showBothPrices":false,"productPrice":3199.2,"productOldPrice":3999,"priceInclTax":3199.2,"priceExclTax":3199.2,"skipCalculate":1,"defaultTax":21,"currentTax":21,"idSuffix":"_clone","oldPlusDisposition":0,"plusDisposition":0,"plusDispositionTax":0,"oldMinusDisposition":0,"minusDisposition":0,"tierPrices":[],"tierPricesInclTax":[]});
							</script>

							<article>
								<div id="messages_product_view"></div>
								<main class="product-view" itemscope itemtype="http://schema.org/Product">
									<meta itemprop="name" content="Bicicleta Scott Scale RC 900 PRO 2017" />
									<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
										<div class="row clearfix">
											<div class="grid_12 clearfix  product-view product-shop product-name">
												<?php
												//Empezamos a mostrar los resultados de la busqueda usando $result['nombre_del_campo_de_la_bbdd']
													echo "<h1 itemprop='name'>".$result['anu_titol']."</h1>"
												?>
												<div class="sku">
													Código:<span id="codigo-del-producto-en-tienda"><?php echo " ".$result['anu_id']."</br>"; ?></span>
													Fecha del anuncio:<span id="codigo-del-producto-en-tienda"><?php echo " ".$result['anu_data_anunci']."  "; ?></span>
												</div>
											</div>
											<div class="grid_12 alpha omega">
												<div class="product-essential productpage_small no-sidebar">
													<div class="row clearfix">
														<div class="grid_4 lf_ps productpage_small alpha  product-img-box">
															<!-- Begin magiczoomplus -->
															<div class="MagicToolboxContainer selectorsBottom minWidth">
																<?php
																echo "
																<div class='magic-slide mt-active' data-magic-slide='zoom'>
																	<a id='MagicZoomPlusImage13468' class='MagicZoom' href='".$result['anu_foto']."' title='".$result['anu_titol']."' data-mobile-options='textHoverZoomHint:Touch to zoom;textClickZoomHint:Double tap to zoom;textExpandHint:Tap to expand;'>
																		<img itemprop='image' src='".$result['anu_foto']."' alt='".$result['anu_titol']."' />
																	</a>
																</div>
																<div class='magic-slide' data-magic-slide='360'></div>;";
																//</div>";
																?>
															</div>
																<!-- End magiczoomplus -->
																<script type="text/javascript">
																	var useAssociatedProductImages = true;
																</script>
															<img id="image" src="data:image/gif;base64,R0lGODlhAQABAAAAACwAAAAAAQABAAA=" alt="" class="invisible" />
														</div>
														<div class="grid_8  omega product-shop">
															<div class="product-name no-rel"></div>

															<!-- ELEMENTO OPINIONES -->
															<!-- <table class="ratings-table ratings-table-jquery" id="ratings-table-jquery"></table> -->
															<div class="product-collateral">
																<ul class="meigee-tabs">
																	<li id="product_tabs_description"  class="active first"><a href="#">Descripción del robo</a></li>
																	<li id="product_tabs_additional" ><a href="#">Descripción de la bicicleta</a></li>
																	<!--<li id="product_tabs_entregas" ><a href="#">Datos del robo</a></li>-->
																	<!--<li id="product_tabs_product_info_review_list" ><a href="#"></a></li>-->

																</ul>
																<!-- Descripción -->
																<div class="meigee-tabs-content" id="product_tabs_description_contents">
																	<div class="box-collateral">
																		<?php	
																			echo "<b>Descripción del robo:</b> </br>".$result['anu_descripcio_robatori']."</br></br>";
																			echo "<b>Fecha del robo:</b> </br>".$result['anu_data_robatori']."</br></br>";
																			echo "<b>Luegar del robo:</b> </br>".$result['anu_ubicacio_robatori']."</br></br>";
																			echo "<b>Compensacion por encontrar la bicicleta:</b> </br>".$result['anu_compensacio']."</br></br>";
																		?>
																	</div>
																</div>

																<!-- Características -->
																<div class="meigee-tabs-content" id="product_tabs_additional_contents">
																	<div class="box-collateral">
																		<p>
																			<?php
																				echo "<b>Descripción de la bicicleta:</b> </br>".$result['anu_descripcio']."</br></br>";
																				if ($result['anu_marca']=="") {
																					echo "<b>Marca:</b> </br> Marca desconocida</br></br>";
																				}
																				else{
																				echo "<b>Marca:</b> </br>".$result['anu_marca']."</br></br>";
																				}
																				if ($result['anu_model']=="") {
																					echo "<b>Modelo:</b> </br> Modelo desconocido</br></br>";
																				}
																				else{
																				echo "<b>Modelo:</b> </br>".$result['anu_model']."</br></br>";
																				}
																				echo "<b>Antigüedad:</b> </br>".$result['anu_antiguitat']."</br></br>";
																				echo "<b>Color:</b> </br>".$result['anu_color']."</br></br>";
																			}
																			?>
																		</p>
																	</div>
																</div>
																<!-- <div class="meigee-tabs-content" id="product_tabs_entregas_contents">  
																	<div class="box-collateral">
																		<p>Dispones de 15 d&iacute;as desde la fecha de entrega del pedido. Los art&iacute;culos devueltos tendran que estar en su embalaje original y no haber sido usados, a menos que los art&iacute;culos sean defectuosos. Fuera de ese plazo, no se recepcionar&aacute; la mercancia ni se realizaran devoluciones.</p>
																		<p><strong>En tienda SIN COSTES</strong></p>
																		<p>Puedes devolver tu pedido gratuitamente en cualquier tienda Biking Point.</p>
																		<p><strong>Desde domicilio SIN COSTES</strong></p>
																		<p>Puedes solicitar la recogida en tu domicilio, siempre que la devoluci&oacute;n sea por un defecto de f&aacute;brica, en caso contrario si el error de compra es tuyo tendr&aacute;s que asumir los gastos de devoluci&oacute;n.</p>
																		<p>&nbsp;M&aacute;s informaci&oacute;n sobre <a title="Env&iacute;os y devoluciones" href="sobre_bikingpoint.html#envios" target="_blank"><em>Env&iacute;os y devoluciones&nbsp;</em></a></p> 
																	</div> 
																</div> -->
																<div class="meigee-tabs-content" id="product_tabs_product_info_review_list_contents">
																	<aside>
																		<header class="rating-title">
																			<span>Opiniones</span>
																		</header>
																		<div id="review-point"></div>
																		<div class="box-collateral box-reviews row clearfix" id="customer-reviews">
																			<div class="clear"></div>
																		</div>
																	</aside>
																</div>

																<script type="text/javascript">
																//<![CDATA[
																	Varien.Tabs = Class.create();
																	Varien.Tabs.prototype = {
																		initialize: function(selector) {
																			var self=this;
																			$$(selector+' a').each(this.initTab.bind(this));
																		},

																		initTab: function(el) {
																			el.href = 'javascript:void(0)';
																			if ($(el.parentNode).hasClassName('active')) {
																				this.showContent(el);
																			}
																			el.observe('click', this.showContent.bind(this, el));
																		},

																		showContent: function(a) {
																			var li = $(a.parentNode), ul = $(li.parentNode);
																			ul.select('li', 'ol').each(function(el){
																				var contents = $(el.id+'_contents');
																				if (el==li) {
																					el.addClassName('active');
																					contents.show();
																				} else {
																					el.removeClassName('active');
																					contents.hide();
																				}
																			});
																		}
																	}
																	new Varien.Tabs('.meigee-tabs');
																//]]>

																$$('.meigee-tabs > li:last')[0].addClassName('last');
																</script>
															</div>
															<div class="form-review-cst">
																<aside>
																	<header class="rating-title">
																		<span>Opiniones</span>
																	</header>
																	<div id="review-point"></div>
																	<div class="box-collateral box-reviews row clearfix" id="customer-reviews">
																		<div class="form-add">
																			<header class="rating-subtitle">
																				<span>Escriba su propia opinión</span>
																			</header>
																			<form action="https://www.bikingpoint.es/review/product/post/id/13468/" method="post" id="review-form">
																				<input name="form_key" type="hidden" value="0MTFEqga5Dnlgu1R" />
																				<fieldset>
																					<span class="h3">Usted está opinando sobre: <span>Bicicleta Scott Scale RC 900 PRO 2017</span></span>
																					<span class="h4">¿Cómo califica a este producto? <em class="required">*</em></span>
																					<span id="input-message-box"></span>
																					<table class="data-table" id="product-review-table">
																						<col />
																						<col class="col-one" />
																						<col class="col-one" />
																						<col class="col-one" />
																						<col class="col-one" />
																						<col class="col-one" />
																						<thead>
																							<tr>
																								<th>&nbsp;</th>
																								<th><span class="nobr one-star">1 estrella</span></th>
																								<th><span class="nobr two-stars">2 estrellas</span></th>
																								<th><span class="nobr three-stars">3 estrellas</span></th>
																								<th><span class="nobr four-stars">4 estrellas</span></th>
																								<th><span class="nobr five-stars">5 estrellas</span></th>
																							</tr>
																						</thead>
																						<tbody>
																							<tr>
																								<th>Producto</th>
																								<td class="value"><input type="radio" name="ratings[2]" id="Producto_1" value="6" class="radio" /></td>
																								<td class="value"><input type="radio" name="ratings[2]" id="Producto_2" value="7" class="radio" /></td>
																								<td class="value"><input type="radio" name="ratings[2]" id="Producto_3" value="8" class="radio" /></td>
																								<td class="value"><input type="radio" name="ratings[2]" id="Producto_4" value="9" class="radio" /></td>
																								<td class="value"><input type="radio" name="ratings[2]" id="Producto_5" value="10" class="radio" /></td>
																							</tr>
																						</tbody>
																					</table>
																					<input type="hidden" name="validate_rating" class="validate-rating" value="" />
																					<script type="text/javascript">decorateTable('product-review-table')</script>
																				</fieldset>
																				<div class="review-fields">
																					<ul class="form-list">
																						<li class="fields">
																							<div class="field">
																								<label for="nickname_field" class="required"><em>*</em>Apodo</label>
																								<div class="input-box">
																									<input type="text" name="nickname" id="nickname_field" class="input-text required-entry" value="" />
																								</div>
																							</div>
																							<div class="field">
																								<label for="summary_field" class="required"><em>*</em>Resumen de su opinión</label>
																								<div class="input-box">
																									<input type="text" name="title" id="summary_field" class="input-text required-entry" value="" />
																								</div>
																							</div>
																						</li>
																						<li>
																							<label for="review_field" class="required"><em>*</em>Opinión</label>
																							<div class="input-box">
																								<textarea name="detail" id="review_field" cols="5" rows="3" class="required-entry"></textarea>
																							</div>
																						</li>
																					</ul>
																					<div class="buttons-set">
																						<button type="submit" title="Enviar opinión" class="button"><span><span>Enviar opinión</span></span></button>
																					</div>
																				</div>
																			</form>
																			<script type="text/javascript">
																				//<![CDATA[
																					var dataForm = new VarienForm('review-form');
																					Validation.addAllThese(
																						[
																						['validate-rating', 'Por favor, seleccione una de las calficaciones de arriba', function(v) {
																							var trs = $('product-review-table').select('tr');
																							var inputs;
																							var error = 1;

																							for( var j=0; j < trs.length; j++ ) {
																								var tr = trs[j];
																								if( j > 0 ) {
																									inputs = tr.select('input');

																									for( i in inputs ) {
																										if( inputs[i].checked == true ) {
																											error = 0;
																										}
																									}

																									if( error == 1 ) {
																										return false;
																									} else {
																										error = 1;
																									}
																								}
																							}
																							return true;
																						}]
																						]
																						);
																				//]]>
																			</script>
																		</div>
																		<div class="clear"></div>
																	</div>
																</aside>
															</div>
														</div>
														<div class="clear"></div>
													</div>
												</div>
											</div>
											<div class="clear"></div>
										</div>

										<script type="text/javascript">
											//<![CDATA[
												var productAddToCartForm = new VarienForm('product_addtocart_form');
												var aceptarMsgCarrito = false
												function aceptarCarrito(){
													var confirmMsg = 'Los pedidos con  bicicletas Scott se deberán recoger en una de nuestras ';
													confirmMsg += '7 tiendas dónde la ajustaremos de forma personalizada para el usuario.<br>';
													confirmMsg += 'Pulsa <span style=" font-weight: bold">Aceptar </span> para añadir la bicicleta al carrito<br>';
													confirmMsg += 'Pulsa <span style=" font-weight: bold">Cancelar</span> para no añadir la bicicleta y continuar mirando productos'; 

													jQuery("body").append("<div id='aux-msg-tienda' />");	

													if(!jQuery(".ajax-box-overlay").length){
														jQuery("#aux-msg-tienda").after('<div class="ajax-box-overlay"></div>');
														jQuery(".ajax-box-overlay").fadeIn('medium');
													}

													var auxHtml = '<div class="close-button"><i class="fa fa-times"></i></div>' 
													auxHtml += '<div class="page-title"><h1>Recogida en tienda</h1></div>'
													auxHtml += '<div class="msg-content">'  
													auxHtml += confirmMsg   
													auxHtml +="<br><br><button id='cancelar' name='cancelar' title='Cancelar' class='button' type='button' onClick='clearAuxMsg()'><span><span>Cancelar</span></span></button>\n"
													auxHtml +="    <button id='aceptar'   name='enviar'   title='aceptar'   class='button' type='button' onClick='aceptarMsgCarrito = true;productAddToCartForm.submit();clearAuxMsg()'><span><span>Aceptar</span></span></button>"
													auxHtml += "</div>"
													jQuery("#aux-msg-tienda").html(auxHtml).animate({
														opacity: 1,
														top: '100px'
													}, 500 ); 

													clearAllMsg();
												}


												productAddToCartForm.submit = function(button, url) {

													comprobarTallaColor()
													if (this.validator.validate()) {
														aceptarCarrito()
														if (!aceptarMsgCarrito) {
															return false;
														}			
														var form = this.form;
														var oldUrl = form.action;
														if (url) {
															form.action = url;
														}
														var e = null;
														// Start of our new ajax code
														if (!url) {
															url = jQuery('#product_addtocart_form').attr('action');
														}
														
														url = url.replace("checkout/cart","ajax/index"); // New Code
														
														if (window.location.protocol == "bicicleta-scott-scale-rc-900-pro-2017.html"){
															url = url.replace('/http:/ig', 'bicicleta-scott-scale-rc-900-pro-2017.html');
														}
														
														var data = jQuery('#product_addtocart_form').serialize();
														data += '&isAjax=1';
														jQuery('#ajax_loader').show();
														
														function ajaxComplete(){
															jQuery.ajax({
																url: "https://www.bikingpoint.es/meigeeactions/updatecart/",
																cache: false
															}).done(function(html){
																jQuery('header#header .top-cart').replaceWith(html);
																jQuery('.top-cart #mini-cart li.item a.btn-remove').on('click', function(event){
																	event.preventDefault();
																	jQuery('body').append('<div class="cart-remove-box">Está seguro de quitar este artículo del carrito de compras?<br/><a href="'+ jQuery(this).attr('href') +'" class="confirm"><span>Ok</span></a><a href="#" class="cancel"><span>Cancelar</span></a></div>');
																	jQuery('.cart-remove-box a').on('click', function(){
																		link = jQuery(this).attr('href');
																		jQuery.ajax({
																			url: link,
																			cache: false
																		});
																		jQuery('.cart-remove-box').remove();
																		setTimeout(function(){window.location.reload();}, 800);
																	});
																});
																jQuery('#ajax_loader').hide();
																jQuery('body').append("<div class='add-to-cart-success'><span class='product-image'><img src='https://www.bikingpoint.es/media/catalog/product/cache/1/small_image/68x/95f3af747510dc57a02cd0fce26b2969/1/8/18024_image_5.jpg' alt='' ></span>Bicicleta Scott Scale RC 900 PRO 2017 fue añadido al carrito de la compra.<br/><a href='https://www.bikingpoint.es/checkout/cart/'><span><span>Ir a la cesta</span></span></a><a href='#' class='btn-remove'><i class='fa fa-times'></i></a></div>");
																setTimeout(function () {jQuery('.add-to-cart-success').slideUp(500)}, 5000);
																jQuery('.add-to-cart-success a.btn-remove').click(function(){
																	jQuery(this).parent().slideUp(500);
																	return false;
																})
															});
														}
														
														try {
															jQuery.ajax( {
																url : url,
																dataType : 'json',
																type : 'post',
																data : data,
																complete: function(){
																	if(jQuery('body').hasClass('product-edit') || jQuery('body').hasClass('wishlist-index-configure')){
																		jQuery.ajax({
																			url: "https://www.bikingpoint.es/meigeeactions/updatecart/",
																			cache: false
																		}).done(function(html){
																			jQuery('header#header .top-cart').replaceWith(html);
																		});
																		jQuery('#ajax_loader').hide();
																		jQuery('body').append("<div class='add-to-cart-success'><span class='product-image'><img src='https://www.bikingpoint.es/media/catalog/product/cache/1/small_image/68x/95f3af747510dc57a02cd0fce26b2969/1/8/18024_image_5.jpg' alt='' ></span>Bicicleta Scott Scale RC 900 PRO 2017 Updated<br/><a href='https://www.bikingpoint.es/checkout/cart/'><span><span>Ir a la cesta</span></span></a><a href='#' class='btn-remove'><i class='fa fa-times'></i></a></div>");
																		setTimeout(function () {jQuery('.add-to-cart-success').slideUp(500)}, 5000);
																		jQuery('.add-to-cart-success a.btn-remove').click(function(){
																			jQuery(this).parent().slideUp(500);
																			return false;
																		})
																	}
																},
																success : function(data) {
																	if(data.status == 'ERROR'){
																		jQuery('body').append('<div class="add-to-cart-success">' + data.message+'<a href="#" class="btn-remove"><i class="fa fa-times" /></a></div>');
																	}else{
																		ajaxComplete();
																	}
																}
															});
														} catch (e) {
														}
														// End of our new ajax code
														this.form.action = oldUrl;
														if (e) {
															throw e;
														}
													}
												}.bind(productAddToCartForm);

												productAddToCartForm.submitLight = function(button, url){
													if(this.validator) {
														var nv = Validation.methods;
														delete Validation.methods['required-entry'];
														delete Validation.methods['validate-one-required'];
														delete Validation.methods['validate-one-required-by-name'];
														if (this.validator.validate()) {
															if (url) {
																this.form.action = url;
															}
															this.form.submit();
														}
														Object.extend(Validation.methods, nv);
													}
												}.bind(productAddToCartForm);
											//]]>
										</script>
										<!-- //////////////  SECCIÓN DE PRODUCTOS RELACIONADOS \\\\\\\\\\\\\\\ -->
										<!--  -->
										<!--  -->
										<!--  -->
										<!--  -->
										<!-- <div class="related-wrapper-bottom">
											<div class="block block-related">
												<div class="block-title">
													<strong><span>Productos relacionados</span></strong>
												</div>
												<div class="block-content">
													<p class="block-subtitle">Compruebe los elementos a añadir a la cesta o&nbsp;<a href="#" onclick="selectAllRelated(this); return false;">seleccionar todo</a></p>
													<div class="no-slider" >
														<ul class="carousel-ul">
															<li class="item">
																<div class="product">
																	<div class="grid-indent">
																		<a href="bicicleta-scott-scale-rc-900-world-cup-2017.html" title="Bicicleta Scott Scale RC 900 World Cup 2017" class="product-image">
																			<img src="media/catalog/product/cache/1/thumbnail/390x/b767493ff1277d963587472d31302b89/1/8/18023_image_5.jpg" alt="Bicicleta Scott Scale RC 900 World Cup 2017" /></a>
																			<p class="product-name">
																				<a href="bicicleta-scott-scale-rc-900-world-cup-2017.html">Bicicleta Scott Scale RC 900 World Cup 2017</a>
																			</p>
																		<div class="product-details">
																			<div class="price-box">
																				<p class="special-price t8 pr-fin">
																					<span class="price-label">Special Price</span>
																					<span class="price" id="product-price-13467-related">
																					4 399,20 €                </span>
																					<span class="price-msg">IVA incluido 
																						<span class="price-vrd-msg">/ Gastos de envío gratuitos</span>
																					</span>
																				</p>
																				<div class="price-block">
																					<div class="old-price t5">
																						<span class="price-label"></span>
																						<span class="price" id="old-price-13467 -related">PVP 5 499,00 €</span>
																					</div>
																					<div class="ahorro t5"> 
																						<span class="ahorro-txt">Te ahorras 1 099,80 €</span>
																					</div>
																					<div class="availability in-stock">
																						<span>En stock</span>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</div>
												<script type="text/javascript">
											        //<![CDATA[
														$$('.related-checkbox').each(function(elem){
															Event.observe(elem, 'click', addRelatedToProduct)
														});

														var relatedProductsCheckFlag = false;
														function selectAllRelated(txt){
															if (relatedProductsCheckFlag == false) {
																$$('.related-checkbox').each(function(elem){
																	elem.checked = true;
																});
																relatedProductsCheckFlag = true;
																txt.innerHTML="deselect all";
																txt.addClassName('selected');
															} else {
																$$('.related-checkbox').each(function(elem){
																	elem.checked = false;
																});
																relatedProductsCheckFlag = false;
																txt.innerHTML="seleccionar todo";
																txt.removeClassName('selected');
															}
															addRelatedToProduct();
														}

														function addRelatedToProduct(){
															var checkboxes = $$('.related-checkbox');
															var values = [];
															for(var i=0;i<checkboxes.length;i++){
																if(checkboxes[i].checked) values.push(checkboxes[i].value);
															}
															if($('related-products-field')){
																$('related-products-field').value = values.join(',');
															}
														}
													//]]>
											    </script>
											</div>
										</div> -->
										<!-- //////////////  SECCIÓN DE PRODUCTOS RELACIONADOS \\\\\\\\\\\\\\\ -->
										<!--  -->
										<!--  -->
										<!--  -->
										<!--  -->
									</div>
									<script type="text/javascript">
										var skuDataBiking = {"13480":{"sku":"18024M","color":"515","talla":"26"},"13481":{"sku":"18024S","color":"515","talla":"25"},"13482":{"sku":"18024L","color":"515","talla":"27"},"13483":{"sku":"18024XL","color":"515","talla":"75"}};
										console.log("skuDataBiking")
										console.log(skuDataBiking)
									</script>
								</main>
							</article>
							<script type="text/javascript">
								var lifetime = 3600;
								var expireAt = Mage.Cookies.expires;
								if (lifetime > 0) {
									expireAt = new Date();
									expireAt.setTime(expireAt.getTime() + lifetime * 1000);
								}
								Mage.Cookies.set('external_no_cache', 1, expireAt);
							</script>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>

		<footer id="footer">
			<div class="footer-bottom-wrapper">
				<div class="container_12">
					<div class="row clearfix">
						<div class="grid_3 alpha">
							<div class="f-left">
								<hr class="indent-12 white-space">
								<address></address>
							</div>
						</div>
						<div class="grid_6">
							<hr class="indent-12 white-space">
							<div class="footer-links a-center">
								<ul>
									<li><a href="#" rel="nofollow">Sobre Biking Point</a></li>
									<li><a href="#" rel="nofollow">Condiciones</a></li>
									<li><a href="#" rel="nofollow">Compra segura</a></li>
									<li class="privacy"><a href="#" rel="nofollow">Pol&iacute;tica de privacidad</a></li>
									<li class="last"><a href="#">Contacto</a></li>
								</ul>
							</div>
						</div>
						<div class="grid_3 omega">
							<div class="f-right">
								<ul class="social-links">
									<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a class="googleplus" href="#"><i class="fa fa-google-plus"></i></a></li>
									<li><a class="pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
									<li><a class="youtube" href="#"><i class="fa fa-youtube"></i></a></li>
									<li><a class="instagram"  href="#"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>

		<script src="js/mirasvit/code/feedexport/performance.js" type="text/javascript"></script>
		<!-- <div id="cookienotice-container" class="cookienotice-container cookienotice-bar cookienotice-bar-bottom">
			<! - - Content - ->
			<div class="cookienotice-content">
				<!- - Message - ->
				<div class="cookienotice-message">
					Esta web utiliza cookies. Si continuas navegando este sitio acceptas el uso de dichas cookies.
					<a title="Más Información" class="cookienotice-page-link" href="cookies.html">Más Información</a>
				</div>
				<!- - Close Button - ->
				<div class="cookienotice-button-container">
					<a title="Cerrar" id="cookienotice-close-button" class="cookienotice-button"><strong>Aceptar y cerrar</strong></a>
				</div>
			</div>
		</div> -->

		<!-- <script type="text/javascript">
			/**
			* Cookie Set : Notice has been shown
			*/
			createCookie('ow_cookie_notice', 'shown', 31);

				/**
				* Clicking the close button removes the notice
				*/
				$('cookienotice-close-button').observe('click', function(event) {
					$('cookienotice-container').remove();
					/**
					* Cookie Set : Notice has been closed
					*/
					createCookie('ow_cookie_notice', 'closed', 31);
				});

			/**
			* Cookie Set JS Function
			*/
			function createCookie(name, value, days) {
				if (days) {
					var date = new Date();
					date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
					var expires = "; expires=" + date.toGMTString();
				} else {
					var expires = "";
				}
				document.cookie = name + "=" + value + expires + "; path=/";
			}
		</script> -->
	
	</body>
</html>