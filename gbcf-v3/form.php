<?php if('form.php' == basename($_SERVER['SCRIPT_FILENAME'])) 
     die('<h2>Direct File Access Prohibited</h2>'); 
############################################################

// Change this if changing the directory name, useful when installing mulitple copies
   $set_directory = "gbcf-v3";

/*
  +---------------------------------------------------------------+
  | GBCF-V3 PHP CONTACT FORM MAIN FILE                            |
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

### Grab the functions and known variables
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
    $user_message = '<div class="results"><p class="error"><strong>Installation Error: The functions file, functions.php, does not exist or cannot be found!</strong></p></div>';
    $form_status  = "nogo";
}
    echo "\n\n".'<!--GBCF-v3 Secure and Accessible PHP Contact Form by Mike Cherim @ http://green-beast.com ('.$version.' (c) 2007-'.date("Y").')-->'."\n";


### Lockdown begin

    $ip         = getenv("REMOTE_ADDR");
if(($form_lockdown == "yes") && ($allow_ip != "$ip")) {
    echo '<div id="form-div"><!--[ Version: '.$version.' | Build: '.$buildno.' | Model: '.$modelno.' ]-->';
    $user_message = '<div class="results"><p class="error"><strong>'.$lockdown_err.'</strong></p></div>'."\n";
    $form_status  = "nogo";
    echo $user_message;
} else {


### Start the form div

    echo '<div id="form-div"><!--[ Version: '.$version.' | Build: '.$buildno.' | Model: '.$modelno.' ]-->';


### The user message (error/success)

if($user_message != "") {
    echo "\n";
}
echo $user_message;
    echo "\n";

// EOH
?>
<form id="gbcf-form" method="post" action="<?php echo htmlentities($action); ?>#results">
 <fieldset class="main-set"<?php echo $main_border; ?>> 
  <legend class="main-legend"><span<?php echo $main_legnd; ?>><?php echo $main_legend; ?></span></legend>
   <label class="opt-label main-label"><?php echo $main_label; echo'<span>'.$required_combo.'</span>'; ?></label><?php echo $add_break; ?>
<!--required set 1-->
 <fieldset class="req-set"<?php echo $req_border; ?>> 
  <legend class="req-legend"><span<?php echo $sub_legnds; ?>><?php echo $req1_legend; ?></span></legend>
   <label id="name-error" for="name" class="req-label"<?php echo $name_errlbl; ?>><?php echo $name_label; echo $required_symbol; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-med" name="name" value="<?php echo $name_value; ?>" size="32" maxlength="<?php echo $name_len; ?>" id="name"<?php echo $name_border; ?><?php echo $x_or_h; ?>><?php echo $add_break; ?>
   <label id="email-error" for="email" class="req-label"<?php echo $email_errlbl; ?>><?php echo $email_label; echo $required_symbol ?></label><?php echo $add_break; ?>
    <input type="text" class="text-med" name="email" value="<?php echo $email_value; ?>" size="32" maxlength="<?php echo $email_len; ?>" id="email"<?php echo $email_border; ?><?php echo $x_or_h; ?>><?php echo $add_break; ?>
 <?php if(($get_org != "yes") && ($get_phone != "yes") && ($get_website != "yes") && ($get_address != "yes") && ($get_optmenu != "yes")) { 
        // Nada
      } else { ?>
 </fieldset> 
<!--optional set-->
 <fieldset class="opt-set"<?php echo $opt_border; ?>> 
  <legend class="opt-legend"><span<?php echo $sub_legnds; ?>><?php echo $opt_legend; ?></span></legend>
<?php if($get_org != "yes") { 
        // Nada
      } else { ?>
   <label id="org-error" for="org" class="opt-label"<?php echo $org_errlbl; ?>><?php echo $org_label; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-med" name="org" value="<?php echo $org_value; ?>" size="32" maxlength="<?php echo $org_len; ?>" id="org"<?php echo $org_border; ?><?php echo $x_or_h; ?>><?php echo $add_break; ?>
<?php } ?>
<?php if($get_phone != "yes") { 
        // Nada
      } else { ?>
   <label id="phone-error" for="phone" class="opt-label"<?php echo $phone_errlbl; ?>><?php echo $phone_label; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-med" name="phone" value="<?php echo $phone_value; ?>" size="32" maxlength="<?php echo $phone_len; ?>" id="phone"<?php echo $phone_border; ?><?php echo $x_or_h; ?>><?php echo $add_break; ?>
<?php } ?>
<?php if($get_address != "yes") { 
        // Nada
      } else { ?>
   <label id="address1" for="address" class="opt-label"<?php echo $addy1_errlbl; ?>><?php echo $addy1_label; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-long address" name="address" value="<?php echo $addy1_value; ?>" size="42" maxlength="<?php echo $addy1_len; ?>" id="address"<?php echo $addy1_border; ?><?php echo $x_or_h; ?>>
   <label id="addy2-error" for="address2" class="opt-label address2"<?php echo $addy2_errlbl; ?>><?php echo $add_break; ?><?php echo $addy2_label; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-long address2" name="address2" value="<?php echo $addy2_value; ?>" size="42" maxlength="<?php echo $addy2_len; ?>" id="address2"<?php echo $addy2_border; ?><?php echo $x_or_h; ?>><?php echo $add_break; ?>
   <label id="city-error" for="city" class="opt-label"<?php echo $city_errlbl; ?>><?php echo $city_label; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-med" name="city" value="<?php echo $city_value; ?>" size="32" maxlength="<?php echo $city_len; ?>" id="city"<?php echo $city_border; ?><?php echo $x_or_h; ?>><?php echo $add_break; ?>
<?php if($language != "sv") { ?>
   <label id="state-error" for="state" class="opt-label"<?php echo $state_errlbl; ?>><?php echo $state_label; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-med" name="state" value="<?php echo $state_value; ?>" size="32" maxlength="<?php echo $state_len; ?>" id="state"<?php echo $state_border; ?><?php echo $x_or_h; ?>><?php echo $add_break; ?>
<?php } ?>
   <label id="postcode-error" for="postcode" class="opt-label"<?php echo $postcode_errlbl; ?>><?php echo $postcode_label; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-short" name="postcode" value="<?php echo $postcode_value; ?>" size="22" maxlength="<?php echo $postcode_len; ?>" id="postcode"<?php echo $postcode_border; ?><?php echo $x_or_h; ?>><?php echo $add_break; ?>
   <label id="country-error" for="country" class="opt-label"<?php echo $country_errlbl; ?>><?php echo $country_label; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-short" name="country" value="<?php echo $country_value; ?>" size="22" maxlength="<?php echo $country_len; ?>" id="country"<?php echo $country_border; ?><?php echo $x_or_h; ?>><?php echo $add_break; ?>
<?php } ?>
<?php if($get_website != "yes") { 
        // Nada
      } else { ?>
   <label id="website-error" for="website" class="opt-label"<?php echo $web_errlbl; ?>><?php echo $web_label; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-med" name="website" value="<?php echo $web_value; ?>" size="32" maxlength="<?php echo $web_len; ?>" id="website"<?php echo $web_border; ?><?php echo $x_or_h; ?>><?php echo $add_break; ?>
<?php } ?>
<?php if($get_optmenu != "yes") { 
        // Nada
      } else { ?>
   <label id="optmenu-error" for="option-menu" class="opt-label"<?php echo $optmenu_errlbl; ?>><?php echo $optmenu_label; ?></label><?php echo $add_break; ?>
    <select class="select" name="option-menu" id="option-menu"<?php echo $optmenu_border; ?>>
     <?php 
         echo $optmenu_data;
    reset($options);
  while (list(, $opts) = each($options)) {
         echo '     <option value="'.$opts.'">'.$opts.'</option>'."\n"; 
  } ?>
    </select><?php echo $add_break; ?>
<?php } ?>
 </fieldset>
<!--required set 2-->
 <fieldset class="req-set"<?php echo $req_border; ?>> 
  <legend class="req-legend"><span<?php echo $sub_legnds; ?>><?php echo $req2_legend; ?></span></legend>
<?php } ?>
   <label id="subject-error" for="subject" class="req-label"<?php echo $subject_errlbl; ?>><?php echo $subject_label; echo $required_symbol; ?></label><?php echo $add_break; ?>
    <select class="select" name="subject" id="subject"<?php echo $subject_border; ?>>
     <?php 
         echo $subject_data;
    reset($subjects);
  while (list(, $subs) = each($subjects)) {
         echo '     <option value="'.$subs.'">'.$subs.'</option>'."\n"; 
  } ?>
    </select><?php echo $add_break; ?>
   <label id="message-error" for="message" class="req-label"<?php echo $message_errlbl; ?>><?php echo $message_label; echo $required_symbol; ?></label><?php echo $add_break; ?>
    <textarea class="textarea" rows="12" cols="60" name="message" id="message"<?php echo $message_border; ?>><?php echo $message_value; ?></textarea><?php echo $add_break; ?>
   <label id="antispam-error" for="antispam" class="req-label"<?php echo $antispam_errlbl; ?>><?php echo $spam_question; echo $required_symbol; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-short" name="antispam" value="<?php echo $spam_value; ?>" size="22" maxlength="<?php echo $spam_len; ?>" id="antispam"<?php echo $antispam_border; ?><?php echo $x_or_h; ?>> 
   <label class="req-label explain">- <?php echo $spam_explain; ?></label><?php echo $add_break; ?>
 </fieldset>
   <div<?php echo $offset; ?>>
   <label id="honeypot-error" for="honeypot" class="opt-label"><?php echo $honeypot_label; ?></label><?php echo $add_break; ?>
    <input type="text" class="text-med" name="honeypot" value="" size="32" maxlength="255" id="honeypot"<?php echo $x_or_h; ?>><?php echo $add_break; ?>
    <?php
         $form_key  = "$ext_key$set_key";
         echo '<input type="hidden" name="hidden" value="fk'.$form_key.'" id="hidden" alt="hidden"'.$x_or_h.'>'."\n";
    ?>
   </div>
<?php if($offer_cc_opt != "yes") { 
        // Nada
      } else { ?>
   <label id="cc-opt-error" class="opt-label check">
    <input class="checkbox" type="checkbox" name="cc-opt" id="cc-opt" value="cc"<?php echo $cc_chk_value; ?><?php echo $x_or_h; ?>>&nbsp;&nbsp;<?php echo $cc_label; ?></label><?php echo $add_break; ?>
<?php } ?>
    <input type="submit" class="button" name="<?php echo $form_id; ?>" id="<?php echo $form_id; ?>" value="<?php echo $submit_text; ?>" alt="<?php echo $submit_text; ?>"<?php echo $x_or_h; ?>><br<?php echo $x_or_h; ?>>
 </fieldset>
</form><?php
### No edit

    echo "\n";


### Manage the form footer stuff

    $privacy_url  = trim($privacy_url);
    $show_privacy = strtolower($show_privacy);
    $show_stats   = strtolower($show_stats);
    $show_author  = strtolower($show_author);
if(($show_stats == "yes") || ($show_author == "yes") || ($show_privacy == "yes")) {
    echo ' <p class="form-footer"><small>';
}


### Display the privacy link

if($show_privacy != "yes") {
    // Nada
} else {
    echo '<a href="'.$privacy_url.'">'.$privacy_text.'</a>';
}


### Manage the display of the hyphen between the footer elements

if(($show_privacy != "yes") || ($show_stats != "yes")) {
    // Nada
} else if(($show_privacy != "yes") && ($show_stats == "yes")) {
    // Nada
} else {
    echo ' - ';
}


### Get the spambot stopped stats

if($show_stats != "yes") {
    // Nada
} else {


### Then display them with the text (see language file)

    echo ''.$botsstop_text.': <strong>';
if(file_exists('files/error-log.txt')) {
    readfile("files/error-log.txt");
} else if(file_exists(''.$set_directory.'/files/error-log.txt')) {
    readfile("$set_directory/files/error-log.txt");
} else if(file_exists('../'.$set_directory.'/files/error-log.txt')) {
    readfile("../$set_directory/files/error-log.txt");
} else if(file_exists('../../'.$set_directory.'/files/error-log.txt')) {
    readfile("../../$set_directory/files/error-log.txt");
} else if(file_exists('../../../'.$set_directory.'/files/error-log.txt')) {
    readfile("../../../$set_directory/files/error-log.txt");
} else if(file_exists('../../../../'.$set_directory.'/files/error-log.txt')) {
    readfile("../../../../$set_directory/files/error-log.txt");
}
    echo '</strong>';
}


### Manage the display of the hyphen between the footer elements

if(($show_stats != "yes") && ($show_author != "yes")) {
    // Nada
} else if(($show_privacy == "yes") && ($show_stats != "yes")) {
    echo ' - ';
} else if(($show_author != "yes") && ($show_stats == "yes")) {
    // Nada
} else if(($show_author == "yes") && ($show_stats != "yes") && ($show_privacy != "yes")) {
    // Nada
} else {
    echo ' - ';
}


### Display the author link (please)

if($show_author != "yes") {
    // Nada
} else {
    echo ''.$author_cred_text.' <a href="http://green-beast.com/" title="GBCF-'.$version.' &copy; 2007-'.date("Y").' - Green-Beast.com">Mike Cherim</a>';
}


### Provide closure

if(($show_stats == "yes") || ($show_author == "yes") || ($show_privacy == "yes")) {
    echo '</small></p>'."\n";
}


### Lockdown begin end

}


### Close the form div and show some data for troubleshooting

    echo '</div><!--[ Version: '.$version.' | Build: '.$buildno.' | Model: '.$modelno.' ]-->';


## Finish it up

    echo "\n".'<!--GBCF-v3 Secure and Accessible PHP Contact Form by Mike Cherim @ http://green-beast.com ('.$version.' (c) 2007-'.date("Y").')-->'."\n\n";


### EOF - Mike Cherim @ http://green-beast.com
?>