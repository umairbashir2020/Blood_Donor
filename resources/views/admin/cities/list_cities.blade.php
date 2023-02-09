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
                        <span class="title pull-left">City Management</span>
                        <a href="{{ route('create_cities') }}" class="btn btn-sm btn-success pull-right"><i
                                class="fa fa-plus"></i> Create City</a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            @if (session()->has('danger'))
                <div class="alert alert-danger">
                    {{ session()->get('danger') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="10%">ID</th>
                                    <th width="40%">Name</th>
                                    <th width="30%">Created</th>
                                    <th width="20%">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($cities as $city)
                                    <tr class="odd">
                                        <td>{{ $city->id }}</td>
                                        <td>{{ $city->city }}</td>
                                        <td>{{ $city->created_at }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-primary"
                                                href="{{ route('edit_cities', ['id' => $city->id]) }}"><i
                                                    class="fa fa-edit"></i></a>
                                            <a onClick="return confirm('Are you sure to delete this city?');"
                                                class="btn btn-sm btn-danger"
                                                href="{{ route('city_delete', ['id' => $city->id]) }}"><i
                                                    class="fa fa-times"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
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
