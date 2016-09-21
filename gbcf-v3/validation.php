<?php    // REMOVE THIS FILE FROM YOUR SERVER ONCE COMPLETED
############################################################

// Change this if changing the directory name, useful when installing mulitple copies
   $set_directory = "gbcf-v3";

/*
  +---------------------------------------------------------------+
  | GBCF-V3 PHP CONTACT INSTALL VALIDATION FILE                   |
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

############################################################
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
} // Should have done this differently but I didn't - dumb
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
if(file_exists('test-form.php')) {
    $form_link = '<a href="test-form.php">test form</a>';
} else if(file_exists(''.$set_directory.'/test-form.php')) {
    $form_link = '<a href="'.$set_directory.'/test-form.php">test form</a>';
} else if(file_exists('../'.$set_directory.'/test-form.php')) {
    $form_link = '<a href="../'.$set_directory.'/test-form.php">test form</a>';
} else if(file_exists('../../'.$set_directory.'/test-form.php')) {
    $form_link = '<a href="../../'.$set_directory.'/test-form.php">test form</a>';
} else if(file_exists('../../../'.$set_directory.'/test-form.php')) {
    $form_link = '<a href="../../../'.$set_directory.'/test-form.php">test form</a>';
} else if(file_exists('../../../../'.$set_directory.'/test-form.php')) {
    $form_link = '<a href="../../../../'.$set_directory.'/test-form.php">test form</a>';
} else {
    $form_link = 'test form';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<title>GBCF-v3 - Script Validation Page - <?php echo $web_site; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="en" />
  <meta name="language" content="en" />
  <meta name="author" content="Mike Cherim @ http://green-beast.com" />
  <meta name="description" content="A file to help form installers ensure everything is where it should be and will work" />
  <meta name="keywords" content="gbcf-vs, contact form, form, script, secure, accessible, semantic, valid, download, free" />
<style type="text/css" media="all" title="Mike's Uber Basic Theme">
  body { background-color:#fff; color:#444; font:70% verdana, helvetica, palatino sans, tahoma, arial, sans-serif; padding:10px 40px; }
  h1, h2, h3 { color:#669900; }
  h1 { font-size:200%; line-height:2em; }
  h2 { font-size:160%; }
  h3 { font-size:140%; }
  h4 { font-size:135%; }
  h1 a { text-decoration:none; border:1px solid #999; padding:0 5px; }
  h1 a:hover, h1 a:focus, h1 a:active { background-color:#669900; color:#ffff7f; border:1px solid #000; }
  p, li { line-height:1.7em; }
  p.success, p.error { color:#fff; padding:1px 4px; border:1px solid #000; background-color:#669900; margin:0px; text-align:center; }
  p.error { background-color:#bb0000; }
  small.error { color:#bb0000; }
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
</head>
<body>
<div id="content">
<h1><a href="http://green-beast.com/gbcf-v3/" title="GBCF-v3 Demo Site Index">GBCF-v3</a> Script Validation Page</h1>
 <p><strong>This file is used to validate file paths, variable captures, server settings, and minimum configuration.</strong>
    <br />Upon completing your form's configuration you will validate the variables, functions, and script upload. After successfully trying out your <?php echo strtolower($form_link); ?>, you should remove this page from your server. If you still have questions, please read the <?php echo strtolower($help_link); ?> page or contact <a href="http://green-beast.com/" title="Green-Beast.com">Mike Cherim</a> for assistance.</p>
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
if($user_message != "") {
     die(''.$user_message.'<hr /><p><small>Copyright &copy; 2007-'.date("Y").' <a href="http://green-beast.com/" title="Green-Beast.com">Mike Cherim</a>. Some rights reserved.</small></p>'."\n".'</div>'."\n".'</body>'."\n".'</html>'); 
} else {
     echo('<div id="results"><p class="success"><strong><span>Script Validation Confirmed</span> &#8212; Unique Form ID Number: <span>'.$form_id.'</span><br />Congratulations! No errors were detected so far. Please manually check the variables on this page.</strong></p></div>');
}
?>
<hr />


<h2 id="info">Page Data Information</h2>
 <p>Here you verify <strong>Form Configuration Variables</strong> like <a href="#req-vars">required variables</a>, <a href="#setup-ops">basic setup options</a>, <a href="#subj-menu">subject menu options</a>, <a href="#opti-menu">optional menu options</a>, <a href="#spamqa">antispam Q and A</a>, <a href="#ip-blklst">IP blacklist array</a>, <a href="#display-ops">form display options</a>, <a href="#in-ops">form input options</a>, <a href="#mail-form">mail and form setttings</a>, <a href="#adv-set">advanced settings</a>, and your <a href="#pid-key" title="Personal Indentification Key">PID key</a>. You will also be able to verify <strong>Form Language Settings</strong> like <a href="#leg-text">legend text</a>, <a href="#lbl-text">label text</a>, <a href="#misc-text">miscellaneous form text</a>, <a href="#err-text">error messages text</a>, and various <a href="#eml-text">email text snippets</a>.</p>
<hr />


<h2>Form Configuration Variables</h2>
 <p>These are the configuration variables.</p>


<h3 id="req-vars">Required Variables</h3>
 <p>You'll probably want to edit the two <a href="#setup-ops">form setup options</a>, but for form functionality, these two variables are it.</p>
  <ul class="valists">
<?php 
/*
  This part is to allow me to set up the demo without exposing my real working email 
  since this page will be up permanently at green-beast.com and this simple email
  tranformation is not safe in the long term. Form users will remove the page after 
  installation, as instructed. And I  didn't want to update this every time I updated 
  the form... lazy :) The demo email address shown is completely bogus. The form sends
  to a real one though. Okay, now that that's said, it's on to the script.
*/
     $currentdomain = $_SERVER['HTTP_HOST'];  // get the host
if($currentdomain  == "green-beast.com") {    // if it's mine
     $send_email    = "demo@green-beast.com"; // change this var
     $afterthought  = ' &#8212; <small class="error">On this demo site this is not the real working email.</small>';
} else {
     $afterthought  = "";
}
  echo '   <li><strong>Send-to Email Variable (modified)</strong> &#8212; <span>';
     echo convert_email($send_email);
  echo '</span>'.$afterthought.'</li>'."\n";
  echo '   <li><strong>Reply-to Email Variable (modified)</strong> &#8212; <span>';
     echo convert_email($reply_email);
  echo '</span></li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="setup-ops">Basic Form Setup Options</h3>
 <p>These are some basic setup options. You will want to do these as well, even though they aren't actually required.</p>
  <ul class="valists">
<?php
  echo '   <li><strong title=" $addressee ">Addressee</strong> &#8212; ';
     echo $addressee;
  echo '</li>'."\n".'   <li><strong>Website/Organization</strong> &#8212; ';
     echo $web_site;
  echo '</li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="subj-menu">Subject Menu Select Options</h3>
 <p>These sample subject lines can be found in the configuration file in the form on an array&#8230; not the language file.</p>
  <ul class="valists">
<?php
    reset($subjects);
  while (list(, $subs) = each($subjects)) {
         echo '   <li><strong>'.$subject_label.' -</strong> '.$subs.'</li>'."\n"; 
  }
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="opti-menu">Option Menu Select Options</h3>
 <p>This menu is (<a href="#in-ops">optional</a>). Its default state serves as an example. The sample options can be found in the configuration file.</p>
  <ul class="valists">
<?php
    reset($options);
  while (list(, $opts) = each($options)) {
         echo '   <li><strong>'.$optmenu_label.' -</strong> '.$opts.'</li>'."\n"; 
  }
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="spamqa">Anti-Spam Question and Answer</h3>
 <p>Make sure this is <em>extremely</em> simple. Tip: Math like 1+1=2, for example, is international, if support for such is needed. This, too, is a config file edit.</p>
  <ul class="valists">
<?php
  echo '   <li><strong>Antispam Question</strong> &#8212; ';
     echo $spam_question;
  echo '</li>'."\n".'   <li><strong>Antispam Answer</strong> &#8212; ';
     echo $spam_answer;
  echo '</li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="ip-blklst">User Blacklist IP Array</h3>
 <p>Use this as a last resort and know that it is not completely effective. It only works against users with a static IP address.</p>
  <ul class="valists">
<?php
    reset($blacklist);
  while (list(, $listed) = each($blacklist)) {
         echo '   <li><strong>Blacklisted IP:</strong> '.$listed.'</li>'."\n"; 
  }
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="display-ops">Form Display Options</h3>
 <p>You can manage a few common styling needs while Mike helps ensure the form's accessibility and validity stays intact.</p>
  <ul class="valists">
<?php
  echo '   <li><strong>Display Privacy Link</strong> &#8212; ';
     echo $show_privacy;
  echo '</li>'."\n".'   <li><strong>Privacy Link URL</strong> &#8212; ';
if($show_privacy != "yes") {
     echo 'Privacy link not provided';
} else {
     echo $privacy_url;
}
  echo '</li>'."\n".'   <li><strong>Display Blocked Stats</strong> &#8212; ';
     echo $show_stats;
  echo '</li>'."\n".'   <li><strong>Display Author Credit</strong> &#8212; ';
     echo $show_author;
  echo '</li>'."\n".'   <li><strong>Add Layout Breaks</strong> &#8212; ';
     echo $add_breaks;
  echo '</li>'."\n".'   <li><strong>Display Main Legend</strong> &#8212; ';
     echo $show_main_legend;
  echo '</li>'."\n".'   <li><strong>Display Sub Legends</strong> &#8212; ';
     echo $show_sub_legends;
  echo '</li>'."\n".'   <li><strong>Display Main Border (fieldset)</strong> &#8212; ';
     echo $show_main_border;
  echo '</li>'."\n".'   <li><strong>Display Required Border/s (fieldset/s)</strong> &#8212; ';
     echo $show_req_borders;
  echo '</li>'."\n".'   <li><strong>Display Optional Border (fieldset)</strong> &#8212; ';
     echo $show_opt_borders;
  echo '</li>'."\n".'   <li><strong>Display Address 2 Label</strong> &#8212; ';
     echo $show_addy2_label;
  echo '</li>'."\n".'   <li><strong>Offer Carbon Copy Option</strong> &#8212; ';
     echo $offer_cc_opt;
  echo '</li>'."\n".'   <li><strong>Added Required Field Notes</strong> &#8212; ';
     echo $added_req;
  echo '</li>'."\n".'   <li><strong>Error Input Border Color</strong> &#8212; ';
     echo $err_border_color;
     echo ' - Example: <span style="padding:0px 40px; background-color:'.$err_border_color.'">&nbsp;</span>';
  echo '</li>'."\n".'   <li><strong title=" $err_label_color ">Error Label Color</strong> &#8212; ';
     echo $err_label_color;
     echo ' - Example: <span style="padding:0px 40px; background-color:'.$err_label_color.'">&nbsp;</span>';
  echo '</li>'."\n";
?>
   </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="in-ops">Form Input Options</h3>
 <p>These are optional data inputs you may want to enable or disable. All can be turned on or off if wanted, safely.</p>
  <ul class="valists">
<?php 
  echo '<li><strong>Offer Organization Input</strong> &#8212; ';
     echo $get_org;
  echo '</li>'."\n".'   <li><strong>Offer Phone Input</strong> &#8212; ';
     echo $get_phone;
  echo '</li>'."\n".'   <li><strong>Offer Website Input</strong> &#8212; ';
     echo $get_website;
  echo '</li>'."\n".'   <li><strong>Offer Address Inputs</strong> &#8212; ';
     echo $get_address;
  echo '</li>'."\n".'   <li><strong>Offer Optional Menu Select</strong> &#8212; ';
     echo $get_optmenu;
  echo '</li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="mail-form">Mail and Form Settings</h3>
 <p>Accommodate various email and form options to meet your site and server synchronization and character support needs.</p>
  <ul class="valists">
<?php 
  echo '   <li><strong>Email and Language Setting</strong> &#8212; ';
     echo $language;
  echo '</li>'."\n".'   <li><strong>Email Character Set</strong> &#8212; ';
     echo $char_set;
  echo '</li>'."\n".'   <li><strong>XHTML or HTML Markup</strong> &#8212; ';
     echo $xhtml_or_html;
  echo '</li>'."\n".'   <li><strong>Actual Server Time</strong> &#8212; ';
if($internationalize != "yes") {
     echo date("g:i a", time()+0*60*60);
} else {
     echo date("h:i", time()+0*60*60);
}
  echo '</li>'."\n".'   <li><strong>Server Time Offset</strong> &#8212; ';
     echo $time_offset;
     echo ' - Current time stamp: <span>'.$time_stamp.'</span>';
  echo '</li>'."\n".'   <li><strong>Internationalize Time Stamp</strong> &#8212; ';
     echo $internationalize;
if($internationalize != "yes") {
     echo ' - If &quot;<span>yes</span>,&quot; it would display as <span>'.$int_time_stamp.'</span>';
} else {
     echo ' - If &quot;<span>no</span>,&quot; it would display as <span>'.$us_time_stamp.'</span>';
}
  echo '</li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="adv-set">Advanced Settings</h3>
 <p>In case more form detailed control is needed. Needs may be determined by server settings or your language for example.</p>
  <ul class="valists">
<?php 
  echo '   <li><strong>Thank You Page Option</strong> &#8212; ';
     echo $thankyou_page;
  echo '</li>'."\n".'   <li><strong>Thank You Page URL</strong> &#8212; ';
if($thankyou_page != "yes") {
     echo 'Thank you page option not in use';
} else {
     echo $thankyou_url;
}
  echo '</li>'."\n".'   <li><strong>Anti-Flood Control</strong> &#8212; ';
     echo $add_antiflood;
  echo '</li>'."\n".'   <li><strong>Anti-Flood Control Aggression Level</strong> &#8212; ';
     echo $flood_level;
  echo '</li>'."\n".'   <li><strong>-f Parameter Assignment</strong> &#8212; ';
     echo $neg_f_param;
  echo '</li>'."\n".'   <li><strong>SMTP Sneak Pseudo Bypass Method</strong> &#8212; ';
     echo $smtp_sneak;
  echo '</li>'."\n".'   <li><strong>INI Set Switch Variable</strong> &#8212; ';
     echo $ini_set;
  echo '</li>'."\n".'   <li><strong>SMTP Mail Server</strong> &#8212; ';
     echo $smtp;
  echo '</li>'."\n".'   <li><strong>SMTP Mail Port Variable</strong> &#8212; ';
     echo $smtp_port;
  echo '</li>'."\n".'   <li><strong>SMTP Mail Password Variable</strong> &#8212; ';
     echo md5($smtp_password);
  echo ' (shown hashed for security)</li>'."\n".'   <li><strong>SMTP Mail Username Variable</strong> &#8212; ';
     echo md5($smtp_username);
  echo ' (shown hashed for security)</li>'."\n".'   <li><strong>Send Email Variable (modified)</strong> &#8212; <span>';
     echo convert_email($sendmail_from);
  echo '</span></li>'."\n".'   <li><strong>Send Email Variable Path</strong> &#8212; ';
     echo $sendmail_path;
  echo '</li>'."\n".'   <li><strong>Alternate Form Action</strong> &#8212; ';
if($form_action == "") {
     echo 'An alternate form action is not specified.';
} else {
     echo $form_action;
}
  echo '</li>'."\n".'   <li><strong>Form Lockdown Mode</strong> &#8212; ';
     echo $form_lockdown;
  echo '</li>'."\n".'   <li><strong>Allowed User by IP</strong> &#8212; ';
if(($form_lockdown == "yes") && ($allow_ip != "")) {
     echo 'User allowed: <span>';
     echo $allow_ip;
     echo '</span>';
} else 
if(($form_lockdown == "yes") && ($allow_ip == "")) {
     echo 'User allowed: <span>None</span>';
} else {
     echo 'Form is not locked down';
}
  echo '</li>'."\n".'   <li><strong>Input Length Limits</strong> &#8212; These are PHP-enforced maxlength input attributes (<span>'.$language.'</span> labels shown):'."\n";
  echo '    <ul lang="'.$language.'">'."\n";
     echo '     <li>';
     echo $name_label; 
        echo ': <span>'.$name_len.'</span></li>'."\n".'     <li>';
     echo $email_label; 
        echo ': <span>'.$email_len.'</span></li>'."\n".'     <li>';
     echo $org_label; 
        echo ': <span>'.$org_len.'</span></li>'."\n".'     <li>';
     echo $phone_label; 
        echo ': <span>'.$phone_len.'</span></li>'."\n".'     <li>';
     echo $addy1_label; 
        echo ': <span>'.$addy1_len.'</span></li>'."\n".'     <li>';
     echo $addy2_label; 
        echo ': <span>'.$addy2_len.'</span></li>'."\n".'     <li>';
     echo $city_label; 
        echo ': <span>'.$city_len.'</span></li>'."\n".'     <li>';
     echo $state_label; 
        echo ': <span>'.$state_len.'</span></li>'."\n".'     <li>';
     echo $postcode_label; 
        echo ': <span>'.$postcode_len.'</span></li>'."\n".'     <li>';
     echo $country_label; 
        echo ': <span>'.$country_len.'</span></li>'."\n".'     <li>';
     echo $web_label; 
        echo ': <span>'.$web_len.'</span></li>'."\n".'     <li>';
     echo $spam_question; 
        echo ': <span>'.$spam_len.'</span></li>'."\n";
  echo '    </ul>'."\n".'   </li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="pid-key">Form Identification Keys</h3>
 <p>This helps ensure your form installation is 100% unique to mitigate the possibility of exploit distribution should one be found.</p>
  <ul class="valists">
<?php 
  echo '   <li><strong>PID Key</strong> &#8212; ';
     echo $pid_key;
  echo ' (shown hashed for security)</li>'."\n";
  echo '   <li><strong>Form ID</strong> &#8212; ';
     echo strtolower($form_id);
  echo ' (this ID is processed data)</li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<hr />


<h2 id="form-lang">Form Language Settings</h2>
 <p>The <strong><?php echo $language; ?></strong> language file is currently selected. The language files, <?php list_langs(); ?>are available.</p>


<h3 id="leg-text">Legend Text</h3>
 <p>These are the various form legends used on the form. Short terms are recommended, but you have many options. Edit in your chosen language file.</p>
  <ul class="valists">
<?php 
  echo '   <li title=" $main_legend "><strong>Main Form Legend Text</strong> &#8212; '; 
     echo $main_legend;
  echo '</li>'."\n".'   <li><strong>Required Legend Text 1</strong> &#8212; ';   
     echo $req1_legend;
  echo '</li>'."\n".'   <li><strong>Required Legend Text 2</strong> &#8212; ';   
     echo $req2_legend;
  echo '</li>'."\n".'   <li><strong>Optional Legend Text</strong> &#8212; ';   
     echo $opt_legend;
  echo '</li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="lbl-text">Label Text</h3>
 <p>These are the various label texts used throughout the form. Edit in your chosen language file.</p>
  <ul class="valists">
<?php 
  echo '   <li><strong>Main Label Text</strong> &#8212; ';
     echo $main_label;
  echo '</li>'."\n".'   <li><strong>Name Label Text</strong> &#8212; ';
     echo $name_label;
  echo '</li>'."\n".'   <li><strong>Email Label Text</strong> &#8212; ';
     echo $email_label;
  echo '</li>'."\n".'   <li><strong>Organization Label Text</strong> &#8212; ';
     echo $org_label;
  echo '</li>'."\n".'   <li><strong>Phone Label Text</strong> &#8212; ';
     echo $phone_label;
  echo '</li>'."\n".'   <li><strong>Website Label Text</strong> &#8212; ';
     echo $web_label;
  echo '</li>'."\n".'   <li><strong>Address 1 Label Text</strong> &#8212; '; 
     echo $addy1_label;
  echo '</li>'."\n".'   <li><strong>Address 2 Label Text</strong> &#8212; ';
     echo $addy2_label;
  echo '</li>'."\n".'   <li><strong>City/Town Label Text</strong> &#8212; ';
     echo $city_label;
  echo '</li>'."\n".'   <li><strong>State/Province Label Text</strong> &#8212; ';
     echo $state_label;
  echo '</li>'."\n".'   <li><strong>Postal Code Label Text</strong> &#8212; ';
     echo $postcode_label;
  echo '</li>'."\n".'   <li><strong>Country Label Text</strong> &#8212; ';
     echo $country_label;
  echo '</li>'."\n".'   <li><strong>Optional Menu Label Text</strong> &#8212; '; 
     echo $optmenu_label;
  echo '</li>'."\n".'   <li><strong>Subject Label Text</strong> &#8212; '; 
     echo $subject_label;
  echo '</li>'."\n".'   <li><strong>Message Label Text</strong> &#8212; '; 
     echo $message_label;
  echo '</li>'."\n".'   <li><strong>Anti-spam explanation</strong> &#8212; '; 
     echo $spam_explain;
  echo '</li>'."\n".'   <li><strong>Honeypot Label Text</strong> &#8212; '; 
     echo $honeypot_label;
  echo '</li>'."\n".'   <li><strong>CC Option Label Text</strong> &#8212; ';
     echo $cc_label;
  echo '</li>'."\n".'   <li><strong>Special Required Symbol</strong> &#8212; ';
     echo $req_symbol;
  echo '</li>'."\n".'   <li><strong>Special Required Text</strong> &#8212; ';
     echo $req_text;
  echo '</li>'."\n".'   <li><strong>Default Select Menu Text</strong> &#8212; ';
     echo $select_text;
  echo '</li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="misc-text">Miscellaneous Form Text</h3>
 <p>These are other bits of text used in association with the form. Edit in your chosen language file.</p>
  <ul class="valists">
<?php
  echo '   <li><strong>Submit Button Text</strong> &#8212; ';   
     echo $submit_text;
  echo '</li>'."\n".'   <li><strong>Privacy Link Text</strong> &#8212; '; 
     echo $privacy_text;
  echo '</li>'."\n".'   <li><strong>Time Stamp Text</strong> &#8212; '; 
     echo $timestamp_text;
  echo '</li>'."\n".'   <li><strong>Spambots Stopped Text</strong> &#8212; ';
     echo $botsstop_text;
  echo '</li>'."\n".'   <li><strong>Author Credit Text</strong> &#8212; ';
     echo $author_cred_text;
  echo '</li>'."\n".'   <li><strong>Reset Page Link Text</strong> &#8212; ';  
     echo $reset_link_text;
  echo '</li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="err-text">Error Messages Text</h3>
 <p>Where there are forms there will be errors. Be polite, just in case a human sees a bot error. Edit in your chosen language file.</p>
  <ul class="valists">
<?php
  echo '   <li><strong>Required Fields Error Text</strong> &#8212; ';  
     echo $missedfields_err;
  echo '</li>'."\n".'   <li><strong>Malformed Email Error Text</strong> &#8212; ';
     echo $bademail_err;
  echo '</li>'."\n".'   <li><strong>Honeypot Trap Not Empty Error Text</strong> &#8212; ';
     echo $honeypot_err;
  echo '</li>'."\n".'   <li><strong>Form ID Mis-match Error Text</strong> &#8212; ';
     echo $idmismatch_err;
  echo '</li>'."\n".'   <li><strong>Invalid/Illegal Menu Error Text</strong> &#8212; ';
     echo $menu_err;
  echo '</li>'."\n".'   <li><strong>Blacklisted IP Address Error Text</strong> &#8212; ';
     echo $blacklist_err;
  echo '</li>'."\n".'   <li><strong>Form Lockdown Notice Text</strong> &#8212; ';
     echo $lockdown_err;
  echo '</li>'."\n".'   <li><strong>Exceeds Input Maxlength Error Text</strong> &#8212; ';
     echo $strlength_err;
  echo '</li>'."\n".'   <li><strong>Exploited Input Error Text</strong> &#8212; ';
     echo $exploits_err;
  echo '</li>'."\n".'   <li><strong>Prohibited Entry List Text</strong> &#8212; ';
     echo $prohibited_err;
  echo '</li>'."\n".'   <li><strong>Header Injection Error Text</strong> &#8212; ';
     echo $mailhead_err;
  echo '</li>'."\n".'   <li><strong>Copy Header Injection Error Text</strong> &#8212; ';
     echo $cc_mailhead_err;
  echo '</li>'."\n".'   <li><strong>Anti-spam Answer Error Text (part one)</strong> &#8212; ';
     echo $antispam_err;
  echo '</li>'."\n".'   <li><strong>Anti-spam Answer Error Text (part two)</strong> &#8212; ';
     echo $antispam_err2;
  echo '</li>'."\n".'   <li><strong>Jump to Submit (honeypot forgiveness)</strong> &#8212; ';
     echo $submit_again;
  echo '</li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<h3 id="eml-text">Email Text Snippets</h3>
 <p>This makes up the various bits of your emails (to you and your form user). Edit in your chosen language file.</p>
  <ul class="valists">
<?php
  echo '   <li><strong>Success Mail Sent Text</strong> &#8212; ';  
     echo $success_text;
  echo '</li>'."\n".'   <li><strong>Webmaster Email Copy Sent Text</strong> &#8212; ';  
     echo $copy_sent_text;
  echo '</li>'."\n".'   <li><strong>Unknown Browser Text</strong> &#8212; ';  
     echo $unk_useragent;
  echo '</li>'."\n".'   <li><strong>Greeting/Salutation Text</strong> &#8212; ';  
     echo $salutation;
  echo '</li>'."\n".'   <li><strong>Email Intro Text</strong> &#8212; ';  
     echo $mail_text;
  echo '</li>'."\n".'   <li><strong>Email Sub Text</strong> &#8212; ';  
     echo $mail_text2;
  echo '</li>'."\n".'   <li><strong>Contact Details Text</strong> &#8212; ';  
     echo $mail_text3;
  echo '</li>'."\n".'   <li><strong>Data Collected Text</strong> &#8212; ';  
     echo $mail_data_text;
  echo '</li>'."\n".'   <li><strong>CC Email Copy Text</strong> &#8212; ';  
     echo $cc_cc_text;
  echo '</li>'."\n".'   <li><strong>CC Email Intro Text</strong> &#8212; ';  
     echo $cc_mail_text;
  echo '</li>'."\n".'   <li><strong>ISP Data Not Available Text</strong> &#8212; ';  
     echo $no_hst_text;
  echo '</li>'."\n".'   <li><strong>Referrer Data Not Available Text</strong> &#8212; ';  
     echo $no_hr_text;
  echo '</li>'."\n".'   <li><strong>IP Address Data Not Available Text</strong> &#8212; ';  
     echo $no_ip_text;
  echo '</li>'."\n".'   <li><strong>Time Stamp Data Not Available Text</strong> &#8212; ';  
     echo $no_time_text;
 echo '</li>'."\n";
?>
  </ul>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>


<hr />
 <p><small>Copyright &copy; 2007-<?php echo date('Y'); ?> <a href="http://green-beast.com/" title="Green-Beast.com">Mike Cherim</a>. Some rights reserved. [ <a href="#content">Top</a> ]</small></p>
</div>
</body>
</html>