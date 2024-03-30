<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <div class="card m-4">
        <div class="card-header">
            <h1>Property for {{auth()->user()->name}}</h1>
        </div>
        <div class="card-body">

            @if($properties->isEmpty())

            <h4>No Properties Available</h4>

            @else

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Property Name</th>
                        <th scope="col">Property Owner</th>
                        <th scope="col">Number of Units</th>
                        <th scope="col">Vacant Units</th>
                        <th scope="col">Property Description</th>
                        <th scope="col">Property Location</th>
                        <th scope="col">Mpesa Till Number</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $property_number = 1;
                    @endphp
                    @foreach($properties as $property)
                    <tr>
                        <td>{{$property_number ++}}</td>
                        <td>{{$property->name}}</td>
                        <td>{{$property->owner}}</td>
                        <td>{{$property->units}}</td>
                        <td>{{$property->vacancies}}</td>
                        <td>{{$property->description}}</td>
                        <td>{{$property->location}}</td>
                        <td>{{$property->till}}</td>
                        <td><a href="/landlord/properties/{{ $property->id }}/edit" class="btn btn-secondary">Update</a></td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

            @endif

            <a href="/landlord/add-property" class="btn btn-primary text-end">Add Property</a>
        </div>
    </div>

    @include('partials.scripts')

</body>

</html>