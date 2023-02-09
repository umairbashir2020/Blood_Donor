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
                <div class="col-md-12">
                    <div class="col-md-12 page-header">
                        <span class="title pull-left">Donors Management</span>
                        <a href="{{ route('Donor_create') }}" class="btn btn-sm btn-success pull-right">
                            <i class="fa fa-plus"></i>
                             Create New Donor
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->

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
                    <div class="table-responsive">


                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="6%">ID</th>
                                    <th width="15%">Donor Name</th>
                                    <th width="20%">Email</th>
                                    <th width="10%">Gender</th>
                                    {{-- <th width="20%">Created</th> --}}
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donors as $donor)
                                    <tr class="odd">
                                        <td>{{ $donor->id }}</td>
                                        <td>{{ $donor->donor_name }}</td>
                                        {{-- <td>{{ $donor->donor->blood_group }}</td> --}}
                                        <td>{{ $donor->email }}</td>
                                        <td>{{ $donor->gender }}</td>
                                        {{-- <td>{{ $donor->age }}</td>
                                        <td>{{ $donor->phone }}</td>
                                        <td>{{ $donor->city->city }}</td> --}}
                                        {{-- <td><img src="{{$donor->image}}" height="50px" width="150px"></td> --}}
                                        {{-- <td>{{ $donor->created_at }}</td> --}}

                                        <td class="text-center">
                                            <a class="btn btn-sm btn-primary" href="{{ route('donor_edit',['id'=>$donor->id]) }}">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a class="btn btn-sm btn-primary" href="{{ route('donor_detils',['id'=>$donor->id]) }}">
                                               Details
                                            </a>

                                            <a onClick="return confirm('Are you sure to delete this donor?');"
                                                class="btn btn-sm btn-danger"href="{{ route('donor_delete',['id'=>$donor->id]) }}">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    @include('admin.include.js')
    <script>
        $(document).ready(function() {
            $('#dataTables-example').dataTable();
        });
    </script>
</body>

</html>
