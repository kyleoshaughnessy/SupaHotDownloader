<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Download Requests</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->
    
    <link href="/resources/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="/resources/css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/resources/img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/resources/img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/resources/img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/resources/img/apple-touch-icon-57-precomposed.png">
    <!-- <link rel="shortcut icon" href="/img/favicon.png"> -->
    <link rel="icon" href="/resources/images/favicon.png" type="image/png">

    <script type="text/javascript" src="/resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="/resources/js/angular.min.js"></script>
    <script type="text/javascript" src="/resources/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/resources/js/scripts.js"></script>
  </head>

  <body>
    <div class="container">
      <div class="row clearfix">
        <div class="col-md-12 column">
          <h1>Request a TV Show or Movie</h1>
        </div>
      </div>
      <div class="row clearfix">
        <div class="col-md-5 column">
          <form role="form" action="/resources/php/emailTVShow.php" method="post">
            <fieldset>
              <legend>TV Download</legend>
              <div class="form-group">
                <label for="tvShowName">TV Show</label><input type="text" class="form-control" id="tvShowName" name="tvShowName" autocapitalize="on">
                <p class="help-block">
                  Please capitalize
                </p>
              </div>
              <div class="form-group">
                <label for="tvShowSeason">Season</label><input type="number" class="form-control" id="tvShowSeason" name="tvShowSeason">
              </div>
              <div class="form-group">
                <label for="tvShowEpisode">Episode</label><input type="number" class="form-control" id="`" name="tvShowEpisode">
              </div>
              <button type="submit" class="btn btn-primary">Submit Download Request</button>
            </fieldset>
          </form>
        </div>
        <div class="col-md-2 column">
          <br/>
            <h4 align="center" >or</h4>
          <br/>
        </div>
        <div class="col-md-5 column">
          <form role="form" action="/resources/php/emailMovie.php" method="post">
            <fieldset>
              <legend>Movie Download</legend>
              <div class="form-group">
                <label for="movieName">Movie</label><input type="text" class="form-control" id="movieName" name="movieName" autocapitalize="on">
                <p class="help-block">
                  Please capitalize
                </p>
              </div>
              <div class="form-group">
                <label for="movieYear">Year</label><select class="form-control" id="movieYear" name="movieYear">
                  <option value="" />
                  <script>
                    var myDate = new Date();
                    var year = myDate.getFullYear();
                    for(var i = year; i >= 1900; i--){
                      document.write('<option value="'+i+'">'+i+'</option>');
                    }
                  </script>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit Download Request</button>
            </fieldset>
          </form>
          <br/>
        </div>
      </div>
    </div>
  </body>
</html>
