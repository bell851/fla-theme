<!DOCTYPE html>
<html <?php language_attributes(); //html要素のlang属性を出力 ?>>
    <head>
    <!-- Basic Page Needs–––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <meta charset="<?php bloginfo( 'charset' ); //文字エンコーディング情報を出力 ?>">
        <title><?php wp_title( '|', true, 'right' ); //ページタイトルを出力 ?><?php bloginfo('name'); //サイト名を表示 ?></title>
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); //ピングバックURLを出力 ?>">
        <meta name="description" content="">
        <meta name="author" content="">
    
    <!-- Mobile Specific Metas–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- FONT–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:300,500 |Roboto:100,300,500,500i&display=swap&subset=japanese" rel="stylesheet">
    
    <!-- Favicon–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
        
   
    <?php wp_head(); //wp_headはテーマの</head>タグ直前に必ず挿入します ?>    
    </head>
    <body <?php body_class(); //bodyタグにページの種類に応じたクラス名を与える ?>>
        <header>
            <div class="pc_header flexSide">
                <div id="logo">
                    <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/flavaLogo.png" srcset="<?php echo get_template_directory_uri(); ?>/images/flavaLogo@2x.png 2x" alt="FLAVA Logo"></a>
                </div>
                <div class="headerListPc">
                    <ul class="flexSide">
                        <li class="headerMenu opacityHover2"><a href="https://beauty.hotpepper.jp/slnH000403519/coupon/" class="en" target="_blank">MENU</a></li>
                        <li class="headerMenu opacityHover2"><a href="<?php echo home_url('/style/'); ?>" class="en">STYLE</a></li>
                        <li class="headerMenu opacityHover2"><a href="<?php echo home_url('/staff/'); ?>" class="en">STAFF</a></li>
                        <li class="headerMenu opacityHover2"><a href="https://work.salonboard.com/slnH000403519/?smb=0&wak=BPCO100001_button_salon_kyujin&ifs=Referrers&lp=bt%3Asalon%3Amenu_coupon%3Amenu_coupon&vos=&s_fid=25BDF7DD8AF0C106-21ACBE974937F366" class="en" target="_blank">RECRUIT</a></li>
                        <li class="headerMenu opacityHover2"><a href="https://beauty.hotpepper.jp/slnH000403519/blog/" class="en" target="_blank">BLOG</a></li>
                        <li class="headerMenu opacityHover2"><a href="<?php echo home_url('/news/'); ?>" class="en">NEWS</a></li>
                        <li class="headerMenu opacityHover2"><a href="https://www.instagram.com/flava_hair/?igshid=17vgfjdfwzqab" class="en" target="_blank">INSTAGRAM</a></li>
                    </ul>
                </div>
                <a href="#" class="reserve inline-link" data-mfp-src="#inline-popup">
                    <div id="reserveBtn" class-"en">
                        RESERVE
                    </div>
                </a>
            </div>
            <div class="sp_header">
                <div id="nav-toggle">
                    <div>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div id="spLogo">
                    <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri(); ?>/images/flavaLogo.png" srcset="<?php echo get_template_directory_uri(); ?>/images/flavaLogo@2x.png 2x" alt="FLAVA Logo"></a>
                </div>
                <div class="spReserve inline-link" data-mfp-src="#inline-popup">
                    <a class="en" id="spReserveBtn">RESERVE</a>
                </div>
                <div id="gloval-nav">
                    <nav>
                        <ul class="en">
                            <li><a href="<?php echo home_url();?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/flavaLogoNega.png" srcset="<?php echo get_template_directory_uri(); ?>/images/flavaLogoNega@2x.png 2x" alt=""></a></li>
                            <li><a href="https://beauty.hotpepper.jp/slnH000403519/coupon/" target="_blank">MENU</a></li>
                            <li><a href="<?php echo home_url('/style/');?>">STYLE</a></li>
                            <li><a href="<?php echo home_url('/staff/');?>">STAFF</a></li>
                            <li><a href="https://work.salonboard.com/slnH000403519/?smb=0&wak=BPCO100001_button_salon_kyujin&ifs=Referrers&lp=bt%3Asalon%3Amenu_coupon%3Amenu_coupon&vos=&s_fid=25BDF7DD8AF0C106-21ACBE974937F366" target="_blank">RECRUIT</a></li>
                            <li><a href="https://beauty.hotpepper.jp/slnH000403519/blog/" target="_blank">BLOG</a></li>
                            <li><a href="<?php echo home_url('/news/');?>">NEWS</a></li>
                            <li><a href="https://www.instagram.com/flava_hair/?igshid=17vgfjdfwzqab" target="_blank">INSTAGRAM</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <script>
            $(function(){
             $('.inline-link').magnificPopup({
              type:'inline',
              removalDelay:500
              });
            });
           </script>
            <div id="inline-popup" class="mfp-hide">
                <div class="popupLogo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/flavaLogoNega.png" srcset="<?php echo get_template_directory_uri(); ?>/images/flavaLogoNega@2x.png 2x" alt="">
                </div>
                <div class="popupTel popupLink">
                    <h4 class="ja">お電話でのご予約</h4>
                    <a href="tel: 0422-27-1533"><img src="<?php echo get_template_directory_uri(); ?>/images/popupTel.png" srcset="<?php echo get_template_directory_uri(); ?>/images/popupTel@2x.png 2x" alt=""></a>
                </div>
                <div class="popupWeb popupLink">
                    <h4 class="ja"><span class="en" style="font-weight: 300;">Web</span>でのご予約</h4>
                    <a href="https://beauty.hotpepper.jp/slnH000403519/coupon/"  target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/popupWeb.png" srcset="<?php echo get_template_directory_uri(); ?>/images/popupWeb@2x.png 2x" alt=""></a>
                </div>
                <div class="mfp-close">
                    閉じる
                </div>
            </div>
        </header>