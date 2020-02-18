<?php
/*
Template Name: トップページ
*/
?>
<?php get_header(); //header.phpを取得 ?>
<main>
    <div class="cover">
        <div id="coverImg">
            <?php echo do_shortcode('[metaslider id="8"]'); ?>
        </div>
        <div class="copyrightArea">
            <p class="en">© FLAVA All rights reserved.</p>
        </div>
    </div>
    <div class="concept" data-aos="fade-up">
        <div class="conceptImg">
            <img class="conceptImgPC" src="<?php echo get_template_directory_uri(); ?>/images/conceptImg.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/conceptImg@2x.jpg 2x" alt="コンセプト写真">
            <img class="conceptImgSP" src="<?php echo get_template_directory_uri(); ?>/images/conceptImgSP.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/conceptImgSP@2x.jpg 2x" alt="コンセプト写真">
            <p class="catchCopy en">CREATE & CRAFT.</p>
        </div>
        <div class="conceptText">
            <h2 class="en">CONCEPT</h2>
            <!-- <p class="en">CREATE & CRAFT.</p> -->
            <p class="ja">お客様の個性や持ち味を大切にし<br>日々の生活や人生に寄り添うヘアスタイルデザインを。</p>
            <p class="ja">勝負の時に後押しできるような<br>気分の沈んだ時にポジティブになれるような</p>
            <p class="ja">ヘアスタイルを通し心と人生に一生涯付き合っていけるよう<br>常に創造し切磋琢磨し、全てのお客様に向き合っていきます。</p>
            
        </div>
    </div>
    <div class="style">
        <div class="tittle" data-aos="fade-up">
            <h2 class="en">STYLE</h2>
        </div>
        <?php
          //　--------- Mens styleを4件表示　---------
          $args = array(
            'category_name'  => 'stylemens',  // カテゴリー「stylemens」を読み込む
            'posts_per_page' => 4        // 表示数　4件
          );
          $the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
          if ( $the_query->have_posts() ) :
          // ここから表示する内容を記入
          ?>
        <div class="styleMens" data-aos="fade-up">
            <h3>MEN`S</h3>
            <div class="styleImg flexSide">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                // -------- ここから繰り返し---------- ?>
                <a href="<?php the_permalink(); //投稿（固定ページ）のリンクを取得 ?>"><?php the_post_thumbnail(array(350,auto), array('class' => 'subthumb')); ?></a>
                <?php // -------- 繰り返しここまで-----------
                endwhile; ?>
            </div>
            <div class="styleMore">
                <a href="<?php echo home_url('/category/stylemens/'); ?>" class="styleMorebtn en"><div>more</div></a>
            </div>
        </div>
        <?php
        // -------- 新着情報WP_query終了-----------
          wp_reset_postdata();
          endif;
        ?>
        <?php
          //　--------- Mens styleを4件表示　---------
          $args = array(
            'category_name'  => 'styleladies',  // カテゴリー「styleladies」を読み込む
            'posts_per_page' => 4        // 表示数　4件
          );
          $the_query = new WP_Query( $args );// 新規WP query を作成　変数args で定義したパラメータを参照
          if ( $the_query->have_posts() ) :
          // ここから表示する内容を記入
          ?>
        <div class="styleLadies" data-aos="fade-up">
            <h3>LADIES`</h3>
            <div class="styleImg flexSide">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                // -------- ここから繰り返し---------- ?>
                <a href="<?php the_permalink(); //投稿（固定ページ）のリンクを取得 ?>"><?php the_post_thumbnail(array(350,auto), array('class' => 'subthumb')); ?></a>
                <?php // -------- 繰り返しここまで-----------
                endwhile; ?>
            </div>
            <div class="styleMore">
                <a href="<?php echo home_url('/category/styleladies/'); ?>" class="styleMorebtn en"><div>more</div></a>
            </div>
            <?php
            // -------- 新着情報WP_query終了-----------
              wp_reset_postdata();
              endif;
            ?>
        </div>
    </div>
    <div class="staff" data-aos="fade-up">
        <div class="staffTittle">
            <h2 class="en">STAFF</h2>
        </div>
        <div class="staffImg">
            <a href="<?php echo home_url('/staff/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/staffImg.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/staffImg@2x.jpg 2x" alt=""></a>
        </div>
    </div>
    <div class="menu">
        <div class="menuBox" data-aos="fade-up">
            <div class="menuInBox" >
                <div class="menuTittle">
                    <h2 class="en">MENU</h2>
                </div>
                <div>
                    <div class="menuList en">
                        <div class="hair">
                            <div class="menuType"><h3>&lt;&nbsp;Hair menu&nbsp;&gt;</h3></div>
                            <div class="cut items flexSide">
                                <div class="item flexSide">
                                    <div><p>Cut</p></div>
                                    <div><p>&yen;&nbsp;4,620</p></div>
                                </div>
                            </div>
                            <div class="color items flexSide">
                                <div class="item flexSide">
                                    <div><p>Cut & Color</p></div>
                                    <div><p>&yen;&nbsp;9,900</p></div>
                                </div>
                                <div class="item flexSide">
                                    <div><p>Cut & W Color</p></div>
                                    <div><p>&yen;&nbsp;15,780</p></div>
                                </div>
                                <div class="item flexSide">
                                    <div><p>Cut only</p></div>
                                    <div><p>&yen;&nbsp;5,830</p></div>
                                </div>
                            </div>
                            <div class="perm items flexSide">
                                <div class="item flexSide">
                                    <div><p>Cut & Perm</p></div>
                                    <div><p>&yen;&nbsp;9,900</p></div>
                                </div>
                                <div class="item flexSide">
                                    <div><p>Perm only</p></div>
                                    <div><p>&yen;&nbsp;5,830</p></div>
                                </div>
                                <div class="item flexSide">
                                    <div><p>Cut & Straight Perm</p></div>
                                    <div><p>&yen;&nbsp;13,970</p></div>
                                </div>
                                <div class="item flexSide">
                                    <div><p>Cut & Point Straight Perm</p></div>
                                    <div><p>&yen;&nbsp;9,900</p></div>
                                </div>
                            </div>
                        </div>
                        <div class="option">
                            <div class="menuType"><h3>&lt;&nbsp;Option menu&nbsp;&gt;</h3></div>
                            <div class="option items flexSide">
                                <div class="item flexSide">
                                    <div><p>Head Spa</p></div>
                                    <div><p>&yen;&nbsp;1,320</p></div>
                                </div>
                                <div class="item flexSide">
                                    <div><p><span class="ja">前髪</span> Cut</p></div>
                                    <div><p>&yen;&nbsp;1,100</p></div>
                                </div>
                                <div class="item flexSide">
                                    <div><p><span>眉</span> Cut</p></div>
                                    <div><p>&yen;&nbsp;660</p></div>
                                </div>
                                <div class="item flexSide">
                                    <div><p>Treatment</p></div>
                                    <div><p>&yen;&nbsp;3,190</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="notes ja">
                        <dl class="note">
                          <dt><span>※</span></dt>
                          <dd>学生割引全メニュー<span class="en">10%</span>オフ</dd>
                        </dl>
                        <dl class="note">
                          <dt><span>※</span></dt>
                          <dd>ご新規様限定クーポンも御座います。下記ボタンの<span class="en">HOT PEPPER Beauty</span>よりご確認下さい。</dd>
                        </dl>
                        <dl class="note">
                          <dt><span>※</span></dt>
                          <dd><span class="en">Option menu</span>は<span class="en">Hair menu</span>と組み合わせてのご利用となります。</dd>
                        </dl>
                    </div>
                    <div class="moreBtnBox">
                        <a href="https://beauty.hotpepper.jp/slnH000403519/coupon/" class="moreBtn en"><div>more</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="info flexSide" data-aos="fade-up">
        <a href="https://work.salonboard.com/slnH000403519/?smb=0&wak=BPCO100001_button_salon_kyujin&ifs=Referrers&lp=bt%3Asalon%3Amenu_coupon%3Amenu_coupon&vos=&s_fid=25BDF7DD8AF0C106-21ACBE974937F366" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/recruit.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/recruit@2x.jpg 2x" alt=""></a>
        <a href="https://beauty.hotpepper.jp/slnH000403519/blog/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/blog.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/blog@2x.jpg 2x" alt=""></a>
        <a href="<?php echo home_url('/news/');?>"><img src="<?php echo get_template_directory_uri(); ?>/images/news.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/news@2x.jpg 2x" alt=""></a>
        <a href="https://www.instagram.com/flava_hair/?igshid=17vgfjdfwzqab" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/insta.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/insta@2x.jpg 2x" alt=""></a>
    </div>
    <div class="access flexSide" data-aos="fade-up">
        <div class="accessInfo">
            <div class="accessTittle"><h2 class="en">ACCESS</h2></div>
            <div class="text en">
                <h3>Tel</h3>
                <p>0422-27-1533</p>
                <h3>E-mail</h3>
                <p>flava.hair@gmail.com</p>
                <h3>Address</h3>
                <p>〒180-0004</p>
                <p class="ja">東京都武蔵野市吉祥寺本町3-2-3 ラカシータ2A</p>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24717.749182423362!2d139.5571215292492!3d35.71214016939065!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcc2c9f227fba0057!2sFLAVA!5e0!3m2!1sja!2sjp!4v1572688885472!5m2!1sja!2sjp" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</main>
<?php get_footer(); //footer.phpを取得　