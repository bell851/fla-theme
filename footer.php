<footer>
            <div class="footerBox flexSide">
                <div class="footerLogo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/flavaLogoNega.png" srcset="<?php echo get_template_directory_uri(); ?>/images/flavaLogoNega@2x.png 2x" alt="">
                </div>
                <div class="openInfo">
                    <div><h3>open</h3></div>
                    <div class="time flexSide">
                        <div><p class="ja">平日</p></div>
                        <div><p class="en">11:00&nbsp;~&nbsp;21:00</p></div>
                    </div>
                    <div class="time flexSide">
                        <div><p class="ja">土日祝日</p></div>
                        <div><p class="en">10:00&nbsp;~&nbsp;20:00</p></div>
                    </div>
                </div>
                <div class="footerBtn">
                    <ul>
                        <li><a href="https://work.salonboard.com/slnH000403519/?smb=0&wak=BPCO100001_button_salon_kyujin&ifs=Referrers&lp=bt%3Asalon%3Amenu_coupon%3Amenu_coupon&vos=&s_fid=25BDF7DD8AF0C106-21ACBE974937F366" target="_blank">採用情報</a></li>
                        <li><a href="">お知らせ</a></li>
                        <li><a href="https://beauty.hotpepper.jp/slnH000403519/blog/" target="_blank">ブログ</a></li>
                        <li><a href="https://www.instagram.com/flava_hair/?igshid=17vgfjdfwzqab" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
        <!-- AOS JS読み込み -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        
        <!-- 初期化する -->
        <script>
        AOS.init({
            delay: 5.0,
            duration: 2000,
        });
        </script>
    </body>
</html>