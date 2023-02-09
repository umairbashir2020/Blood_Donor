
<div class="header style-one header-main header-static-one">
    <style>
        .id{
        color: #ffffff !important;
        }
    </style>
    <!--Start Header Top-->
    <div class="header-top">
        <!--Start Header Top container-->
        <div class="container">
            <!--Start Header Top Row-->
            <div class="row">
                <div class="col-sm-5 col-xs-12">
                    <div class="topbar-contact-info">
                        <ul>

                            <li class="color-white">
                                <i class="fa fa-phone"></i><a class="id" href="tel:+923041469717">+923041469717 </a><small>&#124;</small>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a class="id" href="mailto:umairbashir2020@gmail.com">umairbashir2020@gmail.com</a>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-2 col-sm-offset-4 col-xs-12">
                    <div class="header-social-icon">
                        <ul>
                          <li><a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="https://www.linkedin.com/in/umair-bashir-b274571ba/"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="https://www.google.com/"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--End Header Top Row-->
        </div>
        <!--End Header Top container-->
    </div>
    <!--End Header Top-->

    <div class="clearfix"></div>
    <!--Start Main Menu-->
    <div class="mainmenu" data-spy="affix" data-offset-top="197">
        <!--Start Nav-->
        <nav class="navbar navbar-default">
            <!--Start Main Menu container-->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('eblood') }}"><img class="img-responsive" src="{{ asset('assetEblood/assets/img/logo.png') }}" alt="Logo"></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <!--Start Menu List-->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ URL::to('/') }}">Home</a></li>

                        <li><a href="{{ route('about_us') }}">About Us</a></li>
                        <li><a href="{{ route('whyBecomeDonor') }}">Why Become Donor</a></li>
                        <li><a href="{{ route('contactUs') }}">contact</a></li>
                        <li><a href="{{ route('becomeADonor') }}">Become A Donor</a></li> </ul>
                    <!--End Menu List-->
                </div>
            </div>
            <!--End Main Menu container-->
        </nav>
        <!--End Nav-->
    </div>
    <!--End Main Menu-->
</div>
