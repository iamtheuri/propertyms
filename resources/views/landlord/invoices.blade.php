<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="auth-bg">
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
                            <th scope="col">Due Date</th>
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
                            <td>{{ ucwords($invoice->due_date) }}</td>
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
                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>&nbsp; Send Reminder
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
                                            <option value="" disabled selected>Select Invoice</option>
                                            @foreach ($invoices as $invoice)
                                            <option value=" {{$invoice->tenant->phone}}">{{$invoice->tenant->name}} -- {{$invoice->invoice_amount}} -- {{$invoice->tenant->unit->name}} -- {{$invoice->status}}</option>
                                            @endforeach
                                        </select>
                                        @error('invoices')
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