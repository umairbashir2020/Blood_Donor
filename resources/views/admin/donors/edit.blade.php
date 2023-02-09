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

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="height:48px;">
                            <span class="pull-left" style="font-size:20px;"><i class="fa fa-edit"></i> Edit Donor</span>
                            <a href="{{ route('Donor_list') }}" class="btn btn-sm btn-primary pull-right"><i class="fa fa-arrow-circle-left"></i> back to donors</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">


                                <form role="form" method="post" action="{{ route('donor_update',['id'=>$blood_donors->id])}}" enctype="multipart/form-data">
                                 @csrf
						        <input type="hidden" name="#" value="#" />
                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Donor Name:</label>
                                        <input type="text" class="form-control" name="donor_name" value="{{ old('name',$blood_donors->donor_name) }}">
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Gender:</label>
                                        <input type="text" class="form-control" name="gender" value="{{ old('name',$blood_donors->gender) }}">


										{{-- <select name="gender" class="form-control">
                                            <option value="{{ old('name',$blood_donors->gender) }}">--</option>
                                            <option value="Male">Male</option>
											<option value="Female">Female</option>
                                         </select> --}}
                                    </div>
                                </div>

								<div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Blood Group:</label>
                                        <select name="blood_group" class="form-control">
                                            <option value="">Select Blood Group</option>

                                            @foreach ($all_bloods as $blood)
                                                <option value="{{ $blood->id }}" {{ $blood->id == $blood_donors->blood_group_id ? 'selected': '' }}> {{$blood->blood_group }}</option>
                                            @endforeach

                                         </select>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Email:</label>
                                        <input type="text" class="form-control" name="email" value="{{ old('name',$blood_donors->email) }}">
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Password:</label>
                                        <input disabled type="password" class="form-control" name="password" value="" autocomplete="off">
                                        <p class="help-block" style="margin-bottom:0px;"><span class="text-danger"><i class="fa fa-info-circle"></i> leave blank for no change in  old password.</span></p>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Age:</label>
                                        <input type="text" class="form-control" name="age" value="{{ old('name',$blood_donors->age) }}">
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">Phone:</label>
                                        <input type="text" class="form-control" name="phone" value="{{ old('name',$blood_donors->phone)}}">
                                    </div>
                                </div>

								<div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <label class="control-label">City:</label>
                                        <select name="city" class="form-control">
                                         <option value="">Select City</option>
                                          @foreach ($all_cities as $city)
                                             <option value="{{ $city->id }}"
                                               {{ $city->id == $blood_donors->city_id ? 'selected': '' }}>  {{$city->city }}
                                             </option>
                                           @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                             {{-- <p class="help-block">
                                                <img src="{{ asset('assets/upload/donor_images/md/')}}" style="width:25%;" />
                                             </p> --}}

										<label class="control-label">Image:</label>
                                        <div class="row">
                                        <div class="col-md-10">
											 <input type="file" name="image">
                                             @if(isset($blood_donors))
                                             <img src="{{asset ("$blood_donors->image")}}" width="200px" height="100px">
                                             @endif
                                             <p class="help-block"><span class="label label-warning">Max 2MB (jpg, gif, png)</span>&nbsp;</p>
                                         </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top:20px;">
                                    <div class="col-md-6 col-md-offset-1">
                                        <button type="submit" class="btn btn-lg btn-success">Update Data</button>
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
