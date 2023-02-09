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
                        <a href="{{ route('Donor_list') }}" class="btn btn-sm btn-primary pull-right">
                            <i class="fa fa-arrow-circle-left"></i>
                            Back to list
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                        @if (session()->has('error'))
                            <div class="alert alert-danger">
                                {{ session()->get('error') }}
                            </div>
                        @endif
                        <div class="">
                            <div class="col-md-12">
                                <section class="panel">
                                    <div class="panel-body">
                                        <div class="col-md-6">
                                            <h4 class="pro-d-title">
                                                <a disabled class="">
                                                    {{ $donor->donor_name }}
                                                </a>
                                            </h4>
                                            <p>
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam totam eos
                                                veniam neque libero sed. Ipsa vero placeat aspernatur excepturi esse
                                                culpa similique perspiciatis numquam tenetur, iure nihil ipsum
                                                repellat.Beatae quod recusandae dignissimos, blanditiis error architecto
                                                omnis repellat ipsum fugit a natus asperiores, ea id atque non, maiores
                                                ex nihil? Eum quasi dolores reprehenderit delectus ducimus provident
                                                nemo consequatur!
                                            </p>
                                            <div class="product_meta">
                                                <span class="posted_in"> <strong>Descriptions:</strong>
                                                    <ol style="list-style: none ">
                                                        <b>Email: </b> {{ $donor->email }} <br>
                                                        <b>Blood_Group: </b> {{ $donor->donor->blood_group }} <br>
                                                        <b>Gender: </b>{{ $donor->gender }} <br>
                                                        <b>Age:</b>{{ $donor->age }} <br>
                                                        <b>Phone Number: </b>{{ $donor->phone }} <br>
                                                        <b>City: </b>{{ $donor->city->city }} <br>
                                                    </ol>
                                            </div>
                                        </div>
                                        {{-- @dd($donor->image); --}}
                                        <div class="col-md-6">
                                            <div class="pro-img-details">
                                                <img src="{{ asset($donor->image) }}" alt="nothing to show"
                                                    width="400" height="400">
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
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
