<?php
$page_title     = 'Exceptionaries website design';

$og_url         = '/portfolio/exceptionaries';
$og_desc        = 'Exceptional People Doing Extraodrinary Things';
$og_img         = 'http://wittmason.com/assets/img/exceptionaries/og-img-exceptionaries.jpg';

$style          = '<style>
  body{background-color:#CBE1E8;}
  .id-band{min-height:305px; background:url("/assets/img/exceptionaries/header-v2.jpg");background-size:cover; background-position:center; background-repeat:no-repeat;}
  @media all and (max-width: 575px) {
    .identity-area{max-width:270px;}
    .id-band{min-height:150px; background-size: 600px;}
    .page-intro{font-size:16px;line-height:24px;}
  }
</style>';
$pageIntro      = 'Exceptionaries.com';
$mainID         = '<img class="padding-x-lrg" src="">';
$disciplines    = 'Branding<span>/</span>UX<span>/</span>UI';

$prevLinkLabel  = 'Games for Windows';
$prevLink       = '/portfolio/games-for-windows';
$nextLinkLabel  = 'Brand Designs';
$nextLink       = '/portfolio/brand-design';

$summary        = 'An Oklahoman Media Company website that showcased the more "off the wall" story content. Exceptional People Doing Extraodrinary Things. It was concepted and developed as a blog style design.';

$page_items = array(
  'portfolio-one'    => array(
/* section classes */    'padding-all-none',
/* .inner classes */     '',
/* .inner styles */      'background-color:#c3c3c3;',
/* $page[3] */
       '<div class="d-flex flex-justify-center">
          <div class="w-4col d-flex flex-row padding-y-lrg padding-x-med" style="overflow:hidden">
            <figure class="w-8col text-right" data-aos="fade-right" data-aos-duration="2000">
              <img class="" src="/assets/img/exceptionaries/tagline.svg">
            </figure>
          </div>
          <div class="w-4col d-flex flex-row padding-y-lrg padding-x-med" style="overflow:hidden">
            <figure class="w-8col text-left" data-aos="fade-left" data-aos-duration="2000">
              <img class="padding-left-lrg" src="/assets/img/exceptionaries/typography.svg">
            </figure>
          </div>
        </div>',
/* $page[4] */
      '<div class="w-8col"><p class="text-center color-drk-grey">Color Palette</p><img src="/assets/img/exceptionaries/colorPallette.svg" style="max-width:100%;width:100%;"></div>',
/* $page[6] */           '',
/* $page[7] */           '',
/* $page[8] */           '',
/* $page[9] */           ''
),
  'portfolio-two'    => array(
/* section classes */    '',
/* .inner classes */     '',
/* .inner styles */      '',
/* $page[3] */           '<figure class="center-block">
                            <figcaption class="color-med-grey padding-bottom-lrg">Home Page</figcaption>
                            <div class="browser" data-aos="fade-up">
                              <img src="/assets/img/exceptionaries/exceptionaries-homePage.jpg">
                            </div>
                          </figure>',
/* $page[4] */           '<figure class="center-block">
                            <figcaption class="color-med-grey padding-bottom-lrg">Section Front Page</figcaption>
                            <div class="browser" data-aos="fade-up">
                              <img src="/assets/img/exceptionaries/exceptionaries-sectionFrontPage.jpg">
                            </div>
                          </figure>',
/* $page[5] */
'<figure class="center-block">
  <figcaption class="color-med-grey padding-bottom-lrg">Article Page</figcaption>
  <div class="browser" data-aos="fade-up">
    <img src="/assets/img/exceptionaries/exceptionaries-articlePage.jpg">
  </div>
</figure>',
/* $page[6] */           '',
/* $page[7] */           '',
/* $page[8] */           '',
/* $page[9] */           ''
)
);

$otherPage = '';

include($_SERVER['DOCUMENT_ROOT'] . "/wittmason.php");
?>
