<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <div class="container">

        <div class="card m-4 text-center">
            <div class="card-header">
                <h2>Add Tenant</h1>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm">
                        <div style="padding: 2rem; text-align: center;">
                            <form method="POST" action="/tenant-form" enctype="multipart/form-data">
                                @csrf
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
                                        <input class="form-control" name="name" placeholder="Tenant Name" value="{{old('name')}}">
                                        @error('name')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="email" placeholder="Tenant Email" value="{{old('email')}}">
                                        @error('email')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="phone" placeholder="Tenant Phone" value="{{old('phone')}}">
                                        @error('phone')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="lease_agreement_file" placeholder="Tenant Lease Agreement" value="{{old('lease_agreement_file')}}">
                                        @error('lease_agreement_file')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Add Tenant" class="btn btn-primary">
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