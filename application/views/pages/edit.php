<?php if ($this->session->flashdata('post_updated')) : ?>
	<?= '<p class="alert alert-success">' . $this->session->flashdata('post_updated') . '</p>'; ?>
<?php endif; ?>

<h1><?= $title ?><h1>
		<?= validation_errors(); ?>

		<div class="row container mt-5">
			<?= form_open('edit/' . $id); ?>
			<div class="col-md-12">
				<div class="form-group">
					<input class="form-control" type="text" name="title" placeholder="Enter post title" value="<?= $title; ?>">
					<div>
						<br>
						<div class="form-group">
							<div class="form-group">
								<!-- <label for="my-textarea">Text</label> -->
								<textarea id="my-textarea" class="form-control" name="description" cols="50" placeholder="Enter Post"><?= $description; ?></textarea>
							</div>
							<input type="hidden" name="id" value="<?= $id; ?>">
							<button type="submit" name="submit" class="btn btn-primary">Update</button>
						</div>
						<div>
							<div>
