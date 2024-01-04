<?php $this->extend('dashboard/partials/layout')?>

<?=$this->section('main')?>
	<div class="row">

		<div class="col-md-8 pt-2">
			<div class="card">
				<div class="card shadow-lg border border-success border-5">
				<div class="card-header bg-success d-flex justify-content-between text-white">
					<h4><span class="text-warning">EDIT: </span><?=$portfolio_data['title']?> (portfolio post)</h4>
				</div>
				<div class="card-body">
					<?php include('partials/forms/edit_portfolio_form.php')?>
				</div>
			</div>
			</div>
		</div>

		<div class="col-md-4 pt-2">
			<div class="card">
				<div class="card-body">
					<h3 class="text-success">Post Summary</h3>
					<div class="mb-3 border-bottom">
						<h4 class="text-secondary">Post Title</h4>
						<h6><?=$portfolio_data['title']?></h6>
					</div>
					<div class="mb-3 border-bottom">
						<h4 class="text-secondary">Created Date</h4>
						<h6><?=$portfolio_data['createdAt']?></h6>
					</div>
					<div class="mb-3 border-bottom">
						<h4 class="text-secondary">Category</h4>
						<h6><?=$portfolio_data['category']?></h6>
					</div>
					<div class="mb-3 border-bottom">
						<h4 class="text-secondary">Snippet</h4>
						<h6><?=$portfolio_data['snippet']?></h6>
					</div>
					<div class="mb-3 border-bottom">
						<h4 class="text-secondary">Post Images</h4>
						<div class="row">
							<div class="col-md-4">
								<img src="<?=base_url('uploads/'.$portfolio_data['shceenshoti'])?>" class="img-fluid">
							</div>
							<div class="col-md-4">
								<img src="<?=base_url('uploads/'.$portfolio_data['shceenshotii'])?>" class="img-fluid">
							</div>
							<div class="col-md-4">
								<img src="<?=base_url('uploads/'.$portfolio_data['shceenshotiii'])?>" class="img-fluid">
							</div>
						</div>
						<div class="alert alert-info">
							<p>You can update images if you want using their respective fields on the left</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
<?=$this->endSection()?>