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

		<?php
		

	if(isset($_POST['create']))
	{
		$account_no=$_POST['account_no'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$usertype=$_POST['usertype'];
		$phone=$_POST['phone'];
		$address=$_POST['address'];
		$balance=$_POST['balance'];
		$status=$_POST['status'];

		// var_dump($account_no);
		// var_dump($username);
		// var_dump($password);
		// var_dump($usertype);
		// var_dump($phone);
		// var_dump($address);
		// var_dump($balance);
		// var_dump($status);
		// $sql = "INSERT INTO `user`(account_number,usertype,username,password,phone,address,balance,top_score,income,outcome,status) Values('$account_no','$usertype','$username','$password','$phone','$address','$balance',0,0,0,'$status')";
		// var_dump($sql);
		// exit();

		$sql=mysqli_query($conn,"SELECT * FROM `user` WHERE username='$username'");
		$dtrow1=mysqli_num_rows($sql);

		if($dtrow1>0)
		{
			echo "<script>alert('This User is already Saved!!');
			window.location.href='index.php?page=user';
			</script>";
		}

		else
		{

			$inspd=mysqli_query($conn,"Insert into `user`(account_number,usertype,username,password,phone,address,balance,status) Values('$account_no','$usertype','$username','$password','$phone','$address','$balance','$status')");
			
			

			
			if($inspd)
			{
				echo "<script>alert('Successfully Saved!');
				window.location.href='index.php?page=userlist';
				</script>";
			}
		}
	}
		?>


		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="pd-ltr-20 xs-pd-20-10">
				<div class="min-height-200px">
					<div class="page-header">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="title">
									<h4>Form</h4>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.html">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											User
										</li>
									</ol>
								</nav>
							</div>
							<div class="col-md-6 col-sm-12 text-right">
								<div class="dropdown">
									<a
										class="btn btn-secondary dropdown-toggle"
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
					<!-- <div class="pd-20 card-box mb-30">

					</div> -->
					<!-- Default Basic Forms Start -->
					<!-- <div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="">
								<a href="#create" class="btn btn-primary btn-sm mb-3">Create User</a>
							</div>
						<table class="table table-striped text-center">
							<thead>
								<th>No</th>
								<th>Account</th>
								<th>Name</th>
								<th>Password</th>
								<th>User Type</th>
								<th>Phone</th>
								<th>Address</th>
								<th>Balance</th>
								<th>Top Score</th>
								<th>Income</th>
								<th>Outcome</th>
								<th>Status</th>
								<th>Action</th>
							</thead>
							<tbody>
								
								<tr>
									<td>1</td>
									<td>1001</td>
									<td>Aung</td>
									<td>aaaaaa</td>
									<td>Customer</td>
									<td>09980668798</td>
									<td>Yangon</td>
									<td>100,000</td>
									<td>500</td>
									<td>200,000</td>
									<td>100,000</td>
									<td>pending</td>
									<td>
										<a href="edit.php?id=<?=$row['id'];?> " class="btn btn-primary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
										<form action="index.php" method="get" class="d-inline">
										<button value="<?php echo $post['id']; ?>" class="deleteProduct btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
										</form>
									  </td>
								</tr>
							</tbody>
						</table>
						</div>
					</div> -->
					<div class="pd-20 card-box mb-30">
						
						<div class="clearfix">
							<div class="pull-left" id="create">
								<h4 class="text-blue h4">User Form</h4>
								<!-- <p class="mb-30">All bootstrap element classies</p> -->
							</div>
							<!-- <div class="pull-right">
								<a
									href="#basic-form1"
									class="btn btn-primary btn-sm scroll-click"
									rel="content-y"
									data-toggle="collapse"
									role="button"
									><i class="fa fa-code"></i> Source Code</a
								>
							</div> -->
						</div>
						<form method='POST'>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Name</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										type="text"
										placeholder="Johnny Brown"
										name="username"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label"
									>Password</label
								>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										value=""
										type="password"
										name="password"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Account Number</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										type="text"
										placeholder="Account No"
										name="account_no"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">User Type</label>
								<div class="col-sm-12 col-md-10">
									<select class="custom-select col-12" name="usertype">
										<option selected="">Choose...</option>
										<option value="customer">Customer</option>
										<option value="agent">Agent</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Phone</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										type="number"
										placeholder="Phone"
										name="phone"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Address</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										type="text"
										placeholder="Address"
										name="address"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Balance</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										name="balance"
										placeholder="Balance"
										type="number"
									/>
								</div>
							</div>
							<!-- <div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Top Score</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										value=""
										type="text"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Income</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										value=""
										type="text"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label"
									>Outcome</label
								>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										value=""
										type="text"
									/>
								</div>
							</div> -->
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Status</label>
								<div class="col-sm-12 col-md-10">
									<select class="custom-select col-12" name="status">
										<option selected="">Choose...</option>
										<option value="pending">Pending</option>
										<option value="confirm">Confirm</option>
									</select>
								</div>
							</div>
							<button type="submit" class="btn btn-success" name="create">Save</button>
							<!-- <a href="">Save</a> -->
							<!-- <div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Number</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" value="100" type="number" />
								</div>
							</div> -->
							<!-- <div class="form-group row">
								<label
									for="example-datetime-local-input"
									class="col-sm-12 col-md-2 col-form-label"
									>Date and time</label
								>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control datetimepicker"
										placeholder="Choose Date anf time"
										type="text"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Date</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control date-picker"
										placeholder="Select Date"
										type="text"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Month</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control month-picker"
										placeholder="Select Month"
										type="text"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Time</label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control time-picker"
										placeholder="Select time"
										type="text"
									/>
								</div>
							</div> -->
							
							<!-- <div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Color</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" value="#563d7c" type="color" />
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label"
									>Input Range</label
								>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" value="50" type="range" />
								</div>
							</div> -->
						</form>
						<div class="collapse collapse-box" id="basic-form1">
							<div class="code-box">
								<div class="clearfix">
									<a
										href="javascript:;"
										class="btn btn-primary btn-sm code-copy pull-left"
										data-clipboard-target="#copy-pre"
										><i class="fa fa-clipboard"></i> Copy Code</a
									>
									<a
										href="#basic-form1"
										class="btn btn-primary btn-sm pull-right"
										rel="content-y"
										data-toggle="collapse"
										role="button"
										><i class="fa fa-eye-slash"></i> Hide Code</a
									>
								</div>
								<pre><code class="xml copy-pre" id="copy-pre">
<form>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Text</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" type="text" placeholder="Johnny Brown">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Search</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" placeholder="Search Here" type="search">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Email</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="bootstrap@example.com" type="email">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">URL</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="https://getbootstrap.com" type="url">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Telephone</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="1-(111)-111-1111" type="tel">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Password</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="password" type="password">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Number</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="100" type="number">
		</div>
	</div>
	<div class="form-group row">
		<label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Date and time</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control datetimepicker" placeholder="Choose Date anf time" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Date</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control date-picker" placeholder="Select Date" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Month</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control month-picker" placeholder="Select Month" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Time</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control time-picker" placeholder="Select time" type="text">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Select</label>
		<div class="col-sm-12 col-md-10">
			<select class="custom-select col-12">
				<option selected="">Choose...</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Color</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="#563d7c" type="color">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-sm-12 col-md-2 col-form-label">Input Range</label>
		<div class="col-sm-12 col-md-10">
			<input class="form-control" value="50" type="range">
		</div>
	</div>
</form>
							</code></pre>
							</div>
						</div>
					</div>
					<!-- Default Basic Forms End -->
				

				</div>
				
			</div>
		</div>
		<!-- welcome modal start -->
		<!--- footer --->
		<?php include('footer.php'); ?>
		<!-------------->