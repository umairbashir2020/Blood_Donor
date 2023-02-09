<section class="header-wrapper navgiation-wrapper">

    <div class="navbar navbar-default">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="logo" href="{{ route('blood_donor') }}"><img alt="" src="{{ asset('assets/images/logo.png') }}"></a>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="drop">
                        <a href="{{ route('blood_donor') }}" title="Home Layout 01">Home</a>
                        <ul class="drop-down">
                            <li><a href="index." title="Home Layout 01">Home Layout 1</a></li>
                            <li><a href="{{route('homelayout2') }}" title="Home Layout 02">Home Layout 2</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('aboutus') }}" title="About Us">About Us</a></li>



                    <li>
                        <a href="#">Campaign</a>
                        <ul class="drop-down">
                            <li><a href="{{ route('all_compaign') }}">All Campaigns</a></li>
                            <li><a href="{{ route('single_compaigns') }}">Single Campaign</a></li>
                        </ul>
                    </li>

                    <li class="drop"><a href="#">Pages</a>
                        <ul class="drop-down">


                            <li><a href="{{ route('faq') }}" title="FAQ">FAQ</a></li>
                            <li class="drop"><a href="#">Gallery</a>
                                <ul class="drop-down level3">
                                    <li><a href="layout_one">Layout 01</a></li>
                                    <li><a href="layout_two">Layout 02</a></li>

                                </ul>
                            </li>
                            <li><a href="404.html" title="404 Page">404 Page</a></li>
                            <li class="drop"><a href="#">Level 3</a>
                                <ul class="drop-down level3">
                                    <li><a href="#">Level 3.1</a></li>
                                    <li><a href="#">Level 3.2</a></li>
                                    <li><a href="#">Level 3.3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#">Blog</a>
                        <ul class="drop-down">
                            <li><a href="{{ route('all_post') }}">All Posts</a></li>
                            <li><a href="{{ route('single_page') }}">Single Page</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('contact_us') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>

</section>
