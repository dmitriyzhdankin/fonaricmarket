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
			url: "../contact/products_bu.php",
			data: str,
			success:
			function(msg) {
				if(msg == 'OK') {
					$("#ajax-contact-form").hide();
					$("#zakaz_30dney_text").hide();
					result = '<div class="notification_ok">Спасибо! Ваша заявка принята! Наши менеджеры свяжутся с Вами в ближайшее время!<img id="notification_ok_close" src="http://fonarik.ua/wa-data/public/shop/themes/fonarik/img/close_program.png" onclick="close_pop_up_1clk(\'#zakaz_30dney_block\');"/></div>';
					$('#note').html(result).fadeIn().delay(3000)
					}
					else {
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
	});
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