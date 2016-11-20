<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Koptyaev Kirill">
    <title>Files Manager</title>
    <link href="static/css/bootstrap.css" rel="stylesheet">
    <link href="static/css/bootstrap-theme.css" rel="stylesheet">
    <link href="static/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">File Manager</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/registration">Sign up</a></li>
                    <li><a href="/login">Sign in</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div id="header">
        <div class="container">
            <div class="row">
                <?php include 'modules/'.$module.'/views/'.$content_view; ?>
            </div>
        </div>
    </div>
    <div id="footer">
	<div class="container">
            <div class="row">
                <div class="col-md-12">
	            <p class="copyright">&copy; <?=date('Y')?> File Manager</p>
                </div>
            </div>		
	</div>	
    </div>
</body>
</html>