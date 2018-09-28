<?php
$links = [
	"behance" => "https://www.behance.net/traviswagner",
	"twitter" => "https://www.twitter.com/trvswgnr",
	"linkedin" => "https://www.linkedin.com/in/travisawagner",
	"facebook" => "https://www.facebook.com/trvswgnr"
];
?>

<div class="links">
	<h3>Links</h3>
	<div class="links-list">
	<?php foreach ($links as $name => $url) : ?>
		<div class="link-item">
			<h4><i class="fa fa-lg fa-<?php echo $name; ?>" aria-hidden="true"></i></h4>
			<h5><a href="<?php echo $url; ?>"><?php echo $url; ?></a></h5>
		</div>
	<?php endforeach; ?>
	</div>
</div>
