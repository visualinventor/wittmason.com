<?php
$page_title     = 'The online portfolio for Web Designer and Developer Tim Watson';

$og_url         = '/splash';
$og_desc        = 'The online portfolio for Web Design and Developer Tim Watson';
$og_img         = 'http://wittmason.com/assets/img/wittmason/og-img-wittmason.jpg';

$style          = '<style>
  body{background-color:#d2c98e;}
  .id-band{
    background:url("/assets/img/wittmason/new-v2-splash.jpg");
    background-size:cover; background-position:center; background-repeat:no-repeat;
    height:101vh;
  }
  .page-band,.arrow-down{display:none;}
  .details-band{display:none;}
  @media all and (max-width: 575px) {
    .identity-area{max-width:270px;}
    .wm-logo{max-height:250px;}
    .wm-logo,.logotype{max-width: 220px;}
    .id-band{padding:0; height:calc(100vh - 50px);}
    main{ min-height:calc(100vh - 50px); }
  }
</style>
<script>
if (window.matchMedia("(min-width: 576px)").matches) {
  setTimeout(function(){
    document.querySelector("menu").classList.toggle("collapsed");
    document.querySelector("#menu-toggle").classList.toggle("active");
  }, 6000);
}
</script>';
$pageIntro      = 'Hi I\'m Tim Watson an Oklahoma City Based UX/UI Developer';
$mainID         = '
<div class="text-center weight-600 letter-space-2 line-height-26" style="color:#d2c98e;" data-aos="fade-down"  data-aos-duration="5000" data-aos-delay="4000">The online portfolio of<br>
  <span class="uppercase">Tim Watson</span>
</div>
<div class="text-center">
  <svg class="wm-logo" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
<g id="mainLogo">
<g>
<polygon fill="#fff" points="34.718,205.323 33.911,203.661 265.197,92.68 266.006,94.343"/>
<circle fill="#fff" class="circle" cx="150.604" cy="149.357" r="105.811"/>
</g>
<g>
<path fill="#000000" d="M132.128,130.21v26.665l4.169-2.55V130.21c0.014-3.262-1.209-5.976-3.125-7.743
  c-1.91-1.775-4.396-2.619-6.846-2.619c-2.472,0-4.974,0.855-6.902,2.631c-1.934,1.765-3.186,4.479-3.17,7.731l-0.018,72.483h0.025
  l-0.013,2.131c-0.016,2.254-0.765,3.68-1.829,4.68c-1.069,0.99-2.562,1.527-4.075,1.525c-1.502,0.002-2.958-0.523-4.003-1.5
  c-1.039-0.986-1.783-2.412-1.797-4.691v-87.182c1.096-0.693,1.825-1.911,1.825-3.304c0-2.159-1.749-3.907-3.908-3.909
  c-2.16,0.002-3.909,1.75-3.91,3.909c0.001,1.392,0.729,2.608,1.823,3.302v87.184c-0.014,3.262,1.208,5.975,3.125,7.74
  c1.91,1.775,4.395,2.621,6.846,2.621c2.471-0.002,4.974-0.855,6.901-2.631c1.936-1.764,3.187-4.479,3.172-7.73l0.016-2.635h-0.027
  l0.016-71.992c0.016-2.242,0.766-3.668,1.83-4.668c1.068-0.992,2.561-1.528,4.074-1.526c1.502-0.001,2.959,0.523,4.004,1.501
  C131.369,126.503,132.112,127.929,132.128,130.21z M103.705,115.679h-0.715l-0.481,25.271l-0.564-25.271h-0.727
  c-0.354-0.333-0.579-0.802-0.58-1.326c0.001-1.007,0.817-1.821,1.824-1.824c1.007,0.003,1.822,0.817,1.823,1.824
  C104.284,114.877,104.059,115.346,103.705,115.679z"/>
<path fill="#000000" d="M149.756,177.833l-1.758-21.835l0,0v40.84c-0.016,2.279-0.758,3.705-1.798,4.691
  c-1.045,0.977-2.503,1.502-4.003,1.5c-1.514,0.002-3.006-0.535-4.074-1.525c-1.064-1-1.814-2.426-1.83-4.666l-0.014-2.145h0.018
  V156.75l-4.169,1.352v36.102h-0.021l0.018,2.646c-0.016,3.24,1.236,5.955,3.17,7.719c1.93,1.775,4.431,2.629,6.902,2.631
  c2.45,0,4.936-0.846,6.846-2.621c1.916-1.766,3.139-4.479,3.125-7.74v-44.131l0,0L149.756,177.833z"/>
</g>
<g>
<path fill="#000000" d="M199.869,179.848V93.706c0.014-3.263-1.211-5.976-3.127-7.743c-1.91-1.775-4.395-2.619-6.846-2.619
  c-2.471,0-4.973,0.855-6.902,2.631c-1.932,1.766-3.184,4.479-3.17,7.731l-0.016,2.636h0.027l-0.018,80.949
  c-0.014,2.242-0.764,3.668-1.826,4.668c-1.07,0.992-2.562,1.527-4.076,1.525c-1.502,0-2.959-0.523-4.004-1.5
  c-1.039-0.986-1.783-2.412-1.797-4.693v-35.999l-4.17,2.677v33.322c-0.016,3.262,1.207,5.975,3.125,7.744
  c1.91,1.775,4.395,2.619,6.846,2.619c2.471-0.002,4.973-0.857,6.902-2.631c1.934-1.766,3.186-4.479,3.17-7.732l0.018-81.439
  h-0.025l0.014-2.133c0.014-2.254,0.764-3.68,1.828-4.681c1.068-0.991,2.561-1.526,4.074-1.526c1.502,0,2.959,0.523,4.004,1.502
  c1.039,0.986,1.783,2.412,1.797,4.692v86.14c-1.096,0.693-1.824,1.912-1.824,3.305c0,2.158,1.75,3.906,3.908,3.908
  c2.16-0.002,3.908-1.75,3.908-3.908C201.689,181.758,200.961,180.541,199.869,179.848z M197.781,184.973
  c-1.008-0.002-1.822-0.816-1.824-1.822c0.002-0.525,0.227-0.994,0.58-1.326h0.674l0.523-25.494l0.632,25.494h0.659
  c0.354,0.332,0.578,0.801,0.58,1.326C199.604,184.156,198.789,184.971,197.781,184.973z"/>
<path fill="#000000" d="M150.604,122.083l1.641,20.496l0,0v-37.873c0.014-2.28,0.758-3.706,1.797-4.692
  c1.045-0.978,2.502-1.502,4.004-1.502c1.512,0,3.006,0.535,4.074,1.527c1.064,1,1.814,2.426,1.828,4.667l0.014,2.146h-0.016
  v34.086l4.17-1.438v-32.158h0.02l-0.018-2.648c0.016-3.239-1.236-5.953-3.17-7.719c-1.93-1.774-4.432-2.631-6.902-2.632
  c-2.451,0.001-4.936,0.845-6.846,2.62c-1.916,1.768-3.139,4.48-3.125,7.743v41.164l0,0L150.604,122.083z"/>
</g>
<path fill="none" stroke="#ffffff" stroke-miterlimit="3.8637" d="M149.688,187.938"/>
<path fill="none" stroke="#ffffff" stroke-miterlimit="3.8637" d="M150.166,120.244"/>
</g>
<g id="mask">
<path class="path" fill="none" stroke="#ffffff" stroke-width="12" d="M102.125,108.875c0,0,0,90.25,0,96.875c0,9,16.125,10,16.125,0
s0-69.125,0-76.75c0-8.375,15.625-9.875,15.625,0s0,57.5,0,67.75c0,11.449,16.125,10.5,16.125,1s0-45.043,0-45.043"/>
<path class="path" fill="none" stroke="#ffffff" stroke-width="12" d="M197.875,188.857c0,0,0-89.25,0-95.875c0-9.732-16.125-10-16.125,0
s0,78.125,0,85.75c0,8.375-15.625,9.875-15.625,0s0-63.5,0-73.75c0-11.449-16.125-10.5-16.125-1s0,45.043,0,45.043"/>
</g>
<g class="spark" >
<polygon fill="#FBB040" points="150.375,135.833 148.807,147.552 138.645,154.308
148.667,150.885 149.765,162.125 151.625,149.311 162.105,143.125 151.456,145.87 	"/>
</g>
</svg><br>
    <div class="margin-top-sm center-block padding-bottom-lrg" data-aos="fade-up" data-aos-duration="5000" data-aos-delay="4000">
      <img class="logotype" src="/assets/img/wittmason/wm.com-logoType.svg">
    </div>
  </div>
<div class="position-absolute center-block scroll uppercase color-white text-center" style="bottom:30px;left:0;right:0;">
  <figure class="center-block text-center weight-600 color-ltgrey"><figcaption style="font-size:12px;">Banff National Park - Photo by me</figcaption></figure>
  <!--i class="fa fa-chevron-down fa-2x" style="color:#d2c98e;"></i-->
</div>';
$disciplines    = '';

$prevLinkLabel  = '';
$prevLink       = '';
$nextLinkLabel  = '';
$nextLink       = '';

$summary        = '';

$page_items = array(
  'portfolio-one'    => array(
/* section classes */    '',
/* .inner classes */     '',
/* .inner styles */      '',
/* $page[3] */           '',
/* $page[4] */           '',
/* $page[6] */           '',
/* $page[7] */           '',
/* $page[8] */           '',
/* $page[9] */           ''
  )
);

$otherPage = '';

include($_SERVER['DOCUMENT_ROOT'] . "/wittmason.php");
?>
