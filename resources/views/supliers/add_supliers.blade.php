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
                            <h3 class="panel-title">New Suplier</h3>
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

                            <form role="form" method="POST" action="{{ route('insert-suplier') }}"
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
                                    <label for="exampleInputEmail1">Shop Name</label>
                                    <input type="text" class="form-control" name="shopname"
                                        placeholder="Enter shop name">
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
                                    <label for="exampleInputEmail1">Suplier Type</label>
                                    <select name="type" class="form-control" @error('type')
                                    is-invalid
                                    @enderror>
                                        <option value="1">Distributor</option>
                                        <option value="2">Whole Seller</option>
                                        <option value="3">Brochure</option>
                                    </select>
                                    @error('type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Account holder</label>
                                    <input type="text" class="form-control" name="account_holder"
                                    @error('account_holder')
                                    is-invalid
                                    @enderror
                                    placeholder="Enter account holder">
                                    @error('account_holder')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Account number</label>
                                    <input type="text" class="form-control" name="account_number"
                                    @error('account_number')
                                    is-invalid
                                    @enderror
                                    placeholder="Enter account name">
                                    @error('account_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bank name</label>
                                    <input type="text" class="form-control" name="bank_name"
                                    @error('bank_name')
                                    is-invalid
                                    @enderror
                                    placeholder="Enter bank name">
                                    @error('bank_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Bank brance</label>
                                    <input type="text" class="form-control" name="bank_brance"
                                    @error('bank_brance')
                                    is-invalid
                                    @enderror
                                    placeholder="Enter bank brance">
                                    @error('bank_brance')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="Enter city">
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
