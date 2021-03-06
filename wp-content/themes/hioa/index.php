<?php get_header(); ?>
<?php $videos = getVideos(); ?>

<?php $page = get_page(1); ?>


        <div class="grey-light">
            <div class="inner-content signup-container">
                <div class="title-container">
                    <h1><?php echo $page->post_title ?></h1>
                    <?php echo $page->post_content ?>
                </div>
                <div class="subscribe-container">
                    <div class="subscribe-container-inner">
                        <form id="email-form">
                            <div class="subscribe-table">
                                <p class="subscribe-success-message-ie9">Takk! Din e-post er nå registrert</p>
                                <div class="subscribe-input-cell">
                                    <p class="subscribe-success-message">Takk! Din e-post er nå registrert</p>
                                    <input id="email" type="email" placeholder="Skriv inn din epost" name="email">
                                </div>
                                <div class="subscribe-button-cell">
                                    <button id="subscribe-button" class="button">SEND</button>
                                </div>
                            </div>
                        </form>
                        <p class="subscribe-caption">(Få varsel på e-post når nettmagsinet lanseres)</p>
                    </div>
                    <div class="social-container-table">
                            <a class="social-container-cell instagram-cell button" href="http://instagram.com/vitenogpraksis" target="_blank">Følg oss på Instagram<span class="sprite instagram"></span><span class="sprite instagram-small"></span></a>
                            <div class="social-container-spacing-cell"></div>
                            <a class="social-container-cell twitter-cell button" href="https://twitter.com/HiOA_forskning" target="_blank">Følg oss på Twitter<span class="sprite twitter"></span><span class="sprite twitter-small"></span></a>
                    </div> <!-- social-container -->
                </div>
            </div>
        </div>
        <div class="grey">
            <div class="inner-content feature-content">
                <div class="white">
                    <div id="video-id-0" class="feature-image-container video-link">
                        <div class="sprite arrow"></div>
                        <div class="sprite arrow-small"></div>
                        <img class="feature-image" src="<?php bloginfo('template_directory'); ?>/img/feature-image.jpg" alt="Videotittel" />
                        <span class="play-icon large"></span>
                    </div>
                    <div class="feature-text"><?php echo $videos[0]['content']; ?><a class="feature-video-link" href="#"><p><strong>Se video her</strong><span class="sprite play-small"></span><span class="sprite play-xsmall"></span></p></a></div>
                </div>
            </div>
        </div>
        <div class="grey-light">
            <div class="inner-content video-grid">
                <div class="video-grid-row">
                    <div class="video-grid-item video-grid-item-left">
                        <div id="video-id-1" class="video-preview-container video-link">
                            <img src="<?php bloginfo('template_directory'); ?>/img/video-preview1.jpg" alt="Videotittel">
                            <span class="play-icon"></span>
                        </div>
                        <h2><?php echo $videos[1]['title']; ?></h2>
                        <?php echo $videos[1]['content']; ?>
                    </div>
                    <div class="video-grid-item video-grid-item-right">
                        <div id="video-id-2" class="video-preview-container video-link">
                            <img src="<?php bloginfo('template_directory'); ?>/img/video-preview2.jpg" alt="Videotittel">
                            <span class="play-icon"></span>
                        </div>
                        <h2><?php echo $videos[2]['title']; ?></h2>
                        <?php echo $videos[2]['content']; ?>
                    </div>
                </div>
                <div class="video-grid-row">
                    <div class="video-grid-item video-grid-item-left">
                        <div id="video-id-3" class="video-preview-container video-link">
                            <img src="<?php bloginfo('template_directory'); ?>/img/video-preview3.jpg" alt="Videotittel">
                            <span class="play-icon"></span>
                        </div>
                        <h2><?php echo $videos[3]['title']; ?></h2>
                        <?php echo $videos[3]['content']; ?>
                    </div>
                    <div class="video-grid-item video-grid-item-right">
                        <div id="video-id-4" class="video-preview-container video-link">
                            <img src="<?php bloginfo('template_directory'); ?>/img/video-preview4.jpg" alt="Videotittel">
                            <span class="play-icon"></span>
                        </div>
                        <h2><?php echo $videos[4]['title']; ?></h2>
                        <?php echo $videos[4]['content']; ?>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>