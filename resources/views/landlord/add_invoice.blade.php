<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <div class="container">

        <div class="card m-4 text-center">
            <div class="card-header">
                <h2>Add Invoice</h1>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm">
                        <div style="padding: 2rem; text-align: center;">
                            <form method="POST" action="/invoice-form" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="name" placeholder="Invoice Name" value="{{old('name')}}">
                                        @error('name')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <select name="property_id" class="form-control">
                                            <option value="" disabled selected>Select Property</option>
                                            @foreach ($properties as $property)
                                            <option value="{{ $property->id }}">{{$property->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('property')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <select name="property_id" class="form-control">
                                            <option value="" disabled selected>Select Tenant</option>
                                            @foreach ($tenants as $tenant)
                                            <option value="{{ $tenant->id }}">{{$tenant->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('tenant')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <select name="unit_id" class="form-control">
                                            <option value="" disabled selected>Select Unit</option>
                                            @foreach ($units as $unit)
                                            <option value="{{ $unit->id }}">{{$unit->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('unit')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="invoice_amount" placeholder="Invoice Amount" value="{{old('invoice_amount')}}">
                                        @error('invoice_amount')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="date form-control" name="month" type="text" placeholder="Due Month" value="{{old('month')}}">
                                        @error('month')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Add Invoice" class="btn btn-primary">
                                    </div>
                                </div>
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