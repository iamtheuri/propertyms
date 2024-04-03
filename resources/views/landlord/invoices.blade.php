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

            @if($invoices->isEmpty())

            <h4>No Invoices</h4>

            @else
            <div style="overflow-x:auto;">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Invoice Name</th>
                            <th scope="col">Tenant</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Property</th>
                            <th scope="col">Invoice Amount</th>
                            <th scope="col">Due Month</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $invoice_number = 1;
                        @endphp
                        @foreach($invoices as $invoice)
                        <tr>
                            <td>{{$invoice_number ++}}</td>
                            <td>{{$invoice->name}}</td>
                            <td>{{$invoice->tenant->name}}</td>
                            <td>{{$invoice->tenant->unit->name}}</td>
                            <td>{{$invoice->tenant->unit->property->name}}</td>
                            <td>{{$invoice->invoice_amount}}</td>
                            <td>{{$invoice->month}}</td>
                            <td><a href="/landlord/invoices/{{$invoice->id}}/edit" class="btn btn-secondary">Update</a></td>
                        </tr>
                        @endforeach
                </table>

            </div>

            @endif
            <a href="/landlord/add-invoice" class="btn btn-primary text-end">Add Invoice</a>
        </div>
    </div>


    @include('partials.scripts')

</body>

</html>