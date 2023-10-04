<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>AAIAC 2023 | Ticket</title>
<!-- Stylesheets -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="assets/plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="assets/plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">
<script src="assets/js/jquery.js"></script>
<link rel="shortcut icon" href="assets/images/icon-colored.png" type="image/x-icon">
<link rel="icon" href="assets/images/icon-light.png" type="image/x-icon">
<!--Color Switcher Mockup-->
<link href="assets/css/color-switcher-design.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<script src="assets/js/payment.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<script type="text/javascript">
    $(document).ready(function(){
        $("#valid").hide();
        //   const input = document.querySelector("#phone");
        //   window.intlTelInput(input, {
        //     utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
        //   });

    $("#ticketType").change(function(){
     var tt = $(this).val();
     if (tt=="pp-member") {
        $("#valid").hide();
        $("#tt").html("Physical Presenter (IEEE Member)");
        $("#total").html("$80");
     }
     if(tt=="pp-nmember"){
        $("#valid").hide();
        $("#tt").html("Physical Presenter (IEEE Non Member)");
        $("#total").html("$100");
     }
     if(tt=="pnp-member"){
        $("#valid").hide();
        $("#tt").html("Physical Non Presenter (IEEE Member)");
        $("#total").html("$64");
     }
     if(tt=="pnp-nmember"){
        $("#valid").hide();
        $("#tt").html("Physical Non Presenter (IEEE Non Member)");
        $("#total").html("$80");
     }
     if (tt=="op-member") {
        $("#valid").hide();
        $("#tt").html("Online Presenter (IEEE Member)");
        $("#total").html("$64");
     }
     if(tt=="op-nmember"){
        $("#tt").html("Online Presenter (IEEE Non Member)");
        $("#total").html("$84");
     }
     if(tt=="onp-member"){
        $("#valid").hide();
        $("#tt").html("Online Non Presenter (IEEE Member)");
        $("#total").html("$40");
     }
     if(tt=="onp-nmember"){
        $("#valid").hide();
        $("#tt").html("Online Non Presenter (IEEE Non Member)");
        $("#total").html("$50");
     }
     if(tt=="psp"){
        $("#valid").hide();
        $("#tt").html("Physical Student Presenter");
        $("#total").html("$50");
     }
     if(tt=="psnp"){
        $("#valid").hide();
        $("#tt").html("Physical Student Non Presenter");
        $("#total").html("$30");
     }
     if(tt=="osp"){
        $("#valid").hide();
        $("#tt").html("Online Student Presenter");
        $("#total").html("$30");
     }
     if(tt=="osnp"){
        $("#valid").hide();
        $("#tt").html("Online Student Non Presenter");
        $("#total").html("$20");
     }
     if(tt=="none"){
        $("#valid").show();
        $("#tt").html("Not Selected");
        $("#total").html("$00");
     }


    });


});



   
</script>
</head>


<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->

    <!-- Main Header-->
    <header class="main-header header-style-one">

        
        <!-- Header Lower -->
        <div class="header">
            <div class="" >    
                <!-- Main box -->
                <div class="main-box">


                    <div class="nav-outer">

                        <!-- Main Menu -->
                        <nav class="main-menu navbar-expand-md">
                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="./index.html">Home</a></li>
                                    <li><a href="./index.html#about">About</a></li>
                                    <li><a href="./index.html#contact">Contact us</a></li>
                                </ul>
                            </div>
                        </nav>
                        

                    </div>
                </div>
            </div>
        </div>

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">            

                <div class="main-box">
                    <div class="logo-box">
                        <div class="logo"><a href="index.html"><img src="assets/images/logo-colored.png" alt="" title=""></a></div>
                        <div class="upper-right">
                            <div class="search-box">
                                <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>
                            </div>
                            <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>
                        </div>
                    </div>
                    
                    <nav class="main-menu navbar-expand-md">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Header -->
        <div class="mobile-header">
            <div class="logo"><a href="index.html"><img src="assets/images/logo-colored.png" alt="" title=""></a></div>

            <!--Nav Box-->
            <div class="nav-outer clearfix">
                <div class="outer-box">
                    <!-- Search Btn -->
                    <div class="search-box">
                        <button class="search-btn mobile-search-btn"><i class="flaticon-search-2"></i></button>
                    </div>

                    <a href="#nav-mobile" class="mobile-nav-toggler navbar-trigger"><i class="flaticon-menu"></i></a>
                </div>
            </div>
        </div>

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            
            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-colored.png" alt="" title=""></a></div>
                    <div class="close-btn"><i class="icon flaticon-close"></i></div>
                </div>

                <ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>

                <ul class="contact-list-one">
                    <li><i class="flaticon-location"></i> P. O. Box 490, Dodoma, Tanzania <strong>Address</strong></li>
                    <li><i class="flaticon-alarm-clock-1"></i>Monday - Friday 9am - 4pm <strong>Timeing</strong></li>
                    <li><i class="flaticon-email-1"></i> <a href="mailto:conference@ai4dlab.or.tz">conference@ai4dlab.or.tz</a> <strong>Mail to us</strong></li>
                </ul>

                <ul class="social-links">
                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest"></span></a></li>
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-dribbble"></span></a></li>
                </ul>
            </nav>
        </div><!-- End Mobile Menu -->

        <!-- Header Search -->
        <div class="search-popup">
            <button class="close-search"><i class="flaticon-close"></i></button>
            <form method="post" action="blog.html">
                <div class="form-group">
                    <input type="search" name="search-field" value="" placeholder="Search" required="">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
        </div>
        <!-- End Header Search -->

    </header>
    <!--End Main Header -->

    <!-- Hidden bar back drop -->
    <div class="form-back-drop"></div>

    <!-- Hidden Bar -->
    <section class="hidden-bar">
        <div class="inner-box">
            <div class="title-box">
                <h2>Contact Us</h2>
                <div class="cross-icon"><span class="fa fa-times"></span></div>
            </div>  

            <ul class="contact-list-one">
                <li><i class="flaticon-location"></i> P. O. Box 490, Dodoma <strong>Address</strong></li>
                <li><i class="flaticon-alarm-clock-1"></i>Wednesday - Thursday 9am - 6pm <strong>Timeing</strong></li>
                <li><i class="flaticon-email-1"></i> <a href="mailto:envato@gmail.com">conference@ai4dlab.or.tz</a> <strong>Mail to us</strong></li>
            </ul>
        </div>
    </section>
    <!--End Hidden Bar -->

    <!--Page Title-->
    <section class="page-title" style="background-image: url(images/background/11.jpg);">
        <div class="anim-icons full-width">
            <span class="icon icon-bull-eye"></span>
            <span class="icon icon-dotted-circle"></span>
        </div>
        <div class="auto-container">
            <div class="title-outer">
                <h1>Buy Ticket</h1>
                <ul class="page-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Mobile Money Payment</li>
                </ul> 
            </div>
        </div>
    </section>
    <!--End Page Title-->
    <br>
    <div class="container">
        <h1>Payment Instructions</h1>
        <p>Payment Details:</p>
        <ol>
            <li>Account Number: <b>408 1011 4173</b></li>
            <li>Account Name: <b>IEEE Tanzania Section</b></li>
        </ol>
        <p>Please follow the instructions below to make the payment:</p>
        <ol>
            <li>Choose your preferred mobile network and dial the respective code.</li>
            <li>Enter the amount based on the current exchange rate and confirm the payment.</li>
            <li>After successful payment, enter the reference number in the form below and click Submit.</li>
        </ol>
        <h2>Mobile Network Payment Options</h2>
        <div class="container">
        <div class="row">
            <!-- Vodacom -->
            <div class="col-md-2">
                <div class="card payment-card">
                    <div class="card-body">
                        <h5 class="card-title">Vodacom</h5>
                        <p class="card-text">Dial *150*00#</p>
                    </div>
                </div>
            </div>
            <!-- Tigo -->
            <div class="col-md-2">
                <div class="card payment-card">
                    <div class="card-body">
                        <h5 class="card-title">Tigo</h5>
                        <p class="card-text">Dial *150*01#</p>
                    </div>
                </div>
            </div>
            <!-- Airtel -->
            <div class="col-md-2">
                <div class="card payment-card">
                    <div class="card-body">
                        <h5 class="card-title">Airtel</h5>
                        <p class="card-text">Dial *150*60#</p>
                    </div>
                </div>
            </div>
            <!-- Halotel -->
            <div class="col-md-2">
                <div class="card payment-card">
                    <div class="card-body">
                        <h5 class="card-title">Halotel</h5>
                        <p class="card-text">Dial *150*88#</p>
                    </div>
                </div>
            </div>
            <!-- Zantel -->
            <div class="col-md-2">
                <div class="card payment-card">
                    <div class="card-body">
                        <h5 class="card-title">Zantel</h5>
                        <p class="card-text">Dial *150*02#</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Payment Form -->
        <h2 class="mt-5">Payment Reference</h2>
        <form id="paymentForm" class="mt-3">
            <div class="form-group">
                <label for="referenceNumber">Enter Reference Number:</label>
                <input type="text" id="referenceNumber" name="referenceNumber" class="form-control" required>
            </div>
            <div class="ml-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="ticket.php" class="btn btn-danger">Cancel</a>
    </div>
        </form>

        <!-- Display Reference Number -->
        <div id="result" class="mt-3"></div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- jQuery and AJAX Script -->
    <script>
        $(document).ready(function () {
            // Form Validation and AJAX Request
            $('#paymentForm').submit(function (e) {
                e.preventDefault();
                var referenceNumber = $('#referenceNumber').val();

                // Simulate processing delay (remove this in real implementation)
                setTimeout(function () {
                    // Generate a random reference number for demonstration
                    var randomReference = Math.floor(Math.random() * 1000000000);
                    $('#result').html('Reference Number: ' + randomReference);
                }, 1500);
            });
        });
    </script>
</body>

<!-- End Page Wrapper -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<!--Revolution Slider-->
<script src="assets/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="assets/js/main-slider-script.js"></script>
<!--Revolution Slider-->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/jquery.countdown.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/script.js"></script>

</body>
</html>