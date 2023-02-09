@extends('layout.master')
@section('content')
<section class="section-banner">

    <div class="container wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">

        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="banner-content">
                    <h2>
                        Donate blood and get real blessings.
                    </h2>					
                    <h3>Blood is the most precious gift that anyone can give to another person.<br>
                        Donating blood not only saves the life also save donor's lives.
                    </h3>

                    <a href="#" class="btn btn-slider">GET APPOINTMENT</a>   
                </div>
            </div> <!-- end .col-md-12  -->
        </div>

    </div>

</section>

@include("frontend.donetion_process")
@include('frontend.team')
@include('frontend.campaigns')
@include('frontend.cta')
@include('frontend.appointment')
@include("frontend.gallery")
@include("frontend.blog")
@endsection