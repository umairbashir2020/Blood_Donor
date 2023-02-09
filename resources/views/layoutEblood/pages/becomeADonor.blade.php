@extends('layoutEblood.master')
{{-- @dd('Ali',$location); --}}
<script>
    window.onload = function() {
        setTimeout(function(){
            var alert = document.getElementById("alert");
            alert.style.display = "none";

        }, 5000);
    };
</script>
@if(isset($message))
    <div class="alert alert-{{$message['status']}}"  id="alert">
        {{ $message['message'] }}
    </div>
@endif

<br><br><br><br><br>
@section('content')
<section class="business-feat">
    <!--Start Featured container-->
    <div class="container">
                      <!--Start Section Title-->
        <div class="section-title">
            <h2 class="text-center text-bold"><span>Become </span>a Donor</h2>
        </div>
        <!--End Section Title-->

        <!--Start Featured Row-->
        <div class="row">
            <!--Start Featured Item Col-->
            <div class="col-md-8 col-md-offset-2 col-sm-12">
{{-- @dd($donorRegistered); --}}
              <form action="{{ route('donorRegister') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="name" class="control-label">Name <span style="color: #E50000;">*</span></label>
                    <input name="donor_name" id="name" class="form-control" type="text" required="">
                  </div>
                </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="img" class="control-label">Picture <span style="color: #E50000;">*</span></label>
                    <input name="img" id="img" class="form-control" type="file" required="">
                  </div>
                </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="age" class="control-label">Age <span style="color: #E50000;">*</span></label>
                    <input name="age" id="age" class="form-control" type="number" required="">
                  </div>
                </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="mobile" class="control-label">Mobile <span style="color: #E50000;">*</span></label>
                    <input name="phone" id="mobile" class="form-control" type="text" required="">
                  </div>
                </div>
            <div class="col-md-6 col-md-offset-0">
                <div class="form-group">
                <label for="city" class="control-label">City <span style="color: #E50000;">*</span></label>
                <select name="city" id="city" class="form-control" required="">
                    <option value="">Select city</option>
                    @foreach($location as $city)
                    <option value="{{ $city->id }}"> {{ $city->city }}</option>
                    @endforeach
                </select>
                </div>
            </div>

                <div class="col-md-6 col-md-offset-0">
                  <div class="form-group">
                    <label for="sex" class="control-label">Gender <span style="color: #E50000;">*</span></label>
                    <select name="gender" id="" class="form-control" required="">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group">
                    <label for="bgroup" class="control-label">Blood Group <span style="color: #E50000;">*</span></label>
                    <select name="blood_groups" id="bgroup" class="form-control" required="">
                        @foreach ($bloods as $blood)
                        <option value="{{ $blood->id }}" selected='selected'> {{$blood->blood_group  }}</option>

                        @endforeach
                    </select>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <button type="submit" class="btn btn-block btn-primary cont-frm-btn">Register</button>
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
