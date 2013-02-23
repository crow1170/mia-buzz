<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">

      /* Sticky footer styles
      -------------------------------------------------- */

      html,
      body {
        height: 100%;
        /* The html and body elements cannot have any padding or margin. */
      }

      /* Wrapper for page content to push down footer */
      #wrap {
        min-height: 100%;
        height: auto !important;
        height: 100%;
        /* Negative indent footer by it's height */
        margin: 0 auto -60px;
      }

      /* Set the fixed height of the footer here */
      #push,
      #footer {
        height: 60px;
      }
      #footer {
        background-color: #f5f5f5;
      }

      /* Lastly, apply responsive CSS fixes as necessary */
      @media (max-width: 767px) {
        #footer {
          margin-left: -20px;
          margin-right: -20px;
          padding-left: 20px;
          padding-right: 20px;
        }
      }



      /* Custom page CSS
      -------------------------------------------------- */
      /* Not required for template or sticky footer method. */

      .container {
        width: auto;
        /*max-width: 680px;
	*/
      }
      .container .credit {
        margin: 20px 0;
      }

    </style>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/css/bootstrap-combined.min.css" rel="stylesheet">
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div id="wrap">
<!-- Fixed navbar -->
      <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
          <div class="container">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="http://crow1170.com/shiny-cyril/index.php/home">Shiny-Cyril</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#faq">FAQ</a></li>
              </ul>
            </div><!--/.nav-collapse -->
            <a class="btn btn-primary pull-right" href="#" style="margin-right:10px">Login</a>  
            <a class="btn btn-primary pull-right" href="#" style="margin-right:10px">Register</a>
          </div>
        </div>
      </div>
<div style="margin-top: 60px">
</div>
<div class="container-fliud">
	<div class="row-fliud">
		<div class="span10 well">
			<h1>What is Shiny-Cyril?</h1>
			<p>Shiny-Cyril is an event planning site that is here to help you organize- before and during. Email your attendees, make playlists, register with the Miami Beach Event Database. During your event, push messages to everyone in the room or explain things about what's going.</p>
			<a href="#" class="btn btn-primary">See Shiny-Cyril in action</a>
		</div>
	</div>
	<div  class="row-fliud"><a href="#" name="news"></a>
		<div class="span10 well">
			<h2>News</h2>
			<p>Still in development, check back real soon!</p>
		</div>
	</div>
	<div  class="row-fliud"><a href="#" name="faq"></a>
		<div class="span10 well">
			<h2>FAQ</h2>
			<p>No questions yet!</p>
			<p><a class="btn btn-primary" href="http://twitter.com/CKnowles"> Ask a question on twitter</a></p>
		</div>
	</div>
	<!--div id="push"></div-->
</div>
</div>
<div id="footer">
      <div class="container">
        <p class="muted credit">Designed by <a href="http://twitter.com/CKnowles">Chris Knowles</a> at <a href="http://uhack.us/">UHack 2013</a>.</p>
      </div>
    </div>
</body>
</html>
