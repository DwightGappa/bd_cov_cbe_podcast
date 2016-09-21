<?php if('CONFIG.php' == basename($_SERVER['SCRIPT_FILENAME'])) 
     die('<h2>Direct File Access Prohibited</h2>'); 
##################################################################
#  C O N T A C T   F O R M   C O N F I G U R A T I O N   F I L E  
##################################################################
#
#  Please edit this file carefully. Follow these simple rules,
#  and all will be right with your world.
# 
#  First rule of the config file is to never talk about the cofig
#  file (yeah, yeah, Fight Club humor). Okay, seriously now:
#
#  1) Always enter your values between the quotes.
#  2) Be sure the quotes remain (where used) and a semi-colon end.
#  3) If you have to use quotemarks for some reason, try these:
#     a) Escape quotes with backslashes - \"text\"
#     b) Use a plain quote character - &quot;text&quot;
#     c) Use a fancy a quote character - &#8220;text&#8221;
#  4) Array line items terminate with a comma, not a semi-colon.
#  5) To edit form text, do so in your selected langauge file.
#
#  That's it. Refer to the documentation for more details.
#  Still need help? Ask Mike Cherim @ http://green-beast.com
#
##################################################################
# 1. Required set-up to operate form
##################################################################

    $send_email    = "you@yourdomain.com";       // Your email

    $reply_email   = "noreply@yourdomain.com";   // Reply email


##################################################################
# 2. Basic form set-up options
##################################################################

    $addressee     = "Webmaster";   // Your name/Company name

    $web_site      = "Website";     // Your site or company name


##################################################################
# 3. Subject line menu options array (subject line of email)
$subjects = array( ###############################################

    "Quick comment",
    "Quick question",
    "Site problem report",
    "Something else (below)",


);################################################################
# 4. Optional menu options array (for $get_optmenu)
$options = array( ################################################

    "A print advertisement",
    "A web advertisement",
    "Friend or family member",
    "Another source (below)",


);################################################################
# 5. Anti-spam question and answer 
##################################################################

    $spam_question = "Is fire hot or cold?";

    $spam_answer   = "hot";


##################################################################
# 6. User blacklist IP array (use with caution)
$blacklist = array( ##############################################

    "00.00.00.00",
    "11.11.11.11",
    "22.22.22.22",


);################################################################
# 7. Display options
##################################################################

    $show_privacy      = "no";    // Or "yes"

    $privacy_url       = "";      // If "yes" above

    $show_stats        = "yes";   // Or "no"

    $show_author       = "yes";   // Or "no" - please say yes

    $add_breaks        = "yes";   // Or "no"

    $show_main_legend  = "yes";   // Or "no" 

    $show_sub_legends  = "yes";   // Or "no" 

    $show_main_border  = "yes";   // Or "no"

    $show_req_borders  = "yes";   // Or "no"     

    $show_opt_borders  = "yes";   // Or "no"

    $show_addy2_label  = "no";    // Or "yes"

    $offer_cc_opt      = "yes";   // Or "no"

    $added_req         = "no";    // Or "yes"

    $err_border_color  = "#bb0000";  // Code or name

    $err_label_color   = "#bb0000";  // Code or name

    

##################################################################
# 8. Form input options
##################################################################

    $get_org           = "yes";   // Or "no"

    $get_phone         = "yes";   // Or "no"

    $get_website       = "yes";   // Or "no"

    $get_address       = "yes";   // Or "no"

    $get_optmenu       = "yes";   // Or "no"



##################################################################
# 9. Mail and form settings
##################################################################

    $language          = "en";    // Name of language file

    $char_set          = "utf-8"; // Character set for email

    $xhtml_or_html     = "xhtml"; // Or "html"

    $time_offset       =  0;      // Unquoted +1, +2, -1, -2, etc

    $internationalize  = "no";    // Or "yes"


##################################################################
# 10. Advanced settings - CONTACT YOUR WEB HOST IF YOU NEED HELP
##################################################################

// Note: The thank you page and anti-flood features may not 
// work for all. This is an ongoing issue.

    $thankyou_page = "no";        // Or "yes"

    $thankyou_url  = "";          // If "yes" above, relative URL

    $add_antiflood = "no";        // Or "yes" (if needed)

    $flood_level   = 2;           // 0-9 seconds before refresh

    $neg_f_param   = "yes";       // Or "no" (if needed)

    $smtp_sneak    = "no";        // Or "yes" (if needed)

    $ini_set       = "no";        // Or "yes" (if needed)

    $smtp          = "localhost"; // Confirm with your host

    $smtp_port     = "25";        // Confirm with your host

    $smtp_password = "123456";    // If needed, ask host

    $smtp_username = "admin";     // If needed, ask host

    $sendmail_from = "you@yourdomain.com";   // Your email

    $sendmail_path = "/usr/sbin/sendmail -t -i";

    $form_action   = "";          // Leave blank unless needed

    $form_lockdown = "no";        // Or "yes"

    $allow_ip      = "";          // Maintenance user's IP

    $name_len      = 60;          // Input length limit 
                                  // Unquoted variables
    $email_len     = 60;

    $org_len       = 60;

    $phone_len     = 30;

    $addy1_len     = 30;

    $addy2_len     = 30;

    $city_len      = 60;

    $state_len     = 40;

    $postcode_len  = 20;

    $country_len   = 40;
  
    $web_len       = 80;
 
    $spam_len      = 10;


##################################################################
# 11. Personal ID key for added form for more ID customization
##################################################################

    $pid_key       = "vG5e30hjKx2qSi";   // Numbers/letters only


##################################################################
# EOF - Created by Mike Cherim @ http://green-beast.com
##################################################################
?>
