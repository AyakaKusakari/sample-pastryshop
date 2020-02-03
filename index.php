<?php get_header(); ?>

    <div id="main">

        <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" class="main-logo" alt="logo">

    </div><!-- /main -->

    <div id="about">
        <div class="inner">

            <h2 class="contents-title">About</h2>

            <div class="about-items">

				<div class="about-item-img">
                    <img src="<?php echo get_template_directory_uri() ?>/img/patissier.jpg" alt="patissier">
				</div>
	
				<div class="about-item-txt">

                    <p>Sample洋菓子店の目標は、お菓子に癒させる人を増やすこと。</p>
                    <p>「また食べたい！」と思ってもらえるお菓子作りをしています。</p>
                    <p>そのための努力は、惜しみません。</p>
                    <p>ぜひ一度、Sample洋菓子店の味をお試しください。</p>
					
				</div><!-- /about-item-txt -->

			</div><!-- /about-items -->

            <div class="btn-wrapper">
                <a class="more-btn" href="about">MORE</a>
            </div>

        </div><!-- /inner -->
    </div><!-- /about -->

    <div id="news">
        <div class="inner">

            <h2 class="contents-title">News</h2>

            <div class="news-wrapper">

            <?php
            //記事があればentriesブロック以下を表示
            if (have_posts() ) : ?>
                
                <div class="news-items">

                <?php
                //記事数ぶんループ
                while ( have_posts() ) :
                the_post(); ?>

                    <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="news-item">

                        <div class="news-item-meta">
                            <time class="news-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                        </div>
                        <h3 class="news-item-title"><?php the_title(); //タイトルを表示 ?></h3>
                        <div class="news-item-excerpt">
                            <?php the_excerpt(); //抜粋を表示 ?>   
                        </div>
                        
                    </a><!-- /news-item -->

                    <?php
                    endwhile;
                    ?>

                    <div class="btn-wrapper">
                        <a class="more-btn" href="news">MORE</a>
                    </div>

                </div><!-- /news-items -->

                <?php endif; ?>

            </div><!-- /news-wrapper -->

        </div><!-- /inner -->
    </div><!-- /news -->

    <div id="menu">
        <div class="inner">

            <h2 class="contents-title">Menu</h2>

            <div class="menu-items">

				<div class="menu-item-img">
					<img src="<?php echo get_template_directory_uri() ?>/img/cake.jpg" alt="cake">
				</div>
	
				<div class="menu-item-txt">

                    <p>Sample洋菓子店では、</p>
                    <p><i class="fas fa-caret-right"></i> 生菓子<br><i class="fas fa-caret-right"></i> 焼き菓子<br><i class="fas fa-caret-right"></i> ギフト</p>
                    <p>を取り揃えております。</p>
                    <p>季節限定のスイーツもございますので、店頭にてご確認ください。</p>
					
				</div><!-- /menu-item-txt -->

			</div><!-- /menu-items -->

            <div class="btn-wrapper">
                <a class="more-btn" href="menu">MORE</a>
            </div>

        </div><!-- /inner -->
    </div><!-- /menu -->

    <div id="access">
        <div class="inner">

            <h2 class="contents-title">Access</h2>

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

            <div class="btn-wrapper">
                <a class="more-btn" href="access">MORE</a>
            </div>

        </div><!-- /inner -->
    </div><!-- /access -->

<?php get_footer(); ?>