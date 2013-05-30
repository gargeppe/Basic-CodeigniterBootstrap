<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sticky footer &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS: BOOTSTRAP -->
    <link href="<?php echo base_url(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-responsive.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet">
    <!-- CSS: FONT AWESOME -->
    <link href="<?php echo base_url(); ?>css/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/font-awesome/font-awesome-ie7.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url(); ?>js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">

    <style type="text/css">
      .well {
        min-height: 200px;
      }
    </style>
  </head>

  <body>


    <!-- Part 1: Wrap all page content here -->
    <div id="wrap">

      <!-- Begin page content -->
      <div class="container">
        <div class="page-header">
          <h1>Let's start...</h1>
        </div>
        <p class="lead">A basic initialization for a Codeigniter + Bootstrap project.</p>
        <div class="row">
          <div class="span4">
            <div class="well">
              <h3>Codeigniter v2.1.3</h3>
              <ul>
                <li>index.php removed from the URL (.htaccess)</li>
                <li>Autoloaded Database and Session libraries</li>
                <li>Autoloaded Url helper</li>
                <li class="text-error"><strong>Remember!</strong> Before to start, change the <em>base_url</em> and the <em>session encription key</em> in the config file.</li>
              </ul>
            </div>
          </div>
          <div class="span4">
            <div class="well">
              <h3>Style &amp; CSS</h3>
              <ul>
                <li>Bootstrap v2.3.2</li>
                <li>Font Awesome v3.1.1</li>
                <li>Sticky footer layout</li>
                <li>Fixed navbar padding for responsive design</li>
              </ul>
          </div>
          </div>
          <div class="span4">
            <div class="well">
              <h3>JScript</h3>
              <ul>
                <li>JQuery v1.10.0</li>
              </ul>
          </div>
          </div>
      </div>

      <div class="row" style="margin-top:50px; margin-bottom:50px;">
        <div class="span12">
          <h3>Something which can improve your projects</h3>
        </div>
        <div class="span3">
          <a href="http://www.flotcharts.org/"><h4>Flot</h4></a>
          <p>A very useful JavaScript plotting library for jQuery. Works with Internet Explorer 6+, Chrome, Firefox 2+, Safari 3+ and Opera 9.5+</p>
        </div>
        <div class="span3">
          <a href="http://www.datatables.net/"><h4>DataTables</h4></a>
          <p>A plug-in for the jQuery Javascript library which will add advanced interaction controls to any HTML table.</p>
        </div>
        <div class="span3">
          <a href="http://anthonyterrien.com/knob/"><h4>JQuery Knob</h4></a>
          <p>Nice, downward compatible, touchable, jQuery dial. Very useful in the dashboard interface design.</p>
        </div>
        <div class="span3">
          <a href="http://arshaw.com/fullcalendar/"><h4>FullCalendar</h4></a>
          <p>FullCalendar is a jQuery plugin that provides a full-sized, drag &amp; drop calendar.</p>
        </div>
      </div>
      </div>

      <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit">Curtesy of <a href="http://www.giuseppegarbin.com">Giuseppe Garbin</a>.</p>
      </div>
    </div>



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery-1.10.0.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>

  </body>
</html>