<?php
/*
Plugin Name: Sun-Sentinel Miami Heat News and Blog Widget
Plugin URI: http://www.sun-sentinel.com/
Description: Sun-Sentinel Miami Heat News and Blog Widget
Author: Kit Mobley
Version: 2.0
Author URI: http://www.sun-sentinel.com/
*/
  
			
function ssheat_widget() {
	  ?>

<link rel="stylesheet" href="http://interactive.sun-sentinel.com/widgets/tabber_heat/example.css" TYPE="text/css" MEDIA="screen">

<script type="text/javascript">document.write('<style type="text/css">.tabber{display:none;}<\/style>');</script>

<style type="text/css">
<!--
#getwidget {
float: right; font-size: 9px; color: #FFFFFF; margin-right: 5px;
}
#getwidget a {
color:#FFFFFF;
}

-->
</style>
 <script type="text/javascript" src="http://interactive.sun-sentinel.com/widgets/tabber_heat/tabber.js"></script>
 
<div style="width: 300px; height: 250px; background-color:#000000;">
<div style="width: 300px; background-image: url(http://interactive.sun-sentinel.com/widgets/tabber_heat/images/top_bg.jpg); height: 74px;">
<div id="getwidget"><a href="http://www.sun-sentinel.com/sfl-rss-widgets,0,6223346.htmlstory" target="_blank">Get this widget</a></div>
</div>
<div class="tabber">
     <div class="tabbertab" style="background-color:#FFFFFF; margin-left: 2px;">
	  <h2>Miami Heat News</h2>
	    <?php
$a = file_get_contents("http://interactive.sun-sentinel.com/widgets/rss2html.php?XMLFILE=http://www.sun-sentinel.com/sports/miami-heat/rss2.0.xml&TEMPLATE=http://interactive.sun-sentinel.com/widgets/sample-template-heat-news.html&MAXITEMS=4");
echo $a;

?>
     </div>

     <div class="tabbertab" style="background-color:#FFFFFF; margin-left: 2px;">
	  <h2>Miami Heat Blog</h2>
	  <?php
$b = file_get_contents("http://interactive.sun-sentinel.com/widgets/rss2html.php?XMLFILE=http://feeds.feedburner.com/sports/MiamiHeatweblog&TEMPLATE=http://interactive.sun-sentinel.com/widgets/sample-template-heat-blogs.html&MAXITEMS=4");
echo $b;
?>
     </div>

    
</div>
</div>
<?php
      }
      function init_ssheat(){
          register_sidebar_widget("Sun-Sentinel Miami Heat News and Blog Widget", "ssheat_widget");    
      }
      add_action("plugins_loaded", "init_ssheat");
?>