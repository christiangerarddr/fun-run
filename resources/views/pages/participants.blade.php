@extends('layouts.app')

@section('styles')
{{-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> --}}
@endsection

@section('content')

<div id="upper">

    @include('includes.navbar')

    <div class="row pt-5">

        <div class="col-lg-2 pl-5">

            <div class="card">

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link filter-table">All</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link filter-table">Junior</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link filter-table">Senior</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Persons</a>
                </li>
            </ul>
            
        </div>

        <div class="mt-3">
            <a href="{{route('export.participants')}}"><button class="btn btn-secondary">Export Participants</button></a>
        </div>


        </div>

        <div class="col-lg-10 container-fluid" style="height: 100vh">
            <div class="row justify-content-start">
                <div class="col-md-11">

                    <div class="card">
                        <div class="card-header">

                            <div class="row">

                                <div class="col-lg-2">
                                    <h2 id="table_header">All</h2>
                                </div>

                            </div>

                        </div>

                        <div class="card-body">

                            <table id="participants-table" class="table table-hover ">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Email Address</th>
                                        <th scope="col">Contact Number</th>
                                        <th scope="col">Date Registered</th>
                                    </tr>
                                </thead>
                            </table>

                        </div>
                    </div>



                </div>
            </div>
        </div>

    </div>

</div>
@endsection

@section('javascript')

<script>
    $(document).ready(function () {

        filter = sessionStorage.getItem("tableFilter");

        $('#participants-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '/participants-list/' + filter,
            columns: [{
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'age',
                    name: 'age'
                },
                {
                    data: 'gender',
                    name: 'gender'
                },
                {
                    data: 'address',
                    name: 'address'
                },
                {
                    data: 'email_address',
                    name: 'email_address'
                },
                {
                    data: 'contact_number',
                    name: 'contact_number'
                },
                {
                    data: 'date_registered',
                    name: 'date_registered'
                }
            ]
        });

    });

</script>

@endsection
