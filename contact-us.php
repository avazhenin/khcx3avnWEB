<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Contact Us | Nova</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/sl-slide.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

        <!-- Le fav and touch icons -->
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    </head>

    <body>

        <?php
        $index = '';
        $about = '';
        $feedback = '';
        $food = '';
        $facts = '';
        $landscape = '';
        $contact = 'class = "active"';
        include './navigation.php';
        ?>

        <section class="title">
            <div class="container">
                <div class="row-fluid">
                    <div class="span6">
                        <h1>About Us</h1>
                    </div>
                    <div class="span6">
                        <ul class="breadcrumb pull-right">
                            <li><a href="index.php">Home</a> <span class="divider">/</span></li>
                            <li class="active" style="color: yellow;">Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- / .title --> 
        <section class="no-margin">
            <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.au/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=dhaka+ban&amp;sll=40.714353,-74.005973&amp;sspn=0.836898,1.815491&amp;ie=UTF8&amp;hq=&amp;hnear=Dhaka+Division,+Bangladesh&amp;t=m&amp;ll=24.542126,90.293884&amp;spn=0.124922,0.411301&amp;z=8&amp;output=embed"></iframe>
        </section>

        <section id="contact-page" class="container">
            <div class="row-fluid">

                <div class="span8">
                    <h4>Contact Form</h4>
                    <div class="status alert alert-success" style="display: none"></div>

                    <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                        <div class="row-fluid">
                            <div class="span5">
                                <label>First Name</label>
                                <input type="text" class="input-block-level" required="required" placeholder="Your First Name">
                                <label>Last Name</label>
                                <input type="text" class="input-block-level" required="required" placeholder="Your Last Name">
                                <label>Email Address</label>
                                <input type="text" class="input-block-level" required="required" placeholder="Your email address">
                            </div>
                            <div class="span7">
                                <label>Message</label>
                                <textarea name="message" id="message" required="required" class="input-block-level" rows="8"></textarea>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary btn-large pull-right">Send Message</button>
                        <p> </p>

                    </form>
                </div>

                <div class="span3">
                    <h4>Our Address</h4>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                    <p>
                        <i class="icon-map-marker pull-left"></i> 1209 Willow Oaks Lane, New York<br>
                        Lafayette, 1212,  United States
                    </p>
                    <p>
                        <i class="icon-envelope"></i> &nbsp;email@example.com
                    </p>
                    <p>
                        <i class="icon-phone"></i> &nbsp;+123 45 67 89
                    </p>
                    <p>
                        <i class="icon-globe"></i> &nbsp;http://www.shapebootstrap.net
                    </p>
                </div>

            </div>

        </section>

        <!--Bottom-->
        <section id="bottom" class="main">
            <!--Container-->
            <div class="container">

                <!--row-fluids-->
                <div class="row-fluid">

                    <!--Contact Form-->
                    <div class="span3">
                        <h4>ADDRESS</h4>
                        <ul class="unstyled address">
                            <li>
                                <i class="icon-home"></i><strong>Address:</strong> 1032 Wayback Lane, Wantagh<br>NY 11793
                            </li>
                            <li>
                                <i class="icon-envelope"></i>
                                <strong>Email: </strong> support@email.com
                            </li>
                            <li>
                                <i class="icon-globe"></i>
                                <strong>Website:</strong> www.domain.com
                            </li>
                            <li>
                                <i class="icon-phone"></i>
                                <strong>Toll Free:</strong> 631-409-3105
                            </li>
                        </ul>
                    </div>
                    <!--End Contact Form-->

                    <!--Important Links-->
                    <div id="tweets" class="span3">
                        <h4>OUR COMPANY</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Copyright</a></li>
                                <li><a href="#">We are hiring</a></li>
                                <li><a href="#">Clients</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>  
                    </div>
                    <!--Important Links-->

                    <!--Archives-->
                    <div id="archives" class="span3">
                        <h4>ARCHIVES</h4>
                        <div>
                            <ul class="arrow">
                                <li><a href="#">December 2012 (1)</a></li>
                                <li><a href="#">November 2012 (5)</a></li>
                                <li><a href="#">October 2012 (8)</a></li>
                                <li><a href="#">September 2012 (10)</a></li>
                                <li><a href="#">August 2012 (29)</a></li>
                                <li><a href="#">July 2012 (1)</a></li>
                                <li><a href="#">June 2012 (31)</a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Archives-->

                    <div class="span3">
                        <h4>FLICKR GALLERY</h4>
                        <div class="row-fluid first">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                                </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                                </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                                </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                                </li>
                            </ul>
                        </div>
                        <div class="row-fluid">
                            <ul class="thumbnails">
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                                </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                                </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                                </li>
                                <li class="span3">
                                    <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
                <!--/row-fluid-->
            </div>
            <!--/container-->

        </section>
        <!--/bottom-->

        <?php include './footer.php'; ?>     

        <!--  Login form -->
        <div class="modal hide fade in" id="loginForm" aria-hidden="false">
            <div class="modal-header">
                <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
                <h4>Login Form</h4>
            </div>
            <!--Modal Body-->
            <div class="modal-body">
                <form class="form-inline" action="index.html" method="post" id="form-login">
                    <input type="text" class="input-small" placeholder="Email">
                    <input type="password" class="input-small" placeholder="Password">
                    <label class="checkbox">
                        <input type="checkbox"> Remember me
                    </label>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>
                <a href="#">Forgot your password?</a>
            </div>
            <!--/Modal Body-->
        </div>
        <!--  /Login form -->

        <script src="js/vendor/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/main.js"></script>   

    </body>
</html>
