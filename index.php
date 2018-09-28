<?php
// start the database connection
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Travis Wagner | Résumé</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Playfair+Display:400,900,900i|Raleway:300,400,700'>
	<?php $css_version = filemtime('./dist/style.css'); ?>
	<link rel="stylesheet" href="dist/style.css?ver=<?php echo $css_version; ?>">
</head>

<body>
	<div class="container resume">
		<?php include 'modules/sidebar.php'; ?>
		<div class="main">
			<?php
			include 'modules/skills.php';
			include 'modules/experience.php';
			include 'modules/soft-skills.php';
			include 'modules/education.php';
			include 'modules/links.php';
			?>
		</div>
	</div>
</body>

</html>
