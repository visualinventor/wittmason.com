<?php
$page_title    = 'Hi I\'m Tim - Let\'s chat';

$og_url       = '/contact-me';
$og_desc      = '';
$og_img       = '';


$style        = '<style>
.identity-area{margin:40px; width:70%; text-align:center;}
.identity-area img{ border-radius:50%; overflow:hidden; border: 4px solid #fff;}
.id-band{font-size:0; line-height:0;background:url("/assets/img/wittmason/mtn-bg.jpg"); background-size:cover; background-position:center; background-repeat:no-repeat;}
main{background-color:#ccc;}
h1{margin-bottom:0;}
</style>';
$pageIntro    = 'Hi I\'m Tim and I\'d love to chat with you about your opportunity.';
$mainID       = '<img class="w-2col" src="/assets/img/wittmason/profile-pic.jpg">';
$disciplines  = '';

$prevLink     = '';
$nextLink     = '';

$summary      = '';

//===Editable variables===//

//Language code for including translation file and reCAPTCHA language
//see https://developers.google.com/recaptcha/docs/language
$lang_code = 'en';

//Your email
$email_to = 'tim@wittmason.com';

//Contact form identifier, prefixes email subject
//delete this variable if you don't want to use it
$subject_prefix = 'Contact from WittMason.com';

//Keys from Google reCaptcha https://www.google.com/recaptcha/admin
$sitekey = '6LdYpzMUAAAAALyL5UfI5Ws7MrNxPJ9YEU-SjjJn';
$secretkey = '6LdYpzMUAAAAAMjU0AzEQK2xeaeD1AtZM6Ndw_-Z';

//===Editable variables END===//

$base_dir  = __DIR__;
$doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
$base_url  = preg_replace("!^${doc_root}!", '', $base_dir);

include_once('lang/'.$lang_code.'.php');
require_once('lib/send_mail.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include($_SERVER['DOCUMENT_ROOT']."/assets/inc/head/meta.php"); ?>
    <?php if ($style != ''){ ?>
      <?php echo $style ?>
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>/css/style.css">
</head>

<body role="application" data-aos-easing="ease">
  <?php include($_SERVER['DOCUMENT_ROOT']."/assets/inc/body/analytics.html"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT']."/assets/inc/body/nav.php"); ?>
  <main>
    <section class="id-band">
      <div class="identity-area"><?php echo $mainID ?></div>
    </section>
    <section class="details-band">
        <?php if ($pageIntro != ''){ ?>
        <h1 class="page-intro uppercase"><?php echo $pageIntro ?></h1>
        <?php } ?>
        <?php if ($disciplines != ''){ ?>
        <label class="label-disciplines uppercase">Disciplines</label>
        <h5 class="disciplines uppercase"><?php echo $disciplines ?></h5>
        <?php } ?>
        <?php if ($summary != ''){ ?>
        <label class="label-summary uppercase">Summary</label>
        <p class="summary"><?php echo $summary ?></p>
        <?php } ?>
    </section>

    <section class="bg-ochre page-band">
      <div class="w-4col flex-row padding-all-lrg center-block">
        <h4><?php echo $lang_translate['Contact form']; ?></h4>
        <p class="weight-400 line-height-26 padding-bottom-lrg color-drk-grey">Any message you send will come directly to me. I've setup the form to try to protect any personal information from spammers and people who like to do the bad stuff on the web.</p>

        <div id="response-message">
          <?php if(!empty($errMsg)): ?><div class="error"><?php echo $errMsg; ?></div><?php endif; ?>
          <?php if(!empty($succMsg)): ?><div class="success"><?php echo $succMsg; ?></div><?php endif; ?>
        </div>

        <form action="#response-message" method="POST" id="contact-form" name="contact_form">

          <label class="required">
            <span><?php echo $lang_translate['Subject'] ?></span>
            <input type="text" value="<?php echo !empty($subject) ? $subject : ''; ?>" placeholder="<?php echo $lang_translate['Subject'] ?>" maxlength="80" name="subject" required="required">
          </label>

          <label class="required">
            <span><?php echo $lang_translate['Email'] ?> </span>
            <input type="email" value="<?php echo !empty($email)?$email:''; ?>" placeholder="<?php echo $lang_translate['Email'] ?>" maxlength="80" name="email" required="required">
          </label>

          <label class="required">
            <span><?php echo $lang_translate['Message'] ?></span>
            <textarea type="text" placeholder="<?php echo $lang_translate['Message'] ?>" name="message" rows="7" required="required"><?php echo !empty($message)?$message:''; ?></textarea>
          </label>

          <label>
            <span><?php echo $lang_translate['recaptcha_test']; ?></span>
            <div class="g-recaptcha" data-sitekey="<?php echo $sitekey ?>"></div>
          </label>

          <input type="submit" name="submit" value="<?php echo $lang_translate['Submit']; ?>">
        </form>
      </div>
      </section>
      <section class="w-8col bg-white page-band">
        <div class="w-4col flex-row padding-x-lrg center-block">
          <div class="padding-y-lrg w-8col">
            <p class="color-grey weight-500 text-center">Feel free to call to setup a meeting</p>
            <a href="tel: &#52;&#48;&#53;&nbsp&#56;&#50;&#49;&nbsp&#51;&#50;&#49;&#49;" class="d-inline-block w-8col text-center color-drk-orange weight-500">
              <span class="fa-stack fa-lg">
                <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-phone fa-stack-1x textcolor-white color-white"></i>
              </span>
              <span class="eggsellent">&#49;&#49;&#50;&#51;&#49;&#50;&#56;&#53;&#48;&#52;</span>
            </a>
          </div>
          <div class="padding-y-lrg w-8col">
            <p class="color-grey weight-500 text-center">Other places/ways to get in touch.</p>
            <figure class="center-block">
              <?php include($_SERVER['DOCUMENT_ROOT'] . "/assets/inc/body/work-links.php"); ?>
            </figure>
          </div>
        </div>
      </section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/validate-js/2.0.1/validate.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang_code; ?>"></script>
<script type="text/javascript">
//validate.js validation rules
//see http://rickharrison.github.io/validate.js/
  var validator = new FormValidator('contact_form', [{
  name: 'subject',
    display: "<?php $lang_translate['Subject'] ?>",
    rules: 'required'
  }, {
  name: 'email',
    display: "<?php $lang_translate['Email'] ?>",
    rules: 'required|valid_email'
  }, {
  name: 'message',
    display: "<?php $lang_translate['Message'] ?>",
    rules: 'required'
  }],
  function(errors, evt) {
    if (errors.length > 0) {
      var errorString = '';
      for (var i = 0, errorLength = errors.length; i < errorLength; i++) {
        errorString += errors[i].message + '<br />';
      }
      if (evt && evt.preventDefault) {
        evt.preventDefault();
      } else if (event) {
        event.returnValue = false;
      }
      document.getElementById("response-message").innerHTML = '<div class="error">'+errorString+'</div>';
      console.dir(errors);
    }
  });
</script>
</main>
<?php include($_SERVER['DOCUMENT_ROOT']."/assets/inc/footer/footer.php"); ?>
</body>
</html>
