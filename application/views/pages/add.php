<h1><?= $title ?><h1>
		<?= validation_errors(); ?>
		<div class="row container mt-5">
			<?= form_open('add'); ?>
			<div class="col-md-12">
				<div class="form-group">
					<input class="form-control" type="text" name="title" placeholder="Enter post title" value="<?= set_value('title'); ?>">
					<div>
						<br>
						<div class="form-group">
							<div class="form-group">
								<!-- <label for="my-textarea">Text</label> -->
								<textarea id="my-textarea" class="form-control" name="description" cols="50" placeholder="Enter Post"><?= set_value('description'); ?></textarea>
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</div>
						<div>
							<div>
