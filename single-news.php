<?php get_header(); //header.phpを取得 ?>
            <article>
                 <section class="contentHead">
                    <h2 class="en">NEWS</h2>
                </section>
                <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
                  <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
                <section class="newsCon">
                    <div class="newstext">
                        <h3><?php the_title(); //投稿（固定ページ）のタイトルを表示 ?></h3>
                        <p class="date"><?php the_time('Y.m.j');//投稿日時を表示 パラメータで書式を指定 ?></p>
                        <p><?php the_content(); //投稿（固定ページ）の本文を表示 ?></p>
                    </div>
                </section>
                    <?php endwhile; // 繰り返し終了 ?>
                <?php else : //条件分岐：投稿が無い場合は ?>
            
                  <h2>投稿がみつかりません。</h2>
                  <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
            
                <?php endif; //条件分岐終了 ?>
            </article>
        <?php get_footer(); //footer.phpを取得　