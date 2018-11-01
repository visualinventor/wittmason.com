<!DOCTYPE html>
<html lang="en">
<head>
<!--










  BUSTED ...
  Actually I'm glad you're looking - that means you wanted to figure out how I did something.















  If you're interested in the code ...
  why don't you contact me and I'll show you how it's built.


















-->
    <?php include($_SERVER['DOCUMENT_ROOT']."/assets/inc/head/meta.php"); ?>
    <?php if (isset ($style)){ echo $style; } ?>

</head>

<body role="application" data-aos-easing="ease-out-back" data-aos-duration="1200" data-aos-delay="0">
  <?php include($_SERVER['DOCUMENT_ROOT']."/assets/inc/body/analytics.html"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT']."/assets/inc/body/nav.php"); ?>
  <main>
    <section class="id-band">
      <div class="identity-area"><?php if (isset ($mainID) && ($mainID != '')){ echo $mainID; } ?></div>
    </section>
    <section class="details-band">
        <?php if (isset ($pageIntro) && ($pageIntro != '')){ ?>
        <h1 class="page-intro uppercase"><?php echo $pageIntro ?></h1>
        <?php } ?>
        <?php if (isset ($disciplines) && ($disciplines != '')){ ?>
        <label class="label-disciplines uppercase">Disciplines</label>
        <h5 class="disciplines uppercase"><?php echo $disciplines ?></h5>
        <?php } ?>
        <?php if (isset ($summary) && ($summary != '')){ ?>
        <label class="label-summary uppercase">Summary</label>
        <p class="summary"><?php echo $summary ?></p>
        <?php } ?>
    </section>
    <div class="center-block arrow-down"></div>

    <?php foreach($page_items as $label => $page){?>
    <section class="<?php echo $label; ?> <?php if ($page[0]){ echo $page[0].' '; }?>page-band">
      <div class="inner <?php echo $label; ?> <?php if ($page[1]){ echo ' '.$page[1]; }?>" <?php if ($page[2]){ echo 'style="' . $page[2] . '"'; }?>>
        <?php if (isset ($page[3]) && ($page[3] != '')){ echo $page[3]; } ?>
        <?php if (isset ($page[4]) && ($page[4] != '')){ echo $page[4]; } ?>
        <?php if (isset ($page[5]) && ($page[5] != '')){ echo $page[5]; } ?>
        <?php if (isset ($page[6]) && ($page[6] != '')){ echo $page[6]; } ?>
        <?php if (isset ($page[7]) && ($page[7] != '')){ echo $page[7]; } ?>
        <?php if (isset ($page[8]) && ($page[8] != '')){ echo $page[8]; } ?>
        <?php if (isset ($page[9]) && ($page[9] != '')){ echo $page[9]; } ?>
      </div>
    </section>
    <?php } ?>
    <?php if (isset ($otherPage) && ($otherPage !='')){
      echo $otherPage;
    } ?>

  </main>
  <?php if (isset ($nextLink) && ($nextLink != '')){ ?>
  <div class="d-flex flex-justify-between bg-white project-nav">
  <?php if (isset ($prevLink) && ($prevLink != '')){ ?>
    <div class="w-4col text-left">

      <a class="project-link" href="<?php echo $prevLink; ?>">
        ← <?php if (isset ($prevLinkLabel) && ($prevLinkLabel != '')){echo $prevLinkLabel;} ?>
        <label class="label-disciplines uppercase">PREVIOUS PROJECT</label>
      </a>
    </div>
  <?php } ?>
  <?php if (isset ($nextLink) && ($nextLink != '')){ ?>

    <div class="w-4col text-right">
      <a class="project-link" href="<?php echo $nextLink; ?>">
        <?php if (isset ($nextLinkLabel) && ($nextLinkLabel != '')){echo $nextLinkLabel;} ?> →
        <label class="label-disciplines uppercase">NEXT PROJECT</label>
      </a>
    </div>
  <?php } ?>
  </div>
  <?php } ?>

  <?php include($_SERVER['DOCUMENT_ROOT']."/assets/inc/footer/footer.php"); ?>
</body>
</html>
<?php unset ($style,$mainID,$pageIntro,$disciplines,$summary,$page_items,$otherPage,$prevLinkLabel,$prevLink,$nextLinkLabel,$nextLink);?>
