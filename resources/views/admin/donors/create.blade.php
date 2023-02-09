<!DOCTYPE html>
<html lang="en">
@include('admin.include.head')
<body>
    <div id="wrapper">
        <!-- Navigation -->
        @include('admin.include.navbar')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Donors Management</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height:48px;">
                            <span class="pull-left" style="font-size:20px;"><i class="fa fa-plus"></i> Create New Donor</span>
                            <a href="{{ route('Donor_list') }}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-arrow-circle-left"></i> back to donors</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <form role="form" method="post" action="{{ route('donor_store') }}" enctype="multipart/form-data">
                                    @csrf
						        <input type="hidden" name="#" value="#" />

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Donor Name:</label>
                                        <input type="text" class="form-control" name="donor_name" value="" placeholder="Enter Donor Name">
                                        @error('donor_name')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Gender:</label>
                                        <select name="gender" class="form-control">
										  <option value="">Select One</option>
										  <option value="Male" >Male</option>
										  <option value="Female" >Female</option>
										</select>
                                    </div>
                                </div>
								<div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Blood Group:</label>
                                        <select name="blood_group_id"  class="form-control">
                                            <option value="">Select Blood Group</option>


                                            @foreach($bloodGroup as $blood_group)
                                             <option value="{{ $blood_group->id}}" selected="selected">{{$blood_group->blood_group}}</option>
                                            @endforeach

                                         </select>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">

                                    <div class="col-md-6 col-md-offset-1">

                                        <label class="control-label">Email:</label>

                                        <input type="text" class="form-control" name="email" value="" placeholder="Email">
                                        @error('email')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror

                                    </div>

                                </div>



                                <div class="row" style="margin-top:20px;">

                                    <div class="col-md-6 col-md-offset-1">

                                        <label class="control-label">Password:</label>

                                        <input type="password" class="form-control" name="password" value="" placeholder="Password">
                                        @error('password')
                                        <span class="text-danger">{{$message}}</span>
                                      @enderror

                                    </div>

                                </div>



								<div class="row" style="margin-top:20px;">

                                    <div class="col-md-6 col-md-offset-1">

                                        <label class="control-label">Age:</label>

                                        <input type="text" class="form-control" name="age" value="" placeholder="Age">
                                        @error('age')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror

                                    </div>

                                </div>



								<div class="row" style="margin-top:20px;">

                                    <div class="col-md-6 col-md-offset-1">

                                        <label class="control-label">Phone:</label>

                                        <input type="text" class="form-control" name="phone" value="" placeholder="Phone No">
                                        @error('phone')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror

                                    </div>

                                </div>



                                <div class="row" style="margin-top:20px;">

                                    <div class="col-md-6 col-md-offset-1">

                                        <label class="control-label">City:</label>
                                        <select name="city_id"   class="form-control" >
                                            <option value="">Select City</option>


                                            @foreach($donor_cities as $donor_city)
                                            <option value="{{ $donor_city->id}}" selected="selected" > {{$donor_city->city}} </option>
                                              @endforeach

                                            </option>
                                         </select>

                                    </div>

                                </div>



								<div class="row" style="margin-top:20px;">

                                    <div class="col-md-6 col-md-offset-1">

                                        <label class="control-label">Image:</label>

                                        <div class="row">

                                        <div class="col-md-10">

                                             <input type="file" name="image">

                                             <p class="help-block"><span class="label label-warning">Max 2MB (jpg, gif, png)</span>&nbsp;</p>
                                             @error('image')
                                             <span class="text-danger">{{$message}}</span>
                                             @enderror


                                         </div>

                                        </div>


                                    </div>

                                </div>



								<div class="row" style="margin-top:20px;">

                                    <div class="col-md-6 col-md-offset-1">

                                        <button type="submit" class="btn btn-lg btn-success">Submit Data</button>

                                    </div>

                                </div>

                                </form>

                            </div>

                        </div>

                        <!-- /.panel-body -->

                    </div>

                    <!-- /.panel -->

                </div>

                <!-- /.col-lg-12 -->

            </div>

        </div>

        <!-- /#page-wrapper -->

    </div>

    <!-- /#wrapper -->

   @include('admin.include.js')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4CoeJ-dMBGaqCKRb1oe0jbmz21LoOO5U

&libraries=places&callback=initAutocomplete"

        async defer></script>

<script>

function initAutocomplete()

{

	autocomplete = new google.maps.places.Autocomplete(

	(document.getElementById('address2')),

	{types: ['geocode']});



}

</script>

</body>

</html>
