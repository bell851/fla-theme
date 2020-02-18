<?php get_header(); //header.phpを取得 ?>
    <article>
        <section class="contentHead">
            <h2 class="en">STYLE</h2>
        </section>
        <section class="selectBtn">
            <a class="sexBtn opacityHover" href="<?php echo home_url('/category/stylemens/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/mens_btn.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/mens_btn@2x.jpg 2x" alt="メンズスタイル選択ボタン"></a>
            <a class="sexBtn opacityHover" href="<?php echo home_url('/category/styleladies/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/ladies_btn.jpg" srcset="<?php echo get_template_directory_uri(); ?>/images/ladies_btn@2x.jpg 2x" alt="レディーススタイル選択ボタン"></a>
        </section>
    </article>
<?php get_footer(); //footer.phpを取得　