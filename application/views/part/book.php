<div id="booking" class="section" style="background-image :url('<?php echo base_url()?>style/img/bookbackground.png')">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Book Your Queue</h1>
						</div>
						<form action="<?base_url('Book/tambah_aksi')?>" method="POST">
							<div class="form-group">
								<span class="form-label">Name</span>
								<input class="form-control" type="text" name="name" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<span class="form-label">Email</span>
								<input class="form-control" type="email" name="email" placeholder="Enter your email">
							</div>
							<div class="form-group">
									<span class="form-label">Problem</span>
									<select class="form-control" name="prob_name">
										<option>None</option>
										<option>New</option>
										<option>Re-New</option>
										<option>Lost</option>
									</select>
									<span class="select-arrow"></span>
								</div>
							<div class="form-group">
								<span class="form-label">Pick Date</span>
								<input class="form-control" name="date" type="date" required>
							</div>
			
							<div class="form-btn">
								<a class="submit-btn" href="<?php echo base_url('/thankyou')?>"></a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>