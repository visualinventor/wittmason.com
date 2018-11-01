<?php
$page_title    = 'NewsOKNow.com Design and Development';

$og_url       = '/portfolio/newsoknow';
$og_desc      = 'NewsOK Now is a community news app that allows submitters to share their news and photos from around Oklahoma. I completed the UX, UI for the iOS design and branding; developed the web app for android users; and developed the front end admin so editors could approve submissions.';
$og_img       = 'http://wittmason.com/assets/img/newsok-now/og-img-newsoknow.jpg';


$style        = '<style>
  body{background-color:#304065;}
  .id-band{background:url("/assets/img/newsok-now/upper-bg.jpg");background-size:cover; background-position:center; background-repeat:no-repeat;}
</style>';
$pageIntro    = 'NewsOK NOW';
$mainID       = '<img class="padding-x-lrg" src="/assets/img/newsok-now/newsOK-now.svg">';
$disciplines  = 'Branding<span>/</span> UX<span>/</span>UI<span>/</span> WIREFRAMING';

$prevLinkLabel  = 'Portfolio';
$prevLink       = '/portfolio';
$nextLinkLabel  = 'Ditto Writer';
$nextLink       = '/portfolio/ditto-writer';

$summary      = 'NewsOK Now is a community news app that allows submitters to share their news and photos from around Oklahoma. I completed the UX, UI for the iOS design and branding; developed the web app for android users; and developed the front end admin so editors could approve submissions.';

$page_items = array(
  'portfolio-one'    => array(
/* section classes */    'bg-meddark-grey padding-y-med',
/* .inner classes */     'd-flex flex-justify-center color-ltgrey',
/* .inner styles */      '',
    /* $page[3] */       '<div class="w-2col d-flex flex-row flex-align-center padding-x-med " data-aos="fade-right">
                              <div>
                                  <figure class="center-block text-center padding-top-med" style="width:100px;">
                                    <img class="center-block" src="/assets/img/newsok-now/newsOKNow-appIcon.png">
                                    <figcaption class="weight-500">App Icon</figcaption>
                                  </figure>
                                  <p class="color-ltgrey margin-top-none line-height-26 weight-500">By a 3-to-1 margin, the user base for NewsOK’s apps are primarily on iOS. As a result, we focused on building an iOS app for NewsOK NOW and a web/mobile web companion for android.</p>
                               </div>
                            </div>',
/* $page[4] */             '<figure data-aos="fade" data-aos-duration="2000" class="flex-row w-4col" style="max-width:550px;"><figcaption class="color-ltgrey">Animation will play ...</figcaption><img src="/assets/img/newsok-now/newsOKNow-screenFlow.gif"></figure>',
                           '<div class="w-2col padding-x-med d-flex flex-align-center">
                               <figure class="center-block">
                                 <img data-aos="fade" style="position:absolute; right:0; top:0; bottom:0; margin:auto 0; width:40%" src="/assets/img/newsok-now/apetureIcon.svg">
                                 <figcaption class="weight-500">iOS Application flow</figcaption>
                               </figure>
                            </div>',
/* $page[5] */      '',
/* $page[6] */      '',
/* $page[7] */      '',
/* $page[8] */      '',
/* $page[9] */      ''
                        ),
  'portfolio-two'    => array(
/* section classes */    'padding-all-none',
/* .inner classes */     'd-flex flex-justify-center',
/* .inner styles */      '',
/* $page[3] */           '<div class="w-4col d-flex flex-row flex-align-center" style="overflow:hidden">
                                <figure class="center-block text-center padding-bottom-lrg" data-aos="fade-right" data-aos-duration="2000">
                                  <img class="center-block" src="/assets/img/newsok-now/940x65_header_now.jpg">
                                  <figcaption class="color-ltgrey">Web page header graphic</figcaption>
                                </figure>
                                <figure class="center-block text-center padding-bottom-lrg" data-aos="fade-right" data-aos-duration="2000">
                                  <img class="center-block" src="/assets/img/newsok-now/newsoknow_widget.png">
                                  <figcaption class="color-ltgrey">NewsOK Now widget CTA</figcaption>
                                </figure>
                            </div>
                            <div class="w-4col" style="overflow:hidden">
                                <figure class="w-8col position-relative text-center margin-all-none padding-all-none line-height-none" data-aos="fade-left" data-aos-duration="2000">
                                  <img class="w-8col" src="/assets/img/newsok-now/newsoknow-brand-bg.jpg">
                                  <figcaption class="position-absolute color-white" style="bottom:25px;left:0;right:0;margin:auto;">Brand background image photo by me.</figcaption>
                                </figure>
                            </div>',
/* $page[4] */      '',
/* $page[5] */      '',
/* $page[6] */      '',
/* $page[7] */      '',
/* $page[8] */      '',
/* $page[9] */      ''
                      ),
'portfolio-three'    => array(
/* section classes */    'bg-ltgrey',
/* .inner classes */     'd-flex flex-justify-center',
/* .inner styles */      '',
/* $page[3] */      '<div class="w-8col flex-row flex-align-center">
                            <figure class="center-block text-center" data-aos="fade-up" data-aos-duration="2000">
                              <img class="center-block" src="/assets/img/newsok-now/newsok-now-laptop-with-screen.jpg">
                              <figcaption>NewsOKNow.com <span class="color-grey">(Android and web uploads)</span></figcaption>
                            </figure>
                        </div>',
/* $page[4] */      '',
/* $page[5] */      '',
/* $page[6] */      '',
/* $page[7] */      '',
/* $page[8] */      '',
/* $page[9] */      ''
                      )
);

$otherPage = '';

include($_SERVER['DOCUMENT_ROOT'] . "/wittmason.php");

?>
