<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
<title>503</title>
<meta name="Keywords" content="" >
<meta name="Description" content="" >
<meta name="google-site-verification" content="HgxM5mlLK6npvnMkRhl7Bcs-1uABQjKYeeq6zbmKtb0">
<meta name="yandex-verification" content="5eb55ef94d5b056b" >
    
    <script type="text/javascript" src="/wa-content/js/jquery/jquery-1.8.2.min.js"></script>
              
            <!-- shop app css -->
  <link rel="shortcut icon" href="/wa-data/public/shop/themes/fonarik/images/favicon.png">
  <link rel="stylesheet" href="/wa-data/public/shop/themes/fonarik/style.css" type="text/css" media="screen" >
  <link href="/wa-data/public/shop/themes/fonarik/css/grid.css" media="screen" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="/wa-data/public/shop/themes/fonarik/css/jquery.jqzoom.css" type="text/css" >

    <!-- js -->
    <script type="text/javascript" src="/wa-content/js/jquery-wa/wa.core.js"></script>
    


  <script src="/wa-data/public/shop/themes/fonarik/js/html5.js" type="text/javascript" ></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/jflow.plus.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/jquery.carouFredSel-5.2.2-packed.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/checkbox.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/radio.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/selectBox.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/js/jquery.jqzoom-core.js" type="text/javascript"></script>
  <script src="/wa-data/public/shop/themes/fonarik/custom.shop.js" type="text/javascript"></script>
        
  <script type="text/javascript">
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
  </script>
  <script type="text/javascript">
       $(document).ready(function(){
           
           
           
          $("button").click(function(){
             $(this).addClass('click')
          });

        $('.jqzoom').jqzoom({
            zoomType: 'standard',
            lens:true,
            preloadImages: true,
            alwaysOn:false
        });

        $('#wrapper_tab a.tab_link').click(function() {
            if ($(this).attr('class') != $('#wrapper_tab').attr('class') ) {
                $('#wrapper_tab').attr('class',$(this).attr('class'));
            }
            return false;
        });
        
         $("#myController").jFlow({
            controller: ".control", 
            slideWrapper : "#jFlowSlider", 
            slides: "#slider", 
            selectedWrapper: "jFlowSelected", 
            width: "984px", 
            height: "300px",  
            duration: 400,  
            prev: ".slidprev", 
            next: ".slidnext", 
            auto: true
    });
    $('p').each(function() {
    var $this = $(this);
    if($this.html().replace(/\s|&nbsp;/g, '').length == 0)
        $this.remove();
    $("select.select").selectBox();
});
        
    });
  </script>

    
    
  
      <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-6681162-17']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body><style type="text/css">
  .tooltip {
       text-align: center;
font-size: 12px;
color: #808183;
position: relative;
padding: 5px;
border: 1px solid #ccc;
-moz-border-radius: 5px;
-webkit-border-radius: 5px;
border-radius: 5px;
background-color: #fff;
float: left;
margin: 6px 0 0px 7px;
width: 190px; 
  }
  .tooltip:before,
.tooltip:after {
    content: "\2666";
font-family: monospace;
font-size: 50px;
line-height: 52px;
text-align: center;
position: absolute;
overflow: hidden;
width: 40px;
height: 50px;
-moz-user-select: -moz-none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
}
.tooltip:before {
    color:#ccc;
}
.tooltip:after {
    color:#fff;
}
  .leftArrow:before,
.leftArrow:after {
    top: 55%;
left: -15px;
margin-top: -25px;
clip: rect(0px, 15px, 30px, 0px);
}
.leftArrow:before {
}
.leftArrow:after {
    left: -14px;
}
  .primary ul li a {
       padding: 21px 15px;
 
  }
</style>
<div class="container_12">
    <div id="top">
    
    <a href="/" title="Fonarik Market" id="top_home"></a>
    
    
      <div class="grid_3" id="top_pages_nav">
                   <a href="/oplata/" >Оплата</a>
             <a href="/dostavka/" >Доставка</a>
             <a href="/garantiya/" >Гарантия</a>
             <a href="/vozvrat/" >Возврат</a>
             <a href="/kontakty/" >Контакты</a>
       
      </div><!-- .grid_3 -->
      
       
      <div class="grid_3" id="top_loginblock">
       
      <a href="/my" id="top_profile"><span></span>Профиль</a>&nbsp;
      <a href="/?logout" id="top_logout"><span></span>Выйти</a>
            </div>
      
    </div>

    <div class="clear"></div>

    <div id="branding">
      <div class="grid_3" style="width:auto;float:left;display:block;margin:5px 0 0 10px;" >       
          <a href="/" title="Fonarik Market" style="width:auto;margin:0px;padding:0px;">
          <img src="/wa-data/public/shop/themes/fonarik/images/logo.png" alt="Fonarik Market"></a>
      </div><!-- .grid_3 -->



<div id="search_header">
<div id="top_phones"><sup>(495)</sup>&nbsp;<span>646-13-69</span>&nbsp;&nbsp;&nbsp;<sup>8 800</sup>&nbsp;<span>555-10-92</span></div>
<div id="top_time"><span></span><p>Время&nbsp;работы:&nbsp;ПН-ПТ&nbsp;с&nbsp;9:00&nbsp;до&nbsp;20:00/СБ,ВС&nbsp;с&nbsp;10:00&nbsp;до&nbsp;19:00</p></div>
<form method="get" id="searchform" class="search" action="/search/">
<input class="text entry_form" type="text" name="query"  id="search">
<input type="submit" class="submit" name="Submit" value="" >
</form>  
</div>
<div style="float: left;width: 200px;">
  <div class="tooltip leftArrow">Бесплатно в пределах России</div>
    <div class="grid_6" id="links_header" style="margin: 10px 0 0 0;height: 0;">
    <div id="online_call"></div>
        <form method="POST" accept-charset="utf-8" id="siteheart_button_121106" action="https://siteheart.com/webconsultation/121106?byhref=1" target="siteheart_button_121106" >
            <input type="hidden" name="_charset_">
            <input type="hidden" name="data[your_name]" value="your_value">
            <a href="https://siteheart.com/webconsultation/121106?byhref=1" target="siteheart_sitewindow_121106" onclick="_gaq.push(['_trackEvent', 'button', 'ask']);o=window.open;o('https://siteheart.com/webconsultation/121106', 'siteheart_sitewindow_121106', 'width=550,height=400,top=30,left=30,resizable=yes'); return false;" style="margin: 5px 0px 0px 10px;">
                <span></span><span class="text">Онлайн-консультация</span></a>
           </form>
           <a style="cursor:pointer;margin: 5px 0px 0px 10px;" onclick="popupWin = window.open('/zvonok.php', 'contacts', 'location,width=400,height=300,top=0'); popupWin.focus();return false;">
          <span class="linkcall"></span><span class="text">Обратный звонок</span>
      </a>
 </div><!-- .grid_6 -->
</div>
      

<div class="grid_3"  id="cart_header">
              <p class="cart_head">В корзине: <span></span></p>
       <a class="cart_li" href="/cart/" id="cart_count">0 товаров</a>
       <p class="cart-total-container">На сумму: <span class="cart-total">0 руб.</span></p>
       <a class="cart_li_checkout" href="/checkout/">Оформить заказ</a>
</div>

</div><!-- #branding -->
</div><!-- .container_12 -->

  <div class="clear"></div>

  <div id="block_nav_primary">
    <div class="container_12">
      <div class="grid_12">
        <div class="primary">
          <ul><li><a href="http://fonarik.com/">Блог</a></li><li><a href="http://fonarik-market.ru/category/fonari-i-aksessuary/">Фонари и аксессуары</a></li><li><a href="http://fonarik-market.ru/category/nozhi-i-tochilki/">Ножи и точилки</a></li><li><a href="http://fonarik-market.ru/category/multiinstrumenty/">Мультиинструменты</a></li><li><a href="http://fonarik-market.ru/category/vodopronicaemaya-odezhda/">Водонепроницаемая одежда</a></li><li><a href="http://fonarik-market.ru/category/termobele/">Термобелье</a></li><li><a href="http://fonarik-market.ru/category/elementy-pitaniya/">Элементы питания</a></li></ul>
        </div><!-- .primary -->
      </div><!-- .grid_12 -->
    </div><!-- .container_12 -->
  </div><!-- .block_nav_primary -->

  <div class="clear"></div>
  <!-- navigation breadcrumbs -->
 <div id="main">  
  <div class="container_12">
            <div id="sidebar" class="grid_3">
        <!-- plugin hook: 'frontend_nav' -->
    
        
    <!-- info pages -->
            <div class="aside" >         
    <div class="left_menu">
        
     </div></div>
    
    <!-- category tree -->
  
    <div class="aside" id="categories_nav">
        <h3>Категории</h3>            
        <div class="left_menu"><ul>
                        <li><a href="/category/fonari-i-aksessuary/">Фонари и аксессуары</a></li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                <li><a href="/category/nozhi-i-tochilki/">Ножи и точилки</a></li>
                                                                                                                                <li><a href="/category/multiinstrumenty/">Мультиинструменты</a></li>
                                                                                <li><a href="/category/vodopronicaemaya-odezhda/">Водонепроницаемая одежда DexShell</a></li>
                                                                                <li><a href="/category/termobele/">Термобелье Lasting</a></li>
                                                                                                                <li><a href="/category/elementy-pitaniya/">Элементы питания</a></li>
                                                     </ul></div><!-- .left_menu -->
  </div>
       
        
        
    <!-- tag cloud -->
       <div class="aside" id="tags">
             <h3>Теги</h3>      
                            <a href="/tag/Ganzo/" style="font-size: 100%;">Ganzo</a>
                            <a href="/tag/Gerber/" style="font-size: 150%;">Gerber</a>
                            <a href="/tag/Fenix/" style="font-size: 150%;">Fenix</a>
                            <a href="/tag/Bear+Grylls/" style="font-size: 96%;">Bear Grylls</a>
                            <a href="/tag/Work+Sharp/" style="font-size: 80%;">Work Sharp</a>
                            <a href="/tag/Myth/" style="font-size: 84%;">Myth</a>
                            <a href="/tag/MagicShine/" style="font-size: 87%;">MagicShine</a>
                            <a href="/tag/Polarion/" style="font-size: 82%;">Polarion</a>
                            <a href="/tag/Lansky/" style="font-size: 96%;">Lansky</a>
                            <a href="/tag/Ferei/" style="font-size: 87%;">Ferei</a>
                            <a href="/tag/DexShell/" style="font-size: 91%;">DexShell</a>
                            <a href="/tag/DMT/" style="font-size: 101%;">DMT</a>
                            <a href="/tag/Lasting/" style="font-size: 113%;">Lasting</a>
                            <a href="/tag/Victorinox/" style="font-size: 85%;">Victorinox</a>
                            <a href="/tag/Wenger/" style="font-size: 81%;">Wenger</a>
                            <a href="/tag/Apex+Edge+Pro/" style="font-size: 81%;">Apex Edge Pro</a>
                            <a href="/tag/Zebra/" style="font-size: 81%;">Zebra</a>
                            <a href="/tag/Avant/" style="font-size: 85%;">Avant</a>
                            <a href="/tag/AW/" style="font-size: 80%;">AW</a>
                            <a href="/tag/Bossman/" style="font-size: 80%;">Bossman</a>
                            <a href="/tag/Sanyo/" style="font-size: 85%;">Sanyo</a>
                            <a href="/tag/Eneloop/" style="font-size: 82%;">Eneloop</a>
                            <a href="/tag/Cameleon/" style="font-size: 80%;">Cameleon</a>
                            <a href="/tag/TrustFire/" style="font-size: 87%;">TrustFire</a>
                            <a href="/tag/Varta/" style="font-size: 81%;">Varta</a>
                            <a href="/tag/Panasonic/" style="font-size: 80%;">Panasonic</a>
                            <a href="/tag/GP/" style="font-size: 85%;">GP</a>
                            <a href="/tag/Swiss%2BTech/" style="font-size: 88%;">Swiss+Tech</a>
                            <a href="/tag/Ultrafire/" style="font-size: 80%;">Ultrafire</a>
                            <a href="/tag/%D0%A2%D0%BE%D1%87%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9+%D0%BA%D0%B0%D0%BC%D0%B5%D0%BD%D1%8C/" style="font-size: 82%;">Точильный камень</a>
                            <a href="/tag/LaCrosse/" style="font-size: 83%;">LaCrosse</a>
                            <a href="/tag/Maha+Powerex/" style="font-size: 81%;">Maha Powerex</a>
                            <a href="/tag/TechnoLine/" style="font-size: 83%;">TechnoLine</a>
                            <a href="/tag/Avalanche/" style="font-size: 80%;">Avalanche</a>
                            <a href="/tag/%D0%AD%D0%BD%D0%B5%D1%80%D0%B3%D0%B8%D1%8F/" style="font-size: 82%;">Энергия</a>
                            <a href="/tag/Mastak/" style="font-size: 82%;">Mastak</a>
                            <a href="/tag/Power+Bank/" style="font-size: 83%;">Power Bank</a>
                            <a href="/tag/Zippo/" style="font-size: 94%;">Zippo</a>
                            <a href="/tag/Chako/" style="font-size: 85%;">Chako</a>
                            <a href="/tag/Leatherman/" style="font-size: 85%;">Leatherman</a>
                            <a href="/tag/DuoSharp/" style="font-size: 82%;">DuoSharp</a>
                            <a href="/tag/%D0%A2%D0%BE%D1%87%D0%B8%D0%BB%D0%BA%D0%B0+%D0%B0%D0%BB%D0%BC%D0%B0%D0%B7%D0%BD%D0%B0%D1%8F/" style="font-size: 83%;">Точилка алмазная</a>
                            <a href="/tag/Mini-Sharp/" style="font-size: 82%;">Mini-Sharp</a>
                            <a href="/tag/Angler+Mini-Sharp/" style="font-size: 81%;">Angler Mini-Sharp</a>
                            <a href="/tag/%D0%90%D0%BB%D0%BC%D0%B0%D0%B7%D0%BD%D1%8B%D0%B9+%D1%82%D0%BE%D1%87%D0%B8%D0%BB%D1%8C%D0%BD%D1%8B%D0%B9+%D0%BA%D0%B0%D0%BC%D0%B5%D0%BD%D1%8C/" style="font-size: 89%;">Алмазный точильный камень</a>
                            <a href="/tag/Diafold/" style="font-size: 85%;">Diafold</a>
                            <a href="/tag/%D0%9D%D0%B0%D0%B1%D0%BE%D1%80+%D0%B4%D0%BB%D1%8F+%D0%B7%D0%B0%D1%82%D0%BE%D1%87%D0%BA%D0%B8/" style="font-size: 83%;">Набор для заточки</a>
                            <a href="/tag/Aligner+Quick+Edg%D0%B5/" style="font-size: 80%;">Aligner Quick Edgе</a>
                            <a href="/tag/Aligner+ProKit/" style="font-size: 80%;">Aligner ProKit</a>
                            <a href="/tag/Aligner/" style="font-size: 80%;">Aligner</a>
                            <a href="/tag/Aligner+DELUXE/" style="font-size: 80%;">Aligner DELUXE</a>
                            <a href="/tag/Whetstone/" style="font-size: 84%;">Whetstone</a>
                            <a href="/tag/Intellicharge/" style="font-size: 80%;">Intellicharge</a>
                            <a href="/tag/Robiton/" style="font-size: 81%;">Robiton</a>
                            <a href="/tag/Ansmann/" style="font-size: 80%;">Ansmann</a>
                </div>
    
</div>

<div id="content" class="grid_9">
    <h1>503. Cайт временно не доступен</h1>
    <div id="page" role="main">
        <style type="text/css">
  body {
    margin: 0;
    padding: 0;
  }
  .clear_block {
    clear: both;
  }
  #conten_service_page {
    margin: 0 auto;
  }
  #conten_service_page_main {
    width: 100%;
    float: left;
  }
  .conten_service_page_block {
    padding: 5px;
    margin-bottom: 15px;
    float: left;
    border-radius: 10px;
    border: 1px solid #ccc;
    box-shadow: 1px 1px 7px rgba(50, 50, 50, 0.33);
    width: 97%;
  }
  .conten_service_page_block.oplata {
    width: 47%;
    margin: 0 0px 15px 5px;
  }
  .conten_service_page_block p {
    font-size: 20px;
    text-align: center;
    font-style: italic;
    line-height: 20px;
    font-family: calibri;
  }
  #img_block_content {
    float: left;
    width: 100%;
  }
  .img_block_content_item {
    width: 33%;
    float: left;
    text-align: center;
  }
  .img_block_content_item img {
    margin-bottom:10px;
  }
  #conten_service_page_main h3 {
    text-align: center;
    text-decoration: underline;
    float: left;
    width: 100%;
    margin: 15px 0;
    font-size: 24px;
    font-family: calibri;
    font-weight: normal
  }
  .conten_service_page_block.oplata p {
    font-size: 16px;
    line-height: 18px;
    font-style: normal;
    text-align: left;
    margin: 30px 0 0 15px;
    float: left;
    width: 65%;
    font-family: calibri;    
  }
  .conten_service_page_block.oplata span {
    font-size: 12px;
    margin: 10px 0;
    font-style: italic;
    color: #188ab5;
    display: block;    
  }
  .conten_service_page_block span {
    font-size: 12px;
    margin: 10px 0;
    font-style: italic;
    color: #188ab5;
    display: block;    
  }
  #marker_img_nal {
    position: relative;
    float: right;
    margin: -8px 5px 0 0;
  }
  #marker_img_webmoney {
    position: relative;
    float: left;
    margin: -8px 0 0 5px;
  }
  #marker_img_bank {
    position: relative;
    float: right;
    margin: -8px 5px 0 0;
  }
  .conten_service_page_block.oplata img {
    float: left;
    margin: 0;
  }
  .conten_service_page_block.oplata_bn p {
    font-size: 16px;
    line-height: 18px;
    font-style: normal;
    text-align: left;
    margin: 45px 0 0 15px;
    float: left;
    width: 65%;
    font-family: calibri;    
  }
  .conten_service_page_block.oplata_bn span {
    font-size: 12px;
    margin: 10px 0;
    font-style: italic;
    color: #188ab5;
    display: block;    
  }
  .conten_service_page_block.oplata_bn img {
    float: right;
    margin: 18px 5px;
  }
  .conten_service_page_block_item {
    float: left;
    width: 100%;
  }
  .conten_service_page_block_item strong {
    color: green;
  }
  #ulica {
    font-size: 20px;
    font-weight: bold;
    line-height: 25px;
  }
  #metro {
    font-size: 20px;
    font-style: italic;
    line-height: 25px;
  }
  #warning {
    color: red;
    font-size: 14px;
    font-style: normal;
  }
  #map {
    width: 520px;
    height: 358px;
    margin: 10px auto;
    background: #ccc;
  }
  #tr_company {
    width: 96%;
    margin: 0 15px;
    padding: 10px 0;
    border-bottom: 4px double #ccc;
    float: left;
  }
  #tr_company .tr_company_item_logo img {
    float: left;
    margin: 0;
  }
  .tr_company_item {
    float: left;
    width: 100%;
  }
  .tr_company_item_logo {
    float: left;
    width: 30%;
  }
  #tr_company p {
    margin: 0;
    width: 100%;
  }
  .tr_company_item_desc a{
    color: #0091d9;
    outline: none;
    text-decoration: none;
    display: block;
    padding: 10px 0;
    margin: 10px 0;
    border-bottom: 1px dashed;
  }
  .tr_company_item_desc a:hover{
    color: #006ba0;
    text-decoration: underline;
  }
  .tr_company_item_desc {
    float: left;
    width: 70%;
  }
  #contact_banner {
    width: 600px;
    margin: 0 auto;
  }
  #contact_banner img {
    float: none;
    -webkit-box-shadow: 0 0 7px rgba(0,0,0,0.75);
    -moz-box-shadow:    0 0 7px rgba(0,0,0,0.75);
    box-shadow:         0 0 7px rgba(0,0,0,0.75);
    border: 5px solid #fff;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
  }
  #contact_banner p {
    width: 100%;
    font-size: 20px;
    text-align: center;
    display: block;
    margin: 10px 0;
  }
  #contact_banner span {
    font-size: 18px;
    text-align: center;
    margin: 5px 0;
  }
  #conten_service_page_block_contacts {
    float: left;
    width: 99%;
  }
  .conten_service_page_block_item h5 {
    float: left;
    display: block;
    width: 63%;
    text-align: center;
    font-family: tahoma;
    text-decoration: underline;
    color: #3e3e3e;
    margin: 5px 0;
      padding: 0;
    font-size: 14px;
  }
  .conten_service_page_block_item_grafik {
    float: left;
    width: 55%;
    margin: 10px 0 0 15px;
    padding: 5px;
    background: #efefef;
    -webkit-box-shadow: inset 0 0 7px rgba(0,0,0,0.3);
    -moz-box-shadow:    inset 0 0 7px rgba(0,0,0,0.3);
    box-shadow:         inset 0 0 7px rgba(0,0,0,0.3);
  }
  #conten_service_page_block_contacts .conten_service_page_block_item_grafik_text {
    font-size: 16px;
    background: url(http://fonarik.com/market/published/publicdata/FONARIKMARKET3/attachments/SC/images/calendar_date.png) no-repeat left;
    padding: 0 0 0 27px;
    font-style: normal;
    font-family: calibri;
  }
  #conten_service_page_block_contacts .conten_service_page_block_item_phone_text {
    font-size: 16px;
    background: url(http://fonarik.com/market/published/publicdata/FONARIKMARKET3/attachments/SC/images/linphone.png) no-repeat left;
    padding: 0 0 0 27px;
    font-style: normal;
    font-family: calibri;
    float: left;
    margin: 3px 0;
    font-weight: bold;
  }
  .conten_service_page_block_item_phone {
    float: left;
    width: 60%;
    margin: 0 0 0 3px;
    padding: 5px;
    background: #efefef;
    -webkit-box-shadow: inset 0 0 7px rgba(0,0,0,0.3);
    -moz-box-shadow: inset 0 0 7px rgba(0,0,0,0.3);
    box-shadow: inset 0 0 7px rgba(0,0,0,0.3);
  }
  #conten_service_page_block_contacts .conten_service_page_block_item_phone p {
    font-size: 10px;
    line-height: 12px;
    font-style: normal;
    text-align: left;
    margin: 0;
    font-family: calibri;
    float: left;
    width: 100%;
    padding: 0 0 2px 0;
  }
  .conten_service_page_block_item ul {
    float: left;
    width: 85%;
    padding: 0;
    margin: 15px 10px 15px 10px;
  }
  .conten_service_page_block_item li {
    display: block;
    background: url(http://fonarik.com/market/published/publicdata/FONARIKMARKET3/attachments/SC/images/tick_64.png) no-repeat left;
    font-family: calibri;
    padding: 15px 0 15px 55px;
    border-bottom: 1px dashed #ccc;
  }
</style>
<div id="conten_service_page">
    <div id="conten_service_page_main">

    
    <div id="conten_service_page_block_contacts">
      <div class="conten_service_page_block oplata">
        <div class="conten_service_page_block_item">
          <img id="marker_img_nal" src="http://fonarik.com/market/published/publicdata/FONARIKMARKET3/attachments/SC/images/p_contacts.png">
          <img src="http://fonarik.com/market/published/publicdata/FONARIKMARKET3/attachments/SC/images/grafik_pic.png" width="60">
          <h5>Связаться с нами</h5>
          <div class="conten_service_page_block_item_phone">
            <span class="conten_service_page_block_item_phone_text">8 800 555 1092</span>
            <p style="border-bottom:1px solid #ccc"><strong>БЕСПЛАТНО</strong> в пределах России</p>
            <span class="conten_service_page_block_item_phone_text">+7 (495) 646-13-69</span>
            <p>г. Москва</p>
          </div>
        </div>
      </div>
      <div class="conten_service_page_block oplata">
        <div class="conten_service_page_block_item">
          <img id="marker_img_nal" src="http://fonarik.com/market/published/publicdata/FONARIKMARKET3/attachments/SC/images/p_contacts_grafik.png">
          <img src="http://fonarik.com/market/published/publicdata/FONARIKMARKET3/attachments/SC/images/contacts_pic.png" width="60">
          <h5>График работы Call-центра</h5>
          <div class="conten_service_page_block_item_grafik">
            <span class="conten_service_page_block_item_grafik_text"><strong>Пн-Пт:</strong> c 09:00 до 20:00</span>
            <span class="conten_service_page_block_item_grafik_text"><strong>Сб-Вс:</strong> с 10:00 до 19:00</span>
          </div>
        </div>
      </div>
    </div>
    </div>
</div>
    </div>
</div>
  </div>
  </div><!-- #main -->
  
  <div class="clear"></div>

<div id="footer">
    <div class="f_navigation">
      <div class="container_12">
        <div class="grid_3">
        <a href="/" title="Fonarik Market" style="width:auto;margin:0px;padding:0px;">
          <img src="/wa-data/public/shop/themes/fonarik/images/logo.png" alt="Fonarik Market"></a>  
        </div><!-- .grid_3 -->

        <div class="grid_2">
          <div style="font-size:14px;"><a href="http://fonarik.ua/dostavka/">Доставка</a></div>
          <div style="font-size:14px;"><a href="http://fonarik.ua/oplata/">Оплата</a></div>
          <div style="font-size:14px;"><a href="http://fonarik.ua/garantiya/">Гарантия</a></div>
          <div style="font-size:14px;"><a href="http://fonarik.ua/vozvrat/">Возврат</a></div>
          <div style="font-size:14px;"><a href="http://fonarik.ua/kontakty/">Контакты</a></div>
        </div><!-- .grid_3 -->


        <div class="grid_4">
          <h4>График работы Call-центра</h4>          
          <div class="footer_time"><span ></span><p>ПН-ПТ&nbsp;с&nbsp;9:00&nbsp;до&nbsp;20:00
          <br/>СБ,ВС&nbsp;с&nbsp;10:00&nbsp;до&nbsp;19:00</p></div>
          <form method="get" id="searchform-footer" class="search" action="/search/" style="float:left;display:block;width:230px;margin-top:20px;background-position: -147px -68px;border-left:1px #bec3c7 solid;">
<input class="text entry_form" type="text" name="query"  id="search-footer" style="width:200px;">
<input type="submit" class="submit" name="Submit" value="" >
</form>  
        </div><!-- .grid_3 -->


        <div class="grid_3">
        <h4>Представительства</h4>   
        <div class="footer_time" style="margin-bottom:20px;"><span class="phone"></span><p>8 (800) 555-10-92 - Россия
          <br/>+7 (495) 646-13-69 - Москва</p></div>
        <div class="footer_time"><span class="mail"></span><p><a href="mailto:info@fonarik.ua" title="mailto">info@fonarik-market.ru</a></p></div>  
                         
        </div><!-- .grid_3 --> 
        
         <div class="grid_12">
            <div id="copyright" style="float:left;width:100%;padding-top:10px;margin:20px 0px 20px 0px;border-top:1px #1386b3 solid;">
                <span style="float:left;"><a href="/">© 2013 / fonarik-market.ru  Интернет-магазин</a></span>
                <span style="float:right;">&copy; разработка: <a href="http://code201.net">Code201.net</a></span>
            </div>  
         </div>  

        <div class="clear"></div>        
      </div>
      
      
      
    </div><!-- .f_navigation -->

</div>
  
  </body>
</html>