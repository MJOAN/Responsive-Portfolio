<?php
$output_form = 1;

	if (isset($_POST['submit'])) { // user data posted
	$fname = trim($_POST['fname']);
	$lname = trim($_POST['lname']);
	$phone = trim($_POST['phone']);
	$citystate = trim($_POST['citystate']);
	$email = trim($_POST['email']);
	$note = trim($_POST['note']);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
    		<meta charset="UTF-8">
    		<meta name="description" content="developer mariam joan los angeles web development mjoan">
    		<meta name="keywords" content="Mariam Joan, Web Developer, Los Angeles">
  			<link rel="stylesheet" type="text/css" href="./style.css">
	</head>

<body>

	<div id="header">
		<span><a href="index.html">
			<h1>Mariam Joan</h1></a>
		</span>

	<div id="right-header">	
		<span><a href="about.html">
			<p>About</p></a>
		</span>
		<span><a href="index.html">
			<p>Portfolio</p></a>
		</span>
		<span><a href="contact.html">
			<p>Contact</p></a>
		</span>
	</div>	
	
	<div id="sidebar">
		<h2>Connect with Me</h2>
		<a href="https://github.com/MJOAN"><img src="github-icon.png"></a>
		<a href="https://linkedin.com/in/mariamjoan"><img src="linkedin-icon.png"></a>
		<a href="https://stackoverflow.com"><img src="stackoverflow-icon.png"></a>
	</div>

	<div id="container">
		<h1>Contact</h1>
			<form action="./process-page.html" method="post" enctype="multipart/form-data" name="contact-form">

		<table>
			<tr>
				<td class="label_col">First Name:</td>
				<td class="form_col"><input name="fname" type="text" value="" size="40" maxlength="15" /></td>
			</tr>
			<tr>
				<td class="label_col">Last Name:</td>
				<td class="form_col"><input name="lname" type="text" value="" size="40" maxlength="15" /></td>
			</tr>
			<tr>
				<td class="label_col">City/State:</td>
				<td class="form_col"><input name="citystate" type="text" value="" size="40" maxlength="15" /></td>
			</tr>
			<tr>
				<td class="label_col">Email:</td>
				<td class="form_col"><input name="email" type="text" value="" size="40" maxlength="15" /></td>
			</tr>
			<tr>
				<td class="label_col">What type of work do you do?</td>
				<td class="form_col">
				<select name="characters"</td>
					<option value="developer">Developer</option>
					<option value="owner">Business Owner</option>
					<option value="sales">Sales</option>
					<option value="contractor">Contractor</option>
					</select>
			</tr>
			<tr>
				<td class="label_col">Your Note:</td>
				<td class="form_text"><textarea name="note" cols="35" rows="10" type="text">Type your note here...</textarea></td>
			</tr>

			<tr id="center">
			<td colspan="1">
			<input name="Submit" type="Submit" value="Submit"> <input name="Reset" type="Reset" value="Reset">
			</td>		
			</tr>

		</table>
		</form>

<?php
  if ($output_form) {
  } else {    
?>
  
  <h2>Thank you for sending me a note, I will be in contact with you soon.</h2>

<?php
    }   // end if 
?>
  
    <div id="footer">
      <p>&#169; Copyright, Mariam Joan, 2018</p>
    </div>


	</body> 
 </html>

<?php
    mysqli_close($dbc);
    require_once "./footer.inc.php";
    exit();
?>