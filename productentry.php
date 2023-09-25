		<!-- header.php -->
		<?php include('header.php'); ?>
		<!--------------->

		<?php
		

	if($_REQUEST['page']=='productentry' && isset($_POST['btnsave']))
	{
		$productname=$_POST['productname'];
		$title=$_POST['title'];
		$description=$_POST['desc'];
		$price=$_POST['price'];

		$image = $_FILES['image']['name'];
		$tmp_img = $_FILES['image']['tmp_name'];
		$target_dir = "src/images/products/";
		$target_file = $target_dir . basename($_FILES['image']['name']);
		move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
		

		$selectpd=mysqli_query($conn,"SELECT * FROM products WHERE name='$productname'");
		$dtrow1=mysqli_num_rows($selectpd);

		if($dtrow1>0)
		{
			echo "<script>alert('This Product is already Saved!!');
			window.location.href='index.php?page=productentry';
			</script>";
		}

		else
		{

			$inspd=mysqli_query($conn,"Insert into products(title,name,image,description,price) Values('$title','$productname','$image','$description','$price')");
			
			

			
			if($inspd)
			{
				echo "<script>alert('Successfully Saved!');
				window.location.href='index.php?page=productlist';
				</script>";
			}
		}
	}
	// end product //
		?>

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

		<style>
			#preview{
				width: 180px;
				height: 180px;
			}
		</style>

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
											Product Entry
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
					<!-- Default Basic Forms Start -->
					<div class="pd-20 card-box mb-30">
						<div class="clearfix">
							<div class="pull-left">
								<h4 class="text-blue h4">Product Entry Forms</h4>
								<!-- <p class="mb-30">Enter Product Detail for Customer</p> -->
								<img src="" id="preview" class="rounded-circle" alt="Preview">
							</div>
							
						</div>
						<form method="post" id="productForm" enctype="multipart/form-data">
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Product Title <span style="color: red;"> *</span></label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										type="text"
										placeholder=""
										name="title"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Product Name <span style="color: red;"> *</span></label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										type="text"
										placeholder=""
										name="productname"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Product Photo <span style="color: red;"> *</span></label>
								<div class="col-sm-12 col-md-10">
									<input type="file" id="p_image" name="image" class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Description <span style="color: red;"> *</span></label>
								<div class="col-sm-12 col-md-10">
									<textarea name="desc" class="form-control"></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Price <span style="color: red;"> *</span></label>
								<div class="col-sm-12 col-md-10">
									<input
										class="form-control"
										type="number" name="price"
									/>
								</div>
							</div>
							
							<div class="form-group row ml-auto">
								<!-- <a
									href="#basic-form1"
									class="btn btn-primary btn-sm scroll-click"
									rel="content-y"
									data-toggle="collapse"
									role="button"
									><i class="fa fa-code"></i> Save </a
								> -->
								<button type="submit" class="btn btn-primary btn-sm" name="btnsave">Save</button>
							</div>
						</form>
						<!-- <div class="collapse collapse-box" id="basic-form1">
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
								</div> -->
							<!-- 	<pre><code class="xml copy-pre" id="copy-pre">
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
							</code></pre> -->
							<!-- </div>
						</div> -->
					</div>
					<!-- Default Basic Forms End -->

					<!-- Input Validation End -->
				</div>
				
			</div>
		</div>
		<!-- welcome modal start -->



		<!--- footer --->
		<?php include('footer.php'); ?>
		<!-------------->