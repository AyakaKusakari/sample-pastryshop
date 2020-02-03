<?php get_header(); ?>

    <div id="access-main"></div>

    <div id="access-contents">
        <div class="inner">

            <h1 class="contents-title">Access</h1>

            <div class="access-items">

                <div class="access-item-txt">
                    
                    <p>東京都◯◯区◯◯1-2-3 ◯◯ビル1F</p>
                    <p>Tel : 03-1234-5678</p>
                    <p>営業時間 : 9:00〜20:00</p>
					
				</div><!-- /access-item-txt -->
                
                <div class="access-item-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6481.655706797028!2d139.76274743246825!3d35.68124053757948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bfbd89f700b%3A0x277c49ba34ed38!2z5p2x5Lqs6aeF!5e0!3m2!1sja!2sjp!4v1577411939598!5m2!1sja!2sjp" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
    
			</div><!-- /access-items -->

            <div class="contact">
                <div class="inner">

                    <h3 class="sub-title">お問い合わせ</h3>
    
                    <?php echo apply_filters('the_content', '[contact-form-7 id="68" title="問い合わせフォーム"]'); ?>

                </div><!-- /inner -->

            </div><!-- /contact -->

        </div><!-- /inner -->
    </div><!-- /access-contents -->

<?php get_footer(); ?>