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
            <a class="brand" href="http://crow1170.com/mia-buzz/index.php/home">MIA-Buzz</a>
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#news">News</a></li>
                <li><a href="#faq">FAQ</a></li>
              </ul>
            </div><!--/.nav-collapse -->
<?php
	if($user_email){
?>
            <a class="btn btn-primary pull-right" href="http://crow1170.com/mia-buzz/index.php/auth/logout" style="margin-right:10px">Logout</a>  
<?php
	}else{
?>
            <a class="btn btn-primary pull-right" href="http://crow1170.com/mia-buzz/index.php/auth/login" style="margin-right:10px">Login</a>  
            <a class="btn btn-primary pull-right" href="http://crow1170.com/mia-buzz/index.php/auth/register" style="margin-right:10px">Register</a>
<?php } ?>
          </div>
        </div>
      </div>
<div style="margin-top: 60px">
</div>
