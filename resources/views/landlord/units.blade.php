<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <div class="card m-4">
        <div class="card-header">
            <h1>Units for Tenant Name</h1>
        </div>
        <div class="card-body">


            <!-- <h4>No Properties Available</h4> -->

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Property Name</th>
                        <th scope="col">Unit Name</th>
                        <th scope="col">Occupied</th>
                        <th scope="col">Rent</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <!-- <tbody>
                    {{ $unit_number = 1; }}
                    foreach(units as unit)
                    <tr>
                        <td>{{$unit_number ++}}</td>
                        <td>{{"property->name"}}</td>
                        <td>{{"unit->occupied"}}</td>
                        <td>{{"unit->rent"}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                    <li><a class="edit text-secondary" id="edit" href="/edit-unit">Edit</a></li>
                                    <li><a class="delete text-secondary" id="edit" href="/delete-unit">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>


                </tbody> -->
            </table>


            <a href="/landlord/add-Unit" class="btn btn-primary text-end">Add Unit</a>
        </div>
    </div>

    @include('partials.scripts')

</body>

</html>