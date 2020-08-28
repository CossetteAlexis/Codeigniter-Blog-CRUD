<h1><?= $title ?></h1>
<p class="display-4"><?= $description; ?></p>


<?php if ($this->session->logged_in == true && $this->session->access == 1) { ?>
	<div class="btn-group">
		<a href="edit/<?= $id; ?>" class="btn btn-primary">Edit</a>
		<a type="button" href="delete/<?= $id; ?>" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Delete</a>
	</div>
<?php } ?>
