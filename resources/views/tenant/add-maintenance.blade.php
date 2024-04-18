<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="auth-bg">
    @include('partials.navbar')
    <div class="container">

        <div class="card m-4 text-center">
            <div class="card-header">
                <h2>Add Maintenance</h1>
            </div>
            <div class="card-body">

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8 col-sm">
                        <div style="padding: 2rem; text-align: center;">

                            <form method="POST" action="/add-maintenance">
                                @csrf
                                <div class="col-md">
                                    <div class="form-group">
                                        <select class="form-control" name="category">
                                            <option value="{{old('category')}}" disabled selected>Select Category</option>
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
                                            <option value="{{old('status')}}" disabled selected>Select Status</option>
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
                                        <input class="form-control" name="summary" placeholder="Brief Summary" title="eg. Shower coil burnt" value="{{old('summary')}}">
                                        @error('summary')
                                        <p style="color: brown;">{{$message}}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="submit" value="Add Maintenance" class="btn btn-primary">
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