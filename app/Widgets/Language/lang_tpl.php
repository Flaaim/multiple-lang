<div class="dropdown d-inline-block">Language
		<a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
			
			<img src="/assets/<?= \App\App::$app->getProperty('language')['code'] ?>.png" alt="">
		</a>
		<ul class="dropdown-menu" id="languages">
			<?php foreach($this->languages as $key => $value): ?>
		<li>
				<?php if($key == \App\App::$app->getProperty('language')['code']) continue; ?>
				
			<button class="dropdown-item" data-langcode="<?= $key; ?>">
				<img src="/assets/<?= $key; ?>.png" alt="">
			<?= $value['title'] ?></button>
				
		</li>
			<?php endforeach; ?>
	</ul>
</div>
<?php 



?>