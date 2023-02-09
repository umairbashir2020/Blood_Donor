@extends('layoutEblood.master')
@section('content')

        <!--Start Search Directory Section-->
        <section class="directory-search-form-slider business">
            <!--Start Slider Carousel-->
            <div id="directory-slider-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <!--Start Slide Item-->
                    <div class="item active" style="background: url('assetEblood/assets/img/slider/1504940419.jpg');">
                        <div class="directory-slider-overlay"></div>
                        <div class="slider-content">
                            <h2 class="text-bold animated rollIn">Wellcome to Blood Center</h2>
                            <h3 class="animated rollIn">Online Blood Group Management</h3>
                        </div>
                    </div>
                    <!--End Slide Item-->
                </div>
                {{-- <a class="left carousel-control" href="#directory-slider-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                <a class="right carousel-control" href="#directory-slider-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a> --}}
            </div>
            <!--End Slider Carousel-->

            <!--Start Search Filter-->
            <div class="container">
                <div class="row">
                    <form action="{{ route('searchedDonorList') }}" method="get">
                        @csrf
                        <div class="col-md-12">
                            <div class="search-filter">
                                <!--Start Search Keyword-->
                                {{-- <input type="text" class="form-control keyword" name="donor_name" placeholder="Doner Name"> --}}
                                <!--End Search Filter-->

                                <!--Start Search Location Options-->
                                <div class="search-location">
                                    <select name="group" class="form-control selectpicker">
                                     <option value="">select group</option>
                                      @foreach($allblood as $bloodGroup)
                                        <option value="{{ $bloodGroup->id }}">{{ $bloodGroup->blood_group }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <!--End Search Location Options-->

                                <!--Start Search locations-->
                                 <div class="search-location">
                                    <select name="city" class="form-control selectpicker">
                                     <option value="">select group</option>
                                      @foreach($selectCities as $cities)
                                        <option value="{{ $cities->id }}">{{ $cities->city }}</option>
                                      @endforeach
                                    </select>
                                </div>
                                <div class="search-location" disabled>
                                    <select name="" class="form-control selectpicker">
                                     <option value="">--</option>
                                      {{-- @foreach($selectCities as $cities) --}}
                                        {{-- <option value="{{ $cities->id }}">{{ $cities->city }}</option> --}}
                                      {{-- @endforeach --}}
                                    </select>
                                </div>
                                <!--End Search locations-->

                                <!--Start Search Button-->
                                <div class="search-btn">
                                    <button type="submit">SEARCH</button>
                                </div>
                                <!--End Search Button-->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--End Search Filter-->
        </section>
        <!--End Search Directory Section-->

        <!--Start Featured section-->
        <section class="business-feat">
            <!--Start Featured container-->
            <div class="container">
                <!--Start Section Title-->
                <div class="section-title">
                    <h2 class="text-center text-bold"><span>Donors</span></h2>
                </div>
                <!--End Section Title-->

                <!--Start Featured Row-->
                <div class="row">
                    @foreach ($records as $item)
                    <!--Start Featured Item Col-->
                    <div class="col-md-4 col-sm-6">
                        <!--Start Featured Item-->
                        <div class="feat-item">
                            <div class="feat-item-img" style="height:200px">
                                <img class="img-responsive id" src="{{ asset($item->image) }}" alt="" >
                            </div>
                            <div class="feat-item-cont">
                                <h4 class="text-bold">{{ $item->donor_name }}</h4>
                                <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Blood Group:</strong>{{ $item->donor->blood_group }} </p>
                                <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Age:</strong>{{ $item->age }}</p>
                                <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Sex:</strong>{{ $item->gender }}</p>
                                <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Mobile:</strong> {{ $item->phone }}</p>
                                <p><i class="fa fa-arrow-circle-right color-main"></i><strong> Location:</strong>{{ $item->city->city }}</p>
                            </div>
                        </div>
                        <!--End Featured Item-->
                    </div>
                    <!--End Featured Item Col-->
                    @endforeach
                </div>

                <!--End Featured Row-->
                <style>
                    span{
                        color: aliceblue;
                    }
                </style>
                <span class="btn color btn mt-none btn-sm btn-primary pull-right">
                    {{ $peginateShow->links() }}
                </span>
            </div>
            <!--End Featured container-->
        </section>
        <!--End Featured section-->

        <!--Start Counter Section-->
        <section class="counter two">
            <div class="counter-bg-ovelay"></div>
            <!--Start container-->
            <div class="container">
                <div class="row">


                    <!--Start Item-->
                    <div class="col-sm-4">
                        <div class="counter-item">
                            <i class="fa fa-users text-center"></i>
                            <h1 class="text-center extra integers">{{ $records->count() }}</h1>
                            <h4 class="text-center">Total Donors</h4>
                        </div>
                    </div>
                    <!--End Item-->


                    <!--Start Item-->
                    <div class="col-sm-4">
                        <div class="counter-item">
                            <i class="fa fa-users text-center"></i>
                            <h1 class="text-center extra integers">{{ $records->count() }}</h1>
                            <h4 class="text-center">Available Donors</h4>
                        </div>
                    </div>
                    <!--End Item-->


                    <!--Start Item-->
                    <div class="col-sm-4">
                        <div class="counter-item">
                            <i class="fa fa-medkit text-center"></i>
                            <h1 class="text-center extra integers">{{ $donorCount->count() }}</h1>
                            <h4 class="text-center">Blood Groups</h4>
                        </div>
                    </div>
                    <!--End Item-->

                </div>
            </div>
            <!--Start container-->
        </section>
        <!--End Counter Section-->

        <!--Start Testimonial Section-->
        <section class="doctor testimonial three">
            <!--Start container-->
            <div class="container">
                <!--Start Section Title-->
                <div class="section-title two">
                    <h2 class="text-center text-bold">Testimonial</h2>
                </div>
                <!--End Section Title-->

                <!--Start Testimonial Item Row-->
                <div class="row">


                    <!--Start Testimonial Item Col-->
                    <div class="col-md-6">
                        <!--Start Testimonial Item-->
                        <div class="testi-item-three">
                            <div class="testi-item-left float-left">
                                <img class="img-responsive" src="../shanto.thesoftking.com/eblood/assets/img/1504983857.html" alt="">
                            </div>
                            <div class="testi-item-right float-right">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos veritatis, suscipit beatae sunt assumenda ipsum earum recusandae fuga, omnis nam laborum, accusamus inventore cupiditate libero fugit at. Enim, impedit, perspiciatis.</blockquote>
                            </div>
                        </div>
                        <!--End Testimonial Item-->
                    </div>
                    <!--End Testimonial Item Col-->


                    <!--Start Testimonial Item Col-->
                    <div class="col-md-6">
                        <!--Start Testimonial Item-->
                        <div class="testi-item-three">
                            <div class="testi-item-left float-left">
                                <img class="img-responsive" src="../shanto.thesoftking.com/eblood/assets/img/1504983807.html" alt="">
                            </div>
                            <div class="testi-item-right float-right">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos veritatis, suscipit beatae sunt assumenda ipsum earum recusandae fuga, omnis nam laborum, accusamus inventore cupiditate libero fugit at. Enim, impedit, perspiciatis.</blockquote>
                            </div>
                        </div>
                        <!--End Testimonial Item-->
                    </div>
                    <!--End Testimonial Item Col-->


                </div>
                <!--End Testimonial Item Row-->
            </div>
            <!--End container-->
        </section>
        <!--End Testimonial Section-->
@endsection
