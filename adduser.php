<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validate</title>
<link href="../deserttech/global.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
	background-color: #42413C;
	margin: 0;
	padding: 0;
	color: #000;
}

/* ~~ Element/tag selectors ~~ */
ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
	padding: 0;
	margin: 0;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
	padding-right: 15px;
	padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
}
a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
	border: none;
}

/* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
a:link {
	color: #42413C;
	text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
}
a:visited {
	color: #6E6C64;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
	text-decoration: none;
}

/* ~~ This fixed width container surrounds all other divs ~~ */
.container {
	width: 960px;
	background-color: #FFFFFF;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}

/* ~~ The header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo. ~~ */
.header {
	background-color: #ADB96E;
}

/* ~~ These are the columns for the layout. ~~ 

1) Padding is only placed on the top and/or bottom of the divs. The elements within these divs have padding on their sides. This saves you from any "box model math". Keep in mind, if you add any side padding or border to the div itself, it will be added to the width you define to create the *total* width. You may also choose to remove the padding on the element in the div and place a second div within it with no width and the padding necessary for your design.

2) No margin has been given to the columns since they are all floated. If you must add margin, avoid placing it on the side you're floating toward (for example: a right margin on a div set to float right). Many times, padding can be used instead. For divs where this rule must be broken, you should add a "display:inline" declaration to the div's rule to tame a bug where some versions of Internet Explorer double the margin.

3) Since classes can be used multiple times in a document (and an element can also have multiple classes applied), the columns have been assigned class names instead of IDs. For example, two sidebar divs could be stacked if necessary. These can very easily be changed to IDs if that's your preference, as long as you'll only be using them once per document.

4) If you prefer your nav on the right instead of the left, simply float these columns the opposite direction (all right instead of all left) and they'll render in reverse order. There's no need to move the divs around in the HTML source.

*/
.sidebar1 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding-bottom: 10px;
}
.content {

	padding: 10px 0;
	width: 600px;
	float: left;
}
.sidebar2 {
	float: left;
	width: 180px;
	background-color: #EADCAE;
	padding: 10px 0;
}

/* ~~ This grouped selector gives the lists in the .content area space ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* this padding mirrors the right padding in the headings and paragraph rule above. Padding was placed on the bottom for space between other elements on the lists and on the left to create the indention. These may be adjusted as you wish. */
}

/* ~~ The navigation list styles (can be removed if you choose to use a premade flyout menu like Spry) ~~ */
ul.nav {
	list-style: none; /* this removes the list marker */
	border-top: 1px solid #666; /* this creates the top border for the links - all others are placed using a bottom border on the LI */
	margin-bottom: 15px; /* this creates the space between the navigation on the content below */
}
ul.nav li {
	border-bottom: 1px solid #666; /* this creates the button separation */
}
ul.nav a, ul.nav a:visited { /* grouping these selectors makes sure that your links retain their button look even after being visited */
	padding: 5px 5px 5px 15px;
	display: block; /* this gives the anchor block properties so it fills out the whole LI that contains it so that the entire area reacts to a mouse click. */
	width: 160px;  /*this width makes the entire button clickable for IE6. If you don't need to support IE6, it can be removed. Calculate the proper width by subtracting the padding on this link from the width of your sidebar container. */
	text-decoration: none;
	background-color: #C6D580;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* this changes the background and text color for both mouse and keyboard navigators */
	background-color: #ADB96E;
	color: #FFF;
}

/* ~~ The footer styles ~~ */
.footer {
	padding: 10px 0;
	background-color: #CCC49F;
	position: relative;/* this gives IE6 hasLayout to properly clear */
	clear: both; /* this clear property forces the .container to understand where the columns end and contain them */
}

/* ~~ Miscellaneous float/clear classes ~~ */
.fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the .container) if the .footer is removed or taken out of the .container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
-->
</style></head>

<body>

<div class="container">
  <div class="header"><a href="#"><img src="" alt="Insert Logo Here" name="Insert_logo" width="180" height="90" id="Insert_logo" style="background-color: #C6D580; display:block;" /></a> 
    <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="validate.php">Register</a></li>
      <li><a href="signin.php">Log-in </a></li>
      <li><a href="#">Link three</a></li>
      <li><a href="#">Link four</a></li>
    </ul>
    <p> The above links demonstrate a basic navigational structure using an unordered list styled with CSS. Use this as a starting point and modify the properties to produce your own unique look. If you require flyout menus, create your own using a Spry menu, a menu widget from Adobe's Exchange or a variety of other javascript or CSS solutions.</p>
    <p>If you would like the navigation along the top, simply move the ul.nav to the top of the page and recreate the styling.</p>
    <!-- end .sidebar1 --></div>
    <div class="content">
<?php // adduser.php

// Start with the PHP code

$firstName = $lastName = $username = $password = $email = "";

if (isset($_POST['firstName']))
	$firstName = fix_string($_POST['firstName']);
if (isset($_POST['lastName']))
	$lastName = fix_string($_POST['lastName']);
if (isset($_POST['username']))
	$username = fix_string($_POST['username']);
if (isset($_POST['password']))
	$password = fix_string($_POST['password']);
if (isset($_POST['email']))
	$email = fix_string($_POST['email']);

$fail  = validate_firstname($firstName);
$fail .= validate_lastname($lastName);
$fail .= validate_username($username);
$fail .= validate_password($password);
$fail .= validate_email($email);

echo "<html><head><title>An Example Form</title>";

if ($fail == "") {
	echo "</head><body>Form data successfully validated: $firstName,
		$lastName, $username, $password, $email.</body></html>";

	// This is where you would enter the posted fields into a database

	exit;
}

// Now output the HTML and JavaScript code

echo <<<_END

<!-- The HTML section -->

<style>.signup { border: 1px solid #999999;
	font: normal 14px helvetica; color:#444444; }</style>
<script type="text/javascript">
function validate(form)
{
	fail  = validatefirstname(form.firstName.value)
	fail += validatelastname(form.lastName.value)
	fail += validateusername(form.username.value)
	fail += validatepassword(form.password.value)
	fail += validateemail(form.email.value)
	if (fail == "") return true
	else { alert(fail); return false }
}
</script></head><body>
<table class="signup" border="0" align="center" cellpadding="2"
	cellspacing="5" bgcolor="#cc9933">
<th colspan="2" align="center">Register</th>

<tr><td colspan="2">Sorry, the following errors were found<br />
in your form: <p><font color=red size=1><i>$fail</i></font></p>
</td></tr>

<form method="post" align="center" action="adduser.php"
	onSubmit="return validate(this)">
     <tr><td>First Name</td><td><input type="text" maxlength="32"
	name="firstName" value="$firstName" /></td>
</tr><tr><td>Last Name</td><td><input type="text" maxlength="32"
	name="lastName" value="$lastName" /></td>
</tr><tr><td>Username</td><td><input type="text" maxlength="16"
	name="username" value="$username" /></td>
</tr><tr><td>Password</td><td><input type="text" maxlength="12"
	name="password" value="$password" /></td>
</tr><tr><td>Email</td><td><input type="text" maxlength="64"
	name="email" value="$email" /></td>
</tr><tr><td colspan="2" align="center">
	<input type="submit" value="Signup" /></td>
</tr></form></table>

<!-- The JavaScript section -->

<script type="text/javascript">
function validateFirstname(field) {
	if (field == "") return "No First Name was entered.\\n"
	return ""
}

function validateLastname(field) {
	if (field == "") return "No Last Name was entered.\\n"
	return ""
}

function validateUsername(field) {
	if (field == "") return "No Username was entered.\\n"
	else if (field.length < 5)
		return "Usernames must be at least 5 characters.\\n"
	else if (/[^a-zA-Z0-9_-]/.test(field))
		return "Only letters, numbers, - and _ in usernames.\\n"
	return ""
}

function validatePassword(field) {
	if (field == "") return "No Password was entered.\\n"
	else if (field.length < 6)
		return "Passwords must be at least 6 characters.\\n"
	else if (! /[a-z]/.test(field) ||
			 ! /[A-Z]/.test(field) ||
		     ! /[0-9]/.test(field))
		return "Passwords require one each of a-z, A-Z and 0-9.\\n"
	return ""
}

function validateEmail(field) {
	if (field == "") return "No Email was entered.\\n"
		else if (!((field.indexOf(".") > 0) &&
			       (field.indexOf("@") > 0)) ||
			       /[^a-zA-Z0-9.@_-]/.test(field))
		return "The Email address is invalid.\\n"
	return ""
}
</script></body></html>
_END;

// Finally, here are the PHP functions

function validate_Firstname($field) {
	if ($field == "") return "No First Name was entered<br />";
	return "";
}

function validate_Lastname($field) {
	if ($field == "") return "No Last Name was entered<br />";
	return "";
}

function validate_Username($field) {
	if ($field == "") return "No Username was entered<br />";
	else if (strlen($field) < 5)
		return "Usernames must be at least 5 characters<br />";
	else if (preg_match("/[^a-zA-Z0-9_-]/", $field))
		return "Only letters, numbers, - and _ in usernames<br />";
	return "";		
}

function validate_Password($field) {
	if ($field == "") return "No Password was entered<br />";
	else if (strlen($field) < 6)
		return "Passwords must be at least 6 characters<br />";
	else if (!preg_match("/[a-z]/", $field) ||
			 !preg_match("/[A-Z]/", $field) ||
			 !preg_match("/[0-9]/", $field))
		return "Passwords require 1 each of a-z, A-Z and 0-9<br />";
	return "";
}

function validate_Email($field) {
	if ($field == "") return "No Email was entered<br />";
		else if (!((strpos($field, ".") > 0) &&
			       (strpos($field, "@") > 0)) ||
					preg_match("/[^a-zA-Z0-9.@_-]/", $field))
		return "The Email address is invalid<br />";
	return "";
}

function fix_string($string) {
	if (get_magic_quotes_gpc()) $string = stripslashes($string);
	return htmlentities ($string);
}
?>
<p align="center"><!-- end .content --></p>
  </div>
  <div class="sidebar2">
    <h4>Backgrounds</h4>
    <p>By nature, the background color on any div will only show for the length of the content. If you'd like a dividing line instead of a color, place a border on the side of the .content div (but only if it will always contain more content).</p>
    <!-- end .sidebar2 --></div>
  <div class="footer">
    <p>This .footer contains the declaration position:relative; to give Internet Explorer 6 hasLayout for the .footer and cause it to clear correctly. If you're not required to support IE6, you may remove it.</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>