<?php get_header(); ?>

    <div id="news-main"></div>

    <div id="news-contents">
        <div class="inner">

            <h1 class="contents-title">News一覧</h1>

            <?php
                //記事があればentriesブロック以下を表示
                if (have_posts() ) :
            ?>
                
            <div class="entries">

                <?php query_posts('post_type=post&paged='.$paged); ?>

                <?php
                //記事数ぶんループ
                while ( have_posts() ) :
                the_post(); ?>
                
                <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="entry-item">
                
                    <div class="entry-item-img">
                        <?php
                        if (has_post_thumbnail() ) {
                        // アイキャッチ画像が設定されてれば大サイズで表示
                        the_post_thumbnail('large');
                        } else {
                        // なければnoimage画像をデフォルトで表示
                        echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
                        }
                        ?>
                    </div><!-- /entry-item-img -->

                    <div class="entry-item-body">

                        <div class="entry-item-meta">
                            <!-- 公開日時を動的に表示する -->
                            <time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time><!-- /entry-item-published -->
                        </div>

                        <h2 class="entry-item-title"><?php the_title(); //タイトルを表示 ?></h2>
                        
                        <div class="entry-item-excerpt">
                            <?php the_excerpt(); //抜粋を表示 ?>
                        </div>

                    </div><!-- /entry-item-body -->

                </a><!-- /entry-item -->
                
                <?php endwhile; endif; ?>
                <?php wp_reset_query(); ?>

            </div><!-- /entries -->


        </div><!-- /inner -->
    </div><!-- /news-contents -->

<?php get_footer(); ?>