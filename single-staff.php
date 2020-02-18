<?php get_header(); //header.phpを取得 ?>
            <article>
                 <section class="contentHead spaceBtm">
                    <h2 class="en">STAFF</h2>
                </section>
                <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
                  <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
                <section class="mainContent flexSide">
                    <div class="imgArea">
                        <div class="imgBox">
                            <?php
                                $image1 = wp_get_attachment_image_src(get_post_meta($post->ID, 'スタッフ写真', true), 'full');
                            ?>
                             <div class="flontImg">
                                <div id="flontImg1" class="flontImgs"><img src="<?php echo $image1[0] ?>"></div>
                            </div>
                            <div id="snsAreaPC">
                                <a href="<?php echo get_post_meta($post->ID , 'インスタのURL' , true); ?>" target="_blank"><div id="instaBtn"><i class="fa fa-instagram"></i>Instagram</div></a>
                            </div>
                        </div>
                    </div>
                    <div class="textArea">
                        <div class="textBox">
                            <h3 class="ja">「<?php the_title(); //投稿（固定ページ）のタイトルを表示 ?>」</h3>
                            <p class="ja staffPosi"><?php echo get_post_meta($post->ID , 'スタッフポジション' , true); ?></p>
                            <p class="ja">
                                <?php the_content(); //投稿（固定ページ）の本文を表示 ?>
                            </p>
                            <div id="snsAreaSP">
                                <a href="<?php echo get_post_meta($post->ID , 'インスタのURL' , true); ?>" target="_blank"><div id="instaBtn"><i class="fa fa-instagram"></i>Instagram</div></a>
                            </div>
                            <div class="reserveArea">
                                <h4 class="ja">ご予約はこちら</h4>
                                <a class="en" href="tel: 0422-27-1533"><div class="tellBtn">Tel : 0422-27-1533</div></a>
                                <a class="en" href="https://beauty.hotpepper.jp/slnH000403519/coupon/" target="_blank"><div class="webBtn">HOTPPEPER Beauty<span class="ja">へ</span></div></a>
                            </div>
                        </div>
                    </div>
                </section>
                    <?php endwhile; // 繰り返し終了 ?>
                <?php else : //条件分岐：投稿が無い場合は ?>
            
                  <h2>投稿がみつかりません。</h2>
                  <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
            
                <?php endif; //条件分岐終了 ?>
            </article>
        <?php get_footer(); //footer.phpを取得　