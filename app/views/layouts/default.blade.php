<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>PHP-ShockPot</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/cover.css') }}">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">PHP-ShockPot :O</h3>
              <ul class="nav masthead-nav">
                <li class="active"><a href="{{ action('HoneypotController@getShock') }}">Home</a></li>
                <li><a href="{{ action('StatsController@getAll') }}">Stats</a></li>
              </ul>
            </div>
          </div>

          <div class="content">
            @yield('page_content')
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>PHP-ShockPot "Shellshock" honeypot. <a href="https://github.com/leonjza/PHP-ShockPot">PHP-ShockPot @Github</a>, by <a href="https://twitter.com/leonjza">@leonjza</a>.</p>
            </div>
          </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  </body>
</html>