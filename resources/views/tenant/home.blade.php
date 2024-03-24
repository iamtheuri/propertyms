<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <!-- Tenant Details -->

    <div class="card m-4" style="box-shadow: 0 0 3px #ab7865;" id="#tenants-details">
        <div class="card-body">
            <div class="col">
                <div class="row ml-2">
                    <h1 class="text-center">Welcome {{ auth()->user()->name }}</h1>
                </div>

                <div class="row">
                    <div class="card col-sm mr-1" style="box-shadow: 0 0 1px #ab7865;">
                        <div class="card-body">
                            <h5 class="card-title">Property Name</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Actual Property Name</h6>
                        </div>
                    </div>
                    <div class="card col-sm mr-1" style="box-shadow: 0 0 1px #ab7865;">
                        <div class="card-body">
                            <h5 class="card-title">Unit</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Actual Unit</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Occupied Property Details -->

    <div class="card m-4" style="box-shadow: 0 0 3px #ab7865;" id="#occupied-property-details">
        <div class="card-body">
            <div class="col">
                <div class="row ml-2">
                    <h1>{{auth()->user()->name}}'s Lease</h1>
                </div>
                <div class="row">
                    <div class="col-sm-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Leasing Period</h5>
                                <p class="card-text text-large">Tenancy Start Date: 01-01-2024</p>
                                <p class="card-text text-large">To: Today</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">Your Balance</h5>
                                <p class="card-text text-large">8,000 KES</p>
                                <a href="/tenant/financials" class="btn btn-primary">Pay Balance</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Owner Property Contacts -->

    <div class="card m-4" style="box-shadow: 0 0 3px #ab7865;" id="#tenant-owner-details">
        <div class="card-header">
            <h1 class="ml-4">Owner Details</h1>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item ml-2">
                <h5><span class="fa fa-phone"></span> 0712345678</h3>
            </li>
            <li class="list-group-item ml-2">
                <h5><span class="fa fa-envelope"></span> test@test.com</h5>
            </li>
            <li class="list-group-item ml-2">
                <h5><span class="fa fa-map-marker"></span> Test Location</h5>
            </li>
        </ul>
    </div>

    @include('partials.scripts')

</body>

</html>