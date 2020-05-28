@extends('layout.adminLayout')

@section('content')
    @if(!empty($adminNotification))
        <div class="alert alert-primary">
            <ul><li>Job Scheduled</li></ul>
        </div>
    @endif

    <h2 class="mt-5">Residential Application Admin</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>City</th>
            <th>State</th>
            <th>Zip Code</th>
            <th>Job Status</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(count($resAppsAll->all())>0)
            @foreach($resAppsAll->all() as $resApp)
                <tr>
                    <td>{{ $resApp['firstName']. " ". $resApp['lastName'] }}</td>
                    <td>{{ $resApp['streetAddress'] }}</td>
                    <td>{{ $resApp['cityInput'] }}</td>
                    <td>{{ $resApp['stateInput'] }}</td>
                    <td>{{ $resApp['zipCode'] }}</td>
                    <td><p
                            @if($resApp['jobStatus'] == "Not Scheduled")
                            style="color: red;"
                            @elseif($resApp['jobStatus'] == "Scheduled")
                            style="color: #ffaf46"
                            @endif
                        >{{ $resApp['jobStatus'] }}</p>
                    </td>
                    <td><a href="{{ route('get-res-app-details', $resApp['id']) }}" class="btn btn-info">Details</a>
                    </td>
                    <td><a href="{{ route('get-delete-details', $resApp['id']) }}" class="btn btn-warning">Delete</a>
                    </td>

                </tr>
            @endforeach
        @else
            <tr>
                <td>No residential applications have been submitted.</td>
            </tr>
        @endif
        </tbody>
    </table>

@endsection
