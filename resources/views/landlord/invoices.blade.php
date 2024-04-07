<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<style>
    .reminder-btn {
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: #9f654f;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 5px;
        font-size: 10px;
        scroll-behavior: smooth;
    }

    .reminder-btn:hover {
        background-color: gray;
    }
</style>

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
                            <th scope="col">Status</th>
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
                            <td>{{ ucwords($invoice->month) }}</td>
                            <td>{{ ucwords($invoice->status) }}</td>
                            <td><a href="/landlord/invoices/{{$invoice->id}}/edit" class="btn btn-secondary">Update</a></td>
                        </tr>
                        @endforeach
                </table>

            </div>

            @endif
            <a href="/landlord/add-invoice" class="btn btn-primary text-end">Add Invoice</a>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary reminder-btn" data-toggle="modal" data-target="#reminderModal">
                Send Reminder
            </button>

            <!-- Modal -->
            <div class="modal fade" id="reminderModal" tabindex="-1" role="dialog" aria-labelledby="reminderModalTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="reminderModalTitle">Send Reminders</h5>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="/send-reminder">
                                @csrf
                                <div class="col-md">
                                    <div class="form-group">
                                        <select name="tenant_phone" class="form-control">
                                            <option value="" disabled selected>Select Tenant</option>
                                            @foreach ($tenants as $tenant)
                                            <option value="{{ $tenant->phone }}">{{$tenant->name}}: {{$tenant->phone}}</option>
                                            @endforeach
                                        </select>
                                        @error('tenant_phone')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="balance" placeholder="Balance">
                                        @error('balance')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Send Reminder" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
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