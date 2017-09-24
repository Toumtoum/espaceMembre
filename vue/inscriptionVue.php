<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/main.css">
        <link href="../css/bootstrap.min.css" rel="stylesheet">


    </head>
    <body>
      <div class="row">
        <div class="col-xs-12 col-md-8">
          <form class="form-signin" method="post">
            <h2 class="form-signin-heading">INSCRIPTION</h2>
            <label><b>Pseudo</b></label>
            <input type="text" name="pseudo" class="form-control" required>
            <label><b>E-mail</b></label>
            <input type="email" name="email" class="form-control" required>
            <label><b>Mot de passe</b></label>
            <input type="password" name="password" class="form-control" required>
            <label><b>Verifier votre mot de passe</b></label>
            <input type="password" name="verifPassword" class="form-control" required><hr/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>

        <div class="col-xs-6 col-lg-4">
          <form class="form-signin" method="post">
            <h2 class="form-signin-heading">DÉJÀ INSCRIT</h2>
            <label><b>Pseudo</b></label>
            <input type="text" name="pseudoUser" class="form-control" value="<?php if (isset($_COOKIE)){echo "";}else {echo $_COOKIE['cookiePseudo'];} ?>"required>
            <label><b>Mot de passe</b></label>
            <input type="password" name="passwordUser" class="form-control" value="<?php if (isset($_COOKIE)){echo "";}else {echo $_COOKIE['cookiePassword'];} ?>"required><hr/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
          </form>
        </div>
      </div>



        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="../js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="../js/plugins.js"></script>
        <script src="../js/vendor/modernizr-2.8.3.min.js"></script>



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
