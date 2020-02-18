<?php get_header(); //header.phpを取得 ?>
            <article>
                <section class="contentHead">
                    <h2 class="en">STYLE</h2>
                    <div class="tab flexSide">
                        <div class="halfTab"><a class="en sexTab men" href="<?php echo home_url('/category/stylemens/'); ?>">MEN'S</a></div>
                        <div class="halfTab"><a class="en sexTab lad" href="<?php echo home_url('/category/styleladies/'); ?>">LADIES'</a></div>
                    </div>
                </section>
                <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
                  <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
                <section class="mainContent flexSide">
                    <div class="imgArea">
                        <div class="imgBox">
                            <?php
                                $image1 = wp_get_attachment_image_src(get_post_meta($post->ID, '写真1', true), 'full');
                                $image2 = wp_get_attachment_image_src(get_post_meta($post->ID, '写真2', true), 'full');
                                $image3 = wp_get_attachment_image_src(get_post_meta($post->ID, '写真3', true), 'full');
                            ?>
                            <?php
                                $styleCate = "MEN'S STYLE" ; 
                                if(in_category('styleladies')){
                                    $styleCate = "LADIES' STYLE";
                                }
                            ?>
                            <p class="hairTitle hairCategory en"><?php echo $styleCate; ?></p>
                            <h3 class="ja hairTitle">「<?php the_title(); //投稿（固定ページ）のタイトルを表示 ?>」</h3>
                            <div class="flontImg">
                                <div id="flontImg1" class="flontImgs"><img src="<?php echo $image1[0] ?>"></div>
                            </div>
                            <div class="listImg">
                                <ul class="flexSide">
                                    <li ><a href="javascript:void(0);" id="listImg1" class="listImgs"><img src="<?php echo $image1[0] ?>"></a></li>
                                    <li ><a href="javascript:void(0);" id="listImg2" class="listImgs"><img src="<?php echo $image2[0] ?>"></a></li>
                                    <li ><a href="javascript:void(0);" id="listImg3" class="listImgs"><img src="<?php echo $image3[0] ?>"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="textArea">
                        <div class="textBox">
                            <p class="hairTitle hairCategory en">&nbsp;&nbsp;<?php echo $styleCate; ?></p>
                            <h3 class="ja hairTitle">「<?php the_title(); //投稿（固定ページ）のタイトルを表示 ?>」</h3>
                            <p class="ja">
                                <?php the_content(); //投稿（固定ページ）の本文を表示 ?>
                            </p>
                            <div class="styleData">
                                <h4 class="ja h4Data">スタイルデータ</h4>
                                <table>
                                    <tr>
                                        <td>長さ</td>
                                        <td><?php echo get_post_meta($post->ID , '長さ' , true); ?></td>
                                    </tr>
                                    <tr>
                                        <td>カラー</td>
                                        <td><?php echo get_post_meta($post->ID , 'カラー' , true); ?></td>
                                    </tr>
                                    <tr>
                                        <td>イメージ</td>
                                        <td><?php echo get_post_meta($post->ID , 'イメージ' , true); ?></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="reserveArea">
                                <h4 class="ja">ご予約はこちら</h4>
                                <a class="en" href="tel: 0422-27-1533" ><div class="tellBtn">Tel : 0422-27-1533</div></a>
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