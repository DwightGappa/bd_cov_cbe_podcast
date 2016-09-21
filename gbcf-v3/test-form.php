<?php    // REMOVE THIS FILE FROM YOUR SERVER ONCE COMPLETED
############################################################

// Change this if changing the directory name, useful when installing mulitple copies
   $set_directory = "gbcf-v3";

/*
  +---------------------------------------------------------------+
  | GBCF-V3 PHP CONTACT FORM TEST PAGE                            |
  | Author: Mike Cherim - http://green-beast.com                  |
  |                                                               |
  | Content copyright (c) 2004-Present, Some rights reserved      |
  |                                                               |
  | This file is for your use or for your client sites if         |
  | you're a web developer. You may modify this script to         |
  | suit your needs. You may not redistribute or sell this        |
  | script. If you're a web developer, you will charge for        |
  | installation, styling, and/or as an integrated part of        |
  | a package. Your contributions, however, can be submitted      |
  | for build inclusion. You will be properly credited for        |
  | your work if it's used. You are welcome to study and          |
  | learn from this script if you find it helpful.                |
  |                                                               |
  | AUTHOR DISCLAIMS ANY AND ALL LIABILITIES FOR AND MAKES NO     |
  | WARRANTIES, EITHER EXPRESS OR IMPLIED, WITH RESPECT TO THE    |
  | CODE, SCRIPTING, AND/OR FUNCTIONS, INCLUDING, WITHOUT         |
  | LIMITATION, THE IMPLIED WARRANTIES OF MERCHANTABILITY, FOR    |
  | WHICH NONE ARE MADE, OR FITNESS FOR A PARTICULAR PURPOSE.     |
  |                                                               |
  | AUTHOR WILL NOT BE LIABLE FOR DIRECT, INDIRECT, SPECIAL,      |
  | INCIDENTAL, COVER, ECONOMIC, OR CONSEQUENTIAL DAMAGES ARISING |
  | OUT OF THE USE OR INABILITY TO USE THE CODE, SCRIPTING,       |
  | AND/OR FUNCTIONS EVEN IF AUTHOR IS ADVISED OF THE POSSIBILITY |
  | OR EXISTENCE OF SUCH DAMAGES.                                 |
  +---------------------------------------------------------------+
*/
if(file_exists('files/functions.php')) {
    require_once("files/functions.php");
} else if(file_exists(''.$set_directory.'/files/functions.php')) {
    require_once("$set_directory/files/functions.php");
} else if(file_exists('../'.$set_directory.'/files/functions.php')) {
    require_once("../$set_directory/files/functions.php");
} else if(file_exists('../../'.$set_directory.'/files/functions.php')) {
    require_once("../../$set_directory/files/functions.php");
} else if(file_exists('../../../'.$set_directory.'/files/functions.php')) {
    require_once("../../../$set_directory/files/functions.php");
} else if(file_exists('../../../../'.$set_directory.'/files/functions.php')) {
    require_once("../../../../$set_directory/files/functions.php");
} else {
    $user_message = '<div id="results"><p class="error"><strong>Installation Error: The functions file, functions.php, does not exist or cannot be found!</strong></p></div>';
    $form_status  = "nogo";
}
// Should have done this differently but I didn't - dumb
if(file_exists('help.php')) {
    $help_link = '<a href="help.php">Help</a>';
} else if(file_exists(''.$set_directory.'/help.php')) {
    $help_link = '<a href="'.$set_directory.'/help.php">Help</a>';
} else if(file_exists('../'.$set_directory.'/help.php')) {
    $help_link = '<a href="../'.$set_directory.'/help.php">Help</a>';
} else if(file_exists('../../'.$set_directory.'/help.php')) {
    $help_link = '<a href="../../'.$set_directory.'/help.php">Help</a>';
} else if(file_exists('../../../'.$set_directory.'/help.php')) {
    $help_link = '<a href="../../../'.$set_directory.'/help.php">Help</a>';
} else if(file_exists('../../../../'.$set_directory.'/help.php')) {
    $help_link = '<a href="../../../../'.$set_directory.'/help.php">Help</a>';

} else {
    $help_link = '<a href="http://green-beast.com/gbcf-v3/help.php" title="GBCF-v3 Demo Help Page">Help</a>';
}
if(file_exists('validation.php')) {
    $validate_link = '<a href="validation.php">validate</a>';
} else if(file_exists(''.$set_directory.'/validation.php')) {
    $validate_link = '<a href="'.$set_directory.'/validation.php">validate</a>';
} else if(file_exists('../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../'.$set_directory.'/validation.php">validate</a>';
} else if(file_exists('../../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../../'.$set_directory.'/validation.php">validate</a>';
} else if(file_exists('../../../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../../../'.$set_directory.'/validation.php">validate</a>';
} else if(file_exists('../../../../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../../../../'.$set_directory.'/validation.php">validate</a>';
} else {
    $validate_link = 'validate';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<title>GBCF-v3 - Live Form Test Page - <?php echo $web_site; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="en" />
  <meta name="language" content="en" />
  <meta name="author" content="Mike Cherim @ http://green-beast.com" />
  <meta name="description" content="A page to help form installers test including the form before adding it to a live web page" />
  <meta name="keywords" content="gbcf-vs, contact form, form, script, secure, accessible, semantic, valid, download, free" />
<style type="text/css" media="screen" title="Mike's Uber Basic Theme">
  body { background-color:#fff; color:#444; font:70% verdana, helvetica, palatino sans, tahoma, arial, sans-serif; padding:10px 40px; }
  h1, h2, h3 { color:#669900; }
  h1 { font-size:200%; line-height:2em; }
  h2 { font-size:160%; }
  h3 { font-size:140%; }
  h4 { font-size:135%; }
  h1 a { text-decoration:none; border:1px solid #999; padding:0 5px; }
  h1 a:hover, h1 a:focus, h1 a:active { background-color:#669900; color:#ffff7f; border:1px solid #000; }
  p.success, p.error { color:#fff; padding:1px 4px; border:1px solid #000; background-color:#669900; margin:0px; }
  p.error { background-color:#bb0000; }
  p, li { line-height:1.7em; }
  p.info-link { font-size:80%; }
  ul.valists li span { color:#000; }
  p span { color:#669900; font-weight:bold; }
  p.success { text-align:center; }
  p.success span, p.success a, p.error a { color:#ffff7f; }
  p.success a:hover, p.success a:focus, p.success a:active, p.error a:hover, p.error a:focus, p.error a:active { background-color:#669900; color:#eee }
  p.error a:hover, p.error a:focus, p.error a:active { background-color:#bb0000; }
  a { color:#669900; }
  a:hover, a:focus, a:active { color:#000; text-decoration:none; }
  a:focus, a:active { background-color:#eee; }
  #content { width:100%; height:auto; max-width:1000px; margin:auto; }
</style>
<?php 
### Grab the default.css file for this test page
if(file_exists('files/themes/default.css')) {
      $found_styles = "files/themes/default.css";
} else if(file_exists(''.$set_directory.'/files/themes/default.css')) {
      $found_styles = "$set_directory/files/themes/default.css";
} else if(file_exists('../'.$set_directory.'/files/themes/default.css')) {
      $found_styles = "../$set_directory/files/themes/default.css";
} else if(file_exists('../../'.$set_directory.'/files/themes/default.css')) {
      $found_styles = "../../$set_directory/files/themes/default.css";
} else if(file_exists('../../../'.$set_directory.'/files/themes/default.css')) {
      $found_styles = "../../../$set_directory/files/themes/default.css";
} else if(file_exists('../../../../'.$set_directory.'/files/themes/default.css')) {
      $found_styles = "../../../../$set_directory/files/themes/default.css";

} else {
    $user_message = '<div class="results"><p class="error"><strong>Installation Error: The default style sheet file, default.css, does not exist or cannot be found!</strong></p></div>';
}
### Grab the javascript for this test page
if(file_exists('files/focus.js')) {
      $found_script = "files/focus.js";
} else if(file_exists(''.$set_directory.'/files/focus.js')) {
      $found_script = "$set_directory/files/focus.js";
} else if(file_exists('../'.$set_directory.'/files/focus.js')) {
      $found_script = "../$set_directory/files/focus.js";
} else if(file_exists('../../'.$set_directory.'/files/focus.js')) {
      $found_script = "../../$set_directory/files/focus.js";
} else if(file_exists('../../../'.$set_directory.'/files/focus.js')) {
      $found_script = "../../../$set_directory/files/focus.js";
} else if(file_exists('../../../../'.$set_directory.'/files/focus.js')) {
      $found_script = "../../../../$set_directory/files/focus.js";
} else {
    $user_message = '<div class="results"><p class="error"><strong>Installation Error: The IE focus JavaScript file, focus.js, does not exist or cannot be found!</strong></p></div>';
}
### EOS
?>


 <!-- *** IMPORTANT: This is what gets added to your page, with your path to files of course *** -->
   <link rel="stylesheet" type="text/css" href="<?php echo $found_styles; ?>" media="screen" />
   <!--[if IE]><script type="text/javascript" src="<?php echo $found_script; ?>"></script><![endif]-->


</head>
<body>
<div id="content">
<h1><a href="http://green-beast.com/gbcf-v3/" title="GBCF-v3 Demo Site Index">GBCF-v3</a> Live Form Test Page</h1>
 <p><strong>This page is used for testing the contact form include before including it on a live web page.</strong>
    <br />After you configure and <?php echo $validate_link; ?> the configuration, place this file in the directory you want to use the form in. Remove it after successfully testing the form! You're now ready to &quot;include&quot; the form on a live web page. If you still have questions, please read the <?php echo strtolower($help_link); ?> page or contact <a href="http://green-beast.com/" title="Green-Beast.com">Mike Cherim</a> for assistance.</p>
<hr />
<p class="success"><?php
    echo '<strong class="help">Form Version:</strong> <span>'; 
       if(@$version == "") {
           echo 'Error';
       } else {
           echo $version;
       }
    echo '</span> - <strong class="help">Build Number:</strong> <span>'; 
       if(@$buildno == "") {
           echo 'Error';
       } else {
           echo $buildno;
       }
    echo '</span> - <strong class="help">Model Number:</strong> <span>'; 
       if(@$modelno == "") {
           echo 'Error';
       } else {
           echo $modelno;
       }
?></span><?php
if(file_exists('files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("files/error-log.txt");
    echo '</span>'; 
} else if(file_exists(''.$set_directory.'/files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("$set_directory/files/error-log.txt");
    echo '</span>'; 
} else if(file_exists('../'.$set_directory.'/files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("../$set_directory/files/error-log.txt");
    echo '</span>'; 
} else if(file_exists('../../'.$set_directory.'/files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("../../$set_directory/files/error-log.txt");
    echo '</span>'; 
} else if(file_exists('../../../'.$set_directory.'/files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("../../../$set_directory/files/error-log.txt");
    echo '</span>'; 
} else if(file_exists('../../../../'.$set_directory.'/files/error-log.txt')) {
    echo ' - <strong class="help">'.clean_var($botsstop_text).':</strong> <span>';
        readfile("../../../../$set_directory/files/error-log.txt");
    echo '</span>'; 
}
?> - <strong><?php echo $help_link; ?> &raquo;</strong></p>
<hr />
<?php 
if(file_exists('form.php')) {
    include_once("form.php"); 
} else if(file_exists(''.$set_directory.'/form.php')) {
    include_once("$set_directory/form.php"); 
} else if(file_exists('../'.$set_directory.'/form.php')) {
    include_once("../$set_directory/form.php"); 
} else if(file_exists('../../'.$set_directory.'/form.php')) {
    include_once("../../$set_directory/form.php"); 
} else if(file_exists('../../../'.$set_directory.'/form.php')) {
    include_once("../../../$set_directory/form.php"); 
} else if(file_exists('../../../../'.$set_directory.'/form.php')) {
    include_once("../../../../$set_directory/form.php"); 
} else {
    echo ' <p class="test-error error"><strong>Include Error: The main form file, form.php, could not be inluded. Either it is missing or cannot be found!</strong></p>';
}
?> 
<hr />
 <p><small>Copyright &copy; 2007-<?php echo date('Y'); ?> <a href="http://green-beast.com/" title="Green-Beast.com">Mike Cherim</a>. Some rights reserved. [ <a href="#content">Top</a> ]</small></p>
</div>
</body>
</html>