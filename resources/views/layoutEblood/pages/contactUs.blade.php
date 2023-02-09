@extends('layoutEblood.master')
@section('content')
<br>
<br>
<br>
<br>
<br>
<section class="business-feat">
    <!--Start Featured container-->
    <div class="container">
                      <!--Start Section Title-->
        <div class="section-title">
            <h2 class="text-center text-bold"><span>Contact</span> With Us</h2>
        </div>
        <!--End Section Title-->

        <!--Start Featured Row-->
        <div class="row">
            <!--Start Featured Item Col-->
            <div class="col-md-8 col-md-offset-2 col-sm-12">
              <form action="{{ route('contactUs') }}" method="post" >
                @csrf
                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label class="control-label">Name <span style="color: #E50000;">*</span></label>
                    <input name="name" id="name" class="form-control" type="text" required=" ">
                  </div>
                </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label class="control-label">Email <span style="color: #E50000;">*</span></label>
                    <input name="email" id="email" class="form-control" type="text" required=" ">
                  </div>
                </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label class="control-label">Mobile <span style="color: #E50000;">*</span></label>
                    <input name="phone_number" id="mobile" class="form-control" type="text" required=" ">
                  </div>
                </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label class="control-label">Address <span style="color: #E50000;">*</span></label>
                    <input name="address" id="location" class="form-control" type="text" required=" ">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label">Message <span style="color: #E50000;">*</span></label>
                    <textarea rows="8" name="message" id="message" class="form-control" required=" "></textarea>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary cont-frm-btn">Send Message</button>
                  </div>
                </div>
              </form>

            </div>
            <!--End Featured Item Col-->
        </div>
        <!--End Featured Row-->
    </div>
    <!--End Featured container-->
</section>
@endsection
