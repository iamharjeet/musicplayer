// Created by Harjeet 2018

<?php
include("includes/includedFiles.php");

$isGuest=false;
if($userLoggedIn->getUsername()=="guest"){
	$isGuest=true;
}

?>

<div class="userDetails">

	<div class="container borderBottom">
		<h2>EMAIL</h2>
		<input type="text" class="email" name="email" placeholder="Email address..." value="<?php echo $userLoggedIn->getEmail(); ?>" <?php if($GLOBALS['isGuest']) echo "disabled" ?>>
		<span class="message"><?php if($GLOBALS['isGuest']) echo "Can not update details of a guest account" ?></span>
		<button class="button" onclick="updateEmail('email', '<?php echo $userLoggedIn->getEmail(); ?>')" <?php if($GLOBALS['isGuest']) echo "disabled" ?>>SAVE</button>
	</div>

	<div class="container">
		<h2>PASSWORD</h2>
		<input type="password" class="oldPassword" name="oldPassword" placeholder="Current password" <?php if($GLOBALS['isGuest']) echo "disabled" ?> >
		<input type="password" class="newPassword1" name="newPassword1" placeholder="New password" <?php if($GLOBALS['isGuest']) echo "disabled" ?> >
		<input type="password" class="newPassword2" name="newPassword2" placeholder="Confirm password" <?php if($GLOBALS['isGuest']) echo "disabled" ?> >
		<span class="message"></span>
		<button class="button" onclick="updatePassword('oldPassword', 'newPassword1', 'newPassword2')" <?php if($GLOBALS['isGuest']) echo "disabled" ?>>SAVE</button>
	</div>

</div>