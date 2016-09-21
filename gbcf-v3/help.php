<?php    // REMOVE THIS FILE FROM YOUR SERVER ONCE COMPLETED
############################################################

// Change this if changing the directory name, useful when installing mulitple copies
   $set_directory = "gbcf-v3";

/*
  +---------------------------------------------------------------+
  | GBCF-V3 PHP CONTACT FORM HELP PAGE DOCUMENTATION              |
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
    $echo = '<p class="error"><strong>Installation Error: The functions file, functions.php, does not exist or cannot be found!</strong></p>';
    $form_status  = "nogo";
}
if(file_exists('validation.php')) {
    $validate_link = '<a href="validation.php">validation</a>';
} else if(file_exists(''.$set_directory.'/validation.php')) {
    $validate_link = '<a href="'.$set_directory.'/validation.php">validation</a>';
} else if(file_exists('../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../'.$set_directory.'/validation.php">validation</a>';
} else if(file_exists('../../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../../'.$set_directory.'/validation.php">validation</a>';
} else if(file_exists('../../../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../../../'.$set_directory.'/validation.php">validation</a>';
} else if(file_exists('../../../../'.$set_directory.'/validation.php')) {
    $validate_link = '<a href="../../../../'.$set_directory.'/validation.php">validation</a>';
} else {
    $validate_link = 'validation';
}
if(file_exists("files/langs/$language")) {
    $lang_link = '<a href="files/langs/'.$language.'">current <strong>'.$language.'</strong> language file</a>';
} else if(file_exists("$set_directory/files/langs/$language")) {
    $lang_link = '<a href="'.$set_directory.'/files/langs/'.$language.'">current <strong>'.$language.'</strong> language file</a>';
} else if(file_exists("../$set_directory/files/langs/$language")) {
    $lang_link = '<a href="../'.$set_directory.'/files/langs/'.$language.'">current <strong>'.$language.'</strong> language file</a>';
} else if(file_exists("../../$set_directory/files/langs/$language")) {
    $lang_link = '<a href="../../'.$set_directory.'/files/langs/'.$language.'">current <strong>'.$language.'</strong> language file</a>';
} else if(file_exists("../../../$set_directory/files/langs/$language")) {
    $lang_link = '<a href="../../../'.$set_directory.'/files/langs/'.$language.'">current <strong>'.$language.'</strong> language file</a>';
} else if(file_exists("../../../../$set_directory/files/langs/$language")) {
    $lang_link = '<a href="../../../../'.$set_directory.'/files/langs/'.$language.'">current <strong>'.$language.'</strong> language file</a>';
} else {
    $lang_link = 'current <strong>'.$language.'</strong> language file';
}
if(file_exists('test-form.php')) {
    $form_link = '<a href="test-form.php">form testing</a>';
} else if(file_exists(''.$set_directory.'/test-form.php')) {
    $form_link = '<a href="'.$set_directory.'/test-form.php">form testing</a>';
} else if(file_exists('../'.$set_directory.'/test-form.php')) {
    $form_link = '<a href="../'.$set_directory.'/test-form.php">form testing</a>';
} else if(file_exists('../../'.$set_directory.'/test-form.php')) {
    $form_link = '<a href="../../'.$set_directory.'/test-form.php">form testing</a>';
} else if(file_exists('../../../'.$set_directory.'/test-form.php')) {
    $form_link = '<a href="../../../'.$set_directory.'/test-form.php">form testing</a>';
} else if(file_exists('../../../../'.$set_directory.'/test-form.php')) {
    $form_link = '<a href="../../../../'.$set_directory.'/test-form.php">form testing</a>';
} else {
    $form_link = 'test form';
}
function file_update($upfile) {
   $update = filemtime($upfile);
        print(date("n.d.Y \\a\\t g:i a", $update));
 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
<title>GBCF-v3 - Help Page and Documentation  - <?php echo $web_site; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="en" />
  <meta name="language" content="en" />
  <meta name="author" content="Mike Cherim @ http://green-beast.com" />
  <meta name="description" content="A page to help form installers test including the form before adding it to a live web page" />
  <meta name="keywords" content="gbcf-v3, contact form, form, script, secure, accessible, semantic, valid, download, free" />
<style type="text/css" media="all" title="Mike's Uber Basic Theme">
  body { background-color:#fff; color:#444; font:70% verdana, helvetica, palatino sans, tahoma, arial, sans-serif; padding:10px 40px; }
  h1, h2, h3 { color:#669900; }
  h1 { font-size:200%; line-height:2em; }
  h2 { font-size:160%; }
  h3 { font-size:140%; }
  h4 { font-size:135%; }
  h1 a { text-decoration:none; border:1px solid #999; padding:0 5px; }
  h1 a:hover, h1 a:focus, h1 a:active { background-color:#669900; color:#ffff7f; border:1px solid #000; }
  p, li, dd { line-height:1.7em; }
  p.success, p.error { color:#fff; padding:1px 4px; border:1px solid #000; background-color:#669900; margin:0px; text-align:center; }
  p.error { background-color:#bb0000; }
  span.error { color:#bb0000; font-weight:normal; }
  p.info-link { font-size:80%; }
  ul.valists li span { color:#000; }
  p span, dt { color:#669900; font-weight:bold; }
  dt { font-size:1.1em; margin-top:10px; }
  a { color:#669900; }
  a:hover, a:focus, a:active { color:#000; text-decoration:none; }
  a:focus, a:active { background-color:#eee; }
  #content { width:100%; height:auto; max-width:1000px; margin:auto; }
  p.success { text-align:center; }
  p.success span, p.success a, p.error a { color:#ffff7f; }
  p.success a:hover, p.success a:focus, p.success a:active, p.error a:hover, p.error a:focus, p.error a:active { background-color:#669900; color:#eee }
  p.error a:hover, p.error a:focus, p.error a:active { background-color:#bb0000; }
  p#exp { width:70%; margin:auto; }
  form#pp { float:right; margin:-15px 0 5px 10px; }
  form#pp fieldset, form#pp legend, form#pp input { margin:0; padding:0; }
  form#pp img { cursor:pointer; }
  .offset { position:absolute; left:-9000px; }
  pre { width:99%; margin:auto; border:2px inset #ccc; background-color:#fffffa; padding:4px; overflow:auto; }
  pre.mail { height:150px; }
  pre span { color:#bb0000; }
  pre, code { font-size:1.2em; color:#000; }
  pre strong { font:85% verdana, helvetica, palatino sans, tahoma, arial, sans-serif; font-weight:bold; color:#669900; }
</style>
</head>
<body>
<div id="content">
<h1><a href="http://green-beast.com/gbcf-v3/" title="GBCF-v3 Demo Site Index">GBCF-v3</a> Help Page and Documentation</h1>
 <p class="intro"><strong>Find answers to your questions about form installation, configuration, languages, and more.</strong><br />Here you'll find answers to your questions about your form's configuration, <?php echo $validate_link; ?>, installation, languages, and <?php echo $form_link; ?>. If you need more help, please contact <a href="http://green-beast.com/" title="Green-Beast.com">Mike Cherim</a> for assistance. (<strong>Note:</strong> Some support is fee-based.) You may remove this file after installation.</p>
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
?> - <strong><?php
     $currentdomain = $_SERVER['HTTP_HOST']; 
if($currentdomain  == "green-beast.com") {  
    echo 'Help Page';
} else {
    echo '<a href="http://green-beast.com/gbcf-v3/help.php" title="GBCF-v3 Demo Help Page">More Help</a> &raquo;';
}
?></strong></p>
<hr />

<h2 id="info">Page Information</h2>
 <form id="pp" action="https://www.paypal.com/cgi-bin/webscr" method="post">
  <fieldset style="border:0;">
   <legend><span class="offset">Donate</span></legend>
    <input type="hidden" name="cmd" value="_s-xclick" />
    <input class="right" type="image" src="http://green-beast.com/gbcf-v3/images/donate.png" name="submit" style="width:200px; height75px" alt="Donate at PayPal" title="Donate at PayPal" />
     <img src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" alt="" />
    <input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----" />
  </fieldset>
 </form>
 <p>On this page you will find helpful answers, about script <a href="#installation">installation</a>, <a href="#configuration">configuration</a>, and <a href="#language">language management</a>. Also get answers to your <a href="#faqs">frequently asked questions</a>. If you find yourself in need of more help, you can check out the <a href="http://green-beast.com/gbcf-v3/help.php">demo site help page</a><?php
     $currentdomain = $_SERVER['HTTP_HOST']; 
if($currentdomain  == "green-beast.com") {  
     echo ', <span class="error">last updated on ';
         file_update("help.php");
     echo '</span>';
}
?>. You can also contact <a href="http://green-beast.com/" title="Green-Beast.com">Mike Cherim</a> if all else fails. You may also <a href="http://green-beast.com/blog/?p=238">post a comment</a> on Mike's <a href="http://green-beast.com/blog/">Beast-Blog</a> web log.</p>
<hr />

<h2 id="installation">Script Installation</h2>
 <p>This section will help guide you through the simple installation process. Please note that some <a href="#configuration">configuration</a> is required.</p>
  <ol>
   <li>Unzip and check out the readme file. It is these instructions, repeated. Open the <code>gbcf-v3</code> and <code>files</code> folders to locate the <code>CONFIG.php</code> file.</li>
   <li>Open that file using a text editor like Notepad, Textpad, or a markup editor that won't mess up the scripting. Don't use Word, and Dreamweaver can be dangerous. Some FTP programs can work well, and you may be able to edit the file from within your server admin.</li>
   <li>Enter the first two variables, <code>$send_email</code> and <code>$reply_email</code>, as a minimum. The next two, <code>$addressee</code> and <code>$web_site</code> are a good idea as well. There are many other variables, like language, if needed, display options, and more, but they can wait until the script <?php echo $validate_link; ?> is done.</li>
   <li>Once that is done, put the entire <code>gbcf-v3</code> folder on your server on the root, within a directory, or within a sub-directory. Do not rename anything! (Unless you first check out the <a href="#faqs">FAQs</a> to learn how.)</li>
   <li>A 1 byte <code>error-log.txt</code> file is located in the files sub-directory located in gbcf-v3. Find it and make it writable. CHMOD 666 if needed. This is an essential step and you will not be able to proceed until done.</li>
   <li>You're about done. Go to the <?php echo $validate_link; ?> page with your browser and look for the green validation bar with form ID. From there you can check on the script's variables, locate available languages, etc. You may also move the validation file to validate and test in the same directory your contact page will be in.</li>
   <li>Assuming you're a go, load up the <?php echo $form_link; ?> page and give it a whirl. You may also move this page, as you can with the validation page, to perform a test of the form in the same directory your contact page will be in. This is an option. If the validation page is good, the form should be too!</li>
   <li>If it works, and it should, you can work on using the <code>CONFIG.php</code> to customize and further <a href="#configuration">configure</a>. You will also want to edit the style sheet if changes are desired (it can be found in the <code>themes</code> sub-directory).</li>
   <li>Add the link to the style sheet and the focus JavaScript file - for form field focus effects for Internet Explorer - to the <strong>head</strong> of your contact form page (see <a href="#fig1">Figure 1</a>), then add the PHP &quot;include&quot; to the <strong>body</strong> content area of that same page (see <a href="#fig2">Figure 2</a>). Go live and worry not.
<pre id="fig1">
<strong>&lt;!--Figure 1 (written as xhtml)--&gt;</strong>
 &lt;link rel=&quot;stylesheet&quot; type=&quot;text/css&quot; href=&quot;<span>gbcf-v3/files/themes/default.css</span>&quot; media=&quot;screen&quot; /&gt;
 &lt;!--[if IE]&gt;&lt;script type=&quot;text/javascript&quot; src=&quot;<span>gbcf-v3/files/focus.js</span>&quot;&gt;&lt;/script&gt;&lt;![endif]--&gt;
</pre>
 <p><small><strong>Figure 1 Note:</strong> You may choose to add the form styles to your own style sheet or do something else such as use existing styles. It's your call. Use the default style sheet to see what classes you have available to you. The style sheet name in the example is default.css, but change as needed.</small></p>
<pre id="fig2">
<strong>&lt;!--Figure 2--&gt;</strong>
 &lt;?php include_once(&quot;<span>gbcf-v3/form.php</span>&quot;); ?&gt;
</pre>
 <p><small><strong>Figure 2 Note:</strong> In all cases above, adjust the path to the files to meet your needs such as if your contact page is in a folder: <code>../gbcf-v3/form.php</code>.</small></p></li>
  </ol>
<h3>Getting Errors</h3>
 <p>If you make a mistake during the installation process, you may see an error bar with an error written in it. Environmental, configuration, and installation errors will be shown in English. Form errors are written in your selected <a href="#language">language</a>. If you see it on the form page the form will not be operable. If seen on the validation page, the page will be cut off (validly) after the error. If you see an error on this page you have some serious installation issues. The bar looks like this. (Strong text was used by default because strong text, by way of the <code>strong</code> tag, is <strong>important</strong>.)</p>
  <p id="exp" class="error"><strong>Example Error: This is an example of a contact form error message. <a href="#exp">Jump to Error</a></strong></p>
 <p>If you run into problems, check out the <a href="#faqs">FAQs</a> below.</p>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>
<hr />

<h2 id="configuration">Script Configuration</h2>
 <p>This section will help guide you through the simple configuration process. Don't worry, it's pretty easy, especially considering the form's flexibility. Using this contact form there are two files you can edit. The <code>CONFIG.php</code> file and the <a href="#language">language</a> file. Here the <code>CONFIG.php</code> will be covered, groups of variables/arrays listed and briefly explained. As noted in the installation instructions, edit this file with a safe markup editor or a text editor like Notepad. Be sure to read the instruction header in the file itself for further details. To get a quick peek at these values as they are configured here, check out the <?php echo $validate_link; ?> page.</p>
  <dl>
   <dt>Required set-up to operate form</dt>
    <dd><ul>
     <li><code>$send_email =</code> Enter the email address you want the form to send to. You can add more than one, just separate them with a comma.</li>
     <li><code>$reply_email =</code> Enter the email address you want the user to see and reply to if they reply to their copy of the email. Choosing a <strong>noreply</strong> account name or something similar is recommended for maximum email privacy.</li>
    </ul></dd>
   <dt>Basic form set-up options</dt>
    <dd><ul>
     <li><code>$addressee =</code> What you want the email to use to address you by. This is only displayed in the primary email.</li>
     <li><code>$web_site =</code> Enter the name of your company, organization, or web site. In my case, I would enter &quot;Green-Beast.com&quot; in mine. This will show on the subject line, in brackets, and has other uses.</li>
    </ul></dd>
   <dt>Subject line menu options array</dt>
    <dd><ul>
     <li><code>$subjects = </code> This <code>array</code> offers various subject lines or contact reasons to your users. These quoted variables terminate with a comma and following the pattern add as many or as few as you need (minimum is one). A few are offered by default. Write in your language.</li>
    </ul></dd>
   <dt>Optional menu options array</dt>
    <dd><ul>
     <li><code>$options = </code> This <code>array</code> offers various options for an optional menu. It's enabled by default (you can disable it), and used to offer visitors a means of stating how they were referred. These quoted variables terminate with a comma and following the pattern add as many or as few as you need (minimum is one if enabled). A few are offered by default. Write yours in your language of choice.</li>
    </ul></dd>
   <dt>Anti-spam question and answer</dt>
    <dd><ul>
     <li><code>$spam_question = </code> Use this to verify the person submitting the form is, well, a real person. Ask a question that has only one possible and logical answer. This is not a time to get tricky and doing so does not make this trap more effective. If you have international users, you may want to offer an arithmetic-based question like <code>1+1=</code> or something along those lines. Change this pair from time to time.</li>
     <li><code>$spam_answer = </code> This is the answer to the question above. This is not case sensitive. If the user cannot figure out the answer or get the answer wrong, they will be presented with the solution so they can try again. This is a better solution than that used on version 2 of this form.</li>
    </ul></dd>
   <dt>User blacklist IP array</dt>
    <dd><ul>
     <li><code>$blacklist = </code> Got people problems? Adding their IP address (found in the primary email's footer) to this array might solve the issue. Use this with caution though as you don't want to block the innocent. Also note that this is not effective if the user has a variable IP address or visits you from another location. It can help, though, and is one more tool at your disposal. These quoted variables terminate with a comma and following the pattern add as many or as few as you need. Do keep at least one default entry if not blocking anyone, the array must not be empty.</li>
    </ul></dd>
   <dt>Display options</dt>
    <dd><ul>
     <li><code>$show_privacy = </code> This will display a small privacy link (which can be reworded in your language file) on the footer of your form. If you have a policy, this is recommended since you will be collecting some non-identifying user data and accepting user-supplied information by using this form.</li>
     <li><code>$privacy_url = </code> If you enter <code>yes</code> to <code>$show_privacy</code>, this is where the link will point. Use a relative URL like this: <code>/pages/privacy.php</code>; or an absolute URL like this: <code>http://www.yourdomain.com/pages/privacy.php</code>.</li>
     <li><code>$show_stats = </code> This will display the blocked stats (which can be reworded in your language file) on the footer of your form.</li>
     <li><code>$show_author = </code> This will display a small link to <a href="http://green-beast.com/" title="Green-Beast.com">Mike Cherim</a> (which can be reworded in part in your language file) on the footer of your form. This is not required, entering <code>no</code> will remove it altogether, but it is damn well appreciated if you decide to keep it.</li>
     <li><code>$add_breaks = </code> Some people like inserting breaks into a form to neaten it up. This is a justifiable use of the element. But they are not for everyone. Purists like to using CSS only to drop inputs on a new line using <code>display:block</code> applied to the <code>label</code> element (but it looks like hell with styles off). Thus, you now have a choice without editing the form.</li>
     <li><code>$show_main_legend = </code> This will display for form's main <code>legend</code> (form heading) as the name implies. This does not <em>remove</em> the legend, just hides it off screen for accessibility. If you don't display the legend, the fieldset border will automatically go away (and can be removed separately as well). Edit the text in your selected language file.</li>
     <li><code>$show_sub_legends = </code> This will remove all the sub legends, removing the border and sliding them off screen just like the main legend above. Doing this, however, will automatically add an alternate required field method using an asterisk or your symbol of choice (editable in your language file) and text indicating the symbol's meaning to retain the form's accessibility and usability. Edit the text in your selected language file.</li>
     <li><code>$show_main_border = </code> If you keep the main legend you can still get rid of the fieldset border here. This can be done in the style sheet with ease, but version 2 users asked about this a lot so this was needed.</li>
     <li><code>$show_req_borders = </code> Add/remove sub fieldset borders on required fieldsets only. If no optional fields are used, the required fieldset will co-join into a single fieldset to retain markup quality.</li>
     <li><code>$show_opt_borders = </code> Same as above, but this affects the optional fields fieldset border only. If no optional fields are offered, this fieldset won't exist. The script is smart about things like that.</li>
     <li><code>$show_addy2_label = </code> If you're offering the Address inputs on your form, there is an Address 2 field whose label is hidden by default. Use this to display it. This single variable initiates many automatic changes in the script.</li>
     <li><code>$offer_cc_opt = </code> Offering this option affords form users the opportunity to get a specialized copy of the email sent to the address they provided. Their email copy does not contain the all collected data: IP, ISP, UserAgent, referrer, and whois link; only the time stamp. You will be notified if they requested a copy so you'll be in the know. Edit the time stamp text and more in your selected language file.</li>
     <li><code>$added_req = </code> This little variable makes many changes adding an asterisk (or symbol you specify in the language file) next to the labels of all required fields. They will be displayed bold, and in your chosen error label color. Doing this will also append your form's main label with the symbol and text denoting its meaning. Being within a label this will remain accessible to screen reader users in &quot;forms mode.&quot; Edit the text in your selected language file.</li>
     <li><code>$err_border_color = </code> Enter a hex code or color name (<code style="color:#bb0000;">#bb0000</code>, <code style="color:red;">red</code>, etc.). Certain errors will apply this color to affected input borders. This could have been done in the style sheet, but this is a feature enhancing usability so it was better incorporating it.</li>
     <li><code>$err_label_color = </code> Enter a hex code or color name (<code style="color:#bb0000;">#bb0000</code>, <code style="color:red;">red</code>, etc.). Certain errors will apply this color to affected input labels. This could have been done in the style sheet, but this is a feature enhancing usability so it was better incorporating it.</li>
    </ul></dd>
   <dt>Form input options</dt>
    <dd><ul>
     <li><code>$get_org = </code> This places an optional input on your form asking for company/organization. Based on the label text entered, <em>you could use this input for something else without editing the script</em>. Edit the text in your selected language file.</li>
     <li><code>$get_phone = </code> This places an optional input on your form asking for phone. Based on the label text entered, <em>you could use this input for something else without editing the script</em>. Edit the text in your selected language file.</li>
     <li><code>$get_website = </code> This places an optional input on your form asking for a web site URL. Because of the <code>http://</code> in the input, it can't really be used for anything else. Still, though, you may edit the text in your selected language file.</li>
     <li><code>$get_address = </code> This places several inputs on your form asking for an address. The inputs added include (shown in <strong>en</strong>): Address 1, Address (continued), City/town, State/province, Zip/postal code, and Country. Because of the sole purpose of this selection, these inputs can't really be used for anything else. You may, however, edit the text in your selected language file.</li>
     <li><code>$get_optmenu = </code> This places an optional select menu on your form. It's enabled by default (you can disable it), and used to offer visitors a means of stating how they were referred, as one example. <em>You can use it for whatever.</em> Edit the text in your selected language file, but the options are written in the &quot;Optional menu options array&quot; (<code>$options =</code>) mentioned above.</li>
    </ul></dd>
   <dt>Mail and form settings</dt>
    <dd><ul>
     <li><code>$language = </code> This is an extremely important variable. It critically controls all of the text on your form, in the errors, associated text, some attributes, and the wording and the header in your emails. The form will not work without it. The proper language abbreviations are in fact the name of the language files so be sure to use a language that is actually available. The language files, <?php list_langs(); ?>are currently available. In use now is <strong><?php echo $language; ?></strong>.</li>
     <li><code>$char_set = </code> This sets the character set in your email to allow support for certain characters used in some written languages. By default it is <code>utf-8</code>. It is well supported and nearly universal, but you may change it if your needs dictate. <a href="http://msdn2.microsoft.com/en-us/library/aa752010(VS.85).aspx" title="Microsoft character sets table">Learn more about character sets</a>.</li>
     <li><code>$xhtml_or_html = </code> Enter the markup language you need. You are limited to these two choices, XHTML or HTML. If you don't know what you use on your site, ask a web developer. It'll take two seconds to tell. It's XHTML by default because it has become so common on new sites.</li>
     <li><code>$time_offset = </code> This edits the time stamp which can be useful since you want your form to submit in your local time, but your server may be located in another time zone. This info can be seen on your <?php echo $validate_link; ?> page. Edit by adding <code>+1</code>, <code>+3</code>, <code>-2</code>, or <code>-4</code>, etc., as needed.</li>
     <li><code>$internationalize = </code> This changes the time stamp to be more internationally readable. It changes the date format to YYYY.MM.DD (instead of M, Dxx, Y) and the time to 24-hour time (a.k.a. European, military, and nautical time).</li>
    </ul></dd>
   <dt id="advanced">Advanced settings</dt>
    <dd><ul>
     <li><code>$thankyou_page = </code> This is <code>no</code> by default but if set to <code>yes</code> it allows the form admin to specify a separate thank you page that the form user will be sent to upon a successful submission.</li>
     <li><code>$thankyou_url = </code> If you have the <code>$thankyou_page</code> variable above set to <code>yes</code>, enter the URL of the thank you page here. Use a relative URL only (not <code>http://yourdoman.com</code>, just <code>/thankyou.php</code>, for example).</li>
     <li><code>$add_antiflood = </code> This is <code>no</code> by default but if set to <code>yes</code> it turns on an anti-flood feature reseting the form for users automatically (how fast this happens is editable, see next) to prevent them from refreshing the page thus resubmitting the email. This isn't a widespread problem, but it can happen. It will happen now and then if someone misses the Reset link, but if it happens a lot, or a person is proving difficult, this is available to you.</li>
     <li><code>$flood_level = </code> If you have the <code>$add_antiflood</code> variable above set to <code>yes</code>, this can be used to control its aggression. By default it is set to <code>2</code> seconds, which is a fairly aggressive setting slow enough for the user to see they submitted successfully but fast enough that refreshing by mouse is difficult. Setting it to <code>0</code> would be very aggressive and is best avoided unless absolutely necessary so user can see they sent the mail.</li>
     <li><code>$neg_f_param = </code> Yes by default sets proper return path (needed for AOL) but some hosts, i.e., Network Solutions, will not send mail this way so may be set to no.</li>
     <li><code>$smtp_sneak = </code> This changes the send <code>From</code> address to your send <code>To</code> address. This will allow the emails to be delivered on some restricted systems by sort of bypassing SMTP authentication. If using this, the <code>Reply-to</code> email address will still be that of your sender so you can use your email client as you would expect - it just won't look right. If your form sends but your server won't <em>deliver</em> the emails, try this first.</li>
     <li><code>$ini_set = </code> On occasion your web host will enable the PHP <code>mail()</code> function, but not allow SMTP on your server. This turns it on. If your form sends but your server won't <em>deliver</em> the emails, try this next. If you set this to <code>yes</code>, you <em>may</em> have to edit the next four variables. Contact your web host if you need help.</li>
     <li><code>$smtp = </code> This is essentially your mail server. It is <code>localhost</code> by default and this is usually fine. Contact your web host if you need help.</li>
     <li><code>$smtp_port = </code> The default port <code>25</code> is typical. Contact your web host if you need help.</li>
     <li><code>$smtp_password = </code> This may or may not be needed, contact your host for specifics.</li>
     <li><code>$smtp_username = </code> This may or may not be needed, contact your host for specifics.</li>
     <li><code>$sendmail_from = </code> This will usually be the same as the <code>$send_email</code>, but you do have an opportunity to change it here.</li>
     <li><code>$sendmail_path = </code> The name says it all. The default <code>/usr/sbin/sendmail -t -i</code> is typical but contact your web host if you need help.</li>
     <li><code>$form_action = </code> If you need to edit your form action (needed on some sites depending upon configuration), you'll use this instead of digging in the code. Leaving it empty will work in most cases as the script does use various methods of populating your form's <code>action</code> attribute. Please be aware that this variable is used in other places in the script, not just the action. It also controls form reset.</li>
     <li><code>$form_lockdown = </code> Want to close down your form for a while, or need to do maintenance? Need to do a restyling? Entering <code>yes</code> here will make it all possible, but do see the next variable.</li>
     <li><code>$allow_ip = </code> If your form is locked down to your visitors but you need to access it yourself for maintenance or a re-styling, if you have a static IP address enter it here and you'll be able to see and use the form while others will not. This currently only supports one allowed IP.</li>
     <li><code>$name_len =</code>, <code>$email_len =</code>, <code>$org_len =</code>, <code>$phone_len =</code>, <code>$addy1_len =</code>, <code>$addy2_len =</code>, <code>$city_len =</code>, <code>$state_len =</code>, <code>$postcode_len =</code>, <code>$country_len =</code>, <code>$web_len =</code>, and <code>$spam_len =</code> All control the number of characters allowed in your form's inputs by setting the maxlength input attribute. The script enforces this number for security but this is an error people will very rarely see.</li>
    </ul></dd>
   <dt>Personal ID key</dt>
    <dd><ul>
     <li><code>$pid_key = </code> This is a random number/letter combo you can add to your config to ensure your form's ID number is 100% unique, helpful if offering more than one form on your site. Before being used, the script applies the <code>md5()</code> hash function to this number.</li>
    </ul></dd>
  </dl>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>
<hr />

<h2 id="language">Language Management</h2>
 <p>One of this form's strong features is its support for other languages. Any left-to-right language can be supported. Support for right-to-left languages is unknown at this time. This script uses language files to handle all of the visitor-accessible text used in association with the form, including its errors, the email texts, and more. Any and all is easily editable.</p>
 <p>The language files, <?php list_langs(); ?>are currently available. In use now is the <strong><?php echo $language; ?></strong> file. More will become available as they are made by <a href="http://green-beast.com/gbcf-v3/#contributors">contributors</a>. In most cases you shouldn't need to edit your selected file, but you can if you want. To learn more, study the <?php echo $lang_link; ?>, compare it to the form itself, and also see the language information presented on the <?php echo $validate_link; ?> page.</p>
<h3>Editing Language Files</h3>
 <p>If you want to edit the language file, do it with care and make note that some text snippets are used in conjunction with others or with variables. Great care was taken, however, to not force a particular language syntax so as to retain the form's international usability and appeal.</p>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>
<hr />

<h2 id="faqs">Frequently Asked Questions - FAQs</h2>
 <p>This section contains some answers to frequently asked questions that you may have as well. If you have a question not answered here, when <?php echo $form_link; ?>, also use it to ask Mike for help.</p>
  <dl>
   <dt>My form sends, or it says so, anyway, but I don't get the emails. Why?</dt>
    <dd>If the success message comes up, the form has done its job. The PHP <code>mail()</code> function is enabled - the script checks for that. It's now up to everything up- and down-stream, beginning with your mail server... your host offers one, right? Do check your spam filter if you have one, and give it a while. Mike's server sends quickly, but not all do. No luck? Okay, go to the <a href="#advanced">Advanced Settings</a> variables in the <code>CONFIG.php</code> file. Look for the <code>$neg_f_param</code> first and set it to <code>&quot;no&quot;</code> then test. No good? Next look for the <code>$smtp_sneak</code> and set it to <code>&quot;yes&quot;</code> then test the form again. Still nothing, huh? Okay, reset the other variables then and move on to the next five variables. The first, <code>$set_ini</code> is like a switch, set it to <code>&quot;yes&quot;</code>. The four remaining are controls, so to speak. The next in line, <code>$smtp</code>, where you'll enter your domain email, will probably be the only one you'll need to edit so save the changes go ahead and test the form again. If you need help with these steps, or if it still doesn't work, you will need to contact your web host.</dd>
   <dt>I'm getting errors about certain files not being found. What's up?</dt>
    <dd>You must install the entire <code>gbcf-v3</code> folder, without renaming anything. This should be done on the root- or index-level, a directory, or sub-directory. The folders must be readable (CHMOD 755 - this is a typical default), and the PHP <code>include()</code> and <code>require()</code> functions, and variants, must be supported.</dd>
   <dt>I bring up the <code>index.php</code> in my browser and it says access is prohibited?</dt>
    <dd>You're not instructed to bring up the index. That is how it works, and it is there for your directory privacy. To use the form you must include <code>form.php</code> into <em>your</em> web page. Please re-read the installation instructions or readme file.</dd>
   <dt>I'm getting errors about the <code>error-log.txt</code> file. What's up?</dt>
    <dd>The file must be in the <code>files</code> folder, writable (CHMOD 666), it must contain at least 1 byte of data (the number 0, zero, for starters), and must not contain more than 10 bytes (for security - its file size should never exceed 8 bytes). If all of that is a good to go... hmm.</dd>
   <dt>Say what? How do I do this CHMOD 666 thing?</dt>
    <dd>If you load up the validation page and get the green bar, then your server makes files writable by default, you won't get the error addressing that. If you do get the File Not Writable error, then by way of FTP or by way of your server admin panel, set the file's permissions (also known as CHMOD which short for CHange MODe), to 666. This is the same as saying the file is <em>Readable</em> and <em>Writable</em>, but not <em>Executable</em>, to the <em>Owner</em>, <em>Group</em>, and to <em>Everyone (Public)</em>. Next to files in some environments you will see code like <code>-rw--rw--rw-</code> which actually means the file is CHMOD'd to 666 and is writable. To edit this in your server or FTP, try accessing the file's <em>Properties</em>. Ask your host if you still need help with it. Also, here's a source of some <a href="http://codex.wordpress.org/Changing_File_Permissions" title="WordPress resource page">additional info</a>.</dd>
   <dt>I edited my config file, but my form now comes up blank. What happened?</dt>
    <dd>You either added a quote mark to one of the variables, you removed one or both of the two quote marks, or you accidentally removed the semi-colon at the end of a <em>string</em> (or comma if it's an array you edited). You will now have to go back into that file and look carefully at each line. Alternatively you may also locate your server's error log, clear it, reload the page going blank, then check the log. It may reveal a line number. Need help with your server's error log, ask your web host.</dd>
   <dt>The include doesn't work on my <code>*.html</code> page. Why?</dt>
    <dd>To process PHP scripting, you must apply the <code>include</code> on a <code>*.php</code> page, <strong>or</strong> contact your web host and request server configuration to run PHP on any page or file. If you choose the former method and change your file extension to <code>*.php</code>, don't forget to update your navigation.</dd>
   <dt>I uploaded the files and followed the instructions, but the files are messed up... why?</dt>
    <dd>As noted in the instructions, always use a plain text editor like NotePad to edit the files. FrontPage and others can destroy the PHP files. Also, based on this <a href="http://green-beast.com/blog/?p=238#comment-25173">comment from Gill Lucraft</a>, uploading via FTP with support <a href="http://www.iisfaq.com/Default.aspx?tabid=2447">FrontPage Server Extensions</a> (FPSE) can also wreak havoc on the files. This can turned off for a minute or upload can be done through the server. Even good FTP programs like <a href="http://filezilla-project.org/">Filezilla</a> and <a href="http://www.cuteftp.com/">CuteFTP</a> can fall victim to FPSE.</dd>
   <dt>If I can't rename the gbcf-v3 folder, how can I install more than one copy on my site?</dt>
    <dd>Well, you <em>can</em> rename it, but you must make a couple small changes. Using a plain text editor just like you used to edit the <code>CONFIG.php</code> file, open the following files and near the very top of each you'll find a special configuration allowing you to rename the folder: <code>help.php</code>, <code>validation.php</code>, <code>test-form.php</code>, <code>form.php</code>, and <code>functions.php</code>. The variable you will have to change by entering the new folder name is <code>$set_directory</code>. You will also need to do this on two more lines in the <code>functions.php</code> file, identified at the top of that file.</dd> 
   <dt>I am getting a warning when I activate anti-flood or custom thank you page feature, or neither works. How come?</dt>
    <dd>The &quot;headers already output&quot; warning will show up on <em>some</em> sites depending on how they are scripted. This is currently an open issue in need of resolution. Any fix ideas? Step forward.</dd>
   <dt>My language file is messed up. How can I fix it?</dt>
    <dd>Open it with a text editor and fix them, save as UTF-8 or whatever works for you. Or use character entities if all else fails.</dd>
   <dt>How do I &quot;test&quot; the other themes?</dt>
    <dd>You'd have to edit the <code>test-form.php</code> file to call for something other than the default style sheet. For testing, though, the easier option is to just rename the style sheet you want to test to <code>default.css</code>.</dd>
   <dt>I deleted the <code>en</code> language file and now the form will not display <em>my</em> language. How come?</dt>
    <dd>Even blank, that file <em>must</em> exist. The script looks for that particluar file in order to verify the path to the <code>langs</code> sub-directory.</dd>
   <dt>I want to show the form stats elsewhere on my site... how?</dt>
    <dd>Easy one, just apply the following <code>readfile()</code> function to the location you want (see <a href="#fig3">Figure 3</a>). Just make sure the file path is right for your installation.
<pre id="fig3">
<strong>&lt;!--Figure 3--&gt;</strong>
 &lt;?php readfile(&quot;<span>gbcf-v3/files/error-log.txt</span>&quot;); ?&gt;
</pre></dd>
   <dt>Can I distribute this form on my site?</dt>
    <dd>No. This form can only be distributed by its maker. You can, however, contribute to the form by way of creating themes or official language files. Your contributions will be properly acknowledged.</dd>
   <dt>I want to make or have made edits to the script. Can I still get support?</dt>
    <dd>No. The only files that should be edited are the CONFIG.php file and whatever language file you select. If you made or want to make edits to any of the other files you're on your own unless working as an authorized <a href="http://green-beast.com/gbcf-v3/#contributors">contributor</a>.</dd>
   <dt>When a visitor submits the form, what &quot;other&quot; data is collected?</dt>
    <dd>Nothing really personally identifying. To better exemplify, below is an example of the webmaster's primary email footer (see <a href="#fig4">Figure 4</a>).</dd>
   <dt>Can I see the webmaster's copy of the email, before I download it?</dt>
    <dd>Sure thing. See <a href="#fig4">Figure 4</a>, below. Do note, however, that only the fields containing data will be displayed. For example, if you keep the &quot;Website&quot; input enabled, but the form user leaves it empty (or with the default <code>http://</code>), it will not be displayed in the email at all. 
<pre class="mail" id="fig4">
<strong>&lt;!--Figure 4--&gt;</strong>

 Hello Mike,

 An email has been sent from Joe Foo. Here's the message:

    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. 
 Phasellus non dolor at purus lacinia lobortis. In hac habitasse
 platea dictumst. Quisque orci metus, dignissim vel, egestas 
 bibendum, elementum et, augue. Cras ac velit. Integer semper ipsum.


 This additional information was provided:

    Name: Joe Foo
    Email: joe&#64;foo.com 
    Organization: The Foo Group, Ltd.
    Phone: 800-FOO-RULES
    Address: Foo Technology Park
    Address (continued): 1 Foo Circle
    City/town: Fooville
    State/province: Foo
    Zip/postal code: 01234
    Country: USA
    Website: http://www.foo.com
    Referred by: A print advertisement

 Data Collected:

    Time stamp: Dec. 28th, 2007 &#64; 10:45 pm
    IP: 00.00.00.00
    UA: Firefox on Windows
    ISP: c-00.00.00.00.hsd1.xx.comcast.net
    Ref: http://green-beast.com/gbcf-v3/test-form.php
    Whois: http://ws.arin.net/cgi-bin/whois.pl?queryinput=00.00.00.00

</pre></dd>
   <dt>Can I pay to have my form installed/styled/modified?</dt>
    <dd>Sometimes <em>installation</em> help is available, if there's some spare time. Contact Mike by using the <?php echo $form_link; ?> page.</dd>
   <dt>Is this version going to be converted into a <a href="http://green-beast.com/blog/?page_id=136">WordPress plugin</a> like <a href="http://green-beast.com/blog/?page_id=71">version 2</a>?</dt>
    <dd>Yes, that's the plan. Some v3 road-time has to first pass to ensure any bugs are ironed out, then a conversion can take place.</dd>
  </dl>
 <p class="info-link">[<a href="#info">Page Info</a>]</p>
<hr />

<p><small>Copyright &copy; 2007-<?php echo date('Y'); ?> <a href="http://green-beast.com/" title="Green-Beast.com">Mike Cherim</a>. Some rights reserved. [ <a href="#content">Top</a> ]</small></p>
</div>
</body>
</html>