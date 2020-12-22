<?php
	if ($conn = mysqli_connect('localhost','root','password','e-learning_db')) {
		$query = "SELECT * FROM notice ORDER BY id DESC;";
		$result = mysqli_query($conn, $query);
		$notice = [];
		while ($row = mysqli_fetch_assoc($result))
		 {
			$notice[] = $row['notice'];
		}
		// echo "<pre>";
		// print_r($notice);exit;
		mysqli_close($conn);
		// header('refresh:1, location=notice.php');
	}
	else
	{
		echo "could not connect.";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>new</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="animate.css">
	<style>
	body
	{
		overflow-x: hidden;
	}
	.outerMain
	{
		position: fixed;
		background-color: white;
		z-index: 9;
		top: 0;
		transition: 0.9s;

	}
	.fa fa-close
	{

	}
	.logo > img
	{
		width: 55%;
		margin-top: 20px;
	}
	.menu > ul
	{
		list-style-type: none;
		text-align: right;
		font-size: 20px;

	}
	.menu a
	{
		color: #ce0767;
		text-decoration: none;
		overflow: hidden;
		transition: ease 0.7s all;
		position: relative;

	}

	.menu li
	{
		display: inline-block;
		padding: 25px 25px;
	}
	.menu li a:before
	{
		content: '';
		width: 20px;
		position: absolute;
		border-bottom: 3px solid #ce0767;
		bottom: -11px;
		right: -875px;
		transition: ease 0.7s all;
		overflow: hidden;
	}
	.menu li a:hover:before
	{
		right: 0;
	}
	.registration
	{
		overflow: auto;
		position: fixed;
		right: -100%;
		background: white;
		z-index: 9;
		top: 23%;
		padding: 15px;
		border-radius: 10px;
		transition: all 0.9s ease;
		width: 35%
	}
	.registration i
	{
		color: blue;
	}
	.showForm
	{
		right: 0;
		height: 500px;
		overflow: auto;
		transition: all 0.9s ease;
	}
	.form_labelled
	{
		transform: translate(12px,33px);
		color: gray;
		font-weight: normal;
		transition: all 0.3s ease;
		pointer-events: none;
	}
	label
	{
		transition: all 0.3s ease;
	}

	.banner
	{
		background-image: url(images/bg2.jpg);
		height: 90vh;
		position: relative;
		background-repeat: no-repeat;
		background-attachment: fixed;
		background-size: cover;
		padding: 0px;
		margin-top: -12px;
	}
	.banner > div
	{
		background-color: rgba(0,0,0,0.7);
		position: absolute;
		height: 100%;
		width: 100%;
	}
	.banner > div > p:first-child
	{
		font-size: 60px;
		text-align: center;
		color: white;
		margin-top: 150px;
	}
	.banner > div > p:last-child
	{
		color: white;
		text-align: center;
		font-size: 22px;
		letter-spacing: 1.5px;

	}
	.banner span
	{
		color: #ce0767
	}
	.notice > div:nth-child(1)
	{
		background-color:#323232;
		box-shadow: 1px 29px 25px -23px #181515;
		border-radius: 10px;
		border:1px solid #0f0f0f;
		height: 317px; 
		margin-top: 80px;
		/*transition: all 0.5s cubic-bezier(0.85, 0.62, 0.75, 0.9);*/
		overflow: hidden;
	}
	.notice:hover
	{
		cursor: pointer;
		box-shadow: none;
		position: relative;
		/*transition: all 0.5s cubic-bezier(0.85, 0.62, 0.75, 0.9);*/
		/*transform: scale(1.1);*/
	}
	.notice h2
	{
		color: #ce0767;
	}
	.tt a
	{
		text-decoration: none;
		color:white;
	}
	.login > div:nth-child(1)
	{
		border:1px solid #0f0f0f;
		box-shadow: 1px 29px 25px -23px #181515;
		border-radius: 10px;
		margin-top: 80px;
		height: 317px;
		background-color:#323232;
		/*transition: all 0.5s cubic-bezier(0.85, 0.62, 0.75, 0.9);*/
	}
	.login:hover
	{
		position: relative;
		cursor: pointer;
		box-shadow: none;
		/*transition: all 0.5s cubic-bezier(0.85, 0.62, 0.75, 0.9);*/
		/*transform: scale(1.1);*/
	}
	.contact_img
	{
		background-image: url(images/hey.jpg);
		height: 700px;
		background-repeat: no-repeat;
		position: relative;
		background-size: cover;
		background-attachment: fixed;
		padding: 0px
	}
	.contact_img >  div
	{
		background-color: rgba(0,0,0,0.4);
		position: absolute;
		height: 100%;
		width: 100%;
	}
	.contact_img > div > p:first-child 
	{
		font-weight: bold;
		font-size: 45px;
		text-align: center;
		color: #ce0767;
		margin-top: 38px;
	}
	.contact_img > div > p:first-child:before
	{
		content: '';
		width: 60px;
		border-bottom: 3px solid;
		position: absolute;
		top: 110px;
		left: 650px;
	}
	.map > p
	{
		font-size: 25px;
		color: white;
		margin-top: 200px;
	}
	.map > iframe
	{
		width: 400px;
		height: 400px;
		margin-top: 00px;

	}
	.message > p
	{
		font-size: 25px;
		color: white;
		margin-top: 200px;
		margin-left: 20px;
	}
	.chat > p:first-child
	{
		font-size: 25px;
		color: white;
		margin-top: 200px;

	}

	.aboutImg  img
	{
		border:1px solid;
		border-radius: 50%;
		height: 327px;
		width: 327px;
		margin-top: 40px;
	}
	.aboutSection > p
	{
		text-align: center;
		text-transform: uppercase;
		font-size: 45px;
		font-weight: bold;
		margin-top: 30px;
		color: #ce0767;
	}
	.aboutSection > p:before
	{
		content: '';
		width: 60px;
		border-bottom: 3px solid;
		position: absolute;
		top: 100px;
		left: 652px;
	}
	.aboutContent
	{
		font-size: 18px;
		margin-top: 100px;
	}
	.box
	{
		border: 1px solid;
		height: 400px;
		margin-top: 30px;
		background-color: #323232;
		padding: 10px;
	}
	.team
	{
		margin-bottom: 70px;
	}
	.obei > img
	{
		border: 1px solid;
		height: 180px;
		width: 180px;
		border-radius: 50%;
		margin-top: 30px;
		margin-left: 48px;
		background-color: #323232;
	}
	.mustafa > img
	{
		border: 1px solid;
		height: 180px;
		width: 180px;
		border-radius: 50%;
		margin-top: 30px;
		margin-left: 48px;
		background-color: #323232;
	}
	.farhan > img
	{
		border: 1px solid;
		height: 180px;
		width: 180px;
		border-radius: 50%;
		margin-top: 30px;
		margin-left: 48px;
		background-color: #323232;
	}
	.atif > img
	{
		background-color: #323232;
		border: 1px solid;
		height: 180px;
		width: 180px;
		border-radius: 50%;
		margin-top: 30px;
		margin-left: 48px;
	}
	.team p
	{
		text-align: center;
		font-size: 45px;
		margin-top: 60px;
		font-weight: bold;
		color: #ce0767;

	}
	.team >  p:before
	{
		content: '';
		width: 60px;
		border-bottom: 3px solid;
		position: absolute;
		top: 130px;
		left: 641px;

	}
	.outerMain.black
	{
		background-color: rgba(0,0,0,0.5);
		height: 60px;
		/*padding: 10px 50px;*/
		transition: 0.9s;
	}
	.outerMain.black .logo img
	{
		height: 40px;
		transition: 0.9s;
	}
	.outerMain.black .menu li
	{
		line-height: 5px;
		transition: 0.9px;
	}
	.outerMain.black .menu a
	{
		color: white;
	}
	.branch > label
	{
		margin-bottom: 15px; 
		margin-left: -14px;

	}
	.branch > select
	{
		margin-bottom: 15px;
		margin-left: -14px;
		width: 425px;

	}
	.year > label
	{
		margin-bottom: 15px; 
		margin-left: -14px;

	}
	.year > select
	{
		margin-bottom: 15px;
		margin-left: -14px;
		width: 425px;

	}

	@media only screen and (max-width: 425px)
	{
		body
		{
			overflow-x: hidden;
		}
		.banner
		{
			height:55vh;
		}
		.banner > div > p:first-child
		{
			margin-top: 130px;
			font-size: 25px;
		}
		.banner  span
		{
			font-size: 45px;
			display: block;
		}
		.banner > div > p:last-child
		{
			font-size: 15px;
		}
		.outerMain
		{
			left: -100%;
			transition: all 0.7s ease;

		}
		.menu li
		{
			display: block;
			text-align: left;
			padding-bottom: 2px;

		}
		.menu ul
		{
			padding: 0;
		}
		.registerNow
		{
			display: block;
			text-align: left;
			margin-left: 25px;
			margin-top: 20px;
		}
		.showMenu
		{
			left: 0;
			transition: all 0.7s ease;
		}
		.logo
		{
			width: 215px;
		}
		.aboutSection > p:before
		{
			content: '';
			width: 60px;
			border-bottom: 3px solid;
			position: absolute;
			top: 100px;
			left: 180px;
		}
		.team >  p:before
		{
			content: '';
			width: 60px;
			border-bottom: 3px solid;
			position: absolute;
			top: 130px;
			left: 180px;

		}
		.contact_img > div > p:first-child:before
		{
			content: '';
			width: 60px;
			border-bottom: 3px solid;
			position: absolute;
			top: 110px;
			left: 180px;
		}
		.contact_img 
		{
			height: 1800px;
		}
		.contact_img iframe
		{
			height: 400px;
			width: 350px;
		}
		.chat > p:first-child
		{
			margin-top: 80px;
		}
		.message > p
		{
			margin-top: 80px;

		}
		.obei > img
		{
			margin-left: 80px;

		}
		.farhan > img
		{
			margin-left: 80px;
		}
		.mustafa > img
		{
			margin-left: 80px;

		}
		.atif > img
		{
			margin-left: 80px;
		}

	}
</style>
<script type="text/javascript">
	function myfun()
	{
		var x=document.forms["myform"]["fname"].value;
		var y=document.forms["myform"]["pass"].value;
		if(x=="obei")
		{
			if(y=="obei123")
			{
				alert("Both Correct");
				window.open("exam.html")
				return true;
			}		
		}
		else
		{
			alert("Username or Password incorrect, Please try again");
			return false;
		}

	}
	function validate()
	{
		var password = document.getElementById("Password").value;
		var confirmpassword = document.getElementById("ConfirmPassword").value;
		var reg_contact = document.getElementById("number").value;
		//alert('call');
		// var phone = document.forms["reg_form"]["reg_contact"].value;
		// var phoneNum = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/; 
		// if(phone.value.match(phoneNum))
		// {
		// 	return true;

		// }
		// else
		// {
		// 	document.getElementById("number").className = document.getElementById("number").className + " error";

		// }
		// if(reg_contact.value == "") {
		// 	window.alert("Error: Cell number must not be null.");
		// 	reg_contact.focus();
		// 	return false;
		// }
		// if(reg_contact.length != 10) {
		// 	window.alert("Phone number must be 10 digits.");
		// 	reg_contact.focus();
		// 	return false;
		// }
		if (password != confirmpassword)
		{
			alert("Password is wrong");
			return false;

		}
		else
		{
			return true;
		}


	}

</script>
<!-- to initialize wow animations -->
<script src="WOW-master/dist/wow.min.js"></script>
<script>
	new WOW().init();
</script>
</head>
<body id="home">
	<div class="col-xs-12 outerMain">
		<i class="fa fa-arrow-left visible-xs" style="display: block;"></i>
		<i class="fa fa-bars visible-xs" style="position: fixed;z-index: 9;cursor: pointer; color: white;left: 25px;top: 30px;font-size: 25px;"></i>
		<div class="logo col-md-3 col-xs-3">
			<img src="images/logo1.png">
		</div>
		<div class="menu col-md-9 col-xs-9">
			<ul>
				<li><a class="scroll" href="#home">Home</a></li>
				<li><a class="scroll" href="#about">About</a></li>
				<li><a class="scroll" href="#team">Team</a></li>
				<li><a class="scroll" href="#contact">Contact</a></li>
				<button class="btn btn-warning registerNow">Register</button>
			</ul>	
		</div>
	</div>
	<!-- registration form starts here -->
	<div class="registration">
		<i class="fa fa-close" style="cursor:pointer;color: #f70707;;background-color: white;padding: 10px;border-radius: 50%;transform: translate(-16px,-16px);
		"></i>
		<form name="reg_form" action="register.php" method="post">
			<div class="form-group">
				<label class="form_labelled">Enter name</label>
				<input type="text" class="form-control myinput" id="name" name="reg_name">
			</div>
			<div class="form-group">
				<label class="form_labelled" for="email">Contact</label>
				<input type="number" class="form-control myinput" id="number" name="reg_contact">
			</div>
			<div class="form-group">
				<label class="form_labelled" for="email">Email address</label>
				<input type="email" class="form-control myinput" id="email" name="reg_email">
			</div>
			<div class="col-xs-12 form-group branch">
				<label>Branch:</label>
				<select name="branch" class="form-control">
					<option value="0">--Select--</option>
					<option value="it">Information Technology</option>
					<option value="computer">Computer</option>
					<option value="mechanical">Mechanical</option>
					<option value="electronics">Electronics</option>
				</select>		
			</div>
			<div class="col-xs-12 year">
				<label>Year:</label>
				<select name="year" class="form-control">
					<option value="0">--Select--</option>
					<option value="fe">First Year</option>
					<option value="se">Second Year</option>
					<option value="te">Third Year</option>
					<option value="be">Fourth Year</option>
				</select>

			</div>	
			<div class="form-group">
				<label class="form_labelled">Password</label>
				<input type="Password" class="form-control myinput" id="Password" name="reg_password">
			</div>
			<div class="form-group">
				<label class="form_labelled">Confirm Password</label>
				<input type="Password" class="form-control myinput" id="ConfirmPassword" name="reg_confirm_password">
			</div>
			<div class="form-group">
				<label for="comment" style="margin-right: 5px;">Gender</label>
				<input type="radio" name="Gender"value="Male"style="margin-right: 5px;"><i class="fa fa-male" style="margin-right: 15px;"></i>
				<input type="radio" name="Gender"value="Female"style="margin-right: 5px;"><i class="fa fa-female"style="margin-right: 5px;"></i>
			</div>
			<button class="btn btn-primary" type="Submit" onclick="return validate()" style="width: 100%">Submit</button>
		</form>		
	</div>
	<!-- registration form ends here --> 
	

	<div class="banner col-xs-12">
		<div>
			<p class="wow zoomIn">Welcome To <span>E-Learning!</span></p>	
			<p class="wow bounceInUp" data-wow-delay="1s">UNDERSTANDING TECHNOLOGY</p>
		</div>
	</div>
	<div id="about" class="col-xs-12 aboutSection"><p>About Us</p>
		<div class="col-md-6 col-xs-12 aboutImg">
			<center><img src="images/aboutImg.jpg" class="wow flipInX"></center>
		</div>
		<div class="col-md-6 col-xs-12 aboutContent">
			<p>
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</p>
		</div>
	</div>
	<div class="middle col-xs-12">
		<div class="notice col-md-6 col-xs-12 wow slideInLeft">
			<div class="col-xs-12">
				<center><h2><marquee behavior=alternate>Lastest Notice</marquee></h2></center>
				<p>
					<center class="tt">
						<a href="#0">S.E Time Table</a></br>
						<a href="TE.html" target="_blank">T.E Time Table</a></br>
						<a href="#0">B.E Time Table</a>
					</center>
				</p>

				<h3><center style="color: #ce0767">Notice</center></h3>

				<marquee direction="up">
					<?php
						foreach ($notice as $key => $value) {
							echo '<p>
									<center style="text-align: justify;padding: 40px;color:white">
										'.$value.'	
									</center> 
								</p>';
						}
					?>
				</marquee>
			</div>
		</div>
		<div class="login col-md-6 col-xs-12 wow slideInRight" data-wow-delay="0.8s">
			<div class="col-xs-12"> 
				<form name="myform" method="post" action="login.php">
					<center>
						<img src="images/login.png" width="60" height="68" style="margin-top: 8px;">
						<h3 style="margin-top: 5px;color:#ce0767;">Login</h3>
						<form>
							<div class="form-group">
								<label class="form_labelled" style="color: #ce0767;width: 50%;">Enter Email</label>
								<input type="text" style="width: 50%;" class="form-control myinput" id="name" name="log_email">
							</div>
							<div class="form-group">
								<label class="form_labelled" style="color: #ce0767;">Password</label>
								<input type="password" style="width: 50%;" class="form-control myinput" id="name" name="log_password">
							</div>
							<input type="Submit" value="Submit" onclick="return myfun()"/>
						</form>
					</center>
				</form>	
			</div>	
		</div>
	</div>
	<section>

		<div id="team" class="col-xs-12 team ">
			<p>OUR TEAM</p>
			<div class="col-xs-12 col-md-3 wow slideInLeft">
				<div class="col-xs-12 box farhan">
					<img src="images/farhan.png">
					<p>FARHAN</p>
				</div>
				
			</div>	
			<div class="col-xs-12 col-md-3 wow zoomIn" data-wow-delay="1.5s">
				<div class="col-xs-12 box obei">
					<img src="images/obei.jpg">
					<p>OBEI</p>
				</div>
				
			</div>	
			<!-- <div class="col-xs-12 col-md-3 wow zoomIn" data-wow-delay="1s">
				<div class="col-xs-12 box">
					
				</div>
				
			</div>	 -->
			<div class="col-xs-12 col-md-3 wow zoomIn" data-wow-delay="1.5s">
				<div class="col-xs-12 box mustafa">
					<img src="images/mustafa.jpg">
					<p>MUSTAFA</p>
				</div>
				
			</div>	
			<div class="col-xs-12 col-md-3 wow slideInRight" data-wow-delay="0.55s">
				<div class="col-xs-12 box atif">
					<img src="images/atif.png">
					<p>ATIF</p>
				</div>	
			</div>	
		</div>
	</section>
	<footer class="footer">
		<div id="contact" class="col-xs-12 contact_img">
			<div class="col-xs-12">
				<p>CONTACT</p>	
			</div>
			<div class="col-xs-12">
				<div class="col-md-4 col-xs-12 map">
					<p>ADDRESS</p>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.160671485051!2d72.82883621446604!3d18.968510287149673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce40ffcfcacd%3A0x5d71ff22760f8e77!2sM.H.+Saboo+Siddik+College+of+Engineering!5e0!3m2!1sen!2sin!4v1536929557931" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
				<div class="col-md-4 col-xs-12 message">
					<p>LEAVE A MESSAGE</p>
					<form>
						<div class="form-group col-md-12">
							<label class="form_labelled">Enter name</label>
							<input type="text" class="form-control" id="name">
						</div>
						<div class="form-group col-md-6">
							<label class="form_labelled" for="email">Email address</label>
							<input type="email" class="form-control" id="email">
						</div>
						<div class="form-group col-md-6">
							<label class="form_labelled" for="email">Contact</label>
							<input type="text" class="form-control" id="number">
						</div>
						<div class="form-group col-md-12">
							<label class="form_labelled" for="comment">Your message</label>
							<textarea class="form-control" rows="5" id="comment"></textarea>
						</div>

						<center><button class="btn btn-default">Submit</button></center>
					</form>		
				</div>
				<div class="col-md-4 col-xs-12 chat">
					<p>HAVE A CHAT</p>
					<i class="fa fa-phone" style="color: white ; font-size: 20px;"></i><span style="color: white; font-size: 20px;">&nbsp&nbspPhone</span>
					<p style="color: white; font-size: 15; margin-bottom: 20px;">+91-7506414291</p>
				<!-- 	<p style="color: white;">+91-9167080946</p>
					<p style="color: white;">+91-9819170709</p> -->
					<i class="fa fa-envelope" style="color: white; font-size: 20px;"></i><span style="color: white; font-size: 20px;">&nbsp&nbspEmail</span>
					<p style="color: white; font-size: 15;">mohdobeiansari@gmail.com</p>
					
				</div>
				
			</div>
		</div>
	</div>	
</footer>
<script>
	$(document).ready(function(){
		$(window).on('scroll', function(){

			if ($(window).scrollTop())
			{
				$('.outerMain').addClass('black');
			}
			else
			{
				$('.outerMain').removeClass('black');
			}

		});
		$('.registerNow').click(function(){
					//alert('');
					$('.registration').addClass('showForm');
				});
		$('.registration > i:first-child').click(function(){
			$('.registration').removeClass('showForm');
		});
		$('input').focus(function(){
			$(this).prev().removeClass('form_labelled');
		});
		$('.myinput').blur(function(){
			if($(this).val() == '') 
			{
				$(this).prev().addClass('form_labelled');

			}
			else
			{
				$(this).prev().removeClass('form_labelled');
			}

		});
		$('textarea').focus(function(){
			$(this).prev().removeClass('form_labelled');
		});
		$('textarea').blur(function(){
			if($(this).val()=='')
			{
				$(this).prev().addClass('form_labelled');
			}
			else
			{
				$(this).prev().removeClass('form_labelled');
			}
		});

		var scrollLink = $('.scroll');
			//smooth scrolling
			scrollLink.click(function(event){
				event.preventDefault();
				$('body,html').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000 );

			});
			$('.fa-bars').click(function(){
				$('.outerMain').addClass('showMenu');
			});
			$('.fa-arrow-left').click(function(){
				$('.outerMain').removeClass('showMenu');
			});
		});
	// function validate(){
	// 	var firstname = $('#number').val();
	// 	var password = document.getElementById("Password").value;
	// 	var confirmpassword = document.getElementById("ConfirmPassword").value;
	// 	if(firstname.length !=10){
	// 		alert('length must be 10');
	// 		return false;
	// 	}

	// 	if (password != confirmpassword)
	// 	{
	// 		alert("wrong password");
	// 		return false;

	// 	}

	// 	else{
	// 		return true;
	// 	}
	// }
</script>
</body>
</html>