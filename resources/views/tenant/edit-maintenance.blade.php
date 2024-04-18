<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="auth-bg">
    @include('partials.navbar')
    <div class="container">

        <div class="card m-4 text-center">
            <div class="card-header">
                <h2>Edit Maintenance</h1>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm">
                        <div class="p-4 text-center">

                            <form method="POST" action="/tenant/maintenance/{{ $maintenance->id }}">
                                @csrf
                                @method('PUT')
                                <div class="col-md">
                                    <div class="form-group">
                                        <select class="form-control" name="category">
                                            <option value="{{$maintenance->category}}" selected>{{ucwords($maintenance->category)}}</option>
                                            <option value="plumbing">Plumbing</option>
                                            <option value="electricity">Electricity</option>
                                            <option value="shower">Shower</option>
                                            <option value="painting">Painting</option>
                                            <option value="other">Other</option>
                                        </select>
                                        @error('category')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <select class="form-control" name="status">
                                            <option value="{{$maintenance->status}}" selected>{{ucwords($maintenance->status)}}</option>
                                            <option value="open">Open</option>
                                            <option value="closed">Closed</option>
                                        </select>
                                        @error('status')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-group">
                                        <input class="form-control" name="summary" placeholder="Brief Summary" title="eg. Shower coil burnt" value="{{$maintenance->summary}}">
                                        @error('summary')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group d-flex">
                                        <input type="submit" value="Update Maintenance" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>

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