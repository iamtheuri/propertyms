<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <div class="container">

        <div class="card m-4 text-center">
            <div class="card-header">
                <h2>Edit {{ $invoice->name }}</h1>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm">
                        <div class="p-4 text-center">
                            <form method="POST" action="/landlord/invoices/{{ $invoice->id }}">
                                @csrf
                                @method('PUT')
                                <form method="POST" action="/invoice-form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md">
                                        <div class="form-group">
                                            <input class="form-control" name="name" placeholder="Invoice Name" value="{{ $invoice->name }}">
                                            @error('name')
                                            <p style="color: brown;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <select name="property_id" class="form-control">
                                                <option value=" {{ $invoice->tenant->unit->property->id }}" selected>{{ $invoice->tenant->unit->property->name }}</option>
                                                @foreach ($properties as $property)
                                                <option value="{{ $property->id }}">{{$property->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('property_id')
                                            <p style="color: brown;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <select name="tenant_id" class="form-control">
                                                <option value="{{ $invoice->tenant->id }}" selected>{{ $invoice->tenant->name }}</option>
                                                @foreach ($tenants as $tenant)
                                                <option value="{{ $tenant->id }}">{{$tenant->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('tenant_id')
                                            <p style="color: brown;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <select name="unit_id" class="form-control">
                                                <option value="{{ $invoice->tenant->unit->id }}" selected>{{ $invoice->tenant->unit->name }}</option>
                                                @foreach ($units as $unit)
                                                <option value="{{ $unit->id }}">{{$unit->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('unit_id')
                                            <p style="color: brown;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <input class="form-control" name="invoice_amount" placeholder="Invoice Amount" value="{{ $invoice->invoice_amount }}">
                                            @error('invoice_amount')
                                            <p style="color: brown;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <select name="month" class="form-control">
                                                <option value="{{ $invoice->month }}" selected>{{ ucwords($invoice->month) }}</option>
                                                <option value="january">January</option>
                                                <option value="february">February</option>
                                                <option value="march">March</option>
                                                <option value="april">April</option>
                                                <option value="may">May</option>
                                                <option value="june">June</option>
                                                <option value="july">July</option>
                                                <option value="august">August</option>
                                                <option value="september">September</option>
                                                <option value="october">October</option>
                                                <option value="november">November</option>
                                                <option value="december">December</option>
                                            </select>
                                            @error('month')
                                            <p style="color: brown;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <select name="status" class="form-control">
                                                <option value="{{$invoice->status}}" selected>{{ucwords($invoice->status)}}</option>
                                                <option value="pending">Pending</option>
                                                <option value="closed">Closed</option>
                                            </select>
                                            @error('status')
                                            <p style="color: brown;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Update Invoice" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </form>

                            <form method="POST" action="/landlord/invoices/{{ $invoice->id }}">

                                @csrf

                                @method('DELETE')

                                <button class="btn btn-danger d-flex ml-3">Delete Invoice</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.scripts')

</body>

</html>