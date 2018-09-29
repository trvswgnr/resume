<?php
$jobs = $conn->query("SELECT * FROM experience");
$jobs = $jobs->fetchAll();
?>
<div class="experience">
	<h3>Experience</h3>
	<?php
	$i = 0;
	foreach ($jobs as $job) :
	$i++;
	if ($i > 3) { break; }
	?>
		<div class="row">
			<div class="leftCol">
				<h4><?php echo $job['year']; ?></h4>
			</div>
			<div class="rightCol">
				<h4><?php echo $job['position']; ?></h4>
				<h5><?php echo $job['company']; ?> <span>•</span> <?php echo $job['location']; ?></h5>
				<p><?php echo $job['description']; ?></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<hr/>
