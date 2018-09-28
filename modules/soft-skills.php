<?php
$soft_skills = [
	'Research',
	'Communication',
	'Critical Thinking',
	'Leadership',
	'Flexibility'
];
?>
<div class="softskills">
	<h3>Soft Skills</h3>
	<ul class="chips">
	<?php
	foreach ($soft_skills as $skill) {
		echo "<li>$skill</li>\n";
	}
	?>
	</ul>
</div>
<hr/>
