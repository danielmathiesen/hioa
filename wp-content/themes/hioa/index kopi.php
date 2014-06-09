<?php get_header(); ?>
        <div class="grey-light">
            <div class="inner-content signup-container">
                <h1>Dette er en overskrift</h1>
                <p class="excerpt">Dette er en kort tekst om lanseringen av det digitale magasinet og hva det skal være... Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <div class="subscribe-container">
                    <div class="subscribe-container-inner">
                        <div class="subscribe-table">
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
                    <div class="feature-image-container">
                        <!-- <div class="sprite arrow"></div> -->
                        <img class="feature-image" src="<?php bloginfo('template_directory'); ?>/img/feature-image.jpg" alt="Videotittel" />
                    </div>
                    <p class="feature-text">Forskere ved HiOA har samlet inn nesten 5000 spyttprøver fra norske og svenske testikkelkreftpasienter og fra deres mødre og fedre. Ved å analysere DNA fra disse prøvene jakter forskerne på genetiske årsaker til testikkelkreft. <br/><br/>Det er HiOAs forskergruppe Reproduktiv helse hos menn i samarbeid med Kreftregisteret og Karolinska Institutet i Sverige som står bak forskningen.<br/><br/><a id="feature-video-link" href="#"><strong>Se video her</strong><span class="sprite play-small"></span><span class="sprite play-xsmall"></span></a></p>
                </div>
            </div>
        </div>
        <div class="grey-light">
            <div class="inner-content video-grid">
                <div class="video-grid-row">
                    <div class="video-grid-item video-grid-item-left">
                        <div id="video-id-2" class="video-preview-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/video-preview1.jpg" alt="Videotittel">
                            <span class="play-icon"></span>
                        </div>
                        <h2>Dette er en tittel</h2>
                        <p>Stipendiat Anne Kari Tolo Heggestad ved Institutt for sykepleie (HiOA) forsker på demens og verdighet. Hun har spesielt sett på demente på institusjon.</p>
                    </div>
                    <div class="video-grid-item video-grid-item-right">
                        <div id="video-id-3" class="video-preview-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/video-preview2.jpg" alt="Videotittel">
                            <span class="play-icon"></span>
                        </div>
                        <h2>Dette er en tittel</h2>
                        <p>Stipendiat Anne Kari Tolo Heggestad ved Institutt for sykepleie (HiOA) forsker på demens og verdighet. Hun har spesielt sett på demente på institusjon.</p>
                    </div>
                </div>
                <div class="video-grid-row">
                    <div class="video-grid-item video-grid-item-left">
                        <div id="video-id-4" class="video-preview-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/video-preview3.jpg" alt="Videotittel">
                            <span class="play-icon"></span>
                        </div>
                        <h2>Dette er en tittel</h2>
                        <p>Stipendiat Anne Kari Tolo Heggestad ved Institutt for sykepleie (HiOA) forsker på demens og verdighet. Hun har spesielt sett på demente på institusjon.</p>
                    </div>
                    <div class="video-grid-item video-grid-item-right">
                        <div id="video-id-5" class="video-preview-container">
                            <img src="<?php bloginfo('template_directory'); ?>/img/video-preview4.jpg" alt="Videotittel">
                            <span class="play-icon"></span>
                        </div>
                        <h2>Dette er en tittel</h2>
                        <p>Stipendiat Anne Kari Tolo Heggestad ved Institutt for sykepleie (HiOA) forsker på demens og verdighet. Hun har spesielt sett på demente på institusjon.</p>
                    </div>
                </div>
            </div>
        </div>
<?php get_footer(); ?>