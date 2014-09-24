<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>DRC - Direct Response Center</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Shadows+Into+Light' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!--===INCLUDES===-->
    <?php include "includes/randBG.php"; ?>
    <?php include "includes/favicon.php"; ?>
    <!--===END INCLUDES===-->
    
    <style>
      div#bg-img {
        background: url(<?php echo $bgImg; ?>) no-repeat center top fixed ;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -ms-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
      }
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
    <div id="bg-img"></div>
    
    <!--===VID BG===-->
    <video autoplay muted id="bg-vid">
      <source src=<?php echo $bgMP4; ?>>
      <source src=<?php echo $bgOGV; ?>>
      <source src=<?php echo $bgWEBM; ?>>
    </video>
    <!--===END VID BG===-->

    <!--===NAV===-->
    <header><?php include "includes/nav.php"; ?></header>
    <!--===END NAV===-->

    <div class="main-content">
      <h1>Greetings!</h1>
      <h3>Welcome to the DRC.<br>We're not sure what you know about us.</h3>
      <p>Sure...we're strategic. We write. We design. But more importantly, we are storytellers, artists, thinkers, jokers, poets, jugglers, chameleons, sociologists, magicians and gymnasts. We are more than ready to provide your market with fresh, innovative, effective and memorable creative.</p>
      <h3>And we are chomping at the bit to help you sell the <span class="censor-bar rotate-cw">bad word</span> out of some subscriptions.</h3>
    </div>
    
    <div class="toggle"><span id="toggle-video">Play again?</span> | <span id="toggle-content">Hide text</span></div>

    <!--===STICKY FOOTER===-->
    <footer><?php include "includes/footer.php"; ?></footer>
    <!--===END STICKY FOOTER===-->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/vidControl.js"></script>
    <script src="js/toggleContent.js"></script>
    
  </body>
</html>
