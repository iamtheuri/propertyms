<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <div class="card m-4">
        <div class="card-header">
            <h1>Invoices for {{ auth()->user()->name}}</h1>
        </div>
        <div class="card-body">

            <p>if Empty Invoices</p>

            <h4>No Invoices</h4>

            <p>else</p>

            <div style="overflow-x:auto;">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Invoice Name</th>
                            <th scope="col">Tenant</th>
                            <th scope="col">Property</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Rent Amount</th>
                            <th scope="col">Due Month</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>

            </div>

            <p>endif</p>

            <a href="/landlord/add-invoice" class="btn btn-primary text-end">Add Invoice</a>
        </div>
    </div>


    @include('partials.scripts')

</body>

</html>