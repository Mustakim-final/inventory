@extends('home')
@section('content')
    <!-- Start content -->
    <div class="content">


        <div class="wraper container-fluid">

            <div class="row">
                <div class="col-sm-12">
                    <div class="bg-picture text-center"
                        style="background-image:url('{{ asset('master') }}/images/big/bg.jpg')">
                        <div class="bg-picture-overlay"></div>
                        <div class="profile-info-name">
                            <img src="{{ URL::to($customer->photo) }}" class="thumb-lg img-circle img-thumbnail"
                                alt="profile-image">
                            <h3 class="text-white">{{ $customer->name }}</h3>
                        </div>
                    </div>
                    <!--/ meta -->
                </div>
            </div>
            <div class="row user-tabs">
                <div class="col-lg-6 col-md-9 col-sm-9">
                    <ul class="nav nav-tabs tabs">
                        <li class="active tab">
                            <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active">
                                <span class="visible-xs"><i class="fa fa-home"></i></span>
                                <span class="hidden-xs">About Me</span>
                            </a>
                        </li>


                        <li class="tab">
                            <a href="#settings-2" data-toggle="tab" aria-expanded="false">
                                <span class="visible-xs"><i class="fa fa-cog"></i></span>
                                <span class="hidden-xs">Settings</span>
                            </a>
                        </li>
                        <div class="indicator"></div>
                    </ul>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="tab-content profile-tab-content">
                        <div class="tab-pane active" id="home-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- Personal-Information -->
                                    <div class="panel panel-default panel-fill">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Personal Information</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="about-info-p">
                                                <strong>{{ $customer->name }}</strong>
                                                <br />

                                            </div>
                                            <div class="about-info-p">
                                                <strong>Mobile</strong>
                                                <br />
                                                <p class="text-muted">{{ $customer->phone }}</p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Email</strong>
                                                <br />
                                                <p class="text-muted">{{ $customer->email }}</p>
                                            </div>

                                            <div class="about-info-p m-b-0">
                                                <strong>Address</strong>
                                                <br />
                                                <p class="text-muted">{{ $customer->address }}</p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>City</strong>
                                                <br />
                                                <p class="text-muted">{{ $customer->city }}</p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>NID</strong>
                                                <br />
                                                <p class="text-muted">{{ $customer->nid_no }}</p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>Account holder</strong>
                                                <br />
                                                <p class="text-muted">{{ $customer->account_holder }}</p>
                                            </div>

                                            <div class="about-info-p m-b-0">
                                                <strong>Account number</strong>
                                                <br />
                                                <p class="text-muted">{{ $customer->account_number }}</p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>Bank name</strong>
                                                <br />
                                                <p class="text-muted">{{ $customer->bank_name }}</p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>Bank brance</strong>
                                                <br />
                                                <p class="text-muted">{{ $customer->bank_brance }}</p>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Personal-Information -->

                                    <!-- Languages -->

                                    <!-- Languages -->

                                </div>


                                <div class="col-md-8">
                                    <!-- Personal-Information -->

                                    <!-- Personal-Information -->


                                </div>

                            </div>
                        </div>







                        <div class="tab-pane" id="settings-2">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif


                            @if (session()->has('message'))
                                <strong class="text-warning">{{ session()->get('message') }}</strong>
                            @endif
                            <!-- Personal-Information -->
                            <div class="panel panel-default panel-fill">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Edit Profile</h3>
                                </div>
                                <div class="panel-body">
                                    <form role="form" method="POST"
                                        action="{{ route('customer-update', $customer->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="FullName">Full Name</label>
                                            <input type="text" value="{{ $customer->name }}" id="FullName"
                                                name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" value="{{ $customer->email }}" id="Email"
                                                name="email" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="FullName">Shop name</label>
                                            <input type="text" value="{{ $customer->shopname }}" id="FullName"
                                                name="shopname" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="FullName">NID</label>
                                            <input type="text" value="{{ $customer->nid_no }}" id="FullName"
                                                name="nid_no" class="form-control">
                                        </div>



                                        <div class="form-group">
                                            <label for="FullName">Location</label>
                                            <input type="text" value="{{ $customer->address }}" id="FullName"
                                                name="address" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="FullName">City</label>
                                            <input type="text" value="{{ $customer->city }}" id="FullName"
                                                name="city" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="FullName">Account holder</label>
                                            <input type="text" value="{{ $customer->account_holder }}" id="FullName"
                                                name="account_holder" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="FullName">Account number</label>
                                            <input type="text" value="{{ $customer->account_number }}" id="FullName"
                                                name="account_number" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="FullName">Bank name</label>
                                            <input type="text" value="{{ $customer->bank_name }}" id="FullName"
                                                name="bank_name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="FullName">Bank brance</label>
                                            <input type="text" value="{{ $customer->bank_brance }}" id="FullName"
                                                name="bank_brance" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <img src="#" id="image" alt="">
                                            <label for="exampleInputEmail1">New Photo</label>
                                            <input type="file"  name="photo"
                                                accept="image/*" class="upload" onchange="readURL(this);"
                                                placeholder="photo">

                                        </div>

                                        <div class="form-group">
                                            <img src="{{ URL::to($customer->photo) }}" style="height: 80px;width:80px" id="image" alt="">
                                        </div>

                                        <button class="btn btn-primary waves-effect waves-light w-md"
                                            type="submit">Save</button>
                                    </form>

                                </div>
                            </div>
                            <!-- Personal-Information -->
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- container -->

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
