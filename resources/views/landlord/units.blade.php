<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <div class="card m-4">
        <div class="card-header">
            <h1>Units for {{auth()->user()->name}}</h1>
        </div>
        <div class="card-body">

            @if($units->isEmpty())

            <h4>No Units Available</h4>

            @else

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Unit Name</th>
                        <th scope="col">Property Name</th>
                        <th scope="col">Occupied</th>
                        <th scope="col">Rent</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $unit_number = 1;
                    @endphp
                    @foreach($units as $unit)
                    <tr>
                        <td>{{$unit_number ++}}</td>
                        <td>{{$unit->name}}</td>
                        <td>{{$unit->property->name}}</td>
                        <td>{{$unit->occupied}}</td>
                        <td>{{$unit->rent}}</td>
                        <td><a href="/landlord/units/{{$unit->id}}/edit" class="btn btn-secondary">Update</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

            @endif

            <a href="/landlord/add-unit" class="btn btn-primary text-end">Add Unit</a>
        </div>
    </div>

    @include('partials.scripts')

</body>

</html>