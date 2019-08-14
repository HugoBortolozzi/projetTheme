<?php
//https://developer.wordpress.org/themes/basics/template-files/#using-template-files

// on séparer le header dans un fichier seul pour que toutes les pages puisse l'utiliser et qu'il ne faille modifier le header qu'à un seul endroit.
get_header();

// ajout du header
get_template_part('templates/banner');

//Ajout de la section testimonials
get_template_part('templates/testimonials');

//Ajout de la section features
get_template_part('templates/features');
?>

    <!-- Video -->
    <div id="preview" class="basic-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>PREVIEW</h2>
                    <div class="p-heading p-large">Target the right customers for your business with the help of Leno's patented segmentation technology</div>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">

                    <!-- Video Preview -->
                    <div class="image-container">
                        <div class="video-wrapper">
                            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
                                <img class="img-fluid" src="images/video-frame.jpg" alt="alternative">
                                <span class="video-play-button">
                                    <span></span>
                                </span>
                            </a>
                        </div> <!-- end of video-wrapper -->
                    </div> <!-- end of image-container -->
                    <!-- end of video preview -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-1 -->
    <!-- end of video -->


    <!-- Details 1 -->
    <div id="details" class="basic-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="images/details-1-iphone.png" alt="alternative">
                </div> <!-- end of col -->
                <div class="col-lg-6">
                    <div class="text-container">
                        <h3>Goals Setting</h3>
                        <p>Leno can easily help you track your personal development evolution if you take the time to properly setup your goals at the beginning of the training process. Check out the details</p>
                        <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">LIGHTBOX</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-2 -->
    <!-- end of details 1 -->


    <!-- Details 2 -->
    <div class="basic-3">
        <div class="second">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text-container">
                            <h3>Calendar Input</h3>
                            <p>The calendar input function enables the user to setup training, meditation and relaxation sessions with ease. Just open the feature and start setting up your time as you desire</p>
                            <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">LIGHTBOX</a>
                        </div> <!-- end of text-container -->
                    </div> <!-- end of col -->
                    <div class="col-lg-6">
                        <img class="img-fluid" src="images/details-2-iphone.png" alt="alternative">
                    </div> <!-- end of col -->
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div> <!-- end of second -->
    </div> <!-- end of basic-3 -->    
    <!-- end of details 2 -->


    <!-- Details Lightboxes -->
	<!-- Lightbox -->
	<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
		<div class="row">
			<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
			<div class="col-lg-6">
				<img class="img-fluid" src="images/details-lightbox-1.png" alt="alternative">
			</div>
			<div class="col-lg-6">
				<h3>Goals Setting</h3>
				<hr>
                <p>Leno can easily help you track your personal development evolution if you take the time to set it up.</p>
                <h4>User Feedback</h4>
                <p>This is a great app which can help you save time and make your live easier. And it will help improve your productivity levels.</p>
                <p>You should definitely give it a try when you need a good app.</p>
				<table>
					<tr><td class="icon-cell"><i class="fas fa-desktop"></i></td><td>Responsive layout</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-bullhorn"></i></td><td>Distinctive CTAs</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-image"></i></td><td>Image gallery slider</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-envelope"></i></td><td>Contact forms</td></tr>
					<tr><td class="icon-cell"><i class="fab fa-font-awesome-flag"></i></td><td>FontAwesome icons</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-code"></i></td><td>Well-structured code</td></tr>
				</table>
				<a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#details">BACK</a> 
			</div>
		</div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    
    <!-- Lightbox -->
    <div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
		<div class="row">
			<button title="Close (Esc)" type="button" class="mfp-close x-button">×</button>
			<div class="col-lg-6">
				<img class="img-fluid" src="images/details-lightbox-2.png" alt="alternative">
			</div>
			<div class="col-lg-6">
				<h3>Calendar Input</h3>
				<hr>
                <p>The calendar input function enables the user to setup training, meditation and relaxation sessions with ease.</p>
                <h4>User Feedback</h4>
                <p>This is a great app which can help you save time and make your live easier. And it will help improve your productivity levels.</p>
                <p>You should definitely give it a try when you need a good app.</p>
				<table>
					<tr><td class="icon-cell"><i class="fas fa-desktop"></i></td><td>Responsive layout</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-bullhorn"></i></td><td>Distinctive CTAs</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-image"></i></td><td>Image gallery slider</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-envelope"></i></td><td>Contact forms</td></tr>
					<tr><td class="icon-cell"><i class="fab fa-font-awesome-flag"></i></td><td>FontAwesome icons</td></tr>
					<tr><td class="icon-cell"><i class="fas fa-code"></i></td><td>Well-structured code</td></tr>
				</table>
				<a class="btn-solid-reg" href="#your-link">DETAILS</a> <a class="btn-outline-reg mfp-close as-button" href="#details">BACK</a>
			</div>
		</div> <!-- end of row -->
    </div> <!-- end of lightbox-basic -->
    <!-- end of lightbox -->
    <!-- end of details lightboxes -->


    <!-- Screenshots -->
    <div class="slider-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Image Slider -->
                    <div class="slider-container">
                        <div class="swiper-container image-slider">
                            <div class="swiper-wrapper">
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-1.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-1.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-2.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-2.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-3.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-3.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-4.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-4.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-5.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-5.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->
                                
                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-6.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-6.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-7.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-7.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-8.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-8.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-9.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-9.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->

                                <!-- Slide -->
                                <div class="swiper-slide">
                                    <a href="images/screenshot-10.png" class="popup-link" data-effect="fadeIn">
                                        <img class="img-fluid" src="images/screenshot-10.png" alt="alternative">
                                    </a>
                                </div>
                                <!-- end of slide -->
                                
                            </div> <!-- end of swiper-wrapper -->

                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <!-- end of add arrows -->

                        </div> <!-- end of swiper-container -->
                    </div> <!-- end of slider-container -->
                    <!-- end of image slider -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of slider-2 -->
    <!-- end of screenshots -->


    <!-- Download -->
    <div class="basic-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xl-5">
                    <div class="text-container">
                        <h2>Download <span class="blue">Leno</span></h2>
                        <p class="p-large">Target the right customers for your business with the help of Leno's patented technology and increase conversion figures in less than 2 weeks</p>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-apple"></i>APP STORE</a>
                        <a class="btn-solid-lg" href="#your-link"><i class="fab fa-google-play"></i>PLAY STORE</a>
                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
                <div class="col-lg-6 col-xl-7">
                    <div class="image-container">
                        <img class="img-fluid" src="images/download.png" alt="alternative">
                    </div> <!-- end of img-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of basic-4 -->
    <!-- end of download -->


    <!-- Statistics -->
    <div class="counter">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    
                    <!-- Counter -->
                    <div id="counter">
                        <div class="cell">
                            <div class="counter-value number-count" data-count="231">1</div>
                            <p class="counter-info">Happy Users</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="85">1</div>
                            <p class="counter-info">Issues Solved</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="59">1</div>
                            <p class="counter-info">Good Reviews</p>
                        </div>
                        <div class="cell">
                            <div class="counter-value number-count" data-count="127">1</div>
                            <p class="counter-info">Case Studies</p>
                        </div>
                    </div>
                    <!-- end of counter -->
                    
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of counter -->
    <!-- end of statistics -->


    <!-- Contact -->
    <div id="contact" class="form">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>CONTACT</h2>
                    <ul class="list-unstyled li-space-lg">
                        <li class="address">Don't hesitate to give us a call or just use the contact form below</li>
                        <li><i class="fas fa-map-marker-alt"></i>22 Innovative, San Francisco, CA 94043, US</li>
                        <li><i class="fas fa-phone"></i><a class="blue" href="tel:003024630820">+81 720 2212</a></li>
                        <li><i class="fas fa-envelope"></i><a class="blue" href="mailto:office@leno.com">office@leno.com</a></li>
                    </ul>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    
                    <!-- Contact Form -->
                    <form id="contactForm" data-toggle="validator" data-focus="false">
                        <div class="form-group">
                            <input type="text" class="form-control-input" id="cname" required>
                            <label class="label-control" for="cname">Name</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" id="cemail" required>
                            <label class="label-control" for="cemail">Email</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" id="cmessage" required></textarea>
                            <label class="label-control" for="cmessage">Your message</label>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group checkbox">
                            <input type="checkbox" id="cterms" value="Agreed-to-Terms" required>I have read and agree to Leno's stated conditions in <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms-conditions.html">Terms Conditions</a> 
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">SUBMIT MESSAGE</button>
                        </div>
                        <div class="form-message">
                            <div id="cmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of form -->
    <!-- end of contact -->


    <?php
// https://developer.wordpress.org/themes/basics/template-files/#using-template-files
// Ajout d'un fichier footer.php pour y mettre le footer
get_footer();
?>

    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © Leno - Mobile App Landing Page Template by <a href="http://www.inovatik.com">Inovatik</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/popper.min.js"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/morphext.min.js"></script> <!-- Morphtext rotating text in the header -->
    <script src="js/validator.min.js"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>