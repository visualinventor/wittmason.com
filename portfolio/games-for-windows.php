<?php
$page_title   = 'Games for Windows Design and Development';

$og_url       = '/portfolio/games-for-windows';
$og_desc      = 'Microsoft branded online destination for Windows PC video games.';
$og_img       = 'http://wittmason.com/assets/img/games-for-windows/og-img-gamesforwindows.jpg';

$style        = '<style>
  body{background-color:#D9F2FD;}
  .id-band{min-height:350px; background-color:#D9F2FD; background-image:url("/assets/img/games-for-windows/games-for-windows-head.jpg");background-size:cover; background-position:center; background-repeat:no-repeat;}
  @media all and (max-width: 575px) {
    .id-band{min-height:150px;}
    .page-intro{font-size:16px;line-height:24px;}
  }
</style>';
$pageIntro    = 'Microsoft Gamesforwindows.com';
$mainID       = '';
$disciplines  = 'UX<span>/</span>UI';

$prevLinkLabel  = 'Ditto Writer';
$prevLink       = '/portfolio/ditto-writer';
$nextLinkLabel  = 'Exceptionaries';
$nextLink       = '/portfolio/exceptionaries';

$summary      = 'Games for Windows was a Microsoft-branded online destination for Windows PC video games. Microsoft hired my team to design and build the future Games For Windows.com. They wanted a safe place for people to come to find out about Windows based video games. Many of the other online destinations were plagued by adware and other online hazards. Microsoft wanted a place where customers could find out more about and review their favorite game titles. It was desired that GamesForWindows.com was to be the PC companion to XBox.com. Translated into 18 languages and produced in three countries, it is one of the largest websites I\'ve ever worked on.';

$page_items = array(
  'portfolio-one'    => array(
/* section classes */    'padding-all-none',
/* .inner classes */     'padding-all-lrg',
/* .inner styles */      'background-color:#85A4B7',
/* $page[3] */           '<div class="w-8col">
                              <figure class="text-center center-block line-height-none">
                                <img class="w-8col d-block" src="/assets/img/games-for-windows/indianaJones-legoScreen.png">
                                <figcaption class="color-drk-grey margin-y-sm weight-500">Special Lego Indiana Jones Landing page.</figcaption>
                              </figure>
                          </div>',
/* $page[4] */           '',
/* $page[5] */           '',
/* $page[6] */           '',
/* $page[7] */           '',
/* $page[8] */           '',
/* $page[9] */           ''
                      ),
  'portfolio-two'    => array(
/* section classes */    'bg-ms-grey padding-all-none',
/* .inner classes */     'd-flex flex-justify-center',
/* .inner styles */      '',
/* $page[3] */           '<div class="w-4col" style="overflow:hidden;">
                            <figure class="w-8col position-relative text-center margin-all-none padding-all-none line-height-none">
                              <img style="margin-left:-50%; width:165%; max-width:165%;" src="/assets/img/games-for-windows/gamesforwindows-homepage.jpg">
                            </figure>
                          </div>
                          <div class="w-4col d-flex flex-row flex-align-center">
                            <div class="center-block padding-x-lrg" style="max-width:500px;">
                              <h3 class="text-center uppercase margin-top-lrg">The "VENTS"</h3>
                              <p class="color-drk-grey weight-500 line-height-26">PC games have no discernable common iconography. It comtains no common hardware, except for generic peripherals like mice or keyboards. When Microsoft came to my team and wanted to make a PC game companion website to XBox.com we began the task of brainstorming.</p>
                              <p class="color-drk-grey weight-500 line-height-26 margin-bottom-lrg">The XBox 360 had been recently released and was one of the best selling game consoles to date. So instead of trying some generic website styling we invented an “imaginary PC console” based loosely on the curves of the XBox 360. Similar but different enough that they might be cousins but definitely not the same. Thus the “fins” or “vents” were born.</p>
                              <div class="w-8col d-flex flex-row flex-align-center">
                                <div class="w-5col"><p class="weight-500 color-white text-right">The “vents” were loosely based on the XBox 360 hardware</p></div>
                                <div class="w-3col text-center padding-bottom-med"><img src="/assets/img/games-for-windows/xbox360-group.png"></div>
                              </div>
                            </div>
                        </div>',
  /* $page[4] */        '',
/* $page[5] */          '',
/* $page[6] */          '',
/* $page[7] */          '',
/* $page[8] */          '',
/* $page[9] */          ''
                        ),
'portfolio-three'    => array(
/* section classes */    '',
/* .inner classes */     '',
/* .inner styles */      '',
/* $page[3] */           '<figure class="center-block text-center">
                            <div class="browser">
                              <img src="/assets/img/games-for-windows/wow-interiorpg.png">
                            </div>
                            <figcaption class="color-drk-grey weight-500">World of Warcraft Interior page.</figcaption>
                          </figure>',
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
