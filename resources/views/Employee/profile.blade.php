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
                            <img src="{{ URL::to($employee->photo) }}" class="thumb-lg img-circle img-thumbnail"
                                alt="profile-image">
                            <h3 class="text-white">{{ $employee->name }}</h3>
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
                                                <strong>{{ $employee->name }}</strong>
                                                <br />

                                            </div>
                                            <div class="about-info-p">
                                                <strong>Mobile</strong>
                                                <br />
                                                <p class="text-muted">{{ $employee->phone }}</p>
                                            </div>
                                            <div class="about-info-p">
                                                <strong>Email</strong>
                                                <br />
                                                <p class="text-muted">{{ $employee->email }}</p>
                                            </div>

                                            <div class="about-info-p m-b-0">
                                                <strong>Experiance</strong>
                                                <br />
                                                <p class="text-muted">{{ $employee->experience }}</p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>NID</strong>
                                                <br />
                                                <p class="text-muted">{{ $employee->nid_no }}</p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>Salary</strong>
                                                <br />
                                                <p class="text-muted">{{ $employee->salary }}</p>
                                            </div>

                                            <div class="about-info-p m-b-0">
                                                <strong>Vaction</strong>
                                                <br />
                                                <p class="text-muted">{{ $employee->vacation }}</p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>Location</strong>
                                                <br />
                                                <p class="text-muted">{{ $employee->address }}</p>
                                            </div>
                                            <div class="about-info-p m-b-0">
                                                <strong>City</strong>
                                                <br />
                                                <p class="text-muted">{{ $employee->city }}</p>
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
                                        action="{{ route('employe-update', $employee->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="FullName">Full Name</label>
                                            <input type="text" value="{{ $employee->name }}" id="FullName"
                                                name="name" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input type="email" value="{{ $employee->email }}" id="Email"
                                                name="email" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="FullName">Experience</label>
                                            <input type="text" value="{{ $employee->experience }}" id="FullName"
                                                name="experience" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="FullName">NID</label>
                                            <input type="text" value="{{ $employee->nid_no }}" id="FullName"
                                                name="nid_no" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label for="FullName">Salary</label>
                                            <input type="text" value="{{ $employee->salary }}" id="FullName"
                                                name="salary" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="FullName">Vaction</label>
                                            <input type="text" value="{{ $employee->vaction }}" id="FullName"
                                                name="vaction" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="FullName">Location</label>
                                            <input type="text" value="{{ $employee->address }}" id="FullName"
                                                name="location" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="FullName">City</label>
                                            <input type="text" value="{{ $employee->city }}" id="FullName"
                                                name="city" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <img src="#" id="image" alt="">
                                            <label for="exampleInputEmail1">New Photo</label>
                                            <input type="file"  name="photo"
                                                accept="image/*" class="upload" onchange="readURL(this);"
                                                placeholder="photo">

                                        </div>

                                        <div class="form-group">
                                            <img src="{{ URL::to($employee->photo) }}" style="height: 80px;width:80px" id="image" alt="">
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
