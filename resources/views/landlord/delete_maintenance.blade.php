<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="auth-bg">
    @include('partials.navbar')
    <div class="container">

        <div class="card m-4 text-center">
            <div class="card-header">
                <h2>Delete Maintenance</h1>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm">
                        <div class="p-4 text-center">
                            <div class="col-md">
                                <div class="form-group">
                                    <input class="form-control" name="category" value="{{$maintenance->category}}" readonly>
                                    @error('category')
                                    <p style="color: brown;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <input class="form-control" name="status" value="{{ucwords($maintenance->status)}}" readonly>
                                    @error('status')
                                    <p style="color: brown;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <input class="form-control" name="summary" placeholder="Brief Summary" title="eg. Shower coil burnt" value="{{$maintenance->summary}}" readonly>
                                    @error('summary')
                                    <p style="color: brown;">{{$message}}</p>
                                    @enderror
                                </div>
                            </div>

                            <form method="POST" action="/tenant/maintenance/{{ $maintenance->id }}">

                                @csrf

                                @method('DELETE')

                                <button class="btn btn-danger d-flex ml-3">Delete Maintenance</button>

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