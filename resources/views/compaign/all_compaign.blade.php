@extends('layout.master')
@section('content')
    <section class="page-header" data-stellar-background-ratio="1.2" style="background-position: 0% 0%;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h3>
                        Campaign Lists
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / All Campaigns
                    </p>
                </div>
            </div> <!-- end .row  -->
        </div> <!-- end .container  -->
    </section>
    
    
    @include('frontend.campaigns')
    @include('frontend.helping')
    @include('frontend.logo')

@endsection
