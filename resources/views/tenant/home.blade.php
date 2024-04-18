<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="auth-bg">
    @include('partials.navbar')

    <div class="container">

        @foreach($tenantInfo as $tenant)

        <div class="m-2">
            <div class="col">
                <div class="row ml-2">
                    <h1 class="text-center">Welcome {{ auth()->user()->name }}</h1>
                </div>
                <div class="row">
                    <div class="card col-sm m-2" style="box-shadow: 0 0 3px #ab7865;">
                        <div class="card-body">
                            <table class="table table-lg">
                                <th>
                                    <h5 class="card-title"><b>Property Details</b></h5>
                                </th>
                                <tr>
                                    <td>
                                        <p><i>Property Name:</i></p>
                                    </td>
                                    <td>
                                        <p><b> {{ $tenant['property_name'] }}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>Unit Occupied:</i></p>
                                    </td>
                                    <td>
                                        <p><b> {{ $tenant['unit_name'] }}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>Unit Description:</i></p>
                                    </td>
                                    <td>
                                        <p><b> {{ $tenant['description'] }}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>Unit Location:</i></p>
                                    </td>
                                    <td>
                                        <p><b> {{ $tenant['location'] }}</b></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card col-sm m-2" style="box-shadow: 0 0 3px #ab7865;">
                        <div class="card-body">

                            <table class="table table-lg">
                                <th>
                                    <h5 class="card-title"><b>{{auth()->user()->name}}'s Lease Period</b></h5>
                                </th>
                                <tr>
                                    <td>
                                        <p><i>Lease Start:</i></p>
                                    </td>
                                    <td>
                                        <p><b> {{ $tenant['lease_start'] }}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>To:</i></p>
                                    </td>
                                    <td>
                                        <p><b>{{ now()->format('F-Y') }}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>All Payments:</i></p>
                                    </td>
                                    <td>
                                        <p><b> {{ $tenant['property_name'] }}</b></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="card col-sm m-2" style="box-shadow: 0 0 3px #ab7865;">
                        <div class="card-body">

                            <table class="table table-lg">
                                <th>
                                    <h5 class="card-title"><b>Payment Details</b></h5>
                                </th>
                                <tr>
                                    <td>
                                        <p><i>Payment To: </i></p>
                                    </td>
                                    <td>
                                        <p><b> {{ $tenant['owner'] }}</b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>Mpesa Till:</i></p>
                                    </td>
                                    <td>
                                        <p><b>{{ $tenant['till'] }} </b></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i>Pending Payments:</i></p>
                                    </td>
                                    <td>
                                        <p><b>Ksh. {{ number_format($tenant['balance']) }}</b></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary reminder-btn auth-bg" data-toggle="modal" data-target="#reminderModal" style="font-size: 0.8rem;">
            Maintenance
        </button>

        <!-- Modal -->
        <div class="modal fade" id="reminderModal" tabindex="-1" role="dialog" aria-labelledby="reminderModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title ml-3" id="reminderModalTitle">Have an issue</h5>
                    </div>
                    <div class="modal-body p-4">
                        <div class="col-md">
                            <p>Report issues making you uncomfortable from the comfort of your home!</p>
                            <p>Create a maintenance issue which will be directly reported to your property supervisors.</p>
                            <a href="/tenant/add-maintenance" class="btn btn-primary">Create</a>
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