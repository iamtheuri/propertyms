<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <!-- Tenant Details -->

    <div class="m-4">
        <div class="col">
            <div class="row ml-2">
                <h1 class="text-center">Welcome {{auth()->user()->name}}</h1>
            </div>

            <div class="row">
                <div class="card col-sm mr-2" style="box-shadow: 0 0 3px #ab7865;">
                    <div class="card-body">
                        <h5 class="card-title">Add Property</h5>
                        <a href="/landlord/add-property" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add</a>
                    </div>
                </div>
                <div class="card col-sm mr-2" style="box-shadow: 0 0 3px #ab7865;">
                    <div class="card-body">
                        <h5 class="card-title">Add Units</h5>
                        <a href="/landlord/units" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add</a>
                    </div>
                </div>
                <div class="card col-sm" style="box-shadow: 0 0 3px #ab7865;">
                    <div class="card-body">
                        <h5 class="card-title">Add Tenants</h5>
                        <a href="/landlord/tenants" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Occupied Property Details -->

    <div class="m-4">
        <div class="col">
            <div class="row ml-2">
                <h2>Your Stats</h2>
            </div>
            <div class="row">
                <div class="card col-sm mr-2" style="box-shadow: 0 0 3px #ab7865;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Property Vacancies</b></h5>
                        <p><i>Vacant Units: &nbsp; &nbsp; &nbsp;</i><b> {{$vacantCount}}</b>
                        </p>
                        <p><i>Occupied Units: &nbsp;</i><b> {{$occupiedCount}}</b></p>
                        <a href="/landlord/units" class="btn btn-secondary"><i class="fa fa-eye" aria-hidden="true"></i> view</a>
                    </div>
                </div>
                <div class="card col-sm mr-2" style="box-shadow: 0 0 3px #ab7865;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Pending Payments</b></h5>
                        <p><i>All Balances: &nbsp; &nbsp; &nbsp;</i><b> {{number_format($invoiceTotal)}}</b></p>
                        <p><i> {{ucwords($currentMonth)}}'s Balance: &nbsp; </i><b>{{number_format($currentMonthInvoice)}} </b></p>
                        <a href="/landlord/invoices" class="btn btn-secondary"><i class="fa fa-eye" aria-hidden="true"></i> view</a>
                    </div>
                </div>
                <div class="card col-sm mr-2" style="box-shadow: 0 0 3px #ab7865;">
                    <div class="card-body">
                        <h5 class="card-title"><b>Payments Received</b></h5>
                        <p><i>All Payments: &nbsp; &nbsp; &nbsp;</i><b> {{$closedInvoices}}</b></p>
                        <a href="/landlord/invoices" class="btn btn-secondary"><i class="fa fa-eye" aria-hidden="true"></i> view</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.scripts')

</body>

</html>