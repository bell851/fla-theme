<section class="mainContent flexSide">
    <div class="imgArea">
        <div class="imgBox">
            <h3 class="ja">「<?php the_title(); //投稿（固定ページ）のタイトルを表示 ?>」</h3>
            <a href=""><img src="image/top/mensStyle04.jpg" srcset="image/top/mensStyle04@2x.jpg 2x" alt=""></a>
        </div>
    </div>
    <div class="textArea">
        <div class="textBox">
            <h3 class="ja">「<?php the_title(); //投稿（固定ページ）のタイトルを表示 ?>」</h3>
            <p class="ja">
                <?php echo get_post_meta($post->ID , '長さ' , true); ?>
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
                <a class="en"><div class="tellBtn">Tell : 0422-27-1533</div></a>
                <a class="en"><div class="webBtn">HOTPPEPER Beauty<span class="ja">へ</span></div></a>
            </div>
        </div>
    </div>
</section>