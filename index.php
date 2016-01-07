<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>DuraTron</title>
        <?php require_once 'template/commonJS.php'; ?>
		<style>
			.featured{
					font-family:Calibri;
					font-size:13pt;
					font-style:normal;
			}
		</style>
    </head>
<body>
        <!-- HEADER CONTAINER -->
        <?php require_once 'template/header.php'; ?>
        <div class="row-fluid callout">
            <!-- Start Carousel -->
            <div class="container">
                <div class="companycallout hidden-phone">

                    <div id="slider" class="sl-slider-wrapper">
                        <div class="sl-slider">
                            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                <div class="sl-slide-inner">
                                    <div class="bg-img bg-img-1"><img src="images/banner-1.png"></div>
                                    
                                </div>
                            </div>


                            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
                                <div class="sl-slide-inner">
                                    <div class="bg-img bg-img-3"></div>
                                    <h2><a href="products.php?hp=1" style="text-decoration: none">Hot Product</a></h2>
                                    <blockquote><p><h3>Plastics Cassettes</h3></p></blockquote>
                                </div>
                            </div>
							

                            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5" >
                                <div class="sl-slide-inner" >
                                    <div class="bg-img bg-img-4"></div>
                                    <h2>Plastic Grades</h2>
                                    <blockquote><p><h3>We use one of the best grades plastic from the best sources</h3>
									<br /><ul>
										<li>ABS<br /></li>
										<li>PP</li>
										<li>PS</li>
									<ul>
									</p></blockquote>
                                </div>
                            </div>

<!--
                            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
                                <div class="sl-slide-inner">
                                    <div class="bg-img bg-img-4"></div>
                                    <h2>VISION</h2>
                                    <blockquote><p><h3>Total Quality and Cost-effective Integrated Solutions on Time</h3></p></blockquote>
                                </div>
                            </div>

                            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
                                <div class="sl-slide-inner">
                                    <div class="bg-img bg-img-5"></div>
                                    <h2>MISSION</h2>
                                    <blockquote><p><h3>To become India’s top aluminium ingots manufacturing company in terms of strength, capacity, quality, accuracy, technology and metallurgical prowess in the next 10 years.</h3></p></blockquote>
                                </div>
                            </div>
                        </div><!-- /sl-slider -->

                        <nav id="nav-dots" class="nav-dots">
                            <span class="nav-dot-current"></span>
                            <span></span>
                            <span></span>
                            <!--<span></span>
                            <span></span>-->
                        </nav>

                    </div><!-- /slider-wrapper -->
                </div>




                <!-- Start Features -->
                <div class="row-fluid features">
                    <!-- FEATURES 1 -->
                    <div class="span2 featured hidden-phone hidden-tablet" style="width:100%">

                        <h3>Welcome to DuraTron</h3>
						<p style="text-align:justify;">
                        DuraTron, established in the year 2013, is one of the prominent Manufacturer, Supplier and Exporter of an extensive range of Plastic Products, located in Rajkot, Gujarat, INDIA. DuraTron is your one-stop outsourcing service for custom plastic molding where we are committed to eagerly serving your needs. <a href="about.php">Read more...</a>
 
					</div>

                    <!-- FEATURES 2 -->


                </div>





                <!-- Tablet View Social Icons - they will line up across the screen instead of in a box -->




                <!-- TEXT AREAS -->

                <!-- Blogs -->
                <!--
					<div class="row-fluid homesection hidden-desktop">
						<div class="hidden-desktop hidden-phone">
							<div class="span2"><a href="#"><img src="img/social/digg.png" alt=""></a></div>
							<div class="span2"><a href="#"><img src="img/social/Dribbble.png" alt=""></a></div>
							<div class="span2"><a href="#"><img src="img/social/Facebook.png" alt=""></a></div>
							<div class="span2"><a href="#"><img src="img/social/Flickr.png" alt=""></a></div>
							<div class="span2"><a href="#"><img src="img/social/Github.png" alt=""></a></div>
							<div class="span2"><a href="#"><img src="img/social/Twitter.png" alt=""></a></div>
						</div>
					</div>
				-->
                <!-- LATEST BLOG POSTS AND NEWS -->

                <!-- Blogs -->
                <div class="row-fluid">
                    <div class="span3">

                        <a href="products.php"><img src="img/blog1.png" alt="" class="member">
                        <h4>PRODUCTS</h4></a></div>

                    <!-- Blog Entries -->


                    <div class="span3">

                        <a href="About.php"><img src="img/blog2.png" alt="" class="member">
                        <h4>ABOUT US</h4></a>
                    </div>


                    <div class="span3">

                        <a href="Inquiry.php"><img src="img/blog3.png" alt="" class="member">
                        <h4>INQUIRY</h4></a>
                    </div>




                    <div class="span3">

                        <a href="contact.php"><img src="img/blog4.png" alt="" class="member">
                        <h4>CONTACT US</h4></a>
                        </div>
                </div>
            </div>
            <!-- FOOTER -->
            <?php require_once 'template/footer.php'; ?>
        </div>
        <!-- Javascripts -->
        <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.ba-cond.min.js"></script>
        <script type="text/javascript" src="js/jquery.slitslider.js"></script>
        <script type="text/javascript"> 
            $(function() {
    
                var Page = (function() {

                    var $nav = $( '#nav-dots > span' ),
                    slitslider = $( '#slider' ).slitslider( {
                        onBeforeChange : function( slide, pos ) {

                            $nav.removeClass( 'nav-dot-current' );
                            $nav.eq( pos ).addClass( 'nav-dot-current' );

                        }
                    } ),

                    init = function() {

                        initEvents();
            
                    },
                    initEvents = function() {

                        $nav.each( function( i ) {
            
                            $( this ).on( 'click', function( event ) {
                
                                var $dot = $( this );
                
                                if( !slitslider.isActive() ) {

                                    $nav.removeClass( 'nav-dot-current' );
                                    $dot.addClass( 'nav-dot-current' );
                
                                }
                
                                slitslider.jump( i + 1 );
                                return false;
              
                            } );
              
                        } );

                    };

                    return { init : init };

                })();

                Page.init();

                /**
                 * Notes: 
                 * 
                 * example how to add items:
                 */

                /*
      
            var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
      
            // call the plugin's add method
            ss.add($items);

                 */
    
            });
        </script>
    </body>
</html>