<div> class ="container">
	<?php foreach ($data["articles"] as $article): ?>
		<div class ="container-item">
			<h2>
				<?php echo $articles->title; ?>
			</h2>

			<h3>
				<?php echo "Created on: " . data("F j h:m", strtotime($article->createdAt)); ?>
			</h3>

			<p>
				<?php echo $article->body; ?>
			</p>
		</div>
<?php endforeach; ?>
</div>
