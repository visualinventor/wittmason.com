<?php
$page_title     = 'Test Portfolio Item';

$og_url         = '/portfolio/test';
$og_desc        = 'The Oklahoman Media Company custom online news publishing tool.';
$og_img         = 'http://wittmason.com/assets/img/ditto-writer/og-img-ditto.jpg';

$style          = '<style>
  body{background-color:#d0e3e7;}
  .id-band{background-color:#dfedf0;}
  @media all and (max-width: 575px) {
    .identity-area{max-width:270px;}
  }
</style>';
$pageIntro      = 'Ditto Writer';
$mainID         = '<img class="padding-x-lrg" src="/assets/img/ditto-writer/dittoWindow.svg">';
$disciplines    = 'Branding<span>/</span>UX<span>/</span>UI<span>/</span>Wireframing';

$prevLinkLabel  = '';
$prevLink       = '';
$nextLinkLabel  = '';
$nextLink       = '/portfolio';

$summary        = 'In my time at the Oklahoman Media Company we produced many customized online news publishing tools. The writing tool we created went through 2 iterations. The first called Ditto Blog Writer was primarily used for blogging. It replaced Wordpress and a custom Wordpress export plugin we had created in-house. The next ietration was a true inline news editing tool, based on Angular 2 and Typescript. I designed the UX/UI for both tools as well as developed the front-end code.';

$page_items = array(
  'portfolio-one'    => array(
/* section classes */    '',
/* .inner classes */     '',
/* .inner styles */      '',
/* $page[3] */           '<h4 class="uppercase text-center">Blog Writer 1.0</h4>
                          <figure class="center-block text-center">
                            <div class="browser">
                              <img src="/assets/img/ditto-writer/blog-writer-edit-01.png">
                            </div>
                            <figcaption class="padding-bottom-med">Ditto Blog Writer was a replacement for a Wordpress based workflow that utilized a custom plugin.</figcaption>
                          </figure>',
/* $page[4] */           '',
/* $page[6] */           '',
/* $page[7] */           '',
/* $page[8] */           '',
/* $page[9] */           ''
),
  'portfolio-two'    => array(
/* section classes */    'padding-all-none bg-white',
/* .inner classes */     '',
/* .inner styles */      '',
/* $page[3] */           '<h4 class="uppercase text-center">Blog Writer 1.0</h4>
                          <figure class="center-block text-centerr">
                            <div class="browser">
                              <img src="/assets/img/ditto-writer/blog-writer-edit-01.png">
                            </div>
                            <figcaption>Ditto Blog Writer was a replacement for a Wordpress based workflow that utilized a custom plugin.</figcaption>
                          </figure>',
/* $page[4] */           '',
/* $page[5] */           '',
/* $page[6] */           '',
/* $page[7] */           '',
/* $page[8] */           '',
/* $page[9] */           ''
),
  'portfolio-three'    => array(
/* section classes */    'bg-med-blue',
/* .inner classes */     '',
/* .inner styles */      '',
/* $page[3] */           '<figure class="center-block text-center browser padding-bottom-med"  data-aos="fade-up">
                            <img src="/assets/img/ditto-writer/dittowriter-article-produce.png">
                          <figcaption>Ditto Writer 2.0</figcaption>
                          </figure>',
/* $page[4] */           '<figure class="center-block text-center browser padding-bottom-med" data-aos="fade-up">
                            <img src="/assets/img/ditto-writer/dittowriter-article-searchy.png">
                          <figcaption>Ditto Writer 2.0 - search drawer open</figcaption>
                        </figure>',
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
