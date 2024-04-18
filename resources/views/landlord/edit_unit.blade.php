<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="auth-bg">
    @include('partials.navbar')
    <div class="container">

        <div class="card m-4 text-center">
            <div class="card-header">
                <h2>Edit Unit</h1>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm">
                        <div class="p-4 text-center">
                            <form method="POST" action="/landlord/units/{{ $unit->id }}">
                                @csrf
                                @method('PUT')
                                <div class="col-md">
                                    <div class="form-group">
                                        <select name="property_id" class="form-control">
                                            <option value="{{ $unit->property->id }}" selected>{{$unit->property->name}}</option>
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
                                        <input class="form-control" name="name" placeholder="Unit Name" value="{{$unit->name}}">
                                        @error('name')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="rent" placeholder="Monthly Rent" value="{{$unit->rent}}">
                                        @error('rent')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <select class="form-control" name="occupied">
                                            <option value="{{ $unit->occupied }}" selected>{{$unit->occupied}}</option>
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
                                        <input type="submit" value="Update Unit" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>

                            <form method="POST" action="/landlord/units/{{ $unit->id }}">

                                @csrf

                                @method('DELETE')

                                <button class="btn btn-danger d-flex ml-3">Delete Unit</button>

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