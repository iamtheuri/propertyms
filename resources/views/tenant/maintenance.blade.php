<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    @include('partials.navbar')

    <div class="card m-4">
        <div class="card-header">
            <h1>Maintenance for {{auth()->user()->name}}</h1>
        </div>
        <div class="card-body">
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
                        <th scope="row">{{$maintenance->id}}</th>
                        <td>{{$maintenance->category}}</td>
                        <td>{{$maintenance->status}}</td>
                        <td>{{$maintenance->summary}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                    <li><a class="edit text-secondary" id="edit" href="/edit-maintenance">Edit</a></li>
                                    <li><a class="delete text-secondary" id="edit" href="/delete-maintenance">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <th scope="row">2</th>
                        <td>Electricity</td>
                        <td>Closed</td>
                        <td>02-02-2024</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                    <li><a class="edit text-secondary" id="edit" href="/edit-maintenance">Edit</a></li>
                                    <li><a class="delete text-secondary" id="edit" href="/delete-maintenance">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Inspection</td>
                        <td>Closed</td>
                        <td>02-02-2024</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                    <li><a class="edit text-secondary" id="edit" href="/edit-maintenance">Edit</a></li>
                                    <li><a class="delete text-secondary" id="edit" href="/delete-maintenance">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Painting</td>
                        <td>Open</td>
                        <td>02-02-2024</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="actionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                                    <li><a class="edit text-secondary" id="edit" href="/edit-maintenance">Edit</a></li>
                                    <li><a class="delete text-secondary" id="edit" href="/delete-maintenance">Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                </tbody>
            </table>

            <a href="/tenant/add-maintenance" class="btn btn-primary text-end">Add Maintenance</a>

        </div>
    </div>

    @include('partials.scripts')

</body>

</html>