<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Фонари Санкт-Петербург: купить фонарик или аксессуары в Санкт-Петербурге, лучшая цена в интернет-магазине fonarik-market.ru</title>
		<meta name="Keywords" content="фонари Санкт-Петербург, купить фонари в Санкт-Петербурге, Санкт-Петербург фонарь цена, фонарик в Санкт-Петербурге, аксессуары для фонаря в Санкт-Петербурге, интернет-магазин Санкт-Петербург, fonarik-market.ru">
		<meta name="Description" content="Фонари в Санкт-Петербурге. Хотите купить асессуары для фонарика в Санкт-Петербурге по выгодной цене? Заходите на наш интернет-магазин fonarik-market.ru!">
		<meta name="google-site-verification" content="HgxM5mlLK6npvnMkRhl7Bcs-1uABQjKYeeq6zbmKtb0">
		<meta name="yandex-verification" content="5eb55ef94d5b056b">
		<script type="text/javascript" src="http://fonarik-market.ru/wa-content/js/jquery/jquery-1.8.2.min.js"></script>
		<link type="text/css" rel="stylesheet" href="css/rhinoslider-1.05.css" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen">
		<link href="css/grid.css" media="screen" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="http://fonarik-market.ru/wa-data/public/shop/themes/fonarik/images/favicon.png">
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-6681162-18']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		<script src="js/html5.js" type="text/javascript"></script>
		<script src="js/jquery.carouFredSel-5.2.2-packed.js" type="text/javascript"></script>
		<script type="text/javascript">
			massive_length=3;
			colors_= new Array(massive_length);
			colors_[0] = "silver";
			colors_[1] = "gainsboro";
			colors_[2] = "white";
			var next_ = 0;
			function Changehead() {
				headcolor= colors_[next_];

				document.getElementById("head1").style.color=headcolor;
				next_++;
				if(next_>massive_length-1) next_=0;
				window.setTimeout("Changehead()",500); 
			}
			function open_all_town() {
				$('#all_town_list').slideDown("slow");
			}
			$(function() {
				$('#list_product').carouFredSel({
				prev: '#prev_c1',
				next: '#next_c1',
				auto: false
			});
			$('#list_product2').carouFredSel({
				prev: '#prev_c2',
				next: '#next_c2',
				auto: false
			});
			$('#thumblist').carouFredSel({
				prev: '#img_prev',
				next: '#img_next',
				scroll: 1,
				auto: false,
				circular: false,
			});
			$(window).resize();
			});
			function open_pop_up_1clk(box) {
				$("#fon_box").show();
				$(box).show(500);
			}
			function close_pop_up_1clk(box) {
				$(box).hide(500);
				$("#fon_box").delay(550).hide(1);
			}
			function close_fone_1clk(box) {
				$(box).hide(500);
				$('#onclick_buy').hide(500);
				$("#fon_box").delay(550).hide(1);
			}
			function open_pop_up(box) {
				$("#fon_box").show();
				$(box).show(500);
			}
			function close_pop_up(box) {
				$(box).hide(500);
				$("#fon_box").delay(550).hide(1);
			}
		</script>
		<script type="text/javascript" src="js/rhinoslider-1.05.min.js"></script>
		<script type="text/javascript" src="js/mousewheel.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('#all_town_a').click(function() {
					$('#all_town_list').slideDown("slow");
				return false;
                });
				$(document).click(function(e){ var elem = $("#all_town_list"); 
				if(e.target!=elem[0]&&!elem.has(e.target).length){ elem.slideUp("slow"); } 
				});			
			
				$("#ajax-contact-form").submit(function() {
					var str = $(this).serialize();
					$.ajax({
					type: "POST",
					url: "../contact/odin_click.php",
					data: str,
					success: function(msg) {
						if(msg == 'OK') {
							$("#ajax-contact-form").hide();
							$("#zakaz_30dney_text").hide();
							result = '<div class="notification_ok">Спасибо! Ваша заявка принята! Наши менеджеры свяжутся с Вами в ближайшее время!<img id="notification_ok_close" src="http://fonarik.ua/wa-data/public/shop/themes/fonarik/img/close_program.png" onclick="close_pop_up_1clk(\'#zakaz_30dney_block\');"/></div>';
							$('#note').html(result).fadeIn().delay(3000)
						} else {
							result = msg;
							$('#note').html(result).fadeIn().delay(800).fadeOut("slow");
						}
						$(".btn").on( "click", function() {
						$.when( msg == 'OK' ).done(function() {});
						});
					}
				});
				return false;
				});
				$("#ajax-contact-form_btm").submit(function() {
					var str = $(this).serialize();
					$.ajax({
					type: "POST",
					url: "../contact/odin_click_btm.php",
					data: str,
					success: function(msg) {
						if(msg == 'OK') {
							$("#ajax-contact-form_btm").hide();
							$("#zakaz_30dney_text_btm").hide();
							result = '<div class="notification_ok_btm">Спасибо! Ваша заявка принята! Наши менеджеры свяжутся с Вами в ближайшее время!<img id="notification_ok_close" src="http://fonarik.ua/wa-data/public/shop/themes/fonarik/img/close_program.png" onclick="close_pop_up_1clk(\'#zakaz_30dney_block_btm\');"/></div>';
							$('#note_btm').html(result).fadeIn().delay(3000)
						} else {
							result = msg;
							$('#note_btm').html(result).fadeIn().delay(800).fadeOut("slow");
						}
						$(".btn").on( "click", function() {
						$.when( msg == 'OK' ).done(function() {});
						});
					}
				});
				return false;
				});
				jQuery("#ajax-contact-form-foot").submit(function() {
					var str = jQuery(this).serialize();
					jQuery.ajax({
						type: "POST",
						url: "../contact/contact2.php",
						data: str,
						success: function(msg) {
							if(msg == 'OK') {
								jQuery("#ajax-contact-form-foot").hide();
								result = '<div class="notification_ok_foot">Спасибо! Ваша заявка принята! Наши менеджеры свяжутся с Вами в ближайшее время!</div>';
								jQuery('#note_ok_foot').html(result).fadeIn().delay(3000)
							} else {
								result = msg;
								jQuery('#note_err_foot').html(result).fadeIn().delay(2000).fadeOut("slow");
							}
							jQuery(".btn").on( "click", function() {
								jQuery.when( msg == 'OK' ).done(function() {});
							});
						}
					});
				return false;
				});
				$('#slider').rhinoslider({
					controlsPlayPause: false,
					showBullets: 'never',
					autoPlay: true
				});
				$('#slider1').rhinoslider({
					controlsPlayPause: false,
					showBullets: 'never',
					autoPlay: true
				});
				$('#slider2').rhinoslider({
					controlsPlayPause: false,
					showBullets: 'never',
					autoPlay: true
				});
			});
		</script>
	</head>
	<body onload="Changehead();"> 
		<script type="text/javascript">

		</script>
		<div class="container_12">
			<div id="branding">
				<div class="grid_3" style="width:auto;float:left;display:block;margin:5px 0 0 10px;">       
					<a href="http://fonarik-market.ru/" title="Fonarik Market" style="width:auto;margin:0px;padding:0px;">
					<img src="http://fonarik-market.ru/wa-data/public/shop/themes/fonarik/images/logo.png" alt="Fonarik Market"></a>
				</div>
				<div id="search_header">
					<div id="top_phones">
						<div class="top_phones_block"><span class="top_phones_town">Россия: </span><span class="top_phones_phone">8(800) 555-10-92</span></div>
						<div class="top_phones_block"><span class="top_phones_town">Москва: </span><span class="top_phones_phone">7(495) 646-13-69</span></div>
						<div class="top_phones_block"><span class="top_phones_town">Санкт-Петербург: </span><span class="top_phones_phone">7(812) 425-32-92</span></div>
						<div class="top_phones_block"><span class="top_phones_town">Екатеринбург: </span><span class="top_phones_phone">7(343) 247-82-30</span></div>
					</div>
				</div>
				<div style="float: left;width: 210px;">
					<div class="tooltip leftArrow" id="head1">Бесплатно в пределах России</div>
					<div id="top_time_lend">
						<div class="top_time_head">Время работы:</div><div class="top_time_work"></div><div class="top_time_text">ПН-ПТ: с 9:00 до 20:00</div><div class="top_time_work"></div><div class="top_time_text">СБ-ВС: с 10:00 до 19:00</div>
					</div>
				</div>
				<div id="links_header_lend">
					<div clear="all"></div>
					<div id="all_town">
						<img style="width: 60px;position: absolute;margin: 19px 0 0 -20px;" src="images/arrow.GIF" alt="" />
						<a href="#" id="all_town_a">все города ⇓</a>
						<div id="all_town_list" style="display: none;">
							<div class="all_town_list_block"><a href="http://fonarik-market.ru/kontakty/#1" class="all_town_list_a">Москва</a><span class="all_town_list_tel">7(495) 646-13-69</span></div>
							<div class="all_town_list_block"><a href="http://fonarik-market.ru/fonari-v-sankt-peterburge/" class="all_town_list_a">Санкт-Петербург</a><span class="all_town_list_tel">7(812) 425-32-92</span></div>
							<div class="all_town_list_block"><a href="http://fonarik-market.ru/fonari-v-ekaterinburge/" class="all_town_list_a">Екатеринбург</a><span class="all_town_list_tel">7(343) 247-82-30</span></div>
						</div>
					</div>
					<div id="zakaz_zvonok_block">
						<span id="zakaz_zvonok_fprma" onclick="open_pop_up_1clk('#zakaz_30dney_block');"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div id="block_nav_primary">
			<div class="container_12">
				<div class="grid_12">
					<div class="primary">
						<ul>
							<li><a href="http://fonarik.com/">Блог</a></li>
							<li><a href="http://fonarik-market.ru/category/fonari-i-aksessuary/">Фонари и аксессуары</a></li>
							<li><a href="http://fonarik-market.ru/category/nozhi-i-tochilki/">Ножи и точилки</a></li>
							<li><a href="http://fonarik-market.ru/category/multiinstrumenty/">Мультиинструменты</a></li>
							<li><a href="http://fonarik-market.ru/category/vodopronicaemaya-odezhda/">Водонепроницаемая одежда</a></li>
							<li><a href="http://fonarik-market.ru/category/termobele/">Термобелье</a></li>
							<li><a href="http://fonarik-market.ru/category/elementy-pitaniya/">Элементы питания</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="clear"></div>
		<div id="main">
			<div class="container_12">
				<h1 style="text-align: center;padding-bottom: 10px;">Фонари Санкт-Петербург</h1>
				<span style="display: block;margin: 0 12px;padding: 5px 0 20px 0;text-align: center;font-size: 22px;color: #6e6e6e;font-family: Verdana, serif;">Тел: 7(812) 425-32-92 | Адрес: Лиговский проспект, д.50, корп.13</span>
				<div id="form_service_wrapper">
					<div id="form_service_block">
						<div id="form_service_block_head">
							<span id="form_service_block_head_text1">Оставьте ваш телефон,</span>
							<span id="form_service_block_head_text2">мы перезвоним вам и ответим на все вопросы</span>
							<span id="form_service_block_head_text3">БЕСПЛАТНО!</span>
						</div>
						<div id="form_service_block_form_block">
							<div id="form_service_block_form_block_block">
								<div id="">
									<img alt="" src="images/forma_img_w.png" />
								</div>
								<div id="form_service_block_block_input">
									<div id="note_ok_foot"></div>
									<div id="note_err_foot"></div>
									<form id="ajax-contact-form-foot" action="">
										<div id="form_service_block_form_block_input">
											<input class="form_service_input" type="text" maxlength="15" name="name" value="Ваше имя" onfocus="this.value = ''" />
											<input class="form_service_input" type="text" maxlength="35" name="phone" value="Ваш телефон" onfocus="this.value = ''" />
											<input class="btn_service" type="submit" name="submit" value="Оставить заявку" />
										</div>
									</form>
								</div>
								<div id=""><img alt="" /></div>
							</div>
						</div>
					</div>
				</div>
				<div class="main_text_parag first">
					<p><span style="text-align: center;display: block;font-size: 18px;font-weight: bold;width: 100%;margin: 10px 0;">То, что красивым показалось днём, при хорошей иллюминации окажется не менее прекрасным и ночью.</span><span style="display: block;width: 100%;text-align: center;margin: 15px 0;font-style: italic;">Наши фонари прослужат Вам долго и честно даже в суровых условиях. С пользой и удовольствием пользуйтесь ими на <span style="color: #fff; font-weight: bold;text-shadow: 1px 1px 1px rgba(0,0,0,0.3);">рыбалке, на экскурсиях, в походе, в поездке, в быту.</span></span></p>
				</div>
				<div id="map_spb">
					<img src="images/Fonarik_map_spb.png">
					<div id="small_banners">
						<a href="http://fonarik-market.ru/vozvrat/"><img src="images/vozvrat_tovara.png"></a>
						<a href="http://fonarik-market.ru/dostavka/"><img src="images/bistraya_dostavka.png"></a>
						<a href="http://fonarik-market.ru/garantiya/"><img src="images/garantiya_kachestva.png"></a>
					</div>
				</div>
				<div class="container_12" style="display:block;height:390px;overflow:hidden;">
					<div class="carousel" style="min-height:413px;">
						<div class="list_carousel">
							<div class="grid_2">
								<a id="next_c1" class="next arows_next" href="#" style="display: block;"><span>Вперёд</span></a>
								<a id="prev_c1" class="prev arows_prev" href="#" style="display: block;"><span>Назад</span></a>
								<span class="list_carousel_head">ХИТЫ ПРОДАЖ</span>
							</div>
							<div class="caroufredsel_wrapper" style="float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; width: 1008px; height: 320px; margin: 0px; overflow: hidden;">
								<ul id="list_product" class="list_product" style="float: none; position: absolute; top: 0px; left: 0px; margin: 0px; width: 5040px; height: 320px;">
									<li class="">
										<div class="grid_3 product">
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-pd35-cree-xm-l2-u2/" title="Фонарь Fenix PD35 Cree XM-L2 (U2) — Фонарь PD35 Cree XM-L2 (U2) – новинка от производителя Fenix, выхода которой ценители ожидали с большим нетерпением. Применение нового светодиода XM-L2 от американской компании Cree позволило получить поистине уникальный фонарь.">
													<img alt="Фонарь Fenix PD35 Cree XM-L2 (U2)" src="http://fonarik-market.ru/wa-data/public/shop/products/83/06/683/images/1043/1043.210x210.jpg">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix PD35 Cree XM-L2 (U2)</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">4 500 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-pd35-cree-xm-l2-u2/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fenix-hp25-cree-xp-e/" title="Фонарь Fenix HP25 CREE XP-E — Одна из последних разработок компании Fenix – налобный фонарь HP25. В образце используются два светодиода XP-E (от известного американского производителя светодиодных компонентов Cree).">
													<img alt="Фонарь Fenix HP25 CREE XP-E" src="http://fonarik-market.ru/wa-data/public/shop/products/85/06/685/images/1243/1243.210x210.jpg">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix HP25 CREE XP-E</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">3 500 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fenix-hp25-cree-xp-e/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/velofara-fenix-bt20-cree-xm-l-t6/" title="Велофара Fenix BT20 Cree XM-L (T6) — Великолепная велофара BT20 Cree XM-L (T6) от производителя Fenix. Двухдистанционная система освещения, примененная в фаре, позволяет равномернее и дальше освещать дорогу во время движения, при этом не ослепляя встречных пешеходов.">
													<img alt="Велофара Fenix BT20" src="http://fonarik-market.ru/wa-data/public/shop/products/03/00/3/images/342/342.200x200.png">
												</a>
											</div>
											<h3 class="title">Велофара Fenix BT20 Cree XM-L (T6)</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">5 000 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/velofara-fenix-bt20-cree-xm-l-t6/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-tk22-cree-xm-l2-u2/" title="Фонарь Fenix TK22 Cree XM-L2 (U2) — Обновленный тактический фонарь TK22 Cree XM-L2 (U2) от производителя Fenix. Модель имеет широкий спектр применения, начиная от бытового, а заканчивая использованием в качестве подствольного фонаря на охоте (модель может быть использована  и профессиональными военными).">
													<img alt="Фонарь Fenix TK22" src="http://fonarik-market.ru/wa-data/public/shop/products/31/08/831/images/1923/1923.200x200.png">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix TK22 Cree XM-L2 (U2)</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">5 000 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-tk22-cree-xm-l2-u2/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fenix-e25-cree-xp-e/" title=" Фонарь Fenix E25 Cree XP-E — Одна из новинок этого сезона от компании Fenix – компактный фонарь E25 Cree XP-E. При достаточно скромных массогабаритных параметрах в максимальном режиме модель выдает световой пучок мощностью 187 лм.">
													<img alt="Фонарь Fenix E25" src="http://fonarik-market.ru/wa-data/public/shop/products/14/00/14/images/328/328.200x200.jpg">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix E25 Cree XP-E</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">1 900 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fenix-e25-cree-xp-e/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-ld12-cree-xp-g2-r5/" title="Фонарь Fenix LD12 Cree XP-G2 (R5) — Одной из новинок производителя Fenix является фонарь LD12 Cree XP-G2 (R5). Применение нового светодиода XP-G2 (R5) от американской компании Cree позволило получить фонарь с улучшенными характеристиками.">
													<img alt="Фонарь Fenix LD12" src="http://fonarik-market.ru/wa-data/public/shop/products/52/00/52/images/478/478.200x200.png">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix LD12 Cree XP-G2 (R5)</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">2 750 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-ld12-cree-xp-g2-r5/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-hl10-cree-xp-e/" title="Фонарь Fenix HL10 Cree XP-E — Компактный и легкий фонарь HL10 Cree XP-E от производителя Fenix. Модель можно использовать как налобный фонарь, а также в качестве брелока.">
													<img alt="Фонарь Fenix HL10" src="http://fonarik-market.ru/wa-data/public/shop/products/51/00/51/images/476/476.200x200.png">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix HL10 Cree XP-E</h3>
												<div class="cart">
													<div class="price">
														<div class="vert">
															<div class="price_new">1 500 руб.</div>
														</div>
													</div>
													<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-hl10-cree-xp-e/">
														<input type="submit" value="Купить">
													</form>
												</div>
											</div>
									</li>  
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-rc15-cree-xm-l-u2/" title="Фонарь Fenix RC15 Cree XM-L (U2) — Мощный, компактный, удобный и легкий: все это можно отнести к фонарю серии RC15 Cree XM-L (U2) от производителя Fenix. Данная модель прекрасно подойдет для туристов и любителей активного отдыха на природе.">
													<img alt="Фонарь Fenix RC15" src="http://fonarik-market.ru/wa-data/public/shop/products/56/00/56/images/483/483.200x200.png">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix RC15 Cree XM-L (U2)</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">7 000 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-rc15-cree-xm-l-u2/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="text_form_left">
					<ul id="slider">
						<li><img src="images/fonarik_spb.jpg"></li>
						<li><img src="images/fonarik_spb_1.jpg" alt="" /></li>
						<li><img src="images/fonarik_spb_2.jpg" alt="" /></li>
						<li><img src="images/fonarik_spb_3.jpg" alt="" /></li>
						<li><img src="images/fonarik_spb_4.jpg" alt="" /></li>
						<li><img src="images/fonarik_spb_5.jpg" alt="" /></li>
						<li><img src="images/fonarik_spb_6.jpg" alt="" /></li>
					</ul>
				</div>
				<div class="main_text_parag second">
					<img class="" src="images/fonar_text_bg.png">
					<p>Город на Ниве — Санкт-Петербург — удивительное, притягательное место, насыщенное достопримечательностями, памятниками и монументами, которые можно посещать неоднократно и каждый раз получать новые впечатления.</p>
					<p>Днём этот город может предложить Вам множество открытых музеев, выставок, театров, уютных кафе и прекрасных пейзажей. Однако в ночное время суток Санкт-Петербург преображается в загадочный, романтичный и непостижимый мир чудес и красоты.</p>
				</div>
				<div class="main_text_parag third">
					<img class="" src="images/fonar_text_bg.png">
					<p>Набережные, разводные мосты и знаменитые белые ночи притягивают своей необычайностью не только гостей, но и жителей города. Ночные прогулки по Санкт-Петербургу остаются незабываемыми и, как правило, запечатленными на множестве множеств памятных фото.</p>
					<p>А Вы знаете какой прекрасный вид открывается на Дворцовой площади после заката? И сад Александрийский, словно сказочный, манит таинственностью и красотой. Исаакиевский собор со своей могучей колоннадой равнодушным не оставит никого, - преодолев 211 ступеней, каждый сможет насладиться волшебной панорамой ночного Петербурга.</p>
				</div>
				<div class="main_text_parag digger">
					<img class="" src="images/fonar_text_bg.png">
					<p>Весьма популярным на сегодняшний день является диггерство — путешествия и экскурсии под землёй — интригующее приключение с посещением таинственных, заброшенных мест и старых туннелей, окутанных тайной, легендами и мифами. Если Вы чувствуете, что ещё не всё знаете о Санкт-Петербурге, задумайтесь о диггерских экскурсиях в подземельях города — экстремальный и незабываемый отдых Вам будет обеспечен.</p>
				</div>
				<div class="text_form_left">
					<ul id="slider1">
						<li><img src="images/fonarik_spb_digger.jpg"></li>
						<li><img src="images/fonarik_spb_digger_1.jpg" alt="" /></li>
						<li><img src="images/fonarik_spb_digger_2.jpg" alt="" /></li>
						<li><img src="images/fonarik_spb_digger_3.jpg" alt="" /></li>
						<li><img src="images/fonarik_spb_digger_4.jpg" alt="" /></li>
						<li><img src="images/fonarik_spb_digger_5.jpg" alt="" /></li>
						<li><img src="images/fonarik_spb_digger_6.jpg" alt="" /></li>
					</ul>
				</div>
				<div class="main_text_parag third">
					<img class="" src="images/fonar_text_bg.png">
					<p>Отправляясь на прогулку после заката солнца или в те места, где нет естественного освещения, позаботьтесь о том, чтобы Ваш отдых остался незабываемым и ярким — не забудьте фотоаппарат, хорошее настроение и неисчерпаемый энтузиазм, также не помешает иметь при себе карту города и надёжный осветительный прибор. Поверьте, хороший фонарь пригодится не один раз и значительно повысит качество и объёмы увиденного на ночных экскурсиях.</p>
					<p>На сегодняшний день ассортимент фонарей богат на удобные, яркие и портативные модели, которые не занимают много места, работают очень долго и, при необходимости, оставляют руки свободными для более важных и интересных дел.</p>
				</div>
				<div class="container_12" style="display:block;height:435px;overflow:hidden;">  
					<div class="carousel" style="min-height:413px;">
						<div class="list_carousel">
							<div class="grid_2">
								<a id="next_c2" class="next arows_next" href="#" style="display: block;"><span>Вперёд</span></a>
								<a id="prev_c2" class="prev arows_prev" href="#" style="display: block;"><span>Назад</span></a>
								<span class="list_carousel_head">ПОПУЛЯРНЫЕ ФОНАРИКИ</span>
							</div>
							<div class="caroufredsel_wrapper" style="float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; width: 1008px; height: 320px; margin: 0px; overflow: hidden;">
								<ul id="list_product2" class="list_product" style="float: none; position: absolute; top: 0px; left: 0px; margin: 0px; width: 5040px; height: 320px;">
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-uc40-xp-g2-r5/" title="Фонарь Fenix UC40 XP-G2 R5 — Новинка от Компании Fenix светодиодный фонарь Fenix UC40">
													<img alt="Фонарь Fenix UC40" src="http://fonarik-market.ru/wa-data/public/shop/products/02/08/802/images/1561/1561.200x200.jpg">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix UC40 XP-G2 R5</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">4 500 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-uc40-xp-g2-r5/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-hl30-cree-xp-g-r5/" title="Фонарь Fenix HL30 Cree XP-G (R5) — Компактный и удобный налобный фонарь HL30 Cree XP-G (R5) от производителя Fenix. Корпус модели изготовлен из ударостойкого пластика, поэтому HL30 Cree XP-G (R5) одни из самых легких среди подобных фонарей.">
													<img alt="Фонарь Fenix HL30" src="http://fonarik-market.ru/wa-data/public/shop/products/37/00/37/images/392/392.200x200.png">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix HL30 Cree XP-G (R5)</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">2 800 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-hl30-cree-xp-g-r5/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/velofara-fenix-bt10-cree-xp-g-r5/" title="Велофара Fenix BT10 Cree XP-G (R5) — Современная велофара BT10 Cree XP-G (R5) от производителя Fenix. Двухдистанционная система освещения, примененная в образце, позволяет равномернее и на более значительное расстояние освещать дорогу во время движения.">
													<img alt="Велофара Fenix BT10" src="http://fonarik-market.ru/wa-data/public/shop/products/50/00/50/images/475/475.200x200.png">
												</a>
											</div>
											<h3 class="title">Велофара Fenix BT10 Cree XP-G (R5)</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">3 500 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/velofara-fenix-bt10-cree-xp-g-r5/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-tk11-cree-xp-g-r5/" title="Фонарь Fenix TK11 Cree XP-G (R5) — Небольшой тактический фонарь TK11 Cree XP-G (R5) от производителя Fenix. При достаточно компактных размерах и небольшой массе модель способна «выдать» 285 люмен.">
													<img alt="Фонарь Fenix TK11" src="http://fonarik-market.ru/wa-data/public/shop/products/26/00/26/images/339/339.200x200.png">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix TK11 Cree XP-G (R5)</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">3 000 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-tk11-cree-xp-g-r5/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-pd12-cree-xm-l2-t6/" title="Фонарь Fenix PD12 Cree XM-L2 (T6) — Новинка от компании Fenix.">
													<img alt="Фонарь Fenix PD12" src="http://fonarik-market.ru/wa-data/public/shop/products/26/08/826/images/1861/1861.200x200.jpg">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix PD12 Cree XM-L2 (T6)</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">2 000 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-pd12-cree-xm-l2-t6/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-tk35-cree-xm-l-u2/" title="Фонарь Fenix TK35 Cree XM-L (U2)  — Обновленный вариант популярного фонаря TK35 Cree XM-L (U2) от производителя Fenix. От своего предшественника фонарь отличается улучшенными оптическими характеристиками (за счет замены диода на более современный вариант и улучшенной эргономики).">
													<img alt="Фонарь Fenix TK35" src="http://fonarik-market.ru/wa-data/public/shop/products/29/00/29/images/315/315.200x200.png">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix TK35 Cree XM-L (U2)</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">5 500 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-tk35-cree-xm-l-u2/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-e11-chernyy-v-podarochnoy-upakovke/" title="Фонарь Fenix E11 черный в подарочной упаковке — Удобный, компактный и легкий фонарь E11 Cree XP-E от производителя Fenix. При скромных габаритах и массе всего 23 грамма фонарик способен выдать 115 люмен. Благодаря коробке, в которой поставляется, фонарь отлично подойдет в качестве подарка.">
													<img alt="Фонарь Fenix E11" src="http://fonarik-market.ru/wa-data/public/shop/products/05/08/805/images/1595/1595.200x200.jpg">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix E11 черный в подарочной упаковке</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">1 200 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-e11-chernyy-v-podarochnoy-upakovke/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
									<li class="">
										<div class="grid_3 product">             
											<div class="prev">
												<a href="http://fonarik-market.ru/fonar-fenix-tk51-xm-l2-u2/" title="Фонарь Fenix TK51 XM-L2 (U2) — ТК51 ХМ-L2(U2) — мощный тактический фонарь с максимальной яркостью 1800 люмен. Использование двух независимых друг от друга светодиодов позволяет получить 16 режимов работы. Управление (включение/выключение, стобоскоп, смена режимов) производится трёмя кнопками в боковой части корпуса.">
													<img alt="Фонарь Fenix TK51" src="http://fonarik-market.ru/wa-data/public/shop/products/19/08/819/images/1701/1701.200x200.jpg">
												</a>
											</div>
											<h3 class="title">Фонарь Fenix TK51 XM-L2 (U2)</h3>
											<div class="cart">
												<div class="price">
													<div class="vert">
														<div class="price_new">6 500 руб.</div>
													</div>
												</div>
												<form class="addtocart" method="post" action="http://fonarik-market.ru/fonar-fenix-tk51-xm-l2-u2/">
													<input type="submit" value="Купить">
												</form>
											</div>
										</div>
									</li>  
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div style="float: left;width: 465px;margin: 0 0 0 12px;">
					<div id="zakaz_30dney_block_btm" style="">
						<div id="zakaz_30dney_btm">
							<div id="zakaz_30dney_wrapper_btm">
								<div id="fields_btm">
									<span id="zakaz_30dney_text_btm">Оставьте Ваш телефон и мы перезвоним Вам в течение 30 минут и поможем оформить заказ</span>
									<div id="note_btm"></div>
									<form id="ajax-contact-form_btm" name="1click" action="#">
										<span style="display: block;width: 360px;margin: 0 auto;">
											<label>+7</label><input type="text" name="tel" value="Введите № телефона" onfocus="this.value = ''" class="input_text_form" maxlength="15">
										</span>
										<input class="btn" type="submit" name="submit" value="Жду звонка">
										<input type="hidden" name="title" id="title_contact-form_btm" value="">
										<input type="hidden" name="tovar_url" value="">
									</form>
									<script>
										document.getElementById("title_contact-form_btm").value= 'Фонари Санкт-Петербург ' + window.location.href;
									</script>
								</div>
							</div>
						</div>
					</div>
					<div class="text_form_left bottom_slider">
						<ul id="slider2">
							<li><img src="images/Fenix_banner_bottom.jpg"></li>
							<li><img src="images/Fenix_banner_bottom_1.jpg" alt="" /></li>
							<li><img src="images/Fenix_banner_bottom_2.jpg" alt="" /></li>
							<li><img src="images/Fenix_banner_bottom_3.jpg" alt="" /></li>
							<li><img src="images/Fenix_banner_bottom_4.jpg" alt="" /></li>
							<li><img src="images/Fenix_banner_bottom_5.jpg" alt="" /></li>
							<li><img src="images/Fenix_banner_bottom_6.jpg" alt="" /></li>
							<li><img src="images/Fenix_banner_bottom_7.jpg" alt="" /></li>
						</ul>
					</div>
				</div>
				<div class="main_text_parag bottom">
					<img class="" src="images/fonar_text_bg.png">
					<p><span style="font-size: 20px;line-height: 24px;text-align: center;display: block;"><span style="font-weight: bold;">Fonarik-market.ru</span> — магазин хорошего настроения и товаров для активного отдыха</span></p>
					<p style="font-size: 16px;font-weight: bold;color: red;text-decoration: underline;">Нас выбирают:</p>
					<p><span style="font-weight: bold;">-за честность. </span>Весь предлагаемый товар является оригинальным и качественным, так как мы — официальные представители и дистрибьюторы производителей реализуемых продуктов.</p>
					<p><span style="font-weight: bold;">-за отзывчивость. </span>Мы несём ответственность за соответствие качества заявленному производителем. Наши покупатели получают фирменную гарантию на все фонари — до двух лет, и могут рассчитывать на сервисное обслуживание изделий на протяжение всего срока эксплуатации.</p>
					<p><span style="font-weight: bold;">-за оперативность. </span>Мы стараемся максимально чутко реагировать на Ваши обращения, максимально полно отвечать на Ваши вопросы, максимально быстро доставлять Ваши покупки в любой регион Российской Федерации.</p>
					<p><span style="font-weight: bold;">-за стабильность. </span>Мы 8 лет работаем на рынке России, активно интересуемся практическими применениями наших товаров, собираем интересную информацию и регулярно расширяем ассортимент новинками и новыми брендами.</p>
					<p><span style="font-weight: bold;">-за универсальность. </span>Мы работаем со всеми клиентами, будь то розничные покупатели или оптовые, корпоративные заказчики. У нас регулярно действуют уникальные предложения, специальные условия и сезонные скидки.</p>
				</div>
				<div class="comments_border">
					<h2 class="comments_border_header">Отзывы наших клиентов:</h2>
					<div class="comments_table">
						<div class="comments_image">
							<a class="comments_image" href="https://vk.com/id181010204" target="_blank">
								<img src="https://pp.vk.me/c412921/v412921035/5c76/01PVvZ-NjL4.jpg" alt="" width="50" height="50">
							</a>
						</div>
						<div class="comments_info">
							<div class="comments_wall_text">
								<a class="comments_author" href="https://vk.com/id181010204" target="_blank">Таня Петрова</a>
								<div id="wpt134828136_231">
									<div class="comments_wall_post_text">Ребята, спасибо большое! Всё оперативненько доставили, нам на радость) Пользуемся и думаем: «Отчего раньше не додумались купить налобный фонарик?» Удобно очень!!!</div>
								</div>
							</div>
							<div class="comments_replies">
								<div id="wpe_bottom134828136_231" class="comments_reply_link_wrap">
									<small><span class="comments_rel_date">20 дек в 11:20</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="comments_table">
						<div class="comments_image">
							<a class="comments_image" href="https://vk.com/skibos" target="_blank">
								<img src="https://pp.vk.me/c313518/v313518032/2fbb/HOabLgSkR-k.jpg" alt="" width="50" height="50">
							</a>
						</div>
						<div class="comments_info">
							<div class="comments_wall_text">
								<a class="comments_author" href="https://vk.com/skibos" target="_blank">Оля Скиба</a>
								<div id="wpt134828136_232">
									<div class="comments_wall_post_text">Фонарик, Вы лучшие! Глаза разбегались, хотелось всё. Спасибо вашим операторам, что направили на верный путь и помогли выбрать нужную модельку.</div>
								</div>
							</div>
							<div class="comments_replies">
								<div id="wpe_bottom134828136_232" class="comments_reply_link_wrap">
									<small><span class="comments_rel_date">06 дек в 12:15</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="comments_table">
						<div class="comments_image">
							<a class="comments_image" href="https://vk.com/id6381" target="_blank">
								<img src="https://pp.vk.me/c5221/u06381/e_4eb419cf.jpg" alt="" width="50" height="50">
							</a>
						</div>
						<div class="comments_info">
							<div class="comments_wall_text">
								<a class="comments_author" href="https://vk.com/id6381" target="_blank">Антон Ягупов</a>
								<div id="wpt134828136_233">
									<div class="comments_wall_post_text">Действительно, поблагодарить есть за что. Присоединяюсь к похвалам. Захотел-выбрал-заказал-получил. Всё тип-топ.</div>
								</div>
							</div>
							<div class="comments_replies">
								<div id="wpe_bottom134828136_233" class="comments_reply_link_wrap">
									<small><span class="comments_rel_date">22 ноя в 13:22</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="comments_table">
						<div class="comments_image">
							<a class="comments_image" href="https://vk.com/id60581" target="_blank">
								<img src="https://pp.vk.me/c319930/v319930581/c814/rIcaE1tR6nc.jpg" alt="" width="50" height="50">
							</a>
						</div>
						<div class="comments_info">
							<div class="comments_wall_text">
								<a class="comments_author" href="https://vk.com/id60581" target="_blank">Дима Зубарев</a>
								<div id="wpt134828136_234">
									<div class="comments_wall_post_text">Экскурсии это, конечно, хорошо. Но я выбрал EDC фонарик и рад до беспамятства — классный продукт, цена — ещё лучше, обслужили качественно.</div>
								</div>
							</div>
							<div class="comments_replies">
								<div id="wpe_bottom134828136_234" class="comments_reply_link_wrap">
									<small><span class="comments_rel_date">08 ноя в 18:37</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="comments_table">
						<div class="comments_image">
							<a class="comments_image" href="https://vk.com/id183648" target="_blank">
								<img src="https://pp.vk.me/c30/u183648/e_82b49b44.jpg" alt="" width="50" height="50">
							</a>
						</div>
						<div class="comments_info">
							<div class="comments_wall_text">
								<a class="comments_author" href="https://vk.com/id183648" target="_blank">Павел Дубровин</a>
								<div id="wpt134828136_235">
									<div class="comments_wall_post_text">Сегодня пришла посылка. Спасибо операторам за терпение и отзывчивость. Так держать, Фонарик!</div>
								</div>
							</div>
							<div class="comments_replies">
								<div id="wpe_bottom134828136_235" class="comments_reply_link_wrap">
									<small><span class="comments_rel_date">24 окт в 08:03</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="comments_table">
						<div class="comments_image">
							<a class="comments_image" href="https://vk.com/baikova_anastassia" target="_blank">
								<img src="https://pp.vk.me/c406818/v406818210/aaa9/7Qtksw1Z3FE.jpg" alt="" width="50" height="50">
							</a>
						</div>
						<div class="comments_info">
							<div class="comments_wall_text">
								<a class="comments_author" href="https://vk.com/baikova_anastassia" target="_blank">Анастасия Байкова</a>
								<div id="wpt134828136_236">
									<div class="comments_wall_post_text">Чудесный магазинчик. Уже несколько лет затариваюсь подарками на все праздники у них. Больше новинок, ребята! Ещё больше! Сезон праздников начинается))))</div>
								</div>
							</div>
							<div class="comments_replies">
								<div id="wpe_bottom134828136_236" class="comments_reply_link_wrap">
									<small><span class="comments_rel_date">10 окт в 15:30</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="comments_table">
						<div class="comments_image">
							<a class="comments_image" href="https://vk.com/zmey_gorynych" target="_blank">
								<img src="https://pp.vk.me/c317829/v317829190/8531/mw87yHDa2MA.jpg" alt="" width="50" height="50">
							</a>
						</div>
						<div class="comments_info">
							<div class="comments_wall_text">
								<a class="comments_author" href="https://vk.com/zmey_gorynych" target="_blank">Игорь Богданов</a>
								<div id="wpt134828136_237">
									<div class="comments_wall_post_text">А я скажу кратко: спасибо, будем обращаться ещё</div>
								</div>
							</div>
							<div class="comments_replies">
								<div id="wpe_bottom134828136_237" class="comments_reply_link_wrap">
									<small><span class="comments_rel_date">26 сен в 07:14</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="comments_table">
						<div class="comments_image">
							<a class="comments_image" href="https://vk.com/kochnevan" target="_blank">
								<img src="https://pp.vk.me/c411825/v411825076/8bf9/pPbbNjbXjIo.jpg" alt="" width="50" height="50">
							</a>
						</div>
						<div class="comments_info">
							<div class="comments_wall_text">
								<a class="comments_author" href="https://vk.com/kochnevan" target="_blank">Наталья Кочнева</a>
								<div id="wpt134828136_238">
									<div class="comments_wall_post_text">Присоединяюсь! Вечно эта проблема «что же подарить?». А у ребят просто кладезь подарочных идей, особенно для людей активных и любопытных)))</div>
								</div>
							</div>
							<div class="comments_replies">
								<div id="wpe_bottom134828136_238" class="comments_reply_link_wrap">
									<small><span class="comments_rel_date">12 сен в 11:44</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="comments_table">
						<div class="comments_image">
							<a class="comments_image" href="https://vk.com/id3550721" target="_blank">
								<img src="https://pp.vk.me/c5160/v5160721/a85/48GGSWh3VGQ.jpg" alt="" width="50" height="50">
							</a>
						</div>
						<div class="comments_info">
							<div class="comments_wall_text">
								<a class="comments_author" href="https://vk.com/id3550721" target="_blank">Евгений Корепин</a>
								<div id="wpt134828136_239">
									<div class="comments_wall_post_text">Полезными вещами торгуете, господа))) Развивайтесь и процветайте.</div>
								</div>
							</div>
							<div class="comments_replies">
								<div id="wpe_bottom134828136_239" class="comments_reply_link_wrap">
									<small><span class="comments_rel_date">28 авг в 16:33</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="comments_table">
						<div class="comments_image">
							<a class="comments_image" href="https://vk.com/id18218980" target="_blank">
								<img src="https://pp.vk.me/c322923/v322923980/1dac/eQcYY9WhK9g.jpg" alt="" width="50" height="50">
							</a>
						</div>
						<div class="comments_info">
							<div class="comments_wall_text">
								<a class="comments_author" href="https://vk.com/id18218980" target="_blank">Наталья Щепилова</a>
								<div id="wpt134828136_240">
									<div class="comments_wall_post_text">Фонарик, да вы просто находка! У меня муж — охотник, и я голову себе уже сломала, что ему подарить. Ха! Теперь у меня есть козырь в рукаве! Спасибище!</div>
								</div>
							</div>
							<div class="comments_replies">
								<div id="wpe_bottom134828136_240" class="comments_reply_link_wrap">
									<small><span class="comments_rel_date">14 авг в 12:22</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="comments_table">
						<div class="comments_image">
							<a class="comments_image" href="https://vk.com/id47742728" target="_blank">
								<img src="https://pp.vk.me/c616223/v616223728/2479/_CeIWk8rBG4.jpg" alt="" width="50" height="50">
							</a>
						</div>
						<div class="comments_info">
							<div class="comments_wall_text">
								<a class="comments_author" href="https://vk.com/id47742728" target="_blank">Светлана Колодкина</a>
								<div id="wpt134828136_241">
									<div class="comments_wall_post_text">...и добавить нечего. Разве что передать ещё одну благодарность ребятам в авангарде — товарищи операторы, вы молодцы. Спасибо за полную поддержку и быструю доставку.</div>
								</div>
							</div>
							<div class="comments_replies">
								<div id="wpe_bottom134828136_241" class="comments_reply_link_wrap">
									<small><span class="comments_rel_date">10 авг в 17:22</span></small>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="bottom_brends">
					<img src="images/Fenix_logo.png">
					<img src="images/ferei_logo.png">
					<img src="images/magicshine_logo.png">
					<img src="images/polarion_logo.png">
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
		<div id="footer">
			<div class="f_navigation">
				<div class="container_12">
					<div class="grid_3">
						<a href="http://fonarik-market.ru" title="Fonarik Market" style="width:auto;margin:0px;padding:0px;">
							<img src="http://fonarik-market.ru/wa-data/public/shop/themes/fonarik/images/logo.png" alt="Fonarik Market">
						</a>  
					</div>
					<div class="grid_22">
						<div class="grid_22_link" style="border-left: 1px solid #fff;"><a href="http://fonarik-market.ru/o-nas/">О нас</a></div>
						<div class="grid_22_link"><a href="http://fonarik-market.ru/dostavka/">Доставка</a></div>
						<div class="grid_22_link"><a href="http://fonarik-market.ru/oplata/">Оплата</a></div>
						<div class="grid_22_link"><a href="http://fonarik-market.ru/garantiya/">Гарантия</a></div>
						<div class="grid_22_link"><a href="http://fonarik-market.ru/vozvrat/">Возврат</a></div>
						<div class="grid_22_link"><a href="http://fonarik-market.ru/kontakty/">Контакты</a></div>
					</div>
					<div class="footer_town">
						<div class="footer_town_item_phone_block">
							<ul class="footer_town_item">
								<li>Москва:</li>
								<li>Санкт-Петербург:</li>
								<li>Екатеринбург:</li>
							</ul>
							<ul class="footer_town_item_phone">
								<li>7(495) 646-13-69</li>
								<li>7(812) 425-32-92</li>
								<li>7(343) 247-82-30</li>
							</ul>
						</div>
					</div>
					<div class="clear"></div>
					<div id="fon_box" onclick="close_fone_1clk('#zakaz_30dney_block');"></div>
					<div id="zakaz_30dney_block" style="display: none;">
						<div id="zakaz_30dney">
							<div id="zakaz_30dney_wrapper">
								<div id="fields">
									<span id="zakaz_30dney_text">Оставьте Ваш телефон и мы перезвоним Вам в течение 30 минут и поможем оформить заказ</span>
									<div id="note"></div>
									<form id="ajax-contact-form" name="1click" action="#">
										<span style="display: block;width: 360px;margin: 0 auto;">
											<label>+7</label><input type="text" name="tel" value="Введите № телефона" onfocus="this.value = ''" class="input_text_form" maxlength="15">
										</span>
										<input class="btn" type="submit" name="submit" value="Жду звонка">
										<input type="hidden" name="title" id="title_contact_form" value="">
										<input type="hidden" name="tovar_url" value="">
									</form>
									<script>
										document.getElementById("title_contact_form").value= 'Фонари Санкт-Петербург ' + window.location.href;
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>  
			</div>
		</div>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter22409665 = new Ya.Metrika({id:22409665,
						webvisor:true,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
			s = d.createElement("script"),
			f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="//mc.yandex.ru/watch/22409665" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	<script type="text/javascript"> _shcp = []; _shcp.push({widget_id : 121106, widget : "Chat"}); (function() { var hcc = document.createElement("script"); hcc.type = "text/javascript"; hcc.async = true; hcc.src = ("https:" == document.location.protocol ? "https" : "http")+"://widget.siteheart.com/apps/js/sh.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(hcc, s.nextSibling); })();</script>
	</body>
</html>