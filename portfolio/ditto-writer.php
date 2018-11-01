<?php
$page_title     = 'Ditto Writer Design and Development';

$og_url         = '/portfolio/ditto-writer';
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
$disciplines    = 'Branding<span>/</span> UX<span>/</span>UI<span>/</span> Wireframing';

$prevLinkLabel  = 'NewsOK Now';
$prevLink       = '/portfolio/newsok-now';
$nextLinkLabel  = 'Games for Windows';
$nextLink       = '/portfolio/games-for-windows';

$summary        = 'In my time at the Oklahoman Media Company we produced many customized online news publishing tools. The writing tool we created went through two versions. The first version – Ditto Blog Writer – was primarily used for blogging. It replaced Wordpress and a custom Wordpress export plugin we had created in-house. The next version was a true inline news editing tool, based on Angular 2 and Typescript. I designed the UX/UI for both tools as well as developed the front-end code.';

$page_items = array(
  'portfolio-one'    => array(
/* section classes */    '',
/* .inner classes */     '',
/* .inner styles */      '',
/* $page[3] */           '<h4 class="color-drk-grey uppercase text-center">Blog Writer 1.0</h4>
                          <figure class="center-block text-center">
                            <div class="browser">
                              <img src="/assets/img/ditto-writer/blog-writer-edit-01.jpg">
                            </div>
                            <figcaption>Ditto Blog Writer was a replacement for a Wordpress-based workflow that utilized a custom plugin.</figcaption>
                          </figure>',
/* $page[4] */           '',
/* $page[6] */           '',
/* $page[7] */           '',
/* $page[8] */           '',
/* $page[9] */           ''
),
  'portfolio-two'    => array(
/* section classes */    'padding-all-none',
/* .inner classes */     '',
/* .inner styles */      '',
/* $page[3] */           '<h4 class="uppercase text-center w-8col margin-top-none">Ditto Writer 2.0</h4>
                          <figure class="w-8col text-center bg-white margin-all-none line-height-26 weight-500">
                            <img src="/assets/img/ditto-writer/workflow.jpg" data-aos="fade" style="max-width:1350px;">
                            <figcaption class="w-8col text-center color-med-grey padding-bottom-lrg">The Workflow was the main navigation for the edit screens<br>
                            <span class="uppercase letter-spacing-2">Create <span class="color-ltgrey">/</span> Produce <span class="color-ltgrey">/</span> Edit <span class="color-ltgrey">/</span> Schedule <span class="color-ltgrey">/</span> Publish</span></figcaption>
                          </figure>',
/* $page[4] */           '',
/* $page[5] */           '',
/* $page[6] */           '',
/* $page[7] */           '',
/* $page[8] */           '',
/* $page[9] */           ''
),
  'portfolio-three'    => array(
/* section classes */    '',
/* .inner classes */     '',
/* .inner styles */      '',
/* $page[3] */           '<figure class="center-block text-center margin-bottom-med">
                            <figcaption>Ditto Writer 2.0 - edit screen</figcaption>
                            <div class="browser" data-aos="fade-up">
                              <img src="/assets/img/ditto-writer/dittowriter-article-produce.jpg">
                            </div>
                          </figure>',
/* $page[4] */           '<figure class="center-block text-center margin-bottom-med">
                            <figcaption>Ditto Writer 2.0 - Edit screen / search drawer open</figcaption>
                            <div class="browser" data-aos="fade-up">
                              <img src="/assets/img/ditto-writer/dittowriter-article-searchy.jpg">
                            </div>
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
