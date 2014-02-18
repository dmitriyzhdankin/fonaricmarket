<?php
class CSV {
    private $_csv_file = null;
    public function __construct($csv_file) {
        if (file_exists($csv_file)) {
            $this->_csv_file = $csv_file;
        }
        else throw new Exception("Файл \"$csv_file\" не найден");
    }
    public function setCSV(Array $csv) {
        $handle = fopen($this->_csv_file, "a");
        foreach ($csv as $value) {
            fputcsv($handle, explode(";", $value), ";");
        }
        fclose($handle);
    }
    public function getCSV() {
        $handle = fopen($this->_csv_file, "r");
        $array_line_full = array();
        while (($line = fgetcsv($handle, 0, ";")) !== FALSE) {
            $array_line_full[] = $line;
        }
        fclose($handle);
        return $array_line_full;
    }
}
$list_prods = "";
try {
    $csv = new CSV("ox2.csv");
    $get_csv = $csv->getCSV();
    foreach ($get_csv as $value) {
        $list_prods .= "<div id='" . $value[0] . "' class='grid_3 product' itemscope='' itemtype='http://schema.org/Product'>\n\t\t\t\t\t";
        $list_prods .= "<div class='prev'>\n\t\t\t\t\t\t";
        $list_prods .= "<div class='count_block'><span class='count_block_text'>Осталось на складе</span>";
		if ($value[2] < 2 ) {
			$list_prods .= "<span class='count_block_count count_block_count_small'>" . $value[2] . "</span></div>\n\t\t\t\t\t\t";
		} else {
			$list_prods .= "<span class='count_block_count'>" . $value[2] . "</span></div>\n\t\t\t\t\t\t";
		}
		$list_prods .= "<img itemprop='image' alt='Фонарь " . $value[1] . "' "."src='img/" . $value[5] . "' title='" . $value[6] . "'>\n\t\t\t\t\t";
		$list_prods .= "</div>\n\t\t\t\t\t";
		$list_prods .= "<h3 class='title'>" . $value[1] . "</h3>\n\t\t\t\t\t";
		$list_prods .= "<div class='cart' itemprop='offers' itemscope='' itemtype='http://schema.org/Offer'>\n\t\t\t\t\t\t";
		$list_prods .= "<div class='price'>\n\t\t\t\t\t\t\t<div class='vert'>\n\t\t\t\t\t\t\t\t<div class='price_new' itemprop='price'>" . $value[4] . " руб." ."</div>\n\t\t\t\t\t\t\t\t";
        $list_prods .= "<div class='price_old' itemprop='price'>" . $value[3] . " руб." . "</div>\n\t\t\t\t\t\t\t</div>\n\t\t\t\t\t\t</div>\n\t\t\t\t\t\t";
		$list_prods .= "<input type='hidden' name='product_id' value='" . $value[0] . "'>\n\t\t\t\t\t\t";
		$list_prods .= "<input type='submit' value='Заказать' onclick='open_pop_up(\"#zakaz_30dney_block, this\");'>\n\t\t\t\t\t\t";
		$list_prods .= "<link itemprop='availability' href='http://schema.org/InStock'>\n\t\t\t\t\t</div>\n\t\t\t\t</div>\n\t\t\t\t";
    }
}
catch (Exception $e) {
    echo "Ошибка: " . $e->getMessage();
}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Фонарь бу: дешевые фонари, купить дешево фонарь, дешевые светодиодные фонари</title>
		<meta name="Keywords" content="бу фонарь, дешевые налобные фонари, дешевые подводные фонари, дешевые подствольные фонари, дешевые светодиодные фонари, купить дешево фонарь">
		<meta name="Description" content="Если Вы хотите купить бу фонарь, то заходите к нам! Интернет магазин fonarik-market.ru">
		<meta name="google-site-verification" content="HgxM5mlLK6npvnMkRhl7Bcs-1uABQjKYeeq6zbmKtb0">
		<meta name="yandex-verification" content="5eb55ef94d5b056b">
		<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
		<link type="text/css" rel="stylesheet" href="css/rhinoslider-1.05.css" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen">
		<link href="css/grid.css" media="screen" rel="stylesheet" type="text/css">
		<link rel="shortcut icon" href="img/favicon.png">
		<script src="js/html5.js" type="text/javascript"></script>
		<script src="js/jquery.carouFredSel-5.2.2-packed.js" type="text/javascript"></script>
		<script src="js/scripts.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/rhinoslider-1.05.min.js"></script>
		<script type="text/javascript" src="js/mousewheel.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
	</head>
	<body onload="Changehead();"> 
		<div class="container_12">
			<div id="branding">
				<div class="grid_3" id="grid_3_id">       
					<a href="http://fonarik-market.ru/" title="Fonarik Market" id="grid_3_id_a">
					<img src="img/logo.png" alt="Fonarik Market"></a>
				</div>
				<div id="search_header">
					<div id="top_phones">
						<div class="top_phones_block">
							<span class="top_phones_town">Россия: </span>
							<span class="top_phones_phone">8(800) 555-10-92</span>
						</div>
						<div class="top_phones_block">
							<span class="top_phones_town">Москва: </span>
							<span class="top_phones_phone">7(495) 646-13-69</span>
						</div>
						<div class="top_phones_block">
							<span class="top_phones_town">Санкт-Петербург: </span>
							<span class="top_phones_phone">7(812) 425-32-92</span>
						</div>
						<div class="top_phones_block">
							<span class="top_phones_town">Екатеринбург: </span>
							<span class="top_phones_phone">7(343) 247-82-30</span>
						</div>
					</div>
				</div>
				<div id="tooltip_block">
					<div class="tooltip leftArrow" id="head1">Бесплатно в пределах России</div>
					<div id="top_time_lend">
						<div class="top_time_head">Время работы:</div>
						<div class="top_time_work"></div>
						<div class="top_time_text">ПН-ПТ: с 9:00 до 20:00</div>
						<div class="top_time_work"></div>
						<div class="top_time_text">СБ-ВС: с 10:00 до 19:00</div>
					</div>
				</div>
				<div id="links_header_lend">
					<div clear="all"></div>
					<div id="all_town">
						<img style="width: 60px;position: absolute;margin: 19px 0 0 -20px;" src="images/arrow.GIF" alt="" />
						<a href="#" id="all_town_a">все города ⇓</a>
						<div id="all_town_list" style="display: none;">
							<div class="all_town_list_block">
								<a href="http://fonarik-market.ru/kontakty/#1" class="all_town_list_a">Москва</a>
								<span class="all_town_list_tel">7(495) 646-13-69</span>
							</div>
							<div class="all_town_list_block">
								<a href="http://fonarik-market.ru/fonari-v-sankt-peterburge/" class="all_town_list_a">Санкт-Петербург</a>
								<span class="all_town_list_tel">7(812) 425-32-92</span>
							</div>
							<div class="all_town_list_block">
								<a href="http://fonarik-market.ru/fonari-v-ekaterinburge/" class="all_town_list_a">Екатеринбург</a>
								<span class="all_town_list_tel">7(343) 247-82-30</span>
							</div>
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
				<h1 id="h1_main">Фонари с дефектами упаковки</h1>
				<span id="after-head">Наш магазин предлагает приобрести товары с поврежденной упаковкой или без упаковки по заниженным ценам. Все уцененные изделия находятся в рабочем состоянии и не имеют каких-либо повреждений или дефектов.</span>
				<?php echo $list_prods."\r\n";?>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
		<div id="footer">
			<div class="f_navigation">
				<div class="container_12">
					<div class="grid_3">
						<a href="http://fonarik-market.ru" title="Fonarik Market" id="grid_3_id_a_b">
							<img src="img/logo.png" alt="Fonarik Market">
						</a>  
					</div>
					<div class="grid_22">
						<div class="grid_22_link" id="grid_22_link_f">
							<a href="http://fonarik-market.ru/o-nas/">О нас</a>
						</div>
						<div class="grid_22_link">
							<a href="http://fonarik-market.ru/dostavka/">Доставка</a>
						</div>
						<div class="grid_22_link">
							<a href="http://fonarik-market.ru/oplata/">Оплата</a>
						</div>
						<div class="grid_22_link">
							<a href="http://fonarik-market.ru/garantiya/">Гарантия</a>
						</div>
						<div class="grid_22_link">
							<a href="http://fonarik-market.ru/vozvrat/">Возврат</a>
						</div>
						<div class="grid_22_link">
							<a href="http://fonarik-market.ru/kontakty/">Контакты</a>
						</div>
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
											<label style="margin: 0 5px 0 0;">+7</label>
											<input type="text" name="tel" value="Введите № телефона" onfocus="this.value = ''" class="input_text_form" maxlength="15">
										</span>
										<input class="btn" type="submit" name="submit" value="Жду звонка">
										<input type="hidden" name="title" id="title_contact_form" value="">
										<input type="hidden" name="tovar_url" value="">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>  
			</div>
		</div>
	</body>
</html>