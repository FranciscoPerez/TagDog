<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>[TAGDOG]</title>
    <meta name="viewport" content="width=800px, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="http://cloudedbox.com/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="http://cloudedbox.com/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="http://cloudedbox.com/TagDog2/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      /*body {
        padding-top: 60px;
        padding-bottom: 40px;
      }*/
      .sidebar-nav {
        padding: 9px 0;
      }
	.mainScroll {
	  height: 400px;
  	overflow: auto;
  	position: relative;
	}
	#splash_page {
	width:100%;
	height:100%;
	top:0px;
	left:0px;
	position:relative;
	overflow:hidden;
	}
.label,.alert{background-color:#666666;}
.label:hover{background-color:#4d4d4d;}
.label-important,.alert-danger,.alert-error{background-color:#cc0000;}
.label-important:hover{background-color:#990000;}
.label-warning{background-color:#cc6d00;}
.label-warning:hover{background-color:#995200;}
.label-success,.alert-success{background-color:#5c8a00;}
.label-success:hover{background-color:#3a5700;}
.label-info,.alert-info{background-color:#007399;}
.label-info:hover{background-color:#004d66;}
.alert,.alert .alert-heading,.alert-success,.alert-success .alert-heading,.alert-danger,.alert-error,.alert-danger .alert-heading,.alert-error .alert-heading,.alert-info,.alert-info .alert-heading{color:#eeeeee;text-shadow:none;border:none;}
.alert{padding:8px 35px 8px 14px;margin-bottom:18px;text-shadow:0 1px 0 rgba(255, 255, 255, 0.5);background-color:#eeeeee;border:1px solid transparent;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px;color:#a47e3c;}
.alert-heading{color:inherit;}
.alert .close{position:relative;top:-2px;right:-21px;line-height:18px;}
.alert-success{background-color:#eeeeee;border-color:#e1e1e1;color:#468847;}
.alert-danger,.alert-error{background-color:#eeeeee;border-color:#e6e6e6;color:#b94a48;}
.alert-info{background-color:#eeeeee;border-color:#dcdcdc;color:#0099cc;}
.alert-block{padding-top:14px;padding-bottom:14px;}
.alert-block>p,.alert-block>ul{margin-bottom:0;}
.alert-block p+p{margin-top:5px;}

/* ================================================================ 
This copyright notice must be kept untouched in the stylesheet at 
all times.

The original version of this stylesheet and the associated (x)html
is available at http://www.cssplay.co.uk/menu/circular.html
Copyright (c) Stu Nicholls. All rights reserved.
This stylesheet and the associated (x)html may be modified in any 
way to fit your requirements.
=================================================================== */



#share_container {
	width:100%;
	height:310px;
	position:relative;
	overflow:hidden;
	margin:0 auto;
}
#share_left, #share_right, #share_center {
	height:300px;
	text-align:center;
}
#share_icon {
	margin:0 auto;
	height:100px;
	width:100px;
	position:relative;
	margin-top:20px;
}
#share_preview {
	margin:0 auto;
	margin-top:100px;
	width:200px;
	height:200px;
	position:relative;
}
#share_button {
	width:100%;
	height:100%;
	position:relative;
}
#share_button_preview {
	width:100%;
	height:75%;
	position:relative;
	margin:0 auto;
}
/*CREATE CSS*/
#create_super_container { width:100%; height:300px; }
#create_container{overflow:hidden;}
#user_text,#fname_create,#lname_create{display:block; margin-top:20px;}
#QR_code{height: 100%; width: 100%; overflow:hidden; border-radius: 20px; background-color:black; border-color:black;}
.create_text{display:inline-block;margin-right:100px;}
.create_box{vertical-align: top; overflow:hidden; display: inline-block; height: 300px; width: 300px; background-color: rgb(56,56,56); border-radius:20px;margin-left:20px;}

/*CREATE CSS ENDS*/

/**********Browse Style**********/
#map_canvas { height:300px;width:60%;border:1;border-style:solid;margin:0 auto; position:relative;}
/*#browse_tag_info {height:350px;width:35%;float:right;border:1;border-style:solid;}*/
/**********./Browse Style********/

    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="http://cloudedbox.com/bootstrap/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://cloudedbox.com/bootstrap/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://cloudedbox.com/bootstrap/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://cloudedbox.com/bootstrap/ico/apple-touch-icon-57-precomposed.png">
  </head>
  <body>