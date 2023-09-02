			<!-- header.php -->
            <?php include('header.php'); ?>
		<!--------------->

		<!-- loader -->
		<?php include('loader.php'); ?>
		<!------------>

		<!--- navbar.php ---->
		<?php include('navbar.php'); ?>
		<!------------------->

		<!--- rightsidebar.php --->
		<?php include('rightsidebar.php'); ?>
		<!------------------>

		<!--- leftsidebar.php-->
		<?php include('leftsidebar.php'); ?>
		<!--------------------->

		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>User List</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											User List
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-primary dropdown-toggle"
										href="#"
										role="button"
										data-toggle="dropdown"
									>
										September 2023
									</a>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="#">Export List</a>
										<a class="dropdown-item" href="#">Policies</a>
										<a class="dropdown-item" href="#">View Assets</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Simple Datatable start -->
					<div class="card-box mb-30">
						<div class="pd-20">
							<h4 class="text-blue h4">User List</h4>
							<!-- <p class="mb-0">
								you can find more options
								<a
									class="text-primary"
									href="https://datatables.net/"
									target="_blank"
									>Click Here</a
								>
							</p> -->
						</div>
						<div class="pb-20">
							<table class="data-table table stripe hover nowrap">
								<thead>
									<tr>
										<th class="table-plus">No</th>
										<th class="">Account</th>
										<th class="">Username</th>
										<th class="">Password</th>
										<th class="">Phone</th>
										<th class="">Address</th>
										<th class="">Usertype</th>
										<th class="">Balance</th>
										<th class="">Top Score</th>
										<th class="">Income</th>
										<th class="">Outcome</th>
										<th class="">Status</th>
										<th class="datatable-nosort">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$a =1;
					$sql=mysqli_query($conn,"SELECT * FROM `user` WHERE usertype = 'agent' OR usertype = 'customer'");
					while($dtrecord=mysqli_fetch_assoc($sql))
						{
					?>
									<tr>
										<td class="table-plus"><?php echo $a++; ?></td>
										<td><?php echo $dtrecord['account_number']; ?></td>
										<td><?php echo $dtrecord['username']; ?></td>
										<td><?php echo $dtrecord['password']; ?></td>
										<td><?php echo $dtrecord['phone']; ?></td>
										<td><?php echo $dtrecord['address']; ?></td>
										<td><?php echo $dtrecord['usertype']; ?></td>
										<td><?php echo $dtrecord['balance']; ?></td>
										<td><?php echo $dtrecord['top_score']; ?></td>
										<td><?php echo $dtrecord['income']; ?></td>
										<td><?php echo $dtrecord['outcome']; ?></td>
										<td><?php echo $dtrecord['status']; ?></td>
										
										<td>
											<div class="dropdown">
												<a
													class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
													href="#"
													role="button"
													data-toggle="dropdown"
												>
													<i class="dw dw-more"></i>
												</a>
												<div
													class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"
												>
													<a class="dropdown-item" href="#"
														><i class="dw dw-eye"></i> View</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-edit2"></i> Edit</a
													>
													<a class="dropdown-item" href="#"
														><i class="dw dw-delete-3"></i> Delete</a
													>
												</div>
											</div>
										</td>
									</tr>
									<?php
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
					<!-- Simple Datatable End -->
					
					
				</div>
				
<!--- footer --->
	<?php include('tablefooter.php'); ?>
<!-------------->