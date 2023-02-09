@extends('layout.master')
@section('content')
    <section class="page-header">
        <div class="container">
            <div class="row">
              <div class="col-sm-12 text-center">
                    <h3>
                        About Us
                    </h3>
                    <p class="page-breadcrumb">
                        <a href="#">Home</a> / About Us
                    </p>
                </div>

            </div> <!-- end .row  -->

        </div> <!-- end .container  -->
    </section>

</div>

@include('frontend.team')
@include('frontend.counter')
@include('frontend.logo')
@include('frontend.cta')
@include('frontend.helping')

@endsection