<?php include 'jobs.php'; ?>
<div class="experience">
	<h3>Work Experience</h3>
	<?php foreach ($jobs as $job) : ?>
		<div class="row">
			<div class="leftCol">
				<h4><?php echo $job['year']; ?></h4>
			</div>
			<div class="rightCol">
				<h4><?php echo $job['title']; ?></h4>
				<h5><?php echo $job['company']; ?> <span>•</span> <?php echo $job['location']; ?></h5>
				<p><?php echo $job['description']; ?></p>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<hr/>
