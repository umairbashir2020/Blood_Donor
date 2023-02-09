@extends('layoutEblood.master')
<br>
<br>
<br>
<br>
<br>
@section('content')
<section class="business-feat">
    <!--Start Featured container-->
    <div class="container">
        <!--Start Section Title-->
        <div class="section-title">
            <h2 class="text-center text-bold"><span>Searched Donor List</span></h2>
           </div>
           <!--End Section Title-->

           <!--Start Featured Row-->
           <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
            {{-- <div class=""> --}}
                <div class="col-md-12">
                    @foreach ($users as $user)

                    <section class="panel">
                        <div class="panel-body">
                            <div class="col-md-6">
                                <h2 class="pro-d-title" style="font-family: math;">
                                    {{-- <a disabled class=""> --}}
                                        {{ $user->donor_name }}
                                    {{-- </a> --}}
                                </h2>
                                {{-- <p class="">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam totam eos
                                    veniam neque libero sed. Ipsa vero placeat aspernatur excepturi esse
                                    culpa similique perspiciatis numquam tenetur, iure nihil ipsum
                                    repellat.Beatae quod recusandae dignissimos, blanditiis error architecto
                                    omnis repellat ipsum fugit a natus asperiores, ea id atque non, maiores
                                    ex nihil? Eum quasi dolores reprehenderit delectus ducimus provident
                                    nemo consequatur!
                                </p> --}}
                                <div class="product_meta">
                                    <span class="posted_in"> <strong>Donor Details:</strong>
                                        <br>
                                        <ol style="list-style: none ">
                                            <b>Email: </b> {{ $user->email }} <br>
                                            <b>Blood_Group: </b> {{ $user->donor->blood_group }} <br>
                                            <b>Gender: </b>{{ $user->gender }} <br>
                                            <b>Age:</b>{{ $user->age }} <br>
                                            <b>Phone Number: </b>{{ $user->phone }} <br>
                                            <b>City: </b>{{ $user->city->city }} <br>
                                        </ol>
                                    </div>
                                </div>
                                {{-- @dd($donor->image); --}}
                                <div class="col-md-6">
                                    <div class="pro-img-details">
                                        <img src="{{ asset($user->image) }}" alt="nothing to show"
                                        width="400" height="350">
                                    </div>
                                </div>
                        </div>
                    </section>
                    {{-- <div class="bg-yellow">
                        <a href="{{ route('eblood') }}">back</a>
                    </div> --}}
                    {{-- <a href="{{ route('eblood') }}" class="btn btn-sm btn-success pull-right"><i
                        class="fa fa-plus"></i> Back</a> --}}
                        @endforeach
                        <a href="{{ route('eblood') }}" class="btn mt-none btn-sm btn-primary pull-right"><i class="fa fa-arrow-circle-left"></i> Back</a>
                </div>
            </div>
            </div>
        </div>

               {{-- <div class="col-md-8 col-md-offset-2"> --}}
                {{-- <div class="table-responsive"> --}}
                 {{-- <table class="table table-striped table-bordered table-hover" id="dataTables-example"> --}}
                    {{-- <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Donor name</th>
                            <th>Blood Group</th>
                            <th>City</th>
                            <th>Image</th>
                        </tr>
                    </thead> --}}
                    {{-- <tbody> --}}
                        {{-- @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->donor_name }}</td>
                            <td>{{ $user->donor->blood_group }}</td>
                            <td>{{ $user->city->city }}</td>
                            <td><img src="{{ $user->image }}" alt="" width="250px" height="100"></td>

                        </tr>
                        @endforeach --}}
                    {{-- </tbody> --}}
                 {{-- </table> --}}
                {{-- </div> --}}
         {{-- </div> --}}

       </div>
       <!--End Featured Row-->
   </div>
   <!--End Featured container-->
</section>
@endsection
