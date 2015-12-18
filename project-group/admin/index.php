<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin: Ashesi Lab Inventory</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <style>
    * {
      border-radius: 0 !important;
      }

    @import url(http://fonts.googleapis.com/css?family=Roboto:400);
    body {
      background-color:;
      -webkit-font-smoothing: antialiased;
      font: normal 14px Roboto,arial,sans-serif;
    }
    </style>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Lab Inventory</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Menu 1 <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Menu 2</a></li>
          </ul>

          <!-- <div class="collapse navbar-collapse" id="navbar-collapse1"> -->
                    <ul class="nav navbar-nav navbar-right">
                       <li><a href="#" target="_ext">Daniel Bonsu</a></li>
                       <li>
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-bell"></i></a>
                          <ul class="dropdown-menu">
                            <li><a href="#"><span class="badge pull-right">40</span>Link</a></li>
                            <li><a href="#"><span class="badge pull-right">2</span>Link</a></li>
                            <li><a href="#"><span class="badge pull-right">0</span>Link</a></li>
                            <li><a href="#"><span class="label label-info pull-right">1</span>Link</a></li>
                            <li><a href="#"><span class="badge pull-right">13</span>Link</a></li>
                          </ul>
                       </li>
                       <li><a href="#" id="btnToggle"><i class="glyphicon glyphicon-th-large"></i></a></li>
                       <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
                       <li>
                         <form class="navbar-form pull-right">
                             <div class="input-group" style="max-width:470px;">
                               <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                               <div class="input-group-btn">
                                 <button class="btn btn-default btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                               </div>
                             </div>
                         </form>
                       </li>
                     </ul>
                  <!-- </div> -->
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
      <div id='divstatus'>

      </div>

      <div class="page-header">
        <h1>Labs <small>Select to view equipment in lab</small></h1>
      </div>


      <div id="main-content"class="row">

      </div>

    </div>

    <script>

    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery-2.1.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/admin.js"></script>
  </body>
</html>
