<?php
$skills = $conn->query("SELECT * FROM skills");
$skills = $skills->fetchAll();
?>
<div class="skills">
	<div class="row">
		<h3>Skills</h3>
		<div class="skills-list">
		<?php
		foreach ($skills as $skill) {
			echo "<div class='skill'>$skill[0]</div>";
		}
		?>
		</div>
	</div>
</div>
<hr/>
