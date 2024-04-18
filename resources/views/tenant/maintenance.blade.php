<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="auth-bg">
    @include('partials.navbar')

    @php
    $maintenanceIndex = 1;
    @endphp

    @if(auth()->user()->role === 'landlord')


    <div class="card m-4">
        <div class="card-header">
            <h1>Maintenance for {{auth()->user()->name}}</h1>
        </div>
        <div class="card-body">

            @if($maintenances->isEmpty())

            No maintenance issues as of now.

            @else

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Issue</th>
                        <th scope="col">Category</th>
                        <th scope="col">Status</th>
                        <th scope="col">Summary</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($maintenances as $maintenance)
                    <tr>
                        <th scope="row">{{$maintenanceIndex ++ }}</th>
                        <td>{{$maintenance->category}}</td>
                        <td>{{$maintenance->status}}</td>
                        <td>{{$maintenance->summary}}</td>
                        <td><a href=" /landlord/maintenance/{{ $maintenance->id }}/edit" class="btn btn-secondary">Delete</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            @endif

        </div>
    </div>

    @else

    <div class="card m-4">
        <div class="card-header">
            <h1>Maintenance for {{auth()->user()->name}}</h1>
        </div>
        <div class="card-body">

            @if($maintenances->isEmpty())

            No maintenance issues as of now.

            @else

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Issue</th>
                        <th scope="col">Category</th>
                        <th scope="col">Status</th>
                        <th scope="col">Summary</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($maintenances as $maintenance)
                    <tr>
                        <th scope="row">{{$maintenanceIndex ++ }}</th>
                        <td>{{$maintenance->category}}</td>
                        <td>{{$maintenance->status}}</td>
                        <td>{{$maintenance->summary}}</td>
                        <td><a href=" /tenant/maintenance/{{ $maintenance->id }}/edit" class="btn btn-secondary">Update</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            @endif

            <a href="/tenant/add-maintenance" class="btn btn-primary text-end">Add Maintenance</a>

        </div>
    </div>

    @endif

    @include('partials.scripts')

</body>

</html>