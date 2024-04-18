<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body class="auth-bg">
    @include('partials.navbar')

    <div class="card m-4">
        <div class="card-header">
            <h1>Tenants for {{ auth()->user()->name}}</h1>
        </div>
        <div class="card-body">

            @if($tenants->isEmpty())

            <h4>No Tenants</h4>

            @else

            <div style="overflow-x:auto;">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tenant Name</th>
                            <th scope="col">Property</th>
                            <th scope="col">Unit</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Move-In</th>
                            <th scope="col">Lease</th>
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
                            <td>{{$tenant->name}}</td>
                            <td>{{$tenant->unit->property->name}}</td>
                            <td>{{$tenant->unit->name}}</td>
                            <td>{{$tenant->email}}</td>
                            <td>{{$tenant->phone}}</td>
                            <td>{{$tenant->tenant_move_in}}</td>
                            <td>
                                @if ($tenant->lease_agreement_file)
                                <a href="{{ asset('storage/' . $tenant->lease_agreement_file) }}" class="btn btn-secondary"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp; View</a>
                                @else
                                <a href="/landlord/tenants/{{$tenant->id}}/edit" class="btn btn-secondary"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add</a>
                                @endif
                            </td>
                            <td><a href="/landlord/tenants/{{$tenant->id}}/edit" class="btn btn-secondary">Update</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

            @endif

            <a href="/landlord/add-tenant" class="btn btn-primary text-end">Add Tenant</a>
        </div>
    </div>

    @include('partials.scripts')

</body>

</html>