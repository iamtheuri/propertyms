<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="auth-bg">
    @include('partials.navbar')
    <div class="container">

        <div class="card m-4 text-center">
            <div class="card-header">
                <h2>Add Unit</h1>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm">
                        <div style="padding: 2rem; text-align: center;">
                            <form method="POST" action="/unit-form">
                                @csrf
                                <div class="col-md">
                                    <div class="form-group">
                                        <select name="property_id" class="form-control">
                                            <option value="" disabled selected>Select Property</option>
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
                                        <input class="form-control" name="name" placeholder="Unit Name" title="eg. A1, B2" value="{{old('name')}}">
                                        @error('name')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="rent" placeholder="Monthly Rent" value="{{old('rent')}}">
                                        @error('rent')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <select class="form-control" name="occupied">
                                            <option disabled selected>Vacant or Occupied</option>
                                            <option value="vacant">Vacant</option>
                                            <option value="occupied">Occupied</option>
                                        </select>
                                        @error('occupied')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Add Unit" class="btn btn-primary">
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