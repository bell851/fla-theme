<?php get_header(); //header.phpを取得 ?>
            <article>
            <?php if ( have_posts() ) : //条件分岐：投稿があるなら ?>
                <section class="contentHead">
                    <h2 class="en">NEWS</h2>
                </section>
                <section class="newsArchive">
                    <?php while ( have_posts() ) : the_post();//繰り返し処理開始 ?>
                    <div class="newspost">
                        <a href="<?php the_permalink(); //投稿（固定ページ）のリンクを取得 ?>" class="opacityHover2 flexSide">
                            <div class="date"><?php the_time('Y.m.j');//投稿日時を表示 パラメータで書式を指定 ?></div>
                            <div class="newsTitle ja"><h3><?php the_title(); //投稿（固定ページ）のタイトルを表示 ?></h3></div>
                        </a>
                    </div>
                    <?php endwhile; // 繰り返し終了 ?>
                </section>
                <section class="pagefeed">
                    <?php wp_pagenavi(); ?>
                </section>
                
                <?php else : //条件分岐：投稿が無い場合は ?>
            
                  <h2>投稿がみつかりません。</h2>
                  <p><a href="<?php echo home_url(); ?>">トップページに戻る</a></p>
            
                <?php endif; //条件分岐終了 ?>
            </article>
        <?php get_footer(); //footer.phpを取得　