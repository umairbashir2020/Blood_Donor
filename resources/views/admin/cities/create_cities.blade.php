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
                    <h1 class="page-header">City Management</h1>
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
                            <span class="pull-left" style="font-size:20px;"><i class="fa fa-plus"></i> Create New
                                City</span>
                            <a href="#" class="btn btn-sm btn-primary pull-right"><i
                                    class="fa fa-arrow-circle-left"></i> back to cities</a>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                               

                               
                              
                                <form role="form" method="post" action="{{ isset($cities) ? route('cities_update',['id'=>$cities->id]): route('c_store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-6 col-md-offset-1">
                                            
                                            <label class="control-label">City Name:</label>
                                            
                                            <input type="text" class="form-control" name="city"  value="{{old('city',$cities->city ?? '') }}"
                                                placeholder="Enter City Name">
                                                @error('city')
                                                <span class="text-danger">{{$message}}</span>
                                              @enderror
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top:20px;">
                                        <div class="col-md-6 col-md-offset-1">
                                            <button type="submit" class="btn btn-lg btn-primary">
                                                @if(isset($cities)) {{'Update'}} @else {{'Submit'}} @endif
                                                 </button>
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

</body>

</html>
