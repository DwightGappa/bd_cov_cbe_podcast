<?php if('functions.php' == basename($_SERVER['SCRIPT_FILENAME'])) 
     die('<h2>Direct File Access Prohibited</h2>');
############################################################

// Change this if changing the directory name, useful when installing mulitple copies
   $set_directory = "gbcf-v3";

// Also edit the same thing on lines 263 and 469 - sorry :(


/*
  +---------------------------------------------------------------+
  | GBCF-V3 PHP CONTACT FORM FUNCTIONS AND VARIABLES FILE         |
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

### SANITIZE - A variable cleaning function

function clean_var($variable) {
    $variable = strip_tags(stripslashes(trim(rtrim($variable))));
  return $variable;
}


### INTINTIAL VARS - Some null, some with stuff

    $user_message      = "";     
    $id_value          = "";
    $name_value        = "";
    $email_value       = "";
    $org_value         = "";
    $phone_value       = "";
    $addy1_value       = "";
    $addy2_value       = "";
    $city_value        = "";
    $state_value       = "";
    $postcode_value    = "";
    $country_value     = "";
    $web_value         = "http://";
    $optmenu_value     = "";
    $subject_value     = "";
    $message_value     = "";
    $honeypot_value    = "";
    $spam_value        = "";
    $cc_opt_value      = "";
    $cc_chk_value      = "";
      $name_border     = "";
      $name_errlbl     = "";
      $email_border    = "";
      $email_errlbl    = "";
      $org_border      = "";
      $org_errlbl      = "";
      $phone_border    = "";
      $phone_errlbl    = "";
      $addy1_border    = "";
      $addy1_errlbl    = "";
      $addy2_border    = "";
      $city_border     = "";
      $city_errlbl     = "";
      $state_border    = "";
      $state_errlbl    = "";
      $postcode_border = "";
      $postcode_errlbl = "";
      $country_border  = "";
      $country_errlbl  = "";
      $web_border      = "";
      $web_errlbl      = "";
      $optmenu_border  = "";
      $optmenu_errlbl  = "";
      $subject_border  = "";
      $subject_errlbl  = "";
      $message_border  = "";
      $message_errlbl  = "";
      $antispam_border = "";
      $antispam_errlbl = "";
    $missed_subject    = "";
    $missed_name       = "";
    $missed_email      = "";
    $missed_subject    = "";
    $missed_message    = "";
    $missed_antispam   = "";
      $main_border     = "";
      $main_legnd      = "";
      $required_combo  = "";
      $req_border      = ""; 
      $sub_legnds      = "";
      $opt_border      = "";
      $org_value       = "";
      $req_border      = "";
    $expl_name         = "";
    $expl_email        = "";
    $expl_org          = "";
    $expl_phone        = "";
    $expl_addy1        = "";
    $expl_addy2        = "";
    $expl_city         = "";
    $expl_state        = "";
    $expl_postcode     = "";
    $expl_country      = "";
    $expl_web          = "";
    $expl_message      = "";
    $expl_spam         = "";
      $form_status     = "go";


### GET CONFIG - Get the configuration file

if(file_exists('files/CONFIG.php')) {
    require("files/CONFIG.php");
} else if(file_exists(''.$set_directory.'/files/CONFIG.php')) {
    require("$set_directory/files/CONFIG.php");
} else if(file_exists('../'.$set_directory.'/files/CONFIG.php')) {
    require("../$set_directory/files/CONFIG.php");
} else if(file_exists('../../'.$set_directory.'/files/CONFIG.php')) {
    require("../../$set_directory/files/CONFIG.php");
} else if(file_exists('../../../'.$set_directory.'/files/CONFIG.php')) {
    require("../../../$set_directory/files/CONFIG.php");
} else if(file_exists('../../../../'.$set_directory.'/files/CONFIG.php')) {
    require("../../../../$set_directory/files/CONFIG.php");
} else {
    $user_message = '<div id="results"><p class="error"><strong>Installation Error: The configuration file, CONFIG.php, does not exist or cannot be found!</strong></p></div>';
    $form_status  = "nogo";
}


### SET CASE - To prevent some human config issues

    $show_privacy     = strtolower(clean_var($show_privacy));
    $offer_cc_opt     = strtolower(clean_var($offer_cc_opt));
    $char_set         = strtolower(clean_var($char_set));
    $err_border_color = strtolower(clean_var($err_border_color));
    $err_label_color  = strtolower(clean_var($err_label_color));
    $show_addy2_label = strtolower(clean_var($show_addy2_label));
    $internationalize = strtolower(clean_var($internationalize));
    $form_lockdown    = strtolower(clean_var($form_lockdown));
    $get_org          = strtolower(clean_var($get_org));
    $get_phone        = strtolower(clean_var($get_phone));
    $get_website      = strtolower(clean_var($get_website));
    $get_address      = strtolower(clean_var($get_address));
    $get_optmenu      = strtolower(clean_var($get_optmenu));
    $add_antiflood    = strtolower(clean_var($add_antiflood));
    $flood_level      = strtolower(clean_var($flood_level));
    $neg_f_param      = strtolower(clean_var($neg_f_param));
    $smtp             = strtolower(clean_var($smtp));
    $smtp_port        = strtolower(clean_var($smtp_port));
    $thankyou_page    = strtolower(clean_var($thankyou_page));
    $thankyou_url     = clean_var($thankyou_url);
    $sendmail_from    = clean_var($sendmail_from);
    $sendmail_path    = clean_var($sendmail_path);



### Define some styles

    $offset          = ' style="position:absolute;left:-9000px;"'; // Left only works best for keyboard users so they don't jump away from their location - that's really fucked up when that happens
    $error_border    = ' style="border-color:'.$err_border_color.'"';
    $error_label     = ' style="color:'.$err_label_color.'; font-weight:bold"';
    $error_label_a2  = ' color:'.$err_label_color.'; font-weight:bold;';
if($show_addy2_label == "no") {
    $addy2_errlbl    = ' style="position:absolute;left:-9000px;"';
} else {
    $addy2_errlbl    = '';
}


### EMAIL CONVERSION - Change the email for more security during the short time it is displayed (validation page)

function convert_email($converted) {
    $converted = str_replace("@", '</span>[at]<span>', $converted); 
    $converted = str_replace(".", '</span>[dot]<span>', $converted); 
  return $converted; 
}


### REQ VARS - Check for required variables

if(($send_email == "you@yourdomain.com") || ($send_email == "")) {
    $user_message = '<div id="results"><p class="error"><strong>Configuration Error: The default send-to email, '.$send_email.', needs to be set or changed!</strong></p></div>';
    $form_status  = "nogo";
}
if(($reply_email == "noreply@yourdomain.com") || ($reply_email == "")) {
    $user_message = '<div id="results"><p class="error"><strong>Configuration Error: The default reply-to email, '.$reply_email.', needs to be set or changed!</strong></p></div>';
    $form_status  = "nogo";
}


### INI_SET() - Some users will need this

$ini_set = strtolower($ini_set);
if($ini_set == "yes") {
    ini_set("SMTP","".$smtp."");
    ini_set("smtp_port","".$smtp_port."");
    ini_set("smtp_password","".$smtp_password."");
    ini_set("smtp_username","".$smtp_username."");
    ini_set("sendmail_from","".$sendmail_from."");
    ini_set("sendmail_path","".$sendmail_path."");
}


### MAIL() - Check that mail() function is active

if(!function_exists('mail')) {
    $user_message = '<div id="results"><p class="error"><strong>Enviromental Error: The PHP mail() function is not enabled on this domain! Contact your web host.</strong></p></div>';
    $form_status  = "nogo";
}


### EXPLOITS - Identify some common exploits

    $head_expl = "/(bcc:|cc:|document.cookie|document.write|onclick|onload)/i";
    $inpt_expl = "/(content-type|to:|bcc:|cc:|document.cookie|document.write|onclick|onload)/i";


### GET VBDATA - Get the version data file

if(file_exists('files/version.php')) {
    include_once("files/version.php");
} else if(file_exists(''.$set_directory.'/files/version.php')) {
    include_once("$set_directory/files/version.php");
} else if(file_exists('../'.$set_directory.'/files/version.php')) {
    include_once("../$set_directory/files/version.php");
} else if(file_exists('../../'.$set_directory.'/files/version.php')) {
    include_once("../../$set_directory/files/version.php");
} else if(file_exists('../../../'.$set_directory.'/files/version.php')) {
    include_once("../../../$set_directory/files/version.php");
} else if(file_exists('../../../../'.$set_directory.'/files/version.php')) {
    include_once("../../../../$set_directory/files/version.php");
} else {
    $user_message = '<div id="results"><p class="error"><strong>Installation Error: The version data file, version.php, does not exist or cannot be found!</strong></p></div>';
    $form_status  = "nogo";
}


### GET LANGUAGES -- To inform users what's available

function list_langs() {
// Change this if changing the directory name, useful when installing mulitple copies
   $set_directory = "gbcf-v3";
//
if(file_exists('files/langs/en-us')) {
    $lang_path = "files/langs";
} else if(file_exists(''.$set_directory.'/files/langs/en')) {
    $lang_path = "$set_directory/files/langs";
} else if(file_exists('../'.$set_directory.'/files/langs/en')) {
    $lang_path = "../$set_directory/files/langs";
} else if(file_exists('../../'.$set_directory.'/files/langs/en')) {
    $lang_path = "../../$set_directory/files/langs/en-us";
} else if(file_exists('../../../'.$set_directory.'/files/langs/en')) {
    $lang_path = "../../../$set_directory/files/langs/en-us";
} else if(file_exists('../../../../'.$set_directory.'/files/langs/en')) {
    $lang_path = "../../../../$set_directory/files/langs/en";
} else {
    $user_message = '<div id="results"><p class="error"><strong>Installation Error: The default language file, en, does not exist or cannot be found!</strong></p></div>';
    $form_status  = "nogo";
}
  if($lang_list = opendir(''.$lang_path.'')) {
      while (false !== ($langs = readdir($lang_list))) {
        if ($langs != "." && $langs != ".." && $langs != "index.php") {
          echo '<strong>'.$langs.'</strong>, ';
        }
      }
    closedir($lang_list);
  }
}


### LANGUAGE - Get the language file and process it

    $language    = strtolower(clean_var($language));
if(file_exists('files/langs/'.$language.'')) {
    $lang_path   = "files/langs/".$language."";
} else if(file_exists(''.$set_directory.'/files/langs/'.$language.'')) {
    $lang_path   = "$set_directory/files/langs/".$language."";
} else if(file_exists('../'.$set_directory.'/files/langs/'.$language.'')) {
    $lang_path   = "../$set_directory/files/langs/".$language."";
} else if(file_exists('../../'.$set_directory.'/files/langs/'.$language.'')) {
    $lang_path   = "../../$set_directory/files/langs/".$language."";
} else if(file_exists('../../../'.$set_directory.'/files/langs/'.$language.'')) {
    $lang_path   = "../../../$set_directory/files/langs/".$language."";
} else if(file_exists('../../../../'.$set_directory.'/files/langs/'.$language.'')) {
    $lang_path   = "../../../../$set_directory/files/langs/".$language."";
}
if(file_exists($lang_path)) {
    $lang_string =  file_get_contents($lang_path);
    $lang_array  =  explode("\n", $lang_string);
function lang_strip($line) { 
    $line = strip_tags(stripslashes(trim(rtrim($line))));
    $line = explode('*', $line);
    $line = end($line);
  return $line;
}	
// This is the language to variable assignments
    $name_label       = clean_var(lang_strip($lang_array[2])); 
    $email_label      = clean_var(lang_strip($lang_array[3])); 
    $org_label        = clean_var(lang_strip($lang_array[4])); 
    $phone_label      = clean_var(lang_strip($lang_array[5])); 
    $web_label        = clean_var(lang_strip($lang_array[6])); 
    $addy1_label      = clean_var(lang_strip($lang_array[7])); 
    $addy2_label      = clean_var(lang_strip($lang_array[8])); 
    $city_label       = clean_var(lang_strip($lang_array[9])); 
    $state_label      = clean_var(lang_strip($lang_array[10])); 
    $postcode_label   = clean_var(lang_strip($lang_array[11])); 
    $country_label    = clean_var(lang_strip($lang_array[12])); 
    $subject_label    = clean_var(lang_strip($lang_array[13])); 
    $optmenu_label    = clean_var(lang_strip($lang_array[14])); 
    $message_label    = clean_var(lang_strip($lang_array[15])); 
    $honeypot_label   = clean_var(lang_strip($lang_array[16])); 
    $cc_label         = clean_var(lang_strip($lang_array[17])); 
    $spam_explain     = clean_var(lang_strip($lang_array[18])); 
    $main_label       = clean_var(lang_strip($lang_array[19])); 
    $submit_text      = clean_var(lang_strip($lang_array[20])); 
    $req_symbol       = clean_var(lang_strip($lang_array[21])); 
    $req_text         = clean_var(lang_strip($lang_array[22])); 
    $privacy_text     = clean_var(lang_strip($lang_array[23])); 
    $timestamp_text   = clean_var(lang_strip($lang_array[24]));  
    $select_text      = clean_var(lang_strip($lang_array[25])); 
      $notused_1      = clean_var(lang_strip($lang_array[26]));
  $divider_1          = clean_var(lang_strip($lang_array[27])); 
    $main_legend      = clean_var(lang_strip($lang_array[28])); 
    $req1_legend      = clean_var(lang_strip($lang_array[29])); 
    $req2_legend      = clean_var(lang_strip($lang_array[30])); 
    $opt_legend       = clean_var(lang_strip($lang_array[31])); 
      $notused_2      = clean_var(lang_strip($lang_array[32])); 
      $notused_3      = clean_var(lang_strip($lang_array[33])); 
  $divider_2          = clean_var(lang_strip($lang_array[34]));
    $botsstop_text    = clean_var(lang_strip($lang_array[35]));
    $author_cred_text = clean_var(lang_strip($lang_array[36])); 
    $reset_link_text  = clean_var(lang_strip($lang_array[37]));
  $divider_3          = clean_var(lang_strip($lang_array[38])); 
    $missedfields_err = clean_var(lang_strip($lang_array[39]));
    $bademail_err     = clean_var(lang_strip($lang_array[40]));
    $honeypot_err     = clean_var(lang_strip($lang_array[41]));
    $idmismatch_err   = clean_var(lang_strip($lang_array[42]));
    $menu_err         = clean_var(lang_strip($lang_array[43]));
    $blacklist_err    = clean_var(lang_strip($lang_array[44]));
    $lockdown_err     = clean_var(lang_strip($lang_array[45]));
    $strlength_err    = clean_var(lang_strip($lang_array[46]));
    $nosendval_err    = clean_var(lang_strip($lang_array[47]));
    $exploits_err     = clean_var(lang_strip($lang_array[48]));
    $prohibited_err   = clean_var(lang_strip($lang_array[49]));
    $mailhead_err     = clean_var(lang_strip($lang_array[50]));
    $cc_mailhead_err  = clean_var(lang_strip($lang_array[51]));
    $antispam_err     = clean_var(lang_strip($lang_array[52]));
    $antispam_err2    = clean_var(lang_strip($lang_array[53]));
    $submit_again     = clean_var(lang_strip($lang_array[54]));
      $notused_5      = clean_var(lang_strip($lang_array[55]));
      $notused_6      = clean_var(lang_strip($lang_array[56]));
      $notused_7      = clean_var(lang_strip($lang_array[57]));
      $notused_8      = clean_var(lang_strip($lang_array[58]));
      $notused_9      = clean_var(lang_strip($lang_array[59]));
  $divider_4          = clean_var(lang_strip($lang_array[60])); 
    $success_text     = clean_var(lang_strip($lang_array[61]));
    $copy_sent_text   = clean_var(lang_strip($lang_array[62]));
    $unk_useragent    = clean_var(lang_strip($lang_array[63]));
    $salutation       = clean_var(lang_strip($lang_array[64]));
    $mail_text        = clean_var(lang_strip($lang_array[65]));
    $mail_text2       = clean_var(lang_strip($lang_array[66]));
    $mail_text3       = clean_var(lang_strip($lang_array[67]));
    $mail_data_text   = clean_var(lang_strip($lang_array[68]));
    $cc_cc_text       = clean_var(lang_strip($lang_array[69]));
    $cc_mail_text     = clean_var(lang_strip($lang_array[70]));
    $no_hst_text      = clean_var(lang_strip($lang_array[71]));
    $no_hr_text       = clean_var(lang_strip($lang_array[72]));
    $no_ip_text       = clean_var(lang_strip($lang_array[73]));
    $no_time_text     = clean_var(lang_strip($lang_array[74]));
      $notused_10     = clean_var(lang_strip($lang_array[75]));
} else {
    $user_message = '<div id="results"><p class="error"><strong>Installation Error: The specified language file, '.$language.', does not exist or cannot be found!</strong></p></div>';
    $form_status  = "nogo";
}


### FORM ID - Generate a unique form ID number, etc
  
    $ext_key  = md5($pid_key); // This is for another part
    $pid_key  = md5($pid_key);
    $verskey  = md5($verskey);
    $vers_id  = md5($version);
    $bldn_id  = md5($buildno);
    $mdln_id  = md5($modelno);
    $lang_id  = md5($language);
    $char_id  = md5($char_set);
    $date_id  = md5(date('TOZ'));
    $seml_id  = md5($send_email);
    $form_id  = "$pid_key$mdln_id$char_id$bldn_id$lang_id$vers_id$seml_id$date_id$verskey"; 
    $form_id  = clean_var(strtoupper(md5($form_id)));
    $form_id  = "ID".$form_id."MC"; // To ensure the ID doesn't begin with a number
    $ext_key  = trim(strtolower($ext_key));
    $set_key  = trim(strtolower($form_id));
    $new_key  = "fk$ext_key$set_key";


### TIME - Making the time stamp

    $internationalize = strtolower(clean_var($internationalize));
if($internationalize != "yes") {
    $time_stamp      = date("M. jS, Y @ g:i a", time()+$time_offset*60*60);
} else {
    $time_stamp      = date("Y.n.d @ H:i", time()+$time_offset*60*60);
}
    $us_time_stamp   = date("M. jS, Y @ g:i a", time()+$time_offset*60*60);
    $int_time_stamp  = date("Y.n.d @ H:i", time()+$time_offset*60*60);

if(($time_stamp == "") || ($us_time_stamp == "") || ($int_time_stamp == "")) {
    $time_stamp      = $no_time_text;
    $us_time_stamp   = $no_time_text;
    $int_time_stamp  = $no_time_text;
}


### ERROR LOG - Script and function to track 'bot errors

if(file_exists('files/error-log.txt')) {
    $log_file = "files/error-log.txt";
} else if(file_exists(''.$set_directory.'/files/error-log.txt')) {
    $log_file = "$set_directory/files/error-log.txt";
} else if(file_exists('../'.$set_directory.'/files/error-log.txt')) {
    $log_file = "../$set_directory/files/error-log.txt";
} else if(file_exists('../../'.$set_directory.'/files/error-log.txt')) {
    $log_file = "../../$set_directory/files/error-log.txt";
} else if(file_exists('../../../'.$set_directory.'/files/error-log.txt')) {
    $log_file = "../../../$set_directory/files/error-log.txt";
} else if(file_exists('../../../../'.$set_directory.'/files/error-log.txt')) {
    $log_file = "../../../../$set_directory/files/error-log.txt";
}
if(!file_exists($log_file)) {
    $user_message = '<div id="results"><p class="error"><strong>Installation Error: The error log file, error-log.txt, does not exist or cannot be found!</strong></p></div>';
    $form_status  = "nogo";
} else 
if (!is_writable($log_file)) {
    $user_message = '<div id="results"><p class="error"><strong>Environmental Error: The error log file, error-log.txt, is not writable! Set CHMOD to 666.</strong></p></div>';
    $form_status  = "nogo";
} else
if(filesize("$log_file") > 10) {
    $user_message = '<div id="results"><p class="error"><strong>Environmental Error: The size of the error log file, error-log.txt, exceeds its 10 byte max.</strong></p></div>';
    $form_status  = "nogo";
} else 
if(filesize($log_file) == 0) {
    $user_message = '<div id="results"><p class="error"><strong>Environmental Error: The size of the error log file, error-log.txt, is zero. Must be 1 byte plus.</strong></p></div>';
    $form_status  = "nogo";
}
function trip_error() {
// Change this if changing the directory name, useful when installing mulitple copies
   $set_directory = "gbcf-v3";
//
if(file_exists('error-log.txt')) {
    $log_file = "error-log.txt";
} else if(file_exists('files/error-log.txt')) {
    $log_file = "files/error-log.txt";
} else if(file_exists(''.$set_directory.'/files/error-log.txt')) {
    $log_file = "$set_directory/files/error-log.txt";
} else if(file_exists('../'.$set_directory.'/files/error-log.txt')) {
    $log_file = "../$set_directory/files/error-log.txt";
} else if(file_exists('../../'.$set_directory.'/files/error-log.txt')) {
    $log_file = "../../$set_directory/files/error-log.txt";
} else if(file_exists('../../../'.$set_directory.'/files/error-log.txt')) {
    $log_file = "../../../$set_directory/files/error-log.txt";
} else if(file_exists('../../../../'.$set_directory.'/files/error-log.txt')) {
    $log_file = "../../../../$set_directory/files/error-log.txt";
}
    $log   = "$log_file";  
    $trip  = @file($log);  
    $trip  = $trip[0];  
if($handle = @fopen($log, 'w')) {  
    $trip  = intval($trip); $trip++;  
  fwrite($handle, $trip);  
  fclose($handle);
 }
}


### MODIFY NAME - Strip out the last name

function mod_name($mod_name) { 
    $mod_name = strip_tags(stripslashes(trim(rtrim($mod_name))));
    $mod_name = explode(' ', $mod_name);
    $mod_name = current($mod_name);
  return $mod_name;
}


### MARK-UP TYPE - xhtml or html dtd in use

    $xhtml_or_html = strtolower(clean_var($xhtml_or_html));
if(($xhtml_or_html == "xhtml") || ($xhtml_or_html == "x")) {
    $x_or_h = " /";
} else if(($xhtml_or_html == "html") || ($xhtml_or_html == "h")) {
    $x_or_h = "";
} else {
    $x_or_h = " /"; // Defaults to XHTML
}


### ADD BREAKS - adds breaks after labels and some inputs

    $add_breaks = strtolower(clean_var($add_breaks));
if($add_breaks != "yes") {
    $add_break = ''."\n"; 
} else {
    $add_break = '<br'.$x_or_h.'>'."\n";
}


### ACTION - In case request_uri isn't supported or if custom is needed

if($form_action != "") {
    $action = trim(htmlentities($form_action));
} else {
    if($_SERVER['REQUEST_URI'] != "") {
        $action = htmlentities($_SERVER['REQUEST_URI']);
    } else {
        $action = htmlentities($_SERVER['PHP_SELF']);
    }
}


### FIELDSET BORDERS - Offers direct configurable control

    $show_main_border = strtolower(clean_var($show_main_border));
    $show_req_borders = strtolower(clean_var($show_req_borders));
    $show_opt_borders = strtolower(clean_var($show_opt_borders));
    $show_main_legend = strtolower(clean_var($show_main_legend));
    $show_sub_legends = strtolower(clean_var($show_sub_legends));
if($show_main_border != "yes") {
    $main_border = ' style="border:0"';
} else if($show_main_legend != "yes") {
    $main_border = ' style="border:0"';
} else {
    // Nada
}
if($show_req_borders != "yes") {
    $req_border = ' style="border:0"';
} else if($show_sub_legends != "yes") {
    $req_border = ' style="border:0"';
} else {
    // Nada
}
if($show_opt_borders != "yes") {
    $opt_border = ' style="border:0"';
} else if($show_sub_legends != "yes") {
    $opt_border = ' style="border:0"';
} else {
    // Nada
}


### AND LEGENDS 

if($show_main_legend != "yes") {
    $main_legnd = $offset;
} else {
    // Nada
}
if($show_sub_legends != "yes") {
    $sub_legnds    = ' '.$offset.'';
    $required_symbol = ' <span class="req" style="color:'.$err_label_color.'" title="'.$req_text.'"><strong>'.$req_symbol.'</strong></span>';
    $required_text   = ''.$req_symbol.' = '.$req_text.'';
    $required_combo  = ' <span class="req" style="color:'.$err_label_color.'" title="'.$req_text.'"><strong>'.$req_symbol.'</strong></span> '.$req_text.'';
} else {
    // Nada border
    $required_symbol = "";
    $required_text   = "";
}


### SPECIAL REQUIRED - ading more to it to make everyone happy

    $added_req = strtolower(clean_var($added_req));
if($added_req != "yes") {
    // Nada 
} else {
    $required_symbol = ' <span class="req" style="color:'.$err_label_color.'" title="'.$req_text.'"><strong>'.$req_symbol.'</strong></span>';
    $required_combo  = ' <span class="req" style="color:'.$err_label_color.'" title="'.$req_text.'"><strong>'.$req_symbol.'</strong></span> '.$req_text.'';
}


### ANTI-SPAM Q&A - this handles the antispam q and a

    $spam_question = clean_var($spam_question);
      $spam_q      = strtolower($spam_question);
    $spam_answer   = clean_var($spam_answer);
      $spam_a      = strtolower($spam_answer);


### OPTION MENU DEFAULTS

    $optmenu_data   = '<option value="'.$optmenu_value.'" selected="selected">'.$select_text.'</option>'."\n";
    $subject_data   = '<option value="'.$subject_value.'" selected="selected">'.$select_text.'</option>'."\n";


### POSTED VARS - This is the posted data ----------------------------

if((isset($_POST[''.$form_id.''])) && ($form_status == "go")) {
// Required
    $id_value       = clean_var($_POST[''.$form_id.'']);
    $name_value     = clean_var($_POST['name']);
    $email_value    = clean_var($_POST['email']);
// Optionals
if(isset($_POST['org'])) {
    $org_value      = clean_var($_POST['org']);
} 
if(isset($_POST['phone'])) {
    $phone_value    = clean_var($_POST['phone']);
} 
if(isset($_POST['address'])) {
    $addy1_value    = clean_var($_POST['address']);
} 
if(isset($_POST['address2'])) {
    $addy2_value    = clean_var($_POST['address2']);
} 
if(isset($_POST['city'])) {
    $city_value     = clean_var($_POST['city']);
} 
if(isset($_POST['state'])) {
    $state_value    = clean_var($_POST['state']);
} 
if(isset($_POST['postcode'])) {
    $postcode_value = clean_var($_POST['postcode']);
} 
if(isset($_POST['country'])) {
    $country_value  = clean_var($_POST['country']);
} 
if(isset($_POST['website'])) {
    $web_value      = clean_var($_POST['website']); 
} 
// (Cannot use isset() here so quell undefined index errors with @)
if(@$_POST['option-menu']) {
    $optmenu_value  = clean_var($_POST['option-menu']);
    $optmenu_data   = '<option value="'.$optmenu_value.'" selected="selected">'.$optmenu_value.'</option>'."\n";
} else if((@$_POST['option-menu']) && ($optmenu_value == ""))  {
    $optmenu_value  = clean_var($_POST['option-menu']);
    $optmenu_data   = '<option value="'.$optmenu_value.'" selected="selected">'.$select_text.'</option>'."\n";
}
// Required (cannot use isset() here so quell undefined index errors with @)
if(@$_POST['subject']) {
    $subject_value  = clean_var($_POST['subject']);
    $subject_data   = '<option value="'.$subject_value.'" selected="selected">'.$subject_value.'</option>'."\n";
} else if((@$_POST['subject']) && ($subject_value == ""))  {
    $subject_value  = clean_var($_POST['option-menu']);
    $subject_data   = '<option value="'.$optmenu_value.'" selected="selected">'.$select_text.'</option>'."\n";
}
    $message_value  = clean_var($_POST['message']);
    $spam_value     = clean_var($_POST['antispam']);
    $low_spam_value = strtolower($spam_value);
// Optionals
if(isset($_POST['honeypot'])) {
    $honeypot_value = clean_var($_POST['honeypot']);
} else {
    $honeypot_value = "";
}
    $form_key       = clean_var($_POST['hidden']);
if(isset($_POST['cc-opt'])) {
    $cc_opt_value   = clean_var(@$_POST['cc-opt']);
    $cc_chk_value   = ' checked="checked"';
} else {
    $cc_opt_value   = "";
    $cc_chk_value   = "";
}


### Build the primary mail header

if($smtp_sneak != "yes") {
    $mailfrom_value = $email_value;
    $param          = "-f $send_email";
} else {
    $mailfrom_value = $send_email;
    $param          = "-f $send_email";
} 
if($neg_f_param == "yes") {
    $param          = $param;
} else {
    $param          = "";
}
    $mail_header = "From: $name_value <$mailfrom_value>\n"."Reply-To: $name_value <$email_value>\n"."MIME-Version: 1.0\n"."Content-type: text/plain; Content-language: $language; charset=\"$char_set\"\n"."Content-transfer-encoding: quoted-printable\n\n\r\n"; 
    $mail_header = trim($mail_header);

### Build the cc mail header

if($reply_email == $send_email) {
    $reply_value = $send_email;
} else {
    $reply_value = $reply_email;
} 

    $cc_mail_header = "From: $web_site <$reply_email>\n"."Reply-To: $reply_value <$reply_email>\n"."MIME-Version: 1.0\n"."Content-type: text/plain; Content-language: $language; charset=\"$char_set\"\n"."Content-transfer-encoding: quoted-printable\n\n\r\n"; 
    $cc_mail_header = trim($cc_mail_header);


### Get some environmental vars and time stamp

    $ltd        = $time_stamp;
    $ip         = clean_var(getenv("REMOTE_ADDR"));
    $hr         = trim(getenv("HTTP_REFERER"));
if($hr == "") {
    $hr         = $no_hr_text;
}
if($ip == "") {
    $whois      = "http://ws.arin.net/cgi-bin/whois.pl";
    $whois_link = ' n/a';
    $ip         = $no_ip_text;
} else {
    $whois      = 'http://ws.arin.net/cgi-bin/whois.pl?queryinput=3D'. $ip.'';
    $whois_link = ': <a href="http://ws.arin.net/cgi-bin/whois.pl?queryinput='.$ip.'" title="Whois">'.$ip.'</a>';
}
    $ua         = trim(stripslashes($_SERVER['HTTP_USER_AGENT']));
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
    $hst        = clean_var($_SERVER['HTTP_X_FORWARDED_FOR']);
} else {
    $hst        = clean_var(gethostbyaddr($_SERVER['REMOTE_ADDR']));
} 
if($hst == "") {
    $hst        = $no_hst_text;
}


### Sniff browsers to return a better string

if(eregi("Windows", $ua ) && eregi("msie", $ua) &&  eregi("[7]",$ua)) {
    $nua = "IE 7 on Windows";
}
else if(eregi("Windows", $ua ) && eregi("msie", $ua) &&  eregi("[6]",$ua)) {
    $nua = "IE 6 on Windows";
}
else if(eregi("Windows", $ua ) && eregi("msie", $ua) &&  eregi("[5-3]",$ua)) {
    $nua = "Old IE on Windows";
}
else if(eregi("Windows", $ua ) && eregi("firefox", $ua)) {
    $nua = "Firefox on Windows";
}
else if(eregi("Windows", $ua ) && eregi("opera", $ua)) {
    $nua = "Opera on Windows";
}
else if(eregi("Windows", $ua ) && eregi("mozilla", $ua)) {
    $nua = "Mozilla on Windows";
}
else if(eregi("Windows", $ua ) && eregi("netscape", $ua)) {
    $nua = "Netscape on Windows";
}
else if(eregi("Windows", $ua ) && eregi("flock", $ua)) {
    $nua = "Flock on Windows";
}
else if(eregi("Windows", $ua ) && eregi("safari", $ua)) {
    $nua = "Safari on Windows";
}
else if(eregi("Macintosh", $ua ) && eregi("camino", $ua)) {
    $nua = "Camino on Mac";
}
else if(eregi("Macintosh", $ua ) && eregi("firefox", $ua)) {
    $nua = "Firefox on Mac";
}
else if(eregi("Macintosh", $ua ) && eregi("opera", $ua)) {
    $nua = "Opera on Mac";
}
else if(eregi("Macintosh", $ua ) && eregi("mozilla", $ua)) {
    $nua = "Mozilla on Mac";
}
else if(eregi("Macintosh", $ua ) && eregi("netscape", $ua)) {
    $nua = "Netscape on Mac";
}
else if(eregi("Macintosh", $ua ) && eregi("seamonkey", $ua)) {
    $nua = "Seamonkey on Mac";
}
else if(eregi("Macintosh", $ua ) && eregi("safari", $ua)) {
    $nua = "Safari on Mac";
}
else if(eregi("Linux", $ua ) && eregi("konqueror", $ua)) {
    $nua = "Konqueror on Linux";
}
else if(eregi("Linux", $ua ) && eregi("firefox", $ua)) {
    $nua = "Firefox on Linux";
}
else if(eregi("Linux", $ua ) && eregi("mozilla", $ua)) {
    $nua = "Mozilla on Linux";
}
else if(eregi("Linux", $ua ) && eregi("opera", $ua)) {
    $nua = "Opera on Linux";
}
else if(eregi("FreeBSB", $ua ) && eregi("firefox", $ua)) {
    $nua = "Firefox on Free BSD";
}
else {
    $nua = $unk_useragent;
}


### ERROR MANAGEMENT
### Required fields need values and the error management fun begins

if(!isset($name_value, $email_value, $subject_value, $message_value, $spam_value) || empty($name_value) || empty($email_value) || empty($subject_value) || empty($message_value) || empty($spam_value)) {
  if(empty($name_value)) { 
    $missed_name     = '<a href="#name-error">'.$name_label.'</a>,';
    $name_border     = $error_border;
    $name_errlbl     = $error_label;
  } 
  if(empty($email_value)) { 
    $missed_email    = '<a href="#email-error">'.$email_label.'</a>,'; 
    $email_border    = $error_border;
    $email_errlbl    = $error_label;
  } 
  if(empty($subject_value)) { 
    $missed_subject  = '<a href="#subject-error">'.$subject_label.'</a>,'; 
    $subject_border  = $error_border;
    $subject_errlbl  = $error_label;
  } 
  if(empty($message_value)) { 
    $missed_message  = '<a href="#message-error">'.$message_label.'</a>,'; 
    $message_border  = $error_border;
    $message_errlbl  = $error_label;
  } 
  if(empty($spam_value)) { 
    $missed_antispam = '<a href="#antispam-error">'.$spam_question.'</a>';
    $antispam_border = $error_border;
    $antispam_errlbl = $error_label;
  }
    $user_message    = '<div id="results"><p class="error"><strong>'.$missedfields_err.': '.$missed_name.' '.$missed_email.' '.$missed_subject.' '.$missed_message.' '.$missed_antispam.'</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


### Email formation check

else if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,6})", "$email_value")) {
    $bad_email       = '<a href="#email-error">'.$email_label.'</a>'; 
    $email_border    = $error_border;
    $email_errlbl    = $error_label;
    $user_message    = '<div id="results"><p class="error"><strong>'.$bademail_err.': '.$bad_email.'</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error(); 
}


### Honeypot trap

else if($honeypot_value != "") {
    $honeypot_value  = clean_var($honeypot_value);
    $submit_jump     = '<a href="#'.$form_id.'">'.$submit_again.'</a>';
    $user_message    = '<div id="results"><p class="error"><strong>'.$honeypot_err.': '.$submit_jump.'</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


### ID mis-match

else if($form_key != "$new_key") {
    $hidden_value    = clean_var($hidden_value);
    $user_message    = '<div id="results"><p class="error"><strong>'.$idmismatch_err.'</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


### Invalid option

else if((!in_array($optmenu_value, $options)) && ($optmenu_value != "")) {
    $options_link    = '<a href="#optmenu-error">'.$optmenu_label.'</a>';
    $optmenu_border  = $error_border;
    $optmenu_errlbl  = $error_label;
    $user_message    = '<div id="results"><p class="error"><strong>'.$menu_err.': '.$options_link.'</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


### Invalid subject

else if(!in_array($subject_value, $subjects)) {
    $subject_link    = '<a href="#subject-error">'.$subject_label.'</a>';
    $subject_border  = $error_border;
    $subject_errlbl  = $error_label;
    $user_message    = '<div id="results"><p class="error"><strong>'.$menu_err.': '.$subject_link.'</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


### Blacklisted IP

else if(in_array($ip, $blacklist)) { 
    $user_message    = '<div id="results"><p class="error"><strong>'.$blacklist_err.''.$whois_link.'</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


### Input length error

else if(strlen($name_value)     > $name_len     || 
        strlen($email_value)    > $email_len    || 
        strlen($org_value)      > $org_len      || 
        strlen($phone_value)    > $phone_len    || 
        strlen($addy1_value)    > $addy1_len    || 
        strlen($addy2_value)    > $addy2_len    || 
        strlen($city_value)     > $city_len     || 
        strlen($state_value)    > $state_len    || 
        strlen($postcode_value) > $postcode_len || 
        strlen($country_value)  > $country_len  || 
        strlen($web_value)      > $web_len      || 
        strlen($spam_value)     > $spam_len) {
    $user_message    = '<div id="results"><p class="error"><strong>'.$strlength_err.'</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


### Missing submit variable (usually remote posting)

else if(!(isset($_POST[''.$form_id.'']))) {
    $user_message    = '<div id="results"><p class="error"><strong>'.$nosendval_err.'</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


### Vars for exploit filter matching 

else if(preg_match($inpt_expl, $name_value)      || 
        preg_match($inpt_expl, $email_value)     || 
        preg_match($inpt_expl, $org_value)       || 
        preg_match($inpt_expl, $phone_value)     || 
        preg_match($inpt_expl, $addy1_value)     || 
        preg_match($inpt_expl, $addy2_value)     || 
        preg_match($inpt_expl, $city_value)      || 
        preg_match($inpt_expl, $state_value)     || 
        preg_match($inpt_expl, $postcode_value)  || 
        preg_match($inpt_expl, $country_value)   || 
        preg_match($inpt_expl, $web_value)       || 
        preg_match($inpt_expl, $message_value)   || 
        preg_match($inpt_expl, $spam_value)) {
  if(preg_match($inpt_expl, $name_value)) { 
    $expl_name       = '<a href="#name-error">'.$name_label.'</a>,';
    $name_border     = $error_border;
    $name_errlbl     = $error_label;
  } 
  if(preg_match($inpt_expl, $email_value)) { 
    $expl_email      = '<a href="#email-error">'.$email_label.'</a>,';
    $email_border    = $error_border;
    $email_errlbl    = $error_label;
  } 
  if(preg_match($inpt_expl, $org_value)) { 
    $expl_org        = '<a href="#org-error">'.$org_label.'</a>,';
    $org_border      = $error_border;
    $org_errlbl      = $error_label;
  }
  if(preg_match($inpt_expl, $phone_value)) { 
    $expl_phone      = '<a href="#phone-error">'.$phone_label.'</a>,';
    $phone_border    = $error_border;
    $phone_errlbl    = $error_label;
  }
  if(preg_match($inpt_expl, $addy1_value)) { 
    $expl_addy1      = '<a href="#address1">'.$addy1_label.'</a>,';
    $addy1_border    = $error_border;
    $addy1_errlbl    = $error_label;
  }
  if(preg_match($inpt_expl, $addy2_value)) { 
    $expl_addy2      = '<a href="#address2">'.$addy2_label.'</a>,';
    $addy2_border    = $error_border;
    $addy2_errlbl    = $error_label;
       if($show_addy2_label == "no") {
           $addy1_errlbl    = $error_label;
           $addy2_errlbl    = ' style="position:absolute;left:-9000px;'.$error_label_a2.'"';
       }
  }
  if(preg_match($inpt_expl, $city_value)) { 
    $expl_city       = '<a href="#city-error">'.$city_label.'</a>,';
    $city_border     = $error_border;
    $city_errlbl     = $error_label;
  }
  if(preg_match($inpt_expl, $state_value)) { 
    $expl_state      = '<a href="#state-error">'.$state_label.'</a>,';
    $state_border    = $error_border;
    $state_errlbl    = $error_label;
  }
  if(preg_match($inpt_expl, $postcode_value)) { 
    $expl_postcode   = '<a href="#postcode-error">'.$postcode_label.'</a>,';
    $postcode_border = $error_border;
    $postcode_errlbl = $error_label;
  }
  if(preg_match($inpt_expl, $country_value)) { 
    $expl_country    = '<a href="#country-error">'.$country_label.'</a>,';
    $country_border  = $error_border;
    $country_errlbl  = $error_label;
  }
  if(preg_match($inpt_expl, $web_value)) { 
    $expl_web        = '<a href="#website-error">'.$web_label.'</a>,';
    $web_border      = $error_border;
    $web_errlbl      = $error_label;
  }
  if(preg_match($inpt_expl, $message_value)) { 
    $expl_message    = '<a href="#message-error">'.$message_label.'</a>,';
    $message_border  = $error_border;
    $message_errlbl  = $error_label;
  }
  if(preg_match($inpt_expl, $spam_value)) { 
    $expl_spam       = '<a href="#antispam-error">'.$spam_question.'</a>,';
    $antispam_border = $error_border;
    $antispam_errlbl = $error_label;
  }
    $user_message    = '<div id="results"><p class="error"><strong>'.$exploits_err.' '.$expl_name.' '.$expl_email.' '.$expl_org.' '.$expl_phone.' '.$expl_addy1.' '.$expl_addy2.' '.$expl_city.' '.$expl_state.' '.$expl_postcode.' '.$expl_country.' '.$expl_web.' '.$expl_message.' '.$expl_spam.'</strong></p>'."\n".' <p class="center"><small><strong>'.$prohibited_err.':</strong>&nbsp; &quot;content-type&quot;&nbsp; &quot;to:&quot;&nbsp; &quot;bcc:&quot;&nbsp; &quot;cc:&quot;&nbsp; &quot;document.cookie&quot;&nbsp; &quot;document.write&quot;&nbsp; &quot;onclick&quot;&nbsp; &quot;onload&quot;</small></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


### Mail header injection

else if(preg_match($head_expl, $mail_header))    {
    $user_message    = '<div id="results"><p class="error"><strong>'.$mailhead_err.'</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


### CC mail header injection

else if(preg_match($head_expl, $cc_mail_header)) {
    $user_message    = '<div id="results"><p class="error"><strong>'.$cc_mailhead_err.'</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


### Anti-spam question/answer

else if($spam_a != $low_spam_value) {
    $wrong_answer    = '<a href="#antispam-error">'.$spam_question.'</a>';
    $right_answer    = '<a href="#antispam">'.$spam_answer.'</a>';
    $antispam_border = $error_border;
    $antispam_errlbl = $error_label;
    $user_message    = '<div id="results"><p class="error"><strong>'.$antispam_err.' &quot;'.$wrong_answer.'&quot; '.$antispam_err2.' &quot;'.$right_answer.'&quot;</strong></p></div>'."\n";
    $form_status     = "nogo";
  trip_error();
}


##########################################################
 else {
############################# SUCCESS SECTION - Made it :)


### Find a first name and apply it in success message and email

    $modded_name     = mod_name($name_value);


### CC negotiations management

if($cc_opt_value == "cc") {
     $cc_email    = ", $email_value";
     $cc_notify   = " <small>($copy_sent_text)</small>";
     $cc_notify_e = "($copy_sent_text)";
} else {
     $cc_email    = "";
     $cc_notify   = "";
     $cc_notify_e = "";
} 


### Make the email smarter by knowing what optional data to send

if($org_value == "") {
    $org_email      = "";
} else {
    $org_email      = "   $org_label: $org_value\n";
}
if($phone_value == "") {
    $phone_email    = "";
} else {
    $phone_email    = "   $phone_label: $phone_value\n";
}
if($addy1_value == "") {
    $addy1_email    = "";
} else {
    $addy1_email    = "   $addy1_label: $addy1_value\n";
}
if($addy2_value == "") {
    $addy2_email    = "";
} else {
    $addy2_email    = "   $addy2_label: $addy2_value\n";
}
if($city_value == "") {
    $city_email     = "";
} else {
    $city_email     = "   $city_label: $city_value\n";
}
if($state_value == "") {
    $state_email    = "";
} else {
    $state_email    = "   $state_label: $state_value\n";
}
if($postcode_value == "") {
    $postcode_email = "";
} else {
    $postcode_email = "   $postcode_label: $postcode_value\n";
}
if($country_value == "") {
    $country_email  = "";
} else {
    $country_email  = "   $country_label: $country_value\n";
}
if(($web_value == "") || ($web_value == "http://")) {
    $web_email      = "";
} else {
    $web_email      = "   $web_label: $web_value\n";
}
if($optmenu_value == "") {
    $optmenu_email  = "";
} else {
    $optmenu_email  = "   $optmenu_label: $optmenu_value\n";
}


### Generate and send the primary email

     $mail_content = "$salutation $addressee,\n\n$mail_text $name_value. $mail_text2:\n\n   $message_value\n\n\n$mail_text3:\n\n   $name_label: $name_value\n   $email_label: $email_value $cc_notify_e\n$org_email$phone_email$addy1_email$addy2_email$city_email$state_email$postcode_email$country_email$web_email$optmenu_email\n\n$mail_data_text:";
     $mail_content = clean_var($mail_content);
     $mail_content = "$mail_content\n\n   $timestamp_text: $ltd\n   IP: $ip\n   UA: $nua\n   ISP: $hst\n   Ref: $hr\n   Whois: $whois\n\n";
   mail("$send_email","[$web_site] $subject_value",$mail_content,$mail_header,$param);


### Generate and send the cc email

if($cc_opt_value == "cc") {
     $cc_mail_content = "$salutation $modded_name,\n\n$cc_mail_text $web_site. $mail_text2:\n\n   $message_value\n\n\n$mail_text3:\n\n   $name_label: $name_value\n   $email_label: $email_value\n$org_email$phone_email$addy1_email$addy2_email$city_email$state_email$postcode_email$country_email$web_email$optmenu_email\n\n$mail_data_text:";
     $cc_mail_content = clean_var($cc_mail_content);
     $cc_mail_content = "$cc_mail_content\n\n   $timestamp_text: $ltd\n\n";
   mail("$email_value","[$cc_cc_text] $subject_value",$cc_mail_content,$cc_mail_header,$param);
}


### Format the success  message

    $user_message    = '<div id="results"><p class="success"><strong>'.$success_text.' '.$ltd.', '.$modded_name.' &#8212; <a href="'.$action.'">'.$reset_link_text.'</a>'.$cc_notify.'</strong></p></div>';


### Reset variables

    $id_value        = "";
    $name_value      = "";
    $email_value     = "";
    $org_value       = "";
    $phone_value     = "";
    $addy1_value     = "";
    $addy2_value     = "";
    $city_value      = "";
    $state_value     = "";
    $postcode_value  = "";
    $country_value   = "";
    $web_value       = "http://";
    $optmenu_value   = "";
    $optmenu_data    = '<option value="'.$optmenu_value.'" selected="selected">'.$select_text.'</option>'."\n";
    $subject_value   = "";
    $subject_data    = '<option value="'.$subject_value.'" selected="selected">'.$select_text.'</option>'."\n";
    $message_value   = "";
    $honeypot_value  = "";
    $spam_value      = "";
    $cc_opt_value    = "";
    $cc_chk_value    = "";
    $form_status     = "nogo";


### Optional thank you page control (Note: This function may or may not work on your website. Will not record an error.)

if($thankyou_page == "yes") {
    @header('refresh: 0; url='.$thankyou_url.'');
}


### Optional anti-flood control (Note: This function may or may not work on your website. Will not record an error.)

if($add_antiflood != "yes") {
    // Nada
} else {
    @header('refresh: '.$flood_level.'; url='.$action.'');
}

} // end of okay posted ---------------------------

} // end of all posted ----------------------------

############################################################
# EOF - Created by Mike Cherim @ http://green-beast.com
############################################################
?>