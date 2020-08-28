<?php if ($this->session->flashdata('login')) : ?>
	<?= '<p class="alert alert-success">' . $this->session->flashdata('login') . '</p>'; ?>
<?php endif; ?>

<?php if ($this->session->flashdata('post_added')) : ?>
	<?= '<p class="alert alert-success">' . $this->session->flashdata('post_added') . '</p>'; ?>
<?php endif; ?>

<?php if ($this->session->flashdata('post_delete')) : ?>
	<?= '<p class="alert alert-success">' . $this->session->flashdata('post_delete') . '</p>'; ?>
<?php endif; ?>

<h1><?= $title; ?>
</h1>

<ul class="container">
	<?php foreach ($posts as $row) { ?>
		<a href="<?= $row['slug'] ?>" class="list-group-item list-group-item-action"><?= $row['title']; ?></a>
	<?php } ?>
</ul>
