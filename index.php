<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
 	<header><title>Angel Fashion Group Co.,Ltd.</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="img/logo_home.png">
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<link rel="stylesheet" type="text/css" href="css/style3.css">
 	<link rel="stylesheet" type="text/css" href="css/demo.css">
 	<link rel="icon" href="/favicon.ico">

 	<script src="js/jquery-2.1.4.min.js"></script>
 	<script src="js/bootstrap.min.js"></script>
 	<script src="js/modernizr.custom.29473.js"></script>

 	</header>
 <body data-spy="scroll" data-target="#navbar-example">
 <!-- for navigation bar -->
 	<div class="top_bar" >
 		<nav id="navbar-example" class="navbar navbar-default navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>                        
		      </button>
		      <a class="navbar-brand top_title" href=""><img src="img/logo.png" /></a>
		    </div>
		    <div>
		      <div class="collapse navbar-collapse" id="myNavbar">
		        <ul class="nav navbar-nav navbar-right">
		          <li><a href="#home"><b>HOME</b></a></li>
		          <li><a href="#about"><b>ABOUT</b></a></li>
		          <li><a href="#contact"><b>CONTACT</b></a></li>
		          
		        </ul>
		      </div>
		    </div>
		  </div>
		</nav> 
 	</div>
 <!-- end navigation bar -->

<!-- for home page -->
 	<div id="home">
	 	<div class="container">
	 	
	 		<div class="row">
	 			<div class="col-sm-12 banner_img">
	 				
	 				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/6.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="img/8.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
     <div class="item">
      <img src="img/10.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	 			</div>
	 		</div>
	 		<div class="row">
	 			<div class="col-sm-4 banner_info ">
	 				<div class="panel panel-default">
					  <div class="panel-heading">
					    <a href="http://angelfashiongroup.com" target="_blank" ><h4>
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
						Wole Sale
						</h4></a>
					  </div>
					  <div class="panel-body">
					    <ul>
	 						<li>Unique Ideas</li>
	 						<li>Designing from Sketch</li>
	 						<li>Content Management System</li>
	 						<li>E-commerce for online shop</li>
	 						<li>Bespoke web solutions</li>
	 					</ul>
					  </div>
					</div>
	 			</div>
	 			<div class="col-sm-4 banner_info">
	 			<div class="panel panel-default">
					  <div class="panel-heading">
					    <a href="http://www.facebook.com/natthame" target="_blank"><h4>
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
						
						Mobile Shop
						</h4></a>
					  </div>
					  <div class="panel-body">
					    <ul>
	 						<li>Unique Ideas</li>
	 						<li>Designing from Sketch</li>
	 						<li>Content Management System</li>
	 						<li>E-commerce for online shop</li>
	 						<li>Bespoke web solutions</li>
	 					</ul>
					  </div>
					</div>
	 			
	 			</div>
	 			<div class="col-sm-4 banner_info">
	 			<div class="panel panel-default">
					  <div class="panel-heading">
					    <a href="http://www.natthame.com" target="_blank"><h4>
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
						Online Shop
						</h4></a>
					  </div>
					  <div class="panel-body">
					    <ul>
	 						<li>Unique Ideas</li>
	 						<li>Designing from Sketch</li>
	 						<li>Content Management System</li>
	 						<li>E-commerce for online shop</li>
	 						<li>Bespoke web solutions</li>
	 					</ul>
					  </div>
					</div>
	 			</div>
	 		</div>
	 	</div>
		<!--- for theme list -->
	 	
 		<!-- end  theme list -->

<!-- end home page -->

			<!--  quotation form -->

				<div class="get_quote">
					<h4><a href="index#get_quotation">Get Quotation</a></h4>
					
				</div>

				<div id="get_quotation">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
							<h2>Request Free Quotation</h2>
						<!-- email send function -->
						<?php if(isset($_POST['get-quote'])){
										$name_quote = $_POST['quote_name'];
										$email_quote = $_POST['quote_email'];
										$cat = $_POST['quote_type'];
										if($_POST['quote_option'] == 'Other'){
											$option = $_POST['other_option'];
										}else{
											$option = $_POST['quote_option'];
										}
										$description_quote = $_POST['quote_description'];
										$quotecaptcha = $_POST['quote_captcha'];

										if(empty($name_quote) && empty($email_quote) && empty($description)){
												echo "<script> alert('Pleae all field required');</script>";
										}else{

											if($_SESSION['quotation_code'] == $quotecaptcha){
												$message = "Name:'$name_quote'<br/><br/>Email:'$email_quote'<br/><br/>Type:'$cat'<br/><br/>Option:'$option'<br/><br/>Description:'$description_quote'";
												mail('shwedanu1990@gmail.com', $message, $description_quote, "From:" . $email_quote);
												echo "
												<script>
													jQuery(function(){
														jQuery('.quotation_success').click();
													});
												</script>
												";
												
											}else{
												echo '<div class="alert alert-danger" role="alert">
														<button type="button" class="close" data-dismiss="alert" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
																Your captcha code incorrect,Please try again
														</div>';
											}
										}

						} ?>
						<!-- end email function -->
						<!-- get quotation succes alert box -->
							<a class="quotation_success" href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalquote"></a>
								<div class="modal fade" id="myModalquote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							  <div class="modal-dialog" role="document">
							    <div class="modal-content">
							      <div class="modal-header">
							        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							        <h4 class="modal-title" id="myModalLabel">Thanks </h4>
							      </div>
							      <div class="modal-body">
							        As Soon reply to you  mail our quotation
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn btn-eunovate" data-dismiss="modal">Close</button>
							   
							      </div>
							    </div>
							  </div>
							</div>
					    <!-- end get quotation success alert box -->	
								<form action="index#get_quotation" method="post">
					       	 <div class="form-group">
							   <div class="col-sm-6">
							   <label for="exampleInputPassword1">Name *</label>
							    <p style="color:red;" class="quote_name"></p>
							    <input type="text" class="form-control" id="quote_name" name="quote_name" placeholder="Enter name" >
							  </div>
							    <div class="col-sm-6">
							    <label for="exampleInputPassword1">Email *</label>
							     <p style="color:red;" class="quote_email"></p>
							    <input type="email" class="form-control" id="quote_email" name="quote_email" placeholder="Enter email" >
							  </div>
							  <div class="form-group">
							   <div class="col-sm-6">
							    <label for="exampleInputPassword1">Type *</label>
							    <select class="form-control" id="quote_category" name="quote_type">
							    	<option value="Web App">Web App</option>
							    	<option value="Web Site">Web Site</option>
							    	<option value="Mobile App">Mobile App</option>
							    </select>
							   </div>
							    <div class="col-sm-6">
							    <label for="exampleInputPassword1">Option *</label>
							    <select class="form-control " id="quote_option" name="quote_option">  
							    <!-- fro mobile app -->
							    	<option   value="choose" selected>Choose Option</option>
								   	<option  id="mobile_app" value="Hotel">For Hotel Mobile App</option>
								    <option  id="mobile_app" value="Restaurant">For Restaurant Mobile App</option>
								    <option  id="mobile_app" value="Travel">For Travel Mobile App</option>
								    <option  id="mobile_app" value="Company">For Company Mobile App</option>
								    <!-- fro web site -->
								   	<option  id="web_site" value="Hotel">For Hotel Website</option>
								    <option  id="web_site" value="Restaurant">For Restaurant Website</option>
								    <option  id="web_site" value="Travel">For Travel Website</option>
								    <option  id="web_site" value="Company">For Company Website</option>
								    <!-- fro Web app -->
								    <option  id="web_app" value="Hotel">For Hotel App</option>
								    <option  id="web_app" value="Restaurant">For Restaurant App</option>
								    <option  id="web_app" value="Travel">For Travel App</option>
								    <option  id="web_app" value="Company">For Company App</option>
								    <option   value="Other" >Other</option>
							    </select>
							    <input type="text" id="other_option" name="other_option" class="form-control" />
							  </div>
							 <div class="form-group">
							 <div class="col-sm-12">
							    <label for="exampleInputPassword1">Description *</label>
							     <p style="color:red;" class="quote_description"></p>
							    <textarea class="form-control" id="quote_description" name="quote_description" rows="3" ></textarea>
							  </div>
							  </div>
								<div class="form-group">
							 	<div class="col-sm-4">
							    <label for="exampleInputPassword1">Security Code *</label>
							   	<p> <img src="quoate_captcha.php" /></p>
							     <p style="color:red;" class="quote_captcha"></p>
							     <input type="text" class="form-control" name="quote_captcha" id="quote_captcha" />
							  </div>
							  </div>
							   <div class="form-group">
							  	 <div class="col-sm-12">
							  	 	<label for="exampleInputPassword1"></label>
								    <input type="hidden" name="get-quote" value="1" />
								    <input class="btn btn-eunovate" id="quote_send" type="submit" value="Send" />
							     </div>
							    </div>
							</form>
							</div>
						</div>
						</div>
					</div>
				</div>
			<!-- end -->
	<!-- for about page -->
		<div id="about">
		 	<div class="container">
		 		<div class="row">
		 			<div class="col-sm-12">
		 				<h3>About Us</h3>
		 			<p>
					Angel Fashion Group Co.,Ltd.
					Who Sale for back of yuzana blazar aungthpya street Building 15, Room 1 for holesale
				We’re a team of highly motivated individuals providing IT solutions for our hundreds of satisfied clients.<br><br>With increasing use of mobile phones and tablets in Myanmar, all our websites are designed responsively to be compatible with both mobile phones and PCs.<br><br>Our works include, but is not limited to, Web Design and Development, Mobile Application Development, E-commerce Websites, and POS systems.<br><br>We promise RESULTS.<br><br>Whether you are looking to create an e-commerce website or an information website, you won’t be disappointed with us.<br><br>Each of our employees dedicate themselves to finding what makes your potential clients want to interact with your website.
				</p>
						 				
						 				
		 			</div>
		 		</div>
	 		</div>
		</div>
	<!-- end about page -->
	<!-- for contact page -->
		<div id="contact">
		 	<div class="container">
		 		<div class="row">
		 			<div class="col-sm-12">
		 				<h2>Contact Us</h2>
		 				<div class="row">
		 				<div class="col-sm-6">
		 					<div class="col-sm-3">
		 						<p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Address: </p>
		 					</div>
		 					<div class="col-sm-9"><p>Building 15, Room 1 ,Aung Thapya Street, MingalarTaungnyunt Tsp, Yangon, Myanmar</p></div>
		 					<div class="col-sm-3">
		 						<p><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> Phone: </p>
		 					</div>
		 					<div class="col-sm-9"><p>+95 - 9798 222 717</p></div>
		 					<div class="col-sm-3">
		 						<p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Email: </p>
		 					</div>
		 					<div class="col-sm-9"><p>natthame.com@gmail.com</p></div>
		 					
		 				</div>
		 					<div class="col-sm-6">
			 					<?php
									if(isset($_POST['submitted'])){

										$name = $_POST['name'];
										$email = $_POST['email'];
										$description = $_POST['description'];
										$captcha = $_POST['captcha_contact'];
										$message = "Name : '$name'<br/><br/>Email : '$email'";
										if($_SESSION['code'] == $captcha){
											mail('shwedanu1990@gmail.com', $message, $description, "From:" . $email);
											echo "<script>jQuery(function(){
													   jQuery('.email_success').click();
													});
											</script>";
										}else{
											echo '<div class="alert alert-danger" role="alert">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											  <span aria-hidden="true">&times;</span>
											</button>
											Your captcha code incorrect,Please try again
											</div>';
										}
									}

									
								?>
		<!-- contact succes alert box -->
		<a class="email_success" href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModalmail"></a>
			<div class="modal fade" id="myModalmail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">Thanks Contact for our team</h4>
		      </div>
		      <div class="modal-body">
		        As Soon contact to you Thanks,
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-eunovate" data-dismiss="modal">Close</button>
		   
		      </div>
		    </div>
		  </div>
		</div>
		 <!-- end contact success alert box -->						
		 						<form class="form-horizontal" action="index#contact" method="post">
									<div class="form-group">
									    <label for="inputEmail3" class="col-sm-3 control-label">Name *</label>
									    
									    <div class="col-sm-9">
									    <p style="color:red;" class="contactname"></p>
									      <input type="text" class="form-control" name="name" id="contactname" vlaue="<?php if(isset($contactname)){ echo $contactname; } ?>" placeholder="Name">
									    </div>
									  </div>
									  <div class="form-group">
									    <label for="inputEmail3" class="col-sm-3 control-label">Email *</label>
									    
									    <div class="col-sm-9">
									    <p style="color:red;" class="contactemail"></p>
									      <input type="email" name="email" id="contactemail" class="form-control" value="<?php if(isset($email)){ echo $email; } ?>"  placeholder="Email">
									    </div>
									  </div>
										<div class="form-group">
									    <label for="inputEmail3" class="col-sm-3 control-label">Description *</label>
									    
									    <div class="col-sm-9">
									    <p style="color:red;" class="contactdescription"></p>
									      <textarea class="form-control" id="contactdescription" name="description" rows="3"><?php if(isset($description)){ echo $description; } ?></textarea>
									    </div>
									  </div> 


									 <div class="form-group">
									    <label for="inputEmail3" class="col-sm-3 control-label">Security Code *</label>
									    
									    <div class="col-sm-9">
									    <img src="captcha.php" />
									    <p style="color:red;" class="captcha_contact"></p>
									      <input type="text" name="captcha_contact" id="captcha_contact" class="form-control" value="<?php if(isset($captcha_contact)){ echo $captcha_contact; } ?>" >
									    </div>
									  </div>
									  <div class="form-group">
									    <div class="col-sm-offset-3 col-sm-9">
									    <input type="hidden" name="submitted" value="submitted" />
									      <button type="submit" id="contentsend" class="btn btn-eunovate">Send</button>
									    </div>
									  </div>
									</form>
		 						
							  
		 					</div>
		 					
		 				</div>
		 			</div>
		 		</div>
		 	
		 				

	 	</div>
	 	<a href="#" class="scrollToTop">Back <br/>To Top</a>
	 	<!-- for map eunovate -->
	 	<div class="map_eunovate">
	 		<div class="container"><div class="row"><div class="col-sm-12">
	 		
	 		<img src="img/eunovate_map.png" class="img-responsive" />
	 		</div></div></div>
		</div>
	 <!-- end contact page -->
	</div>
	<script>

	$(document).ready(function(){
		/////// scroll bar top to down function ////////////////
		/*$(function () {
              var opacity = 1;
			var lastScrollTop = 0;
			$(window).scroll(function(){
			    var st = $(this).scrollTop();
			    if(st == 0)
			        $('.navbar-default').css('opacity','1');

			    if (opacity > 0.01 && (st > lastScrollTop)){
			       $('.navbar-default').css('opacity','-=0.1');
			       opacity -= 0.01;
			    }
			    else if(opacity < 1)
			    {
			       $('.navbar-default').css('opacity','+=0.1');
			        opacity += 0.01;
			    }
			    lastScrollTop = st;
			});
         }); */
	//// get quotation function////////////////////
		$('#quote_option').children('#web_site').hide();
		$('#quote_option').children('#mobile_app').hide();

	$('#quote_category').change(function(){
		var cat = $('#quote_category').val();

		if(cat == 'Web Site'){
			$('#quote_option').children('#web_site').show();
			$('#quote_option').children('#web_app').hide();
			$('#quote_option').children('#mobile_app').hide();
		}else if(cat == 'Mobile App'){
			$('#quote_option').children('#web_site').hide();
			$('#quote_option').children('#web_app').hide();
			$('#quote_option').children('#mobile_app').show();
		}else{
			$('#quote_option').children('#web_site').hide();
			$('#quote_option').children('#web_app').show();
			$('#quote_option').children('#mobile_app').hide();
		}
		
	});

	$('#other_option').hide();
	$('#quote_option').change(function(){
		var other = $('#quote_option').val();
		
		if(other == 'Other'){
			$('#other_option').show();
			$('#quote_option').hide();
		}
	});

	/////////////// check requre function ///////////////////
		$('#quote_send').click(function(){
			var name = $('#quote_name').val();
			var email = $('#quote_email').val();
			var desc = $('#quote_description').val();
			var captcha = $('#quote_captcha').val();
				if(!name){
					$('#quote_name').css('border-color','red');
					$('.quote_name').text('Name field is required');
				}else{
					$('#quote_name').css('border-color','');
					$('.quote_name').text('');
				}
				if(!captcha){
					$('#quote_captcha').css('border-color','red');
					$('.quote_captcha').text('Captcha field is required');
				}else{
					$('#quote_captcha').css('border-color','');
					$('.quote_captcha').text('');
				}
				if(!email){
					$('#quote_email').css('border-color','red');
					$('.quote_email').text('Email field is required');
				}else{
					$('#quote_email').css('border-color','');
					$('.quote_email').text('');
				}
				if(!desc){
					$('#quote_description').css('border-color','red');
					$('.quote_description').text('Description field is required');
				}else{
					$('#quote_description').css('border-color','');
					$('.quote_description').text('');
				}

			if(!name || !email || !desc || !captcha ){
				return false;
			}else{
				return true;
			}
		});
	///////////////end get quotation function ////////////////
		
	//////////////contact form function ////////////
		$('#contentsend').click(function(){
			var name = $('#contactname').val();
			var email = $('#contactemail').val();
			var desc = $('#contactdescription').val();
			var captcha = $('#captcha_contact').val();

				if(!name){
					$('#contactname').css('border-color','red');
					$('.contactname').text('Name field is required');
				}else{
					$('#contactname').css('border-color','');
					$('.contactname').text('');
				}
				if(!captcha){
					$('#captcha_contact').css('border-color','red');
					$('.captcha_contact').text('Captcha field is required');
				}else{
					$('#captcha_contact').css('border-color','');
					$('.captcha_contact').text('');
				}
				if(!email){
					$('#contactemail').css('border-color','red');
					$('.contactemail').text('Email field is required');
				}else{
					$('#contactemail').css('border-color','');
					$('.contactemail').text('');
				}
				if(!desc){
					$('#contactdescription').css('border-color','red');
					$('.contactdescription').text('Description field is required');
				}else{
					$('#contactdescription').css('border-color','');
					$('.contactdescription').text('');
				}

			if(!name || !email || !desc || !captcha ){
				return false;
			}else{
				return true;
			}
		});
	});
	</script>
	<script>
		$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});
	</script>

 
	<script>
	$(document).ready(function(){
		
		$(".navbar .collapse ul li a[href^='#']").on('click', function(e) {

		   // prevent default anchor click behavior
		   e.preventDefault();

		   // store hash
		   var hash = this.hash;

		   // animate
		   $('html, body').animate({
		       scrollTop: $(hash).offset().top
		     }, 500, function(){

		       // when done, add hash to url
		       // (default click behaviour)
		       window.location.hash = hash;
		     });

		});

			
	});
	</script>
</body>
</html>



 		
