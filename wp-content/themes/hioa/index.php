<?php get_header(); ?>
<?php $videos = getVideos(); ?>

        <div class="grey-light">
            <div class="inner-content signup-container">
                <h1>HiOA lanserer nettmagasin</h1>
                <p class="excerpt">Her kommer HiOAs nye nettmagasin <strong><i>viten + praksis</i></strong>. 19. september kan du oppleve HiOAs forskning i tekst, bilder, videoer og sosiale medier – samlet i et digitalt univers. Mens du venter, ta en kikk på noen av våre forskningsfilmer.</p>
                <div class="subscribe-container">
                    <div class="subscribe-container-inner">
                        <div class="subscribe-table">
                            <p class="subscribe-success-message">Takk! Din e-post er nå registrert</p>
                            <div class="subscribe-input-cell">
                                <input type="text" placeholder="Skriv inn din epost" name="email">
                            </div>
                            <div class="subscribe-button-cell">
                                <button id="subscribe-button" class="button">SEND</button>
                            </div>
                        </div>
                        <p class="subscribe-caption">(Få varsel på e-post når nettmagsinet lanseres)</p>
                    </div>
                    <div class="social-container-table">
                            <a class="social-container-cell button" href="https://twitter.com/HiOA_info" target="_blank">Følg oss på Instagram<span class="sprite instagram"></span><span class="sprite instagram-small"></span></a>
                            <div class="social-container-spacing-cell"></div>
                            <a class="social-container-cell button" href="http://instagram.com/hioa" target="_blank">Følg oss på Twitter<span class="sprite twitter"></span><span class="sprite twitter-small"></span></a>
                    </div> <!-- social-container -->
                </div>
            </div>
        </div>
        <div class="grey">
            <div class="inner-content feature-content">
                <div class="white">
                    <div id="video-id-0" class="feature-image-container video-link">
                        <!-- <div class="sprite arrow"></div> -->
                        <img class="feature-image" src="<?php bloginfo('template_directory'); ?>/img/feature-image.jpg" alt="Videotittel" />
                        <span class="play-icon large"></span>
                    </div>
                    <div class="feature-text"><?php echo $videos[0]['content']; ?><a id="feature-video-link" href="#"><p><strong>Se video her</strong><span class="sprite play-small"></span><span class="sprite play-xsmall"></span></a></p></div>
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
                        <p><?php echo $videos[1]['content']; ?></p>
                    </div>
                    <div class="video-grid-item video-grid-item-right">
                        <div id="video-id-2" class="video-preview-container video-link">
                            <img src="<?php bloginfo('template_directory'); ?>/img/video-preview2.jpg" alt="Videotittel">
                            <span class="play-icon"></span>
                        </div>
                        <h2><?php echo $videos[2]['title']; ?></h2>
                        <p><?php echo $videos[2]['content']; ?></p>
                    </div>
                </div>
                <div class="video-grid-row">
                    <div class="video-grid-item video-grid-item-left">
                        <div id="video-id-3" class="video-preview-container video-link">
                            <img src="<?php bloginfo('template_directory'); ?>/img/video-preview3.jpg" alt="Videotittel">
                            <span class="play-icon"></span>
                        </div>
                        <h2><?php echo $videos[3]['title']; ?></h2>
                        <p><?php echo $videos[3]['content']; ?></p>
                    </div>
                    <div class="video-grid-item video-grid-item-right">
                        <div id="video-id-4" class="video-preview-container video-link">
                            <img src="<?php bloginfo('template_directory'); ?>/img/video-preview4.jpg" alt="Videotittel">
                            <span class="play-icon"></span>
                        </div>
                        <h2><?php echo $videos[4]['title']; ?></h2>
                        <p><?php echo $videos[4]['content']; ?></p>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>