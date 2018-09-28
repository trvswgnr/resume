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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Playfair+Display:400,900,900i|Raleway:300,400,700'>
	<link rel="stylesheet" href="dist/style.css">
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
			?>
			<div class="links">
				<h3>Links</h3>
				<div class="row">
					<div class="col-6">
						<h4><i class="fa fa-lg fa-behance" aria-hidden="true"></i></h4>
						<h5><a href="https://www.behance.net/traviswagner">https://www.behance.net/traviswagner</a></h5>
					</div>
					<div class="col-6">
						<h4><i class="fa fa-lg fa-twitter" aria-hidden="true"></i></h4>
						<h5><a href="https://www.twitter.com/trvswgnr">https://www.twitter.com/trvswgnr</a></h5>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<h4><i class="fa fa-lg fa-linkedin" aria-hidden="true"></i></h4>
						<h5><a href="https://www.linkedin.com/in/travisawagner">https://www.linkedin.com/in/travisawagner</a></h5>
					</div>
					<div class="col-6">
						<h4><i class="fa fa-lg fa-facebook" aria-hidden="true"></i></h4>
						<h5><a href="https://www.facebook.com/trvswgnr">https://www.facebook.com/trvswgnr</a></h5>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
