<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="auth-bg">
    @include('partials.navbar')
    <div class="container">

        <div class="card m-4 text-center">
            <div class="card-header">
                <h2>Edit Property</h1>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm">
                        <div class="p-4 text-center">

                            <form method="POST" action="/landlord/properties/{{ $property->id }}">
                                @csrf
                                @method('PUT')
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="name" placeholder="Property Name" value="{{$property->name}}">
                                        @error('name')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="owner" placeholder="Owner Name" value="{{$property->owner}}">
                                        @error('owner')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="units" placeholder="Number of Units" value="{{$property->units}}">
                                        @error('units')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="description" placeholder="Property Description" value="{{$property->description}}">
                                        @error('description')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="location" placeholder="Property Location" title="e.g Nairobi, Langata" value="{{$property->location}}">
                                        @error('location')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="till" placeholder="Mpesa Till Number" value="{{$property->till}}">
                                        @error('till')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Update Property" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>

                            <form method="POST" action="/landlord/properties/{{ $property->id }}">

                                @csrf

                                @method('DELETE')

                                <button class="btn btn-danger d-flex ml-3">Delete Property</button>

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