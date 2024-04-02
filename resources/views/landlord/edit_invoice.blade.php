<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <div class="container">

        <div class="card m-4 text-center">
            <div class="card-header">
                <h2>Edit {{ $tenant->name }}</h1>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm">
                        <div class="p-4 text-center">
                            <form method="POST" action="/landlord/tenants/{{ $tenant->id }}">
                                @csrf
                                @method('PUT')
                                <form method="POST" action="/tenant-form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-md">
                                        <div class="form-group">
                                            <select name="property_id" class="form-control">
                                                <option value="{{ $tenant->unit->property->id }}" selected>{{$tenant->unit->property->name}}</option>
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
                                            <select name="unit_id" class="form-control">
                                                <option value="{{ $tenant->unit->id }}" selected>{{$tenant->unit->name}}</option>
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
                                            <input class="form-control" name="name" placeholder="Tenant Name" value="{{ $tenant->name }}">
                                            @error('name')
                                            <p style="color: brown;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <input class="form-control" name="email" placeholder="Tenant Email" value="{{ $tenant->email }}">
                                            @error('email')
                                            <p style="color: brown;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">
                                            <input class="form-control" name="phone" placeholder="Tenant Phone" value="{{ $tenant->phone }}">
                                            @error('phone')
                                            <p style="color: brown;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-group">

                                            @if ($tenant->lease_agreement_file)

                                            <label for="lease" class="form-label">Replace Lease Agreement File</label>

                                            @else

                                            <label for="lease" class="form-label">Add Lease Agreement File</label>

                                            @endif

                                            <input id="lease" type="file" class="form-control" name="lease_agreement_file" value="{{ $tenant->lease_agreement_file }}">

                                            @error('lease_agreement_file')
                                            <p style="color: brown;">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Update Tenant" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </form>

                            <form method="POST" action="/landlord/tenants/{{ $tenant->id }}">

                                @csrf

                                @method('DELETE')

                                <button class="btn btn-danger d-flex ml-3">Delete Tenant</button>

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