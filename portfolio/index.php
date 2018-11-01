<?php
$page_title    = 'The web design/development portfolio of Tim Watson';

$og_url       = '/portfolio';
$og_desc      = 'The online portfolio for Web Design and Developer Tim Watson';
$og_img       = 'http://wittmason.com/assets/img/wittmason/og-img-wittmason.jpg';

$style        = '<style>
body{background-color:#efefef;}
.id-band{display:none;}
.page-intro{margin-bottom:0;}
</style>';
$pageIntro    = 'Portfolio';
$mainID       = '';
$disciplines  = '';

$prevLink     = '';
$nextLink     = '';

$summary      = 'Here are a few projects representing the breadth of my experience in branding and front-end development for online products.  Feel free to reach out on the "Contact Me" page to get in touch with me. I am actively seeking employment.';

$page_items = array(
  'first-block'    => array(
/* section classes */    '',
/* .inner classes */     '',
/* .inner styles */      '',
/* $page[3] */           '<div class="w-8col d-flex flex-justify-center line-height-none" style="font-size:0;">
                            <a class="portfolio-item flex-row" href="/portfolio/newsok-now"">
                              <img src="/assets/img/newsok-now/og-img-newsoknow.jpg">
                              <div class="overlay">
                                <div class="text">NewsOK Now - online news sharing app</div>
                              </div>
                            </a>
                            <a class="portfolio-item flex-row" href="/portfolio/ditto-writer">
                              <img src="/assets/img/ditto-writer/og-img-ditto.jpg">
                              <div class="overlay">
                                <div class="text">Ditto Writer - online news publishing system</div>
                              </div>
                            </a>
                          </div>
                          <div class="w-8col d-flex flex-justify-center line-height-none" style="font-size:0;">
                            <a class="portfolio-item flex-row" href="/portfolio/games-for-windows" data-aos="fade-up">
                              <img src="/assets/img/games-for-windows/og-img-gamesforwindows.jpg">
                              <div class="overlay">
                                <div class="text">GamesForWindows.com</div>
                              </div>
                            </a>
                            <a class="portfolio-item flex-row" href="/portfolio/exceptionaries" data-aos="fade-up">
                              <img src="/assets/img/exceptionaries/og-img-exceptionaries.jpg">
                              <div class="overlay">
                                <div class="text">Exceptionaries.com - blog style news site</div>
                              </div>
                            </a>
                          </div>
                          <div class="w-8col d-flex flex-justify-center line-height-none" style="font-size:0;">
                            <a class="portfolio-item flex-row" href="/portfolio/brand-design" data-aos="fade-up">
                              <img src="/assets/img/brand-design/proPhotoSummit-redo.jpg">
                              <div class="overlay">
                                <div class="text">Brand Design</div>
                              </div>
                            </a>
                            <!--a class="portfolio-item flex-row" href="" data-aos="fade-up">
                              <img width="600" height="450" src="/assets/img/wittmason/img-holder.gif">
                              <div class="overlay">
                                <div class="text"></div>
                              </div>
                            </a-->
                          </div>',
/* $page[5] */           '',
/* $page[6] */           '',
/* $page[7] */           '',
/* $page[8] */           '',
/* $page[9] */           ''
                        )
);

$otherPage = '';

include($_SERVER['DOCUMENT_ROOT'] . "/wittmason.php");

?>
