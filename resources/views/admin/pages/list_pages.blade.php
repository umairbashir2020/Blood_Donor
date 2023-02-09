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
                        <span class="title pull-left">Page Management</span>
                        <a href="{{ route('create_pages') }}" class="btn btn-sm btn-success pull-right"><i class="fa fa-plus"></i>
                            Create New Page</a>
                    </div>
                </div>
            </div>
            @if(session()->has('danger'))
            <div class="alert alert-danger">
                {{ session()->get('danger') }}
            </div>
            @endif
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="15%">Page Url</th>
                                    <th width="15%">Title</th>
                                    <th width="35%">Content</th>
                                    <th width="5%">status</th>
                                    <th width="13%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                <tr class="odd">
                                    <td>{{$page->id}}</td>
                                    <td>{{ $page->page_url }}</td>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->content }}</td>
                                    <td>{{ $page->status }}</td>
                                    
                                    <td class="text-center">                           
                                        <a class="btn btn-sm btn-primary" href="{{route('edit_pages',['id'=>$page->id])}}"><i class="fa fa-edit"></i></a>
                                        <a onClick="return confirm('Are you sure to delete this city?');" class="btn btn-sm btn-danger" href="{{route('delete_pages',['id'=>$page->id])}}"><i class="fa fa-times"></i></a> 
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
