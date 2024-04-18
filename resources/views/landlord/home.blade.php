<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="auth-bg">

    @include('partials.navbar')

    <div class="container">

        <!-- Add -->

        <div class="m-4">
            <div class="col">
                <div class="row ml-2">
                    <h1 class="text-center">Welcome {{auth()->user()->name}}</h1>
                </div>

                <div class="row">
                    <div class="card col-sm m-2" style="box-shadow: 0 0 3px #ab7865;">
                        <div class="card-body">
                            <h5 class="card-title">Add Property</h5>
                            <a href="/landlord/add-property" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add</a>
                        </div>
                    </div>
                    <div class="card col-sm m-2" style="box-shadow: 0 0 3px #ab7865;">
                        <div class="card-body">
                            <h5 class="card-title">Add Units</h5>
                            <a href="/landlord/units" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add</a>
                        </div>
                    </div>
                    <div class="card col-sm m-2" style="box-shadow: 0 0 3px #ab7865;">
                        <div class="card-body">
                            <h5 class="card-title">Add Tenants</h5>
                            <a href="/landlord/tenants" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reports -->

        <div class="m-4">
            <div class="col">
                <div class="row ml-2">
                    <h1>My Reports</h1>
                </div>
                <div class="row">
                    <div class="card col-sm m-2" style="box-shadow: 0 0 3px #ab7865;">
                        <div class="card-body">
                            <table class="table table-lg">
                                <th>
                                    <h5 class="card-title"><b>Property Vacancies</b></h5>
                                </th>
                                <tr>
                                    <td>
                                        <p><i>Registered Units:</i></p>
                                    </td>
                                    <td>
                                        <p><b> {{$unitCount}}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>Vacant Units:</i></p>
                                    </td>
                                    <td>
                                        <p><b> {{$vacantCount}}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>Occupied Units:</i></p>
                                    </td>
                                    <td>
                                        <p><b> {{$occupiedCount}}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="/landlord/units" class="btn btn-secondary"><i class="fa fa-eye" aria-hidden="true"></i> view</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card col-sm m-2" style="box-shadow: 0 0 3px #ab7865;">
                        <div class="card-body">

                            <table class="table table-lg">
                                <th>
                                    <h5 class="card-title"><b>Pending Payments</b></h5>
                                </th>
                                <tr>
                                    <td>
                                        <p><i>All Balances:</i></p>
                                    </td>
                                    <td>
                                        <p><b>Ksh. {{number_format($totalPending)}}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>{{ucwords($currentMonth)}}'s Balance:</i></p>
                                    </td>
                                    <td>
                                        <p><b>Ksh. {{number_format($currentMonthInvoice)}} </b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>All Payments:</i></p>
                                    </td>
                                    <td>
                                        <p><b>Ksh. {{$totalReceived}}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="/landlord/invoices" class="btn btn-secondary"><i class="fa fa-eye" aria-hidden="true"></i> view</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card col-sm m-2" style="box-shadow: 0 0 3px #ab7865;">
                        <div class="card-body">

                            <table class="table table-lg">
                                <th>
                                    <h5 class="card-title"><b>Property Stats</b></h5>
                                </th>
                                <tr>
                                    <td>
                                        <p><i>Property Count: </i></p>
                                    </td>
                                    <td>
                                        <p><b> {{$propertyCount}}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>Unit Count:</i></p>
                                    </td>
                                    <td>
                                        <p><b>{{$unitCount}} </b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>Tenant Count:</i></p>
                                    </td>
                                    <td>
                                        <p><b> {{$tenantCount}}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="/landlord/invoices" class="btn btn-secondary"><i class="fa fa-eye" aria-hidden="true"></i> view</a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary reminder-btn auth-bg" data-toggle="modal" data-target="#reminderModal" style="font-size: 0.8rem;">
            <i class="fa fa-question-circle" aria-hidden="true"></i>
            Need Help
        </button>

        <!-- Modal -->
        <div class="modal fade" id="reminderModal" tabindex="-1" role="dialog" aria-labelledby="reminderModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ml-3" id="reminderModalTitle">Welcome to PropertyMS</h5>
                    </div>
                    <div class="modal-body p-4">
                        <div class="col-md">
                            <h5>Don't know where to get started? Here's a brief overview to get you ready!</h5>
                            <p>Start By Creating a Property and insert Units into your property then add tenants! It's that easy!</p>
                            <a href="/landlord/add-property" class="btn btn-primary">Property</a>
                            <button type="button" class="btn btn-secondary ml-3" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('partials.scripts')

</body>

</html>