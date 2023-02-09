<section>

       <!--Start Footer-->
       <footer class="footer switcher-footer-three">
        <!--Start Footer Top-->
        <div class="footer-top">
            <!--Start container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Col-->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-cont-details">
                            <h5 class="text-left text-upper">Short About us</h5>
                            <div class="border-line"></div>
                            <img class="img-responsive" src="images/logo/logo-footer.html" alt="">
                            <p class="text-left">Register to be a blood donor, give blood and save lives. Find out more about blood donation.</p>
                            <div class="footer-address">
                                <p class="text-left"><i class="fa fa-phone"></i><a class="id" href="tel:+923041469717">+923041469717</a></p>
                                <p class="text-left"><i class="fa fa-envelope"></i><a class="id" href="mailto:umairbashir2020@gmail.com">umairbashir2020@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!--End Col-->

                    <!--Start Col-->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-categories">
                            <h5 class="text-left text-upper">Menus</h5>
                            <div class="border-line"></div>
                            <div class="footer-categories-links">
                                <ul>
                                    <li><a href="{{ route('eblood') }}"><i class="fa fa-arrow-circle-right"></i> Home</a></li>

                                    <li><a href="{{route('about_us')  }}"><i class="fa fa-arrow-circle-right"></i>About Us</a></li>
                                    <li><a href="{{ route('whyBecomeDonor') }}"><i class="fa fa-arrow-circle-right"></i>Why Become Donor</a></li>
                                    <li><a href="{{ route('contactUs') }}"><i class="fa fa-arrow-circle-right"></i>contact</a></li>
                                    <li><a href="{{ route('becomeADonor') }}"><i class="fa fa-arrow-circle-right"></i>Become A Donor</a></li>                                    </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Col-->

                    <!--Start Col-->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-categories">
                            <h5 class="text-left text-upper">New Doners</h5>
                            <div class="border-line"></div>
                            <div class="footer-categories-links">
                                  <ul>
                                    <li><a><i class="fa fa-user"> Abir Khan</i></a></li>
                                    <li><a><i class="fa fa-user"> Abir Khan</i></a></li>
                                    <li><a><i class="fa fa-user"> dv b</i></a></li>
                                    <li><a><i class="fa fa-user"> dv b</i></a></li>
                                 </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Col-->

                    <!--Start Col-->
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-contact-form">
                            <h5 class="text-left text-upper">Feeadback</h5>
                            <div class="border-line"></div>
                            <form action="{{ route('feedback') }}" method="POST" id="feed-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name" name="name" required=" ">
                                    <input type="text" class="form-control" placeholder="Email" name="email" required=" ">
                                    <input type="text" class="form-control" placeholder="Mobile" name="phone_number" required=" ">
                                    <input type="hidden" name="location" value="feedback-location">
                                    <textarea class="form-control" rows="5" placeholder="Message" name="message" required=" "></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary cont-frm-btn">Send Feedback</button>
                            </form>
                        </div>
                    </div>
                    <!--End Col-->
                </div>
                <!--End Row-->
            </div>
            <!--End container-->
        </div>
        <!--End Footer Top-->
        <!--Start Footer Bottom-->
        <div class="footer-bottom">
            <!--Start container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <!--Start Col-->
                    <div class="col-sm-6 col-xs-12">
                        <div class="copy-right-text">
                            <p class="text-left">Copyright © 2023 - BloodBank - All Rights Reserved</p>
                        </div>
                    </div>
                    <!--End Col-->

                    <!--Start Col-->
                    <div class="col-sm-6 col-xs-12">
                        <div class="footer-menu">
                            <nav>
                                <ul>
                                    <li><a href="{{ URL::to('/') }}">Home</a></li>

                                    <li><a href="{{route('about_us')  }}">About Us</a></li>
                                    <li><a href="{{ route('whyBecomeDonor') }}">Why Become Donor</a></li>
                                    <li><a href="{{ route('contactUs') }}">contact</a></li>                                    </ul>
                            </nav>
                        </div>
                    </div>
                    <!--End Col-->
                </div>
                <!--End Row-->
            </div>
            <!--End container-->
        </div>
        <!--End Footer Bottom-->

        <!--Start ClickToTop-->
        <div class="totop">
            <!--Start ClickToTop-->
            <a href="#top"><i class="fa fa-angle-up"></i></a>
        </div>
        <!--End ClickToTop-->
    </footer>
    <!--End Footer-->
</section>
