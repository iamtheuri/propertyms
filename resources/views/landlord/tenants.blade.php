<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <div class="card m-4">
        <div class="card-header">
            <h1>Tenants for {{ auth()->user()->name}}</h1>
        </div>
        <div class="card-body">

            @if($tenants->isEmpty())

            <!-- <h4>No Properties Available</h4> -->

            @else

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Property Name</th>
                        <th scope="col">Tenant Name</th>
                        <th scope="col">Occupied</th>
                        <th scope="col">Rent</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $tenant_number = 1;
                    @endphp
                    @foreach($tenants as $tenant)
                    <tr>
                        <td>{{$tenant_number ++}}</td>
                        <td>{{$tenant->property->name}}</td>
                        <td>{{$tenant->name}}</td>
                        <td>{{$tenant->occupied}}</td>
                        <td>{{$tenant->rent}}</td>
                        <td><a href="/landlord/tenants/{{$tenant->id}}/edit" class="btn btn-secondary">Update</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            @endif

            <a href="/landlord/add-tenant" class="btn btn-primary text-end">Add Tenant</a>
        </div>
    </div>

    @include('partials.scripts')

</body>

</html>