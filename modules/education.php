<?php
$schools = [
	[
		"name"     => "Full Sail University",
		"degree"   => "B.S. in Music Production",
		"location" => "Winter Park, FL",
		"year"     => "2016",
		"logo"     => "https://myfullsailjourney.files.wordpress.com/2013/04/fullsail1.png"
	],
	[
		"name"     => "Ferris State University",
		"degree"   => "Graphic Design",
		"location" => "Big Rapids, MI",
		"year"     => "2009",
		"logo"     => "https://www.ferris.edu/HTMLS/administration/advance/standards/logos/thumbnails/01-BoxFlameFullColor.png"
	],
	[
		"name"     => "Constantine High School",
		"degree"   => "Diploma",
		"location" => "Constantine, MI",
		"year"     => "2008",
		"logo"     => "http://travisawagner.com/wp-content/uploads/2017/04/ctown-falcons.gif"
	]
];
?>

<div class="education">
	<h3>Education</h3>
	<?php foreach ($schools as $school) : ?>
	<div class="row">
		<div class="rightCol">
			<h4><?php echo $school['name']; ?></h4>
			<h5><?php echo $school['degree']; ?> <span>•</span> <?php echo $school['location']; ?></h5>
		</div>
		<div class="rightCol2">
			<div class="schoolLogo"><img src="<?php echo $school['logo']; ?>" alt="<?php echo $school['name']; ?> Logo" /></div>
		</div>
	</div>
	<?php endforeach; ?>
</div>
<hr />
