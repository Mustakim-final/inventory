@extends('home')
@section('content')
    <div class="content">

        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Welcome !</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Moltran</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Basic example</h3>
                        </div>
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif


                            @if (session()->has('message'))
                                <strong class="text-warning">{{ session()->get('message') }}</strong>
                            @endif

                            <form role="form" method="POST" action="{{ route('insert-employee') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" name="name"
                                        @error('name')
                                         is-invalid
                                          @enderror
                                        placeholder="Enter fullname">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                    @error('email')
                                    is-invalid
                                    @enderror
                                        placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone</label>
                                    <input type="text" class="form-control" name="phone"
                                    @error('phone')
                                    is-invalid
                                    @enderror
                                    placeholder="Enter phone">
                                    @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" name="address"
                                    @error('address')
                                    is-invalid
                                    @enderror
                                    placeholder="Enter address">
                                    @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Experience</label>
                                    <input type="text" class="form-control" name="experience"
                                        placeholder="Enter experience">
                                </div>

                                <div class="form-group">
                                    <img src="#" id="image" alt="">
                                    <label for="exampleInputEmail1">Photo</label>
                                    <input type="file" name="photo"
                                    @error('photo')
                                    is-invalid
                                    @enderror
                                    accept="image/*" class="upload" required
                                        onchange="readURL(this);" placeholder="photo">
                                        @error('photo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nid No</label>
                                    <input type="text" class="form-control" name="nid_no"
                                    @error('nid_no')
                                    is-invalid
                                    @enderror
                                    placeholder="Enter nid">
                                    @error('nid_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Salary</label>
                                    <input type="text" class="form-control" name="salary"
                                    @error('salary')
                                    is-invalid
                                    @enderror
                                    placeholder="Enter salary">
                                    @error('salary')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Vacation</label>
                                    <input type="text" class="form-control" name="vacation" placeholder="Enter vacation">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="Enter city">
                                </div>

                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                            </form>
                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div>

                <!-- col-->
            </div>




        </div>

        <!-- container -->


    </div> <!-- content -->

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result)
                        .width(80)
                        .height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
