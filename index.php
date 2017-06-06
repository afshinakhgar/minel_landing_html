<?php 
			$message_sent = '';
			if($_POST && isset($_POST['email'])){
					
				// Multiple recipients
				$toArr = [
					'afshin.akhgar@gmail.com',
					'info@minelbeauty.com'
				];
				$to = implode(',',$toArr); // note the comma

				// Subject
				$subject = 'فرم تماس با مای مینل';

				// Message
				$message = '
				<html>
				<head>
				<title>اطلاعات کاربر</title>
				</head>
				<body>
				<p>فرم درخواست</p>
				<table style="border:1px solid">
					<tr>
						<th>
							<tr>نام</tr>
							<tr>ایمیل</tr>
							<tr>شماره</tr>
						</th>
					</tr>

					<tr>
						<td>'.$_POST['name'].'</td>
						<td>'.$_POST['email'].'</td>
						<td>'.$_POST['number'].'</td>
					</tr>
				</table>

				<div style="margin-top:20px;padding:10px">
					'.$_POST['message'].'
				</div>

				</body>
				</html>
				';

				// To send HTML mail, the Content-type header must be set
				$headers[] = 'MIME-Version: 1.0';
				$headers[] = 'Content-type: text/html; charset=utf-8';

				// Mail it
				$mail = mail($to, $subject, $message, implode("\r\n", $headers));

				$message_sent = 'پیام شما ارسال شد';

			}
			?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="سالن زیبایی مینل افتتاح شد ، تخفیف ۳۰ درصدی ">
    <meta name="author" content="minel">

	<!-- Twitter Card data -->
	<meta name="twitter:card" value="سالن زیبایی مینل افتتاح شد ، تخفیف ۳۰ درصدی به مناسبت افتتاحیه">

	<!-- Open Graph data -->
	<meta property="og:title" content="سالن زیبایی مینل" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://www.minelbeauty.com/" />
	<meta property="og:image" content="http://www.minelbeauty.com/img/gallery/1.jpg" />
	<meta property="og:description" content="سالن زیبایی مینل افتتاح شد ، تخفیف ۳۰ درصدی به مناسبت افتتاحیه" />

    <title>سالن زیبایی مینل</title>
	<style>

		@font-face {
			font-family: vazir;
			src: url(fonts/Vazir.woff);
		}
	</style>
    <!-- CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />	
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

	<!-- Owl Carousel Assets -->
	<link href="vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.theme.css" rel="stylesheet">
	<link href="vendor/owl-carousel/owl.transitions.css" rel="stylesheet">







	
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
			<div class="wow bounceInUp" data-wow-delay="0.4s">
                    <div id="owl-intro" class="owl-carousel">
                        <div class="item"><img src="img/gallery/1.jpg" class="img-responsive" alt="img"></div>
                        <div class="item"><img src="img/gallery/2.jpg" class="img-responsive" alt="img"></div>
                        <div class="item"><img src="img/gallery/3.jpg" class="img-responsive" alt="img"></div>
                        <div class="item"><img src="img/gallery/4.jpg" class="img-responsive" alt="img"></div>
                        <div class="item"><img src="img/gallery/5.jpg" class="img-responsive" alt="img"></div>
                        <div class="item"><img src="img/gallery/6.jpg" class="img-responsive" alt="img"></div>
                        <div class="item"><img src="img/gallery/7.jpg" class="img-responsive" alt="img"></div>
                        <div class="item"><img src="img/gallery/8.jpg" class="img-responsive" alt="img"></div>
                        <div class="item"><img src="img/gallery/9.jpg" class="img-responsive" alt="img"></div>
                        <div class="item"><img src="img/gallery/10.jpg" class="img-responsive" alt="img"></div>
            		</div>
			</div>

			<div class="intro_wrapp_logo">
				<div class="slogan">
					<a href="http://www."><img src="img/minel.jpg" class="logo" alt="" /></a>
				</div>
				<div class="page-scroll">
					<a href="#about">
						<i class="fa fa-angle-down fa-5x animated"></i>
					</a>
				</div>
			</div>
    </section>
	<!-- /Section: intro -->
	
    <!-- Navigation -->
    <div id="navigation">
        <nav class="navbar navbar-custom" role="navigation">
                              <div class="container">
                                    <div class="row">
                                          <div class="col-md-12">
                         
                                          <!-- Brand and toggle get grouped for better mobile display -->
                                          <div class="navbar-header">
                                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                                <i class="fa fa-bars"></i>
                                                </button>
                                          </div>
                                                      <!-- Collect the nav links, forms, and other content for toggling -->
                                                      <div class="collapse navbar-collapse" id="menu">
                                                            <ul class="nav navbar-nav">
                                                                  <li><a href="#contact">تماس با ما</a></li>
																  <li><a href="#gallery">گالری</a></li>
																  <li><a href="#about">درباره مینل</a></li>
																  <li class="active"><a href="#intro">مینل</a></li>
                                                            </ul>
                                                      </div>
                                                      <!-- /.Navbar-collapse -->
                             
                                          </div>
                                    </div>
                              </div>
                              <!-- /.container -->
                        </nav>
    </div> 
    <!-- /Navigation -->  

	<!-- Section: about -->
    <section id="about" class="home-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					
						<div class="section-heading text-center">
						<div class="wow bounceInDown" data-wow-delay="0.2s">
							<h2>افتتاح سالن زیبایی مینل</h2>
						</div>
						<p class="wow bounceInUp" data-wow-delay="0.3s">
							خدمات رنگ و مش، کوپ، اصلاح ابرو، ناخن،ماساژ و میکرو بلندینگ
							
						</p>
						</div>
					
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6">
				
					<img src="img/img1.jpg" class="img-responsive img-rounded" alt="" />
				</div>		
				<div class="col-md-6">
					<p><strong>سالن زیبایی مینل</strong></p>
					<p>
					به مناسبت افتتاح سالن زیبایی مینل خدمات سالن با 03 درصد تخفیف ارایه می گردد:
					</p>
					
					<a href="#gallery" class="btn btn-skin btn-lg btn-scroll">مشاهده تصاویر بیشتر</a>
				</div>
			</div>		
		</div>
	</section>
	<!-- /Section: about -->
	
	<!-- Section: separator -->
    <section id="separator" class="home-section parallax text-center" data-stellar-background-ratio="0.5">
		
		<div class="container">
			<div class="row">
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center txt-shadow">
							<div class="icon">
								<i class="fa fa-flask fa-5x"></i>
							</div>
						<span class="color-white">ماساژ</span>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center txt-shadow">
							<div class="icon">
								<i class="fa fa-female fa-5x"></i>
							</div>
						<span class="color-white">عروس</span>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center txt-shadow">
							<div class="icon">
								<i class="fa fa-eye fa-5x"></i>
							</div>
						<span class="color-white">اکستنشن مو و مژه</span>
						</div>
					</div>
					<div class="col-xs-6 col-sm-3 col-md-3">
						<div class="align-center txt-shadow">
							<div class="icon">
								<i class="fa fa-tint fa-5x"></i>
							</div>
						<span class="color-white">رنگ و مش</span>
						</div>
					</div>
			</div>		
		</div>
	</section>
	<!-- /Section: separator -->
	
	
	<!-- Section: gallery -->
    <section id="gallery" class="home-section text-center bg-gray">

			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
						<h2>تصاویر سالن</h2>
					</div>
					</div>
				</div>
			</div>
			</div>

		<div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.4s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="img/gallery/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/1.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="img/gallery/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/2.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/3.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/4.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/5.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/6.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/7.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/7.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/gallery/8.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/8.jpg" class="img-responsive " alt="img"></a></div>
                    </div>
					</div>
                </div>
            </div>
		</div>
	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-offset-2">
					
					<div class="section-heading">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<h2>فرم تماس با ما</h2>
					</div>
					<p class="wow lightSpeedIn" data-wow-delay="0.3s">
					جهت استفاده از خدمات سالن زیبایی مینل با تخفیف افتتاحیه نیز و شرکت در قرعه کشی هفتگی ما ) استفاد
از خدمات رایگان به قید قرعه فرم زیر را تكمیل نمائید:	
					</p>
					</div>
					
				</div>
			</div>
			</div>
		</div>
		<div class="container">
			
    <div class="row">
        <div class="col-lg-8 col-md-offset-2">
            <div class="form-wrapper marginbot-50">
                <div id="message_pm"><?=$message_sent?></div>
                <div id="errormessage"></div>
                <form id="contact-form" action="index.php" method="post" role="form" class="contactForm">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="نام" data-rule="minlen:4" data-msg="حداقل 4 حرف" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="ایمیل" data-rule="email" data-msg="ایمیل ورودی اشتباه است" />
                        <div class="validation"></div>
                    </div>
                   <div class="form-group">
                        <input type="number" class="form-control" name="number" id="number" placeholder="شماره تلفن" data-rule="number" data-msg="لطفا شماره تلفن صحیح وارد کنید" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="پیام خود را بنویسید" placeholder="متن پیام"></textarea>
                        <div class="validation"	></div>
                    </div>
                    
                    <div class="text-center"><button type="submit" class="btn btn-skin btn-block" id="btnContactUs">ارسال</button></div>
                </form>
            </div>
			<div class="text-center">
					<p class="lead"><i class="fa fa-phone"></i> ٢٦٧٥١٠٣٠</p>
					<p class="lead"><i class="fa fa-phone"></i> ٢٦٧٥١٠٤٠</p>
					<p class="lead"><i class="fa fa-phone"></i> ٢٦٧٥١٠٦٠</p>

					<p class="lead"><i class="fa fa-address"></i> آدرس: ميدان هروی، شمس اباد، پايين تر از ميدان شریفی، پلاك٩٦٢، طبقه ٥ غربی</p>



					<p class="lead">
					<h5>مارا در تلگرام و اینستاگرام دنبال کنید</h5>
						<a href="http://instagram.com/minelbeauti" target="_blank" ><img src="img/insta.png" class="share_icon"></a>
						<a href="http://telegram.me/minelbeauti" target="_blank"><img src="img/telegram.png" class="share_icon"></a>
					
					</p>

			</div>
        </div>

    </div>	
	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<p>&copy; minelbeauty. All Rights Reserved</p>
                    


				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.sticky.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/owl.autoplay.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

	<script>
	$(function(){
		$('#owl-intro').owlCarousel({
			navigation : false, 
			loop:true,
			slideSpeed : 300,
			paginationSpeed : 400,
			singleItem: true,
			pagination: false,
			rewindSpeed: 500,
			autoPlay:true,
			autoplayTimeout:1000,
			autoplayHoverPause:false
		});
	});
	</script>



</body>

</html>
