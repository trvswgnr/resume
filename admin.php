<html>
<body>

<?php
include 'db.php';
$admin_user = "travis";
$admin_pass = "password";
$username = "travis";
if ($_POST["username"] === $admin_user && $_POST["password"] === $admin_pass) :

/* things to do if successful login:  */
?>
<p>Welcome, <?php echo ucwords($admin_user); ?>!</p>
<a href="/admin/edit-experience.php">edit experience</a>
<?php
else :
?>
<p>Wrong User / Pass</p>
<?php endif; ?>
</body>
</html>
