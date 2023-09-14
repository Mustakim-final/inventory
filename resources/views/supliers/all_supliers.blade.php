@extends('home')
@section('content')
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Datatable</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Moltran</a></li>
                        <li><a href="#">Tables</a></li>
                        <li class="active">Datatable</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Datatable</h3>
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
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Image</th>

                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($suplier as $row)
                                                <tr>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->phone }}</td>
                                                    <td>{{ $row->address }}</td>
                                                    <td><img src="{{ URL::to($row->photo) }}"
                                                            style="height: 80px;width:80px" alt=""></td>

                                                    <td>

                                                        <a href="{{ route('customer-delete', $row->id) }}"
                                                            class="btn btn-danger"><i class='far fa-trash-alt'></i></a>
                                                        <a href="{{ route('customer-view', $row->id) }}"
                                                            class="btn btn-primary">View</a>
                                                    </td>
                                                </tr>
                                            @endforeach




                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- End Row -->


        </div> <!-- container -->

    </div> <!-- content -->
@endsection
