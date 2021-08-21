<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Resume Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<style>
		body {
			background: #fff;
			color: 000;
			font-size: 18px;
		}
		a {
			text-decoration: none;
			color: #000;
		}
		ul li {
			list-style-type: none;
		}
	</style>
	<script src="jquery-3.6.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.0/dist/sweetalert2.all.min.js"></script>
</head>
<body>

	<div class="container" style="margin-bottom: 3%">
		<div class="row" style="margin-top: 2%">
			<div align="center">
				<img src="./img/logo.png" height="60px" class="mt-2 mb-3">
			</div>
			<div class="col-md-12">

				<h3 class="text-center mb-1 fw-bold">OGUNDOWOLE, RAHEEM OPEYEMI</h3>
				<h6 class="text-center mb-1"><i class="fas fa-map-pin"></i> Apete Ibadan, Oyo State, Nigeria</h6>
				<h6 class="text-center"><i class="fas fa-phone">&nbsp;</i>0903-302-4846 | <i class="fas fa-envelope">&nbsp;</i>
					<a href="mailto: oluwatayoadeyemi@yahoo.com">oluwatayoadeyemi@yahoo.com</a>
					| <i class="fab fa-github-alt">&nbsp;</i>
						<a href="http://github.com/dihowner" target="_blank">Oluwatayo Adeyemi</a> 
				</h6>

				<div style="float: right; margin-top: -15%; margin-right: -5%">
					<img src="mine.jpg" height="180px" class="mt-2 mb-3">
				</div>


				<!--Objective-->
				<h6 class="mt-5"><strong>Objectives</strong></h6>
				<hr class="hr-divider">
				<p>
					A believer of excellence, having the zeal to up-skill, being efficient and productive for the company and develop as well as diversify my professional skill-set.
					To obtain a position as a software engineer in a fast-paced organization where technical skills and 
					creative thinking are useful. A highly motivated software engineer seeking to get a position in a reputed company, 
					where I can use my skills and knowledge to learn new things and grow as a software developer.
				</p>

				<!--Education and Qualification-->
				<h6 class="mt-2"><strong>Educational Qualification With Year</strong></h6>
				<hr class="hr-divider">
				<ul>
					<li style='margin-top: 5px'><i class="fa fa-check-circle"></i>
						National Diploma in Mechatronics <br> <span style='margin-left: 20px'> The Polytechnic, Ibadan - 2015</span>
					</li>
					<li style='margin-top: 5px'><i class="fa fa-check-circle"></i>
						Senior Secondary School Leaving Certificate <br> 
						<span style='margin-left: 20px'> Foremost International Secondary School, Ibadan - 2011</span>
					</li>
					<li style='margin-top: 5px'><i class="fa fa-check-circle"></i>
						Junior Secondary School Leaving Certificate <br> 
						<span style='margin-left: 20px'> Eyinni High Junior School II, Ibadan - 2008</span>
					</li>
					<li style='margin-top: 5px'><i class="fa fa-check-circle"></i>
						Primary School Leaving Certificate <br> <span style='margin-left: 20px'> Aries Nursery and Primary School - 2005</span>
					</li>
				</ul>

				<!--Work Experience-->
				<h6 class="mt-2"><strong>Work Experience</strong></h6>
				<hr class="hr-divider">
				<ul>
					<li style='margin-top: 5px'><i class="fa fa-check-circle"></i>
						Software developer, IT Instructor at Peak Infotech Systems (PT)  <br>
						<span style='margin-left: 20px'> 2015 till date</span>
					</li>
					<li style='margin-top: 5px'><i class="fa fa-check-circle"></i>
						Software developer at 234web Resources  <br>
						<span style='margin-left: 20px'> 2018 till date</span>
					</li>
					<li style='margin-top: 5px'><i class="fa fa-check-circle"></i>
						Software developer, IT Instructor at Valuemax Communications  <br>
						<span style='margin-left: 20px'> 2015 - 2018</span>
					</li>
					<li style='margin-top: 5px'><i class="fa fa-check-circle"></i>
						 IT Instructor at Classic Systems Infotech Ltd (IB)  <br>
						<span style='margin-left: 20px'> 2015</span>
					</li>
				</ul>

				<!--Skills-->
				<h6 class="mt-2"><strong>Skills</strong></h6>
				<hr class="hr-divider">
				<ul>
					<li>PHP</li><progress value="90" max="100">90%</progress>
					<li>HTML</li><progress value="85" max="100">85%</progress>
					<li>SQL</li><progress value="87" max="100">87%</progress>
					<li>Problem Solving</li><progress value="85" max="100">60%</progress>
					<li>Creative Thinking</li><progress value="75" max="100">80%</progress>
				</ul>

				<!--Socials-->
					<div class="col-md-12">
						<div class="row">
							<h3 class="text-center mt-2 mb-3">Need To Get-In Touch ?</h3>
							<div align='center'>I'm actively open for business, gigs, and friendship. What's keeping you waiting ?</div>
							
							<div class="col-md-4">
								<img src="dmaway.png" height="180px" class="mt-2 mb-3">
							</div>

							<div class="col-md-8">
								<form method="post" action="process-mail.php">
									<div class="form-group">

										<div class="row" style='margin-bottom: 20px; margin-top: 20px;'>
											<div class="col-sm-6">
												<input type="text" class="form-control input-lg sender_name" name="sender_name" placeholder="Name">
											</div>
											<div class="col-sm-6">
												<input type="email" class="form-control input-lg sender_email" name="sender_email" placeholder="Email">
											</div>
										</div>

										<div class="row" style='margin-bottom: 20px; margin-top: 20px;'>
											<div class="col-sm-6">
												<input type="text" class="form-control input-lg sender_mobile" name="sender_mobile" placeholder="Valid Mobile Number">
											</div>
											<div class="col-sm-6">
												<input type="email" class="form-control input-lg subject" name="subject" placeholder="Subject">
											</div>
										</div>
										
										<div class="col-sm-12">
											<textarea name="message" class="form-control input-lg message" cols="10" rows="8" placeholder="Message"></textarea>
										</div>
										<div class="col-md-12" style="margin-top:1%">
											<input type='hidden' name='sendEmail'>
											<button type="submit" class="btn btn-warning btn-block sendEmail"><i class="fa fa-paper-plane"></i> Get Connected!</button>
										</div>
									</div>
								</form>
							</div>
							
						</div>
					</div>
				

			</div>
		</div>
	</div>
	
	<?php require "sweetalert.php"; ?>

	<script>
		var load_form = true;
		$(".sendEmail").click(function() {
			if(load_form) {

				var sender_name = $(".sender_name").val();

				var sender_email = $(".sender_email").val();

				var sender_mobile = $(".sender_mobile").val();

				var subject = $(".subject").val();

				var message = $(".message").val();

				if(sender_name == '' || sender_email == '' || sender_mobile == '' || subject == '' || message == '') {				
					swal.fire({
						icon: 'info',
						html: 'Hey <b>Guest</b>, Kindly fill all the input provided to get started',
						title: 'Missing Field',
						allowOutsideClick: false
					})
				}
				else {		
					var form = $(this).parents('form');		
					swal.fire({
						icon: 'question',
						html: 'You are about to get connected with <b>RAHEEM</b>, Send Raheem a message now ?',
						title: 'Message RAHEEM',
						allowOutsideClick: false,
						showCancelButton: true,
						showLoaderOnConfirm: true,
						confirmButtonText: 'Get Conencted',
					}).then((result) => {
						if (result.isConfirmed) { form.submit(); }
					});
				}
			}

			return false;
		});
	</script>

</body>
</html>